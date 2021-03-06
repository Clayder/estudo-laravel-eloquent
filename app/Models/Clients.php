<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_LEGAL = 'legal';

    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'company_name',
        'client_type',
        'soccer_team_id'
    ];

    // Cria um relacionamento de muitos para um
    public function soccerTeam()
    {
        return $this->belongsTo(SoccerTeam::class);
    }

    /**
     * Retorna o perfil que está associado a um cliente específico.
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clientProfile()
    {
        return $this->hasOne(ClientProfile::class);
    }
}
