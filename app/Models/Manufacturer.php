<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = ['manufacturer', 'description', 'origin_country'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    /**
     * Scope to include the count of cars for each manufacturer.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithCarCount($query)
    {
        return $query->withCount('cars');
    }

    public static function getManufacturerWithCars(int $id)
    {
        return self::with('cars')->findOrFail($id);
    }
}
