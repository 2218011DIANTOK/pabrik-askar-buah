<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'admin'; // Menentukan tabel pengguna
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    protected $dates = ['created_at', 'updated_at'];
    public $timestamps = true;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
?>