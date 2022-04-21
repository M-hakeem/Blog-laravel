<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name','founded','description','image_path'];


    // has many realtionship
    public function carModel()
    {
        return $this->hasMany(CarModel::class);
    }

    // has many through relationship
    public function engines(){
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //foreign key on CarModel table
            'model_id', //foreign key on Engine table
        );
    }

    // has one through relationship

    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',   //foreign key of carModel
            'model_id', //foreign key of carProduction model
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
