<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'api_id',
        'status'
    ];

    /**
     * Relacionamento entre empresas
     */
    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }
}
