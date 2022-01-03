<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'seller_id',
        'segment_id',
        'other_segments',
        'corporate_name',
        'cnpj',
        'street',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'zipcode',
        'phone',
        'email',
        'status',
        'toc'
    ];

    /**
     * Relacionamento entre usuários
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento entre assinaturas
     */
    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Relacionamento entre segmentos
     */
    public function segment() {
        return $this->belongsTo(Segment::class);
    }
}
