@php
    $user = Auth::user();
    $educationAll = $user->user_education()->orderBy('year_of_passing', 'asc')->get();
    $ac_id = 0;
@endphp

<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Academic Summary
        </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <!-- Academic 1 -->

            @foreach ($educationAll as $edu)
                {{-- <h1>start</h1> --}}
                <div class="mb-5">
                    <div class="row justify-content-lg-between">
                        <div class="col-4">
                            <div>
                                <h3>Academic {{ $loop->index + 1 }}</h3>
                                <br>
                            </div>
                            <div>
                                <h6> Level of Education </h6>
                                <p> {{ $edu->education_level }} </p>
                            </div>
                            <div>
                                <h6>Concentration/ Major/Group</h6>
                                <p>{{ $edu->major }}</p>
                            </div>
                            <div>
                                <h6>Institute Name </h6>
                                <p>{{ $edu->education_institute }}</p>
                            </div>
                            <div>
                                <h6>Result </h6>
                                <p>{{ $edu->resulttype }}</p>
                            </div>
                            <div>
                                <h6>Scale </h6>
                                @if ($edu->cgpa)
                                    <p>{{ $edu->scale }}</p>
                                @elseif ($edu->marks)
                                    <p>100%</p>
                                @else
                                    <p>Not Applicable</p>
                                @endif

                            </div>
                            <div>
                                <h6>Duration (Years) </h6>
                                <p>{{ $edu->duration }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div>
                                <h6></h6>
                                <br>
                                <p></p>
                            </div>
                            <div>
                                <h6>Exam/Degree Title</h6>
                                <p>{{ $edu->education_title }}</p>
                            </div>
                            <div>
                                <h6>Board</h6>
                                <p>{{ $edu->board }}</p>
                            </div>
                            <div>
                                <h6></h6>
                                <p></p>
                                <br>
                            </div>
                            <div>
                                <h6></h6>
                                <p></p>
                                <br>
                            </div>
                            <div>
                                @if ($edu->cgpa)
                                    <h6>CGPA</h6>
                                    <p>{{ $edu->cgpa }}</p>
                                @elseif ($edu->marks)
                                    <h6>Marks</h6>
                                    <p>{{ $edu->marks }}</p>
                                @else
                                    <p>Not Applicable</p>
                                @endif
                            </div>
                            <div>
                                <h6>Year of Passing </h6>
                                <p>{{ $edu->year_of_passing }}</p>
                            </div>
                            <div>
                                <h6>Achievement </h6>
                                <p>{{ $edu->achievement }}</p>
                            </div>
                        </div>
                        <div class="col-2 ">
                            <div class="d-flex">
                                {{-- <button type="button" class="border-0 bg-white text-primary" data-bs-toggle="modal"
                                    data-bs-target="#educationEdit" data-bs-whatever="@mdo"> <i
                                        class="fa-solid fa-pen-to-square" style="color: #376ac3;"></i> <span
                                        class="fw-bolder">Edit</span>
                                </button> --}}

                                <button type="button" class="border-0 bg-white text-primary add-user-btn" data-bs-toggle="modal"
                                    data-id="{{ $edu->id }}" data-title="{{ $edu->education_title }}"
                                    data-user="{{ json_encode($edu) }}"
                                    data-bs-target="#educationEdit">
                                    <i class="fa-solid fa-pen-to-square" style="color: #376ac3;"></i> <span
                                        class="fw-bolder">Edit</span>
                                </button>
                                {{-- <button class="add-user-btn" data-user="{{ json_encode($edu) }}">Add to Array</button> --}}
                                {{-- Edit Modal --}}

                                <!-- Button trigger modal -->
                                <button type="button" class="border-0 bg-white text-danger" data-bs-toggle="modal"
                                    data-id="{{ $edu->id }}" data-bs-target="#deleteModel">
                                    <i class="fa-solid fa-trash-can" style="color: #cb1111;"></i>
                                    <span class="fw-bolder">Delete</span>
                                </button>
                            </div>

                            <!--Delete Modal -->

                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Add New Form --}}
            <form id="educationForm" style="display: none;" method="POST" enctype="multipart/form-data"
                action="{{ route('education.create') }}">
                @csrf
                @method('POST')
                <div class="p-2 ">
                    <h6 class="fw-bolder">Academic </h6>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="levelOfEducation" class="form-label">Level of Education</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select name="education_level" {{-- data-control="select2"  --}} data-placeholder="Degree Level.."
                            class="form-select border border-secondary" id="education_level" required>
                            <option value="" selected>Select a Level</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <label for="examTitle" class="form-label">Exam/Degree Title</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select name="education_title" aria-label="Select post office" data-control="select2"
                            data-placeholder="Select your post office.." class="form-select border border-secondary"
                            id="education_title">
                            <option value="">Exam/Degree Title</option>
                        </select>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="concentration" class="form-label">Concentration/Major/Group</label>
                        <input type="text" class="form-control" id="concentration" name="major">
                    </div>
                    <div class="col-md-6" id="boardDiv">
                        <label for="board" class="form-label">Board</label>
                        <select name="board" aria-label="Select a Country Codde" data-control="select2"
                            data-placeholder="Select your Board.." class="form-select border border-secondary"
                            id="board">
                            <option value="" selected="selected">Select Your Board</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Cumilla">Cumilla</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Jashore">Jashore</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Sylhel">Sylhel</option>
                            <option value="Madrasa">Madrasa</option>
                            <option value="BTEB">BTEB</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="instituteName" class="form-label">Institute Name</label>
                        <input type="text" class="form-control" id="instituteName" name="education_institute">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="foreignInstitute"
                                name="foreigninstitute">
                            <label class="form-check-label" for="foreignInstitute">This is a foreign
                                institute</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <h4 class="form-label">Educational Periood</h4>
                    <div class="col-sm">
                        <label for="education_start" class="form-label">Start Date</label>
                        <input type="date" placeholder="Educational Start" name="education_start"
                            autocomplete="off" id="edustart" class="form-control bg-transparent" />
                        <span id="error-edustart" class="text-danger"></span>
                    </div>
                    <div class="col-sm edDiv" id="educationEnd" style="display: block">
                        <label for="education_end" class="form-label">End Date</label>
                        <input type="date" placeholder="Educational End" id="edEnd" name="education_end"
                            autocomplete="off" class="form-control bg-transparent" />
                    </div>
                    <div class="form-group form-check ms-5 mt-5">
                        <input type="checkbox" class="form-check-input" id="continueCheck" name="educationCK">
                        <label class="form-check-label" for="exampleCheck1">Still Studying Here</label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="result" class="form-label">Result</label>
                        <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                        <select class="form-select" id="resulttype" name="resulttype">
                            <option value="">Select</option>
                            <option value="Grade">Grade</option>
                            <option value="FirstDiv">First Division</option>
                            <option value="Appeared">Appeared</option>
                            <option value="Enrolled">Enrolled</option>
                            <option value="Pass">Pass</option>
                            <option value="Awarded">Awarded</option>
                            <option value="Do not mention">Do not mention</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="yearOFpassing" class="form-label">Year of Passing</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="yearOFpassing" data-control="select2"
                            name="year_of_passing">
                            <option selected>Select</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm">
                        <div id="marksDiv" style="display: none;">
                            <label for="result" class="form-label">Marks %</label>
                            <input type="text" class="form-control" id="marks" name="marks"
                                placeholder="Marks %">
                        </div>
                        <div id="cgpaDiv">
                            <label for="result" class="form-label">CGPA</label>
                            <input type="text" class="form-control" id="cgpa" name="cgpa"
                                placeholder="CGPA">
                        </div>
                    </div>

                    <div class="col-sm" id="resscale" aria-disabled="true">
                        <label for="scale" class="form-label">Scale</label>
                        <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                        <select class="form-select" id="scale" name="scale">
                            <option selected>Select</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Duration (Years)</label>
                        <input type="text" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="col-md-6">
                        <label for="achivement" class="form-label">Achievement</label>
                        <input type="text" class="form-control" id="achivement" name="achievement">

                    </div>

                </div>

                <!-- Add the rest of the form fields here -->
                <div class="mb-4">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" id="cancelEducationBtn">Cancel</button>
                </div>
            </form>
            <div class="border border-3 border-success px-2 py-2 mb-1 w-25 zoom-on-hover  text-success" type="button"
                id="addEducationBtn">
                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i> Add a Education
                (If Required)
            </div>
        </div>

        {{-- @if ($posts)    
            @foreach ($posts as $post) --}}
        {{-- <div>{{ $post->company_name }}</div> --}}
        {{-- <h1>Hello</h1> --}}
        {{-- <h1>{{ $post->education_title }}</h1> --}}
        {{-- @endforeach --}}
        {{-- @endif --}}

    </div>
