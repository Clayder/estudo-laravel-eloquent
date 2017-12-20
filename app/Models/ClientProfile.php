<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    protected $fillable = [
        'field',
        'clients_id'
    ];

    /**
     * Relacionamento One-to-many
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

}
