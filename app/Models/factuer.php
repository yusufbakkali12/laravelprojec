<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factuer extends Model
{
    use HasFactory;
    public $timestamps = true;
    public $fillable = [
    'numFacture','status','date','objectCar','modelCar','matriqulCar','kilometrageCar','MontantHT','MontantTTC','MontantTVA','user_id'
   ];
   public function Designation(){
    return $this->hasMany(designation::class,'factuers_id');
   }
}
