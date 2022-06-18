<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

    public function dog (){
        return $this->hasMany(Dog::class, 'id_dog', 'id');
    }
}