<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'education_title', 'education_institute', 'education_start'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
