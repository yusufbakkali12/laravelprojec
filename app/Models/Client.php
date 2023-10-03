<?php

namespace App\Models;

use App\Models\factuer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Client extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = true;
     public $fillable = [];
    public function factuer()
    {
        return $this->hasMany(factuer::class);
    }
}
