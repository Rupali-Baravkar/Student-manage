<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'gender',
        'email',
        'phone',
        'choose_subject',
    ];

    public function getGenderAttribute($value)
    {
        $genders = [
            'male' => 'Male',
            'female' => 'Female',
            'other' => 'Other',
        ];

        return $genders[$value] ?? 'Unknown Gender';
    }
}
