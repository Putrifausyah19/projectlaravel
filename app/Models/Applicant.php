<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'gender',
        'education_bg',
        'work_exp',
    ];
}
