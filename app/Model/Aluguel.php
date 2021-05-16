<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $fillable = [
        'valoraluguel', 'agua', 'luz', 'internet'
    ];

    protected $table = "alugueis";
}
