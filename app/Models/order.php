<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'order','client','date','status','description','total','telephone','score','created_at'
    ];
}
