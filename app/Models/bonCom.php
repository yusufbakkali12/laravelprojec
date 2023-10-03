<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bonComVehicule;
class bonCom extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'numBonCom','status','data',
       ];
    public function BonComVehicule()
    {
        return $this->hasMany(bonComVehicule::class,'bon_coms_id');
    }
}
