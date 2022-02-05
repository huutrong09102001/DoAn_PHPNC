<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function invoiceDetail(){
        return $this->hasMany('App\Models\invoice_detail');
    }
}

