<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Operacoes extends Model
{
    protected $table="operacoes";
    protected $fillable = ['id','id_formador','valor_retirado','valor_entrada','created_at','updated_at'];
 
     






}
