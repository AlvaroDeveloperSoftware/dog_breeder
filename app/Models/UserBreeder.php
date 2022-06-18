<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\MyResetPassword;


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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function dog()
    {
        
        return $this->hasMany(Dog::class, 'id_dog', 'id');
    }

    public function getId()
    {
    return $this->id;
    }

    public function getName()
    {
    return $this->name;
    }

}
?>