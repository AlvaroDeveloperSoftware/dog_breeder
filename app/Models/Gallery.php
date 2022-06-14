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
        'video',
        'photo',
        'id',
        'id_dog'
    ];

    public function dog (){
        return $this->belongsTo(Dog::class, 'id');
    }
}