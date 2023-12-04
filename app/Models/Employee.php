<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use SoftDeletes, HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'individual_id',
        'first_name',
        'middle_name',
        'last_name',
        'job_title',
        'email',
        'password',
        'street',
        'city',
        'province',
        'country',
        'language',
        'timezone',
        'landline',
        'mobile_number',
        'fax_number',
        'remember_token',
    ];
}
