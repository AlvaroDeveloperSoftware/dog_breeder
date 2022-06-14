<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Owner extends Model
{

    use HasFactory;

    protected $table = 'owner';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surnames',
    ];
    public function dog (){
        return $this->belongsToMany(Dog::class, 'id');
    }
}
