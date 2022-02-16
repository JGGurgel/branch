<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'ocorrencia',
        'assunto',
        'data'
    ];
    protected $table = 'ticket';
    use HasFactory;
}
