<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoccerTeam extends Model
{
    protected $fillable = ['name'];

    /**
     * Retorna todos os clientes relacionado a um time
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(){
        return $this->hasMany(Clients::class);
    }
}
