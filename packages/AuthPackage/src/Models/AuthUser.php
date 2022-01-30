<?php

namespace Skillshare\AuthPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'password'];


}
