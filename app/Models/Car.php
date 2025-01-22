<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['manufacturer_id', 'model', 'year', 'colour'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function scopeSearch(Builder $query, string $searchTerm): Builder
    {
        return $query->where('model', 'LIKE', "%$searchTerm%")
            ->orWhere('year', 'LIKE', "%$searchTerm%")
            ->orWhere('colour', 'LIKE', "%$searchTerm%")
            ->orWhereHas('manufacturer', function ($q) use ($searchTerm) {
                $q->where('manufacturer', 'LIKE', "%$searchTerm%");
            });
    }
}
