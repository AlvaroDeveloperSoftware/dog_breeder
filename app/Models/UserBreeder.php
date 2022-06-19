<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\MyResetPassword;

/**
 * Class UserBreeder.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class UserBreeder extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'id',
        'email',
        'surnames',
        'breed',
        'years_breed',
        'photo',
        'affix',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      /**
     * Function for send passoword
     * @return notify.
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    /**
     * Function for relationship 1:N
     * @return hasMany dogs.
     */
    public function dog()
    {
        
        return $this->hasMany(Dog::class, 'id_dog', 'id');
    }

    /**
     * Function for obtain getId UserBreeder.
     * @return id.
     */
    public function getId()
    {
    return $this->id;
    }

    /**
     * Function for obtain getName UserBreeder.
     * @return name.
     */
    public function getName()
    {
    return $this->name;
    }

}
?>