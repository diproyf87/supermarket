<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pettycash extends Model
{
    protected $fillable = ['totalcash', 'remainingcash', 'withdraw', 'created_by', 'modified_by', 'created_at', 'updated_at'];
}
