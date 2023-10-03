<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bonComVehicule;

class bonComDesignation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Qte','Designation','Reference','Marce','bon_com_vehicules_id' ];
    public function BonComVehiculee(){
            return $this->hasMany(bonComVehicule::class, 'bon_coms_id');
        }
}
