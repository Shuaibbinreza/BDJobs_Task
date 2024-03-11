<?php

namespace App\Http\Controllers;


use App\Models\Addresses;
use App\Models\PersonalDetails;
use App\Models\ProfileImg;
use App\Models\UserDobs;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserWorkType;
use App\Models\UserWT;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

$abc = '';
class AuthController extends Controller
{

    public function index($name = null)
    {
        global $abc;
        $data = compact('name');
        $abc = $data;
        return view("pages.auth.login")->with($data);
    }

    public function login(Request $request, $name = null)
    {
        global $abc;
        // dd($request->all());
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ]);

        if (\Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }

        return redirect('login-failed')->withError('Login details are not valid');
        // return redirect('/'.$abc)->withError('Login details are not valid');
    }

    public function register_view($name = null)
    {
        $data = compact('name');
        return view("pages.auth.register")->with($data);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profile_photo_path' => 'nullable|mimes:png,jpg,jpeg,gif',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);

        // save in users table 
        if ($request->has('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();

            $filename = time() . '.' . $extention;

            $path = 'uploads/user/';
            $image->move($path, $filename);
        }

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $path . $filename,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);

        // login user here 

        if (\Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }
        return redirect('register')->withError('Error');
    }

    public function home()
    {
        return view('pages.auth.login1');
    }

    public function editprofile()
    {
        // $profile = User::find($id);
        // dd($profile);
        return view('edit');
    }
    public function logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }

    public function profileEdit()
    {
        return view('pages.dashboards.profileEdit');
    }

    public function profileDetails()
    {
        addJavascriptFile('JS/eduForm.js');
        addJavascriptFile('JS/profile.js');
        // $educationAll = UserEducation::all();
        // $educationAll = auth()->user()->user_education()->get();
        // dd($educationAll);
        return view('pages.details.user-info');
    }

    public function registerP2()
    {
        addJavascriptFile('JS/multi.js');
        return view('pages.auth.register_phase2');
    }

    public function formSubmit(Request $request)
    {

        $this->validate($request, [
            'district' => 'required',
            'thana' => 'required',
            'post_office' => 'required',
            'alt_mobile' => 'required',
            'houseno' => 'required',
        ]);

        $address = new Addresses();
        $address->thana = $request->thana;
        $address->alt_mobile = $request->alt_mobile;
        $address->district = $request->district;
        $address->post_office = $request->post_office;
        $address->houseno = $request->houseno;
        $address->user_id = \Auth::user()->id;

        $image = '';
        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $extention = $image->getClientOriginalExtension();

            $filename = time() . '.' . $extention;

            $path = 'uploads/user/';
            $image->move($path, $filename);
        }

        $pimage = new ProfileImg();
        $pimage->profile_image = $path . $filename;
        $pimage->user_id = \Auth::user()->id;

        $pimage->save();
        $address->save();

        $point = User::where('id', \Auth::user()->id)->first();
        $point->profile_completed = true;
        $point->save();

        //User Experience
        if ($request->exp == 'yes') {
            $this->validate($request, [
                'company_name' => 'required',
                'designation' => 'required',
                'job_start' => 'required',
            ]);

            $experience = new UserExperience();
            $experience->user_id = \Auth::user()->id;
            $experience->company_name = $request->company_name;
            $experience->designation = $request->designation;
            $experience->job_start = $request->job_start;
            $experience->job_end = $request->job_end;

            if ($request->experienceCK == "on") {
                $experience->continue = "Continue";
                // return view("home")->with("data",$request);
            }
            $experience->save();
        }

        // Date of Birth Field
        $this->validate($request, [
            'day' => ['required', 'string'],
            'month' => 'required',
            'year' => 'required',
        ]);

        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');
        // Construct a date string in the format "Y-m-d"
        $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);
        // Convert the string into a DateTime object
        $date = date_create_from_format('Y-m-d', $dateString);

        $udob = new UserDobs();
        $udob->user_id = \Auth::user()->id;
        $udob->day = $request->input('day');
        $udob->month = $request->input('month');
        $udob->year = $request->input('year');
        $udob->user_birthday = $date;
        $udob->save();

        // Select Job Type Input in registration phase-2
        $jobCat = $request->input('prefered_job_type');
        $jobType = User::where('id', \Auth::user()->id)->first();
        $jobType->prefered_job_type = $jobCat;
        $jobType->save();

        // User Education field in registration phase 2
        if ($request->edu == 'yes') {
            $this->validate($request, [
                'education_title' => 'required',
                'education_institute' => 'required',
                'education_start' => 'required',
            ]);

            $education = new UserEducation();
            $education->user_id = \Auth::user()->id;
            $education->education_title = $request->education_title;
            $education->education_institute = $request->education_institute;
            $education->education_start = $request->education_start;
            $education->education_end = $request->education_end;

            if ($request->educationCK == 'on') {
                $education->continue = "Continue";
                // return view("home")->with("data",$request);
            }
            // else{
            //     dd($request->all());
            // }
            $education->save();
        }


        // Work Type List upload
        $user_id = \Auth::user()->id;
        $workTypes = json_decode($request->input('selected_options'));

        // Start a database transaction
        DB::beginTransaction();

        try {
            foreach ($workTypes as $option) {
                // Check if the option already exists for the user
                $existingOption = UserWT::where('user_id', $user_id)
                    ->where('title', $option->title)
                    ->first();

                if (!$existingOption) {
                    // If the option does not exist, create a new record
                    $selectedOption = new UserWT();
                    $selectedOption->user_id = $user_id;
                    $selectedOption->title = $option->title;
                    $selectedOption->self = $option->self;
                    $selectedOption->job = $option->job;
                    $selectedOption->university = $option->university;
                    $selectedOption->training = $option->training;
                    $selectedOption->life_death = $option->lifeDeath;
                    $selectedOption->save();
                } else {
                    return view('pages.auth.register_phase2');
                }
            }
            // Commit the transaction if all operations succeed
            DB::commit();
            // Optionally, return a response indicating success
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollback();
            // Optionally, handle the error and return a response
        }

        // Personal Details
        $personal = new PersonalDetails();
        $personal->gender = \Auth::user()->gender;
        $personal->first_name = \Auth::user()->name;
        $personal->primary_mobile = \Auth::user()->phone;
        $personal->secondary_mobile = $request->alt_mobile;
        $personal->dob = $date;
        $personal->user_id = \Auth::user()->id;
        $personal->save();

        // dd($data[0]);
        // foreach ($data as $object) {
        //     dd($object);
        // }
        // dd($request->all());
        $workType = json_decode($request->input('selected_options'));
        // dd($request->all());
        return view('home');
    }

    public function personal_update(Request $request, $id)
    {
        $pi = PersonalDetails::where('id', $id)->first();
        $pi->first_name = $request->first_name;
        $pi->last_name = $request->last_name;
        $pi->father_name = $request->father_name;
        $pi->mother_name = $request->mother_name;
        $pi->dob = $request->dob;
        $pi->gender = $request->gender;
        $pi->religion = $request->religion;
        $pi->maritial_status = $request->maritial_status;
        $pi->primary_mobile = $request->primary_mobile;
        $pi->secondary_mobile = $request->secondary_mobile;
        $pi->nationality = $request->nationality;
        $pi->national_id = $request->national_id;
        $pi->passport_issue_date = $request->passport_issue_date;
        $pi->passport_number = $request->passport_number;
        $pi->emergency_contact = $request->emergency_contact;
        $pi->alternate_email = $request->alternate_email;
        $pi->blood_group = $request->blood_group;
        $pi->height = $request->height;
        $pi->weight = $request->weight;
        // $pi->weight = $request->weight;
        $pi->save();

        $point = User::where('id', \Auth::user()->id)->first();
        $point->name = $request->first_name;
        $point->gender = $request->gender;
        $point->save();

        dd($request->all());
    }

    public function education_create(Request $request)
    {
        $this->validate($request, [
            'education_title' => 'required',
            'education_institute' => 'required',
            'education_start' => 'required',
        ]);

        $education = new UserEducation();
        $education->user_id = \Auth::user()->id;
        $education->education_level = $request->education_level;
        $education->education_title = $request->education_title;
        $education->education_institute = $request->education_institute;
        // $education->foreign_institute = $request->foreigninstitute;
        $education->education_start = $request->education_start;
        $education->education_end = $request->education_end;
        $education->year_of_passing = $request->year_of_passing;
        $education->resulttype = $request->resulttype;
        $education->cgpa = $request->cgpa;
        $education->marks = $request->marks;
        $education->major = $request->major;
        $education->board = $request->board;
        // $education->scale = $request->scale;
        $education->duration = $request->duration;
        $education->achievement = $request->achievement;

        if ($request->educationCK == 'on') {
            $education->continue = "Continue";
            // return view("home")->with("data",$request);
        }

        if ($request->resulttype == 'First Division') {
            $education->scale = 100;
            // return view("home")->with("data",$request);
        }

        if ($request->foreigninstitute == 'on') {
            $education->foreign_institute = true;
            // return view("home")->with("data",$request);
        }
        // else{
        //     dd($request->all());
        // }
        $education->save();
        dd($request->all());
    }

    public function educationDelete(Request $request){
        $product = UserEducation::where('id', $request->id)->first();
        // dd($request->id);
        $product->delete();
        return back()->with('danger','Deleted Successfully');
    }

    public function formSubmit1(Request $request)
    {
        // $this->validate($request,[
        //     'email'=> 'email',
        // ]);
        dd($request->all());
    }
}
