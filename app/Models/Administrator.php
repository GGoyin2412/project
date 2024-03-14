<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrator extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nombre', 'apellido', 'username', 'correo', 'password'];

    protected $hidden = ['password'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
