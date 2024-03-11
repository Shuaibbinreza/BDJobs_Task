<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkType extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id', 'title', 'designation', 'job_start'] ;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
