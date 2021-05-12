<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //Torna o save de criação e atualização falsos
    public $timestamps = false;

    //Tabela de referencia no DB
    protected $table = "contact";

    protected $fillable = ['nome', 'email', 'telefone', 'mensagem', 'anexo', 'ip_remetente'];
}
