<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listproduct extends Model
{
    use HasFactory;
    public $fillable = [
        'product', 'reference','prix','qte'];
}
