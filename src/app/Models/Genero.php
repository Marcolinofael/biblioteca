<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $guarded = ['id'];
    public function livro()
    {
        return $this->hasMany(Livro::class, 'genero_id');
    }
}
