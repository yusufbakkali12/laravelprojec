<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bonComDesignation;
use App\Models\bonCom;
class bonComVehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle','status','bon_coms_id'
    ];
    public function BonComDesignation()
    {
        return $this->hasMany(bonComDesignation::class,'bon_com_vehicules_id');
    }
}
