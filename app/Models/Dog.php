<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model Dog.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
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
        'id',
        'date_of_birth',
        'sex',
        'breed',
        'height',
        'weight',
        'owner',
        'health_tests',
        'user_breeder_id',
    ];

    public function breeder(){

        return $this->belongsTo(UserBreeder::class, 'user_breeder_id', 'id' );
    }

    public function gallery(){
        return $this->hasMany(Gallery::class, 'id', 'id_dog');
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

    protected $casts = [
        'date_of_birth' => 'date',
     ];

    /**
     * Function for obtain id of Dog.
     * @return id.
     */
    public function getId()
    {
    return $this->id;
    }

    
    /**
     * Function for obtain name of Dog.
     * @return name.
     */
    public function getName()
    {
    return $this->name;
    }

    
    /**
     * Function for obtain owner of Dog.
     * @return owner.
     */
    public function getOwner()
    {
    return $this->owner;
    }

    /**
    * Relationship M:N between model Dog and User,
    * @return relation M:N with eloquent.
    */
    public function user_normal() {
        return $this->belongsToMany(Dog::class, 'user_normal_dog', 'id_dog', 'id_user_normal');
    }

}
