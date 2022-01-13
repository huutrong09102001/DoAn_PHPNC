<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class provider extends Model
{
    use softDeletes;
    protected $guarded = [];
    use HasFactory;
}
