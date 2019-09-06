<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable = ['nome','data_nacimento','cpf','rua','numero','bairro','cidade'];
}
