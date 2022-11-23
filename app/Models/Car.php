<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'founded',
        'description',
        'image_path',
        'user_id'
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function carModels() 
    {
        return $this->hasMany(CarModel::class);
    }

    // Not sure when this headquarter function appeared
    public function headquarter() 
    {
        return $this->hasOne(HeadQuarter::class);
    }

    // Define a has many through relationship
    public function engines() 
    {
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class,
            'car_id', // Foreign key on car_models table
            'model_id' // Foreign key on engines table
        );
    }

    // Define a has one through relationship
    public function productionDate() 
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products() 
    {
        return $this->belongsToMany(Product::class);
    }
}
