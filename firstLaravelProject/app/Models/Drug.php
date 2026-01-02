<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{
    use SoftDeletes;
    protected $table = 'drugs';
    protected $fillable = ['name', 'dosage', 'company', 'expire_date'];
}
