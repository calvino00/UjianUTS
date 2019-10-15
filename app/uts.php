<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class uts extends Model
{
    protected $fillable = ['nama','telepon','email','alamat'];
}
 
