<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Dog extends Model
{

    use HasFactory;

    protected $table = 'dog';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'sex',
        'breed',
        'height',
        'weight',
        'health_tests',
        'users_id'
    ];

    public function breeder(){

        return $this->belongsTo(UserBreeder::class, 'users_id', 'id' );
    }

    public function gallery(){
        return $this->hasOne(Gallery::class, 'id', 'id_dog');
    }

    public function owner (){
        return $this->belongsToMany(Owner::class, 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
