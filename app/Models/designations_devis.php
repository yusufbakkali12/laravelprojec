<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designation_devis extends Model
{
    public $timestamps = true;
    use HasFactory;
    public $fillable = [
        'D_numDevis','Designation','PrixUniter','PrixTotal','Qte','Unite','devis_id','updated_at','created_at'];

}
