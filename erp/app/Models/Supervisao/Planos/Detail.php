<?php

namespace App\Models\Supervisao\Planos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Supervisao\Planos\Plan;

class Detail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public function plans() {
        return $this->belongsToMany(Plan::class);
    }
}
