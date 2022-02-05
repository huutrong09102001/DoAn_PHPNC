<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_detail extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function invoice(){
        return $this->belongsTo('App\Models\invoice');
    }
    
}
