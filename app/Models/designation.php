<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    public $timestamps = true;
    use HasFactory;
    public $fillable = [
        'D_numFacture','Designation','PrixUniter','PrixTotal','Qte','Unite','factuers_id','updated_at','created_at'];

}