</div>


{{-- From Test file  --}}
<!-- Edit Modal with Submit Button -->
<div class="modal fade" id="educationEdit" tabindex="-1" aria-labelledby="educationEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <form id="editForm" method="POST" action="{{ route('submit.test') }}">
                    @csrf <!-- Assuming Laravel Blade -->
                    <input type="hidden" name="id" id="editModalIdInput">
                    <p> Education ID: <span id="editModalId"></span></p>
                    <!-- Add any other form inputs needed for editing here -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form> --}}

                <form action="{{ route('submit.test') }}" method="POST" enctype="multipart/form-data" id="eduEdit">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" id="editModalIdInput">
                    <div class="p-2 ">
                        <h6 class="fw-bolder" id="editID">
                        </h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="levelOfEducation" class="form-label">Level of
                                Education</label>
                            <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                            <select name="education_level" {{-- data-control="select2"  --}} data-placeholder="Degree Level.."
                                class="form-select border border-secondary" id="education_level1" required>
                                <option value="{{ $edu->education_level }}" id="educationLevelDefault" selected>
                                    {{ $edu->education_level }}</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="examTitle" class="form-label">Exam/Degree
                                Title</label>
                            
                            <select name="education_title" aria-label="Select post office" 
                                data-control="select2"
                                data-placeholder="Select Exam/Degree Title.."
                                class="form-select border border-secondary" id="education_title1">
                                <option value="" id="educationTitleDefault"> {{ $edu->education_title }} </option>
                            </select>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="concentration" class="form-label">Concentration/Major/Group</label>
                            <input type="text" class="form-control" id="majorSubject" name="major" placeholder="Enter Your Board"
                                value="{{ old('major', $edu->major) }}">
                        </div>
                        <div class="col-md-6" id="boardDiv1" style="display: none;">
                            <label for="board" class="form-label">Board</label>
                            <select name="board" aria-label="Select a Country Codde" 
                                data-placeholder="Select your Board.." class="form-select border border-secondary"
                                id="board1">
                                <option value="{{ $edu->board }}" id="boadDefault" selected="selected">{{ $edu->board }}</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Cumilla">Cumilla</option>
                                <option value="Chattogram">Chattogram</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Sylhel">Sylhel</option>
                                <option value="Madrasa">Madrasa</option>
                                <option value="BTEB">BTEB</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="instituteName" class="form-label">Institute Name</label>
                            <input type="text" class="form-control" id="instituteNameDef"
                                name="education_institute"
                                value="{{ old('education_institute', $edu->education_institute) }}">
                            <div class="form-check mt-2">
                                @if ($edu->foreigninstitute)
                                    <input class="form-check-input" type="checkbox" id="foreignInstitute1"
                                        name="foreigninstitute" checked >
                                    <label class="form-check-label" for="foreignInstitute">This is a foreign
                                        institute</label>
                                @else
                                    <input class="form-check-input" type="checkbox" id="foreignInstitute1"
                                        name="foreigninstitute" >
                                    <label class="form-check-label" for="foreignInstitute">This is a foreign
                                        institute</label>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <h4 class="form-label">Educational Periood</h4>
                        <div class="col-sm">
                            <label for="education_start" class="form-label">Start Date</label>
                            <input type="date" placeholder="Educational Start" name="education_start"
                                autocomplete="off" id="edustart1" class="form-control bg-transparent"
                                value="{{ old('education_start', $edu->education_start) }}" />
                            <span id="error-edustart" class="text-danger"></span>
                        </div>
                        <div class="col-sm edDiv" id="educationEnd1" style="display: block">
                            <label for="education_end" class="form-label">End
                                Date</label>
                            <input type="date" placeholder="Educational End" id="edEnd1" name="education_end"
                                autocomplete="off" class="form-control bg-transparent"
                                value="{{ old('education_end', $edu->education_end) }}" />
                        </div>
                        <div class="form-group form-check ms-5 mt-5">
                            @if ($edu->educationCK)
                                <input type="checkbox" class="form-check-input" id="continueCheck1"
                                    name="educationCK" checked>
                                <label class="form-check-label" for="exampleCheck1">Still Studying Here</label>
                            @else
                                <input type="checkbox" class="form-check-input" id="continueCheck1"
                                    name="educationCK">
                                <label class="form-check-label" for="exampleCheck1">Still Studying Here</label>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="result" class="form-label">Result</label>
                            <!-- <input type="text" class="form-control" id="levelOfEducation" value="Secondary" disabled> -->
                            <select class="form-select" id="resulttype1" name="resulttype">
                                <option value="{{ $edu->resulttype }}" id="rtDef">
                                    {{ $edu->resulttype }}</option>
                                <option value="Grade">Grade</option>
                                <option value="FirstDiv">First Division</option>
                                <option value="Appeared">Appeared</option>
                                <option value="Enrolled">Enrolled</option>
                                <option value="Pass">Pass</option>
                                <option value="Awarded">Awarded</option>
                                <option value="Do not mention">Do not mention</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="yearOFpassing" class="form-label">Year of Passing</label>
                            <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                            <select class="form-select" id="yearOFpassing1" data-control="select2"
                                name="year_of_passing">
                                <option value="{{ $edu->year_of_passing }}" selected>
                                    {{ $edu->year_of_passing }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm">
                            <div id="marksDiv1" style="display: none;">
                                <label for="result" class="form-label">Marks %</label>
                                <input type="text" class="form-control" id="marks1" name="marks"
                                    placeholder="Marks %" value="{{ old('marks', $edu->marks) }}">
                            </div>
                            <div id="cgpaDiv1" style="display: none;">
                                <label for="result" class="form-label">CGPA</label>
                                <input type="text" class="form-control" id="cgpa1" name="cgpa"
                                    placeholder="CGPA">
                            </div>
                        </div>

                        <div class="col-sm" id="resscale1" aria-disabled="true" style="display: none;">
                            <label for="scale" class="form-label">Scale</label>
                            <!-- <input type="text" class="form-control" id="examTitle" value="SSC" disabled> -->
                            <select class="form-select" id="scale1" name="scale">
                                <option value="{{ $edu->scale }}" id="scaleDef" selected> {{ $edu->scale }} </option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="duration" class="form-label">Duration
                                (Years)</label>
                            <input type="text" class="form-control" id="duration1" name="duration"
                                value="{{ old('dduration', $edu->duration) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="achivement" class="form-label">Achievement</label>
                            <input type="text" class="form-control" id="achivement1" name="achievement"
                                value="{{ old('achievement', $edu->achievement) }}">
                        </div>
                        {{-- <h1 id="userEmail"> hello world: </h1> --}}
                        {{-- <input type="text" id="inputTest"> --}}
                    </div>

                    <!-- Add the rest of the form fields here -->
                    <div class="mb-4">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    {{-- </form> --}}
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal with Submit Button -->
<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="deleteModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModelLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteForm" method="POST" action="{{ route('education.delete') }}">
                    @csrf <!-- Assuming Laravel Blade -->
                    {{-- @method('DELETE') --}}
                    <input type="hidden" name="id" id="deleteModalIdInput">
                    <h3>Are you sure you want to delete this record? ID: <h3 id="deleteModalId"></h3>
                    </h3>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-id');
                const itemTitle = this.getAttribute('data-title');
                const targetModalId = this.getAttribute('data-bs-target');
                const isDeleteModal = targetModalId === '#deleteModel';

                if (isDeleteModal) {
                    document.getElementById('deleteModalId').textContent = itemId;
                    document.getElementById('deleteModalIdInput').value = itemId;
                } else {
                    document.getElementById('editModalTitle').textContent = itemTitle;
                    document.getElementById('editID').textContent = itemId;
                    document.getElementById('editModalIdInput').value = itemId;
                }
            });
        });
    });

    // Getting the user data 
    document.querySelectorAll('.add-user-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var userData = JSON.parse(button.getAttribute('data-user'));
            // selectedUsers.push(userData);
            document.getElementById('educationLevelDefault').value = userData.education_level;
            document.getElementById('educationLevelDefault').innerText = "Your Current Value" + userData.education_level;

            document.getElementById('educationTitleDefault').value = userData.education_title;
            document.getElementById('educationTitleDefault').innerText = "Your Current Value" + userData.education_title;

            document.getElementById('majorSubject').value = userData.major;
            document.getElementById('majorSubject').innerText = userData.major;

            document.getElementById('boadDefault').value = userData.board;
            document.getElementById('boadDefault').innerText = userData.board;

            document.getElementById('rtDef').value = userData.resulttype;
            document.getElementById('rtDef').innerText = userData.resulttype;

            document.getElementById('scaleDef').value = userData.scale;
            document.getElementById('scaleDef').innerText = userData.scale;

            document.getElementById('edustart1').value = userData.education_start;
            document.getElementById('yearOFpassing1').value = userData.year_of_passing;
            document.getElementById('marks1').value = userData.marks;
            document.getElementById('cgpa1').value = userData.cgpa;
            document.getElementById('duration1').value = userData.duration;
            document.getElementById('achivement1').value = userData.achievement;


            document.getElementById('editModalIdInput').value = userData.id;

            document.getElementById('instituteNameDef').value = userData.education_institute;

            // Education Continue Check 
            if(userData.continue === 'Continue'){
                document.getElementById('continueCheck1').checked = true;
                document.getElementById('edEnd1').value = "";
            }
            else{
                document.getElementById('edEnd1').value = userData.education_end;
            }

            // Foreign Institute checked 
            if(userData.foreign_institute){
                document.getElementById('foreignInstitute1').checked = true;
            }
            else{
                document.getElementById('foreignInstitute1').checked = false;
            }

            var selectedValue = this.value; // Get the selected value from the dropdown
            var marks = document.getElementById("marksDiv1"); // Get the div element
            var cgpa = document.getElementById("cgpaDiv1"); // Get the div element
            if(userData.resulttype === 'Grade'){
                marks.style.display = 'none';
                cgpa.style.display = 'block';
                document.getElementById("resscale1").style.display = 'block';
                // document.getElementById("boardDiv1").style.display = 'block';
            }
            else if(userData.resulttype === 'FirstDiv'){
                marks.style.display = 'block';
                cgpa.style.display = 'none';
                document.getElementById("resscale1").style.display = 'none';
                // document.getElementById("boardDiv1").style.display = 'none';
            }
            else{
                marks.style.display = 'none';
                cgpa.style.display = 'none';
                document.getElementById("resscale1").style.display = 'none';
            }

            var board1 = document.getElementById("boardDiv1"); // Get the div element
        
            // Update the display style based on the selected value
            if(selectedValue === 'PhD (Doctor of Philosophy)' ||
                selectedValue === 'Masters' ||
                selectedValue === 'Bacchelor/Honours'){
                board1.style.display = 'none';
            }
            else{
                board1.style.display = 'block';
            }

            console.log(userData.education_level);
        });
    });

    var myModal = document.getElementById('educationEdit');
    myModal.addEventListener('hidden.bs.modal', function () {
        document.getElementById('eduEdit').reset();
    });
</script>



