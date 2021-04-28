<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coproducao extends Model
{
    //
    protected $table="coproducao";
    protected $fillable = ['id','id_curso','id_formador','id_cop','statusYeto','percenF','percenC','created_at','update_at'];
    





}
