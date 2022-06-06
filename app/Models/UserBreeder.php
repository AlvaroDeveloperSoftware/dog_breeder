<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class UserBreeder extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    use HasFactory;

    protected $table = 'user_breed';

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

}
?>