<?php

namespace App\Models\Supervisao\Planos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'api_id',
        'slug'
    ];

    public function details() {
        return $this->belongsToMany(Detail::class);
    }
}