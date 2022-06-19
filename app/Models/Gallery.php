<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gallery.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class Gallery extends Model
{

    use HasFactory;

    protected $table = 'gallery';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'video',
        'photo',
        'id_dog',
    ];

    /**
     * Function for relationship Gallery with Dog.
     */
    public function dog (){
        return $this->hasMany(Dog::class, 'id_dog', 'id');
    }
}