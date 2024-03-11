<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'phone_country_code',
        'gender',
        'user_main_skill',
        'last_login_at',
        'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
    ];

    public function getProfilePhotoUrlAttribute()
    {
        if ($this->profile_photo_path) {
            return asset('storage/' . $this->profile_photo_path);
        }

        return $this->profile_photo_path;
    }

    public function address(){
        return $this->hasOne(Addresses::class);
    }

    public function profileImg(){
        return $this->hasOne(ProfileImg::class);
    }

    public function user_dobs(){
        return $this->hasOne(UserDobs::class);
    }

    public function personal_details(){
        return $this->hasOne(PersonalDetails::class);
    }

    public function user_experience(){
        return $this->hasMany(UserExperience::class);
    }

    public function user_education(){
        return $this->hasMany(UserEducation::class);
    }
    public function user_work_type(){
        return $this->hasMany(UserWorkType::class);
    }

    public function user_w_t_s(){
        return $this->hasMany(UserWT::class);
    }
}
