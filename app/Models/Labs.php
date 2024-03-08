<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    use HasFactory;
    protected $table = 'labs';
    protected $fillable = ['name', 'provider_group', 'provider_unit', 'address', 'state', 'city', 'zipcode', 'office_phone', 'mobile', 'email', 'timezone'];
}
