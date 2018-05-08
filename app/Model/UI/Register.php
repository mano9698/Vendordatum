<?php

namespace App\Model\UI;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';
    
    protected $fillable = ['first_name', 'last_name', 'email_id', 'password', 'desgination', 'mobile', 'alter_mobile', 'cmpny_name', 'cmpny_location', 'products', 'industry', 'business_name', 'job_title', 'contact_number', 'cmpny_business_name', 'file'];
            
}
