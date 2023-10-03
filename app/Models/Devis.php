<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    public $timestamps = true;
    public $fillable = [
    'numDevis','status','date','objectCar','modelCar','matriqulCar','kilometrageCar','MontantHT','MontantTTC','MontantTVA',
   ];
   public function Designation(){
    return $this->hasMany(designations_devis::class,'devis_id');
   }
}
