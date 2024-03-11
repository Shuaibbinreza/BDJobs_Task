<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'gender', 'primary_mobile', 'secondary_mobile', 'dob', 'first_name'] ;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
