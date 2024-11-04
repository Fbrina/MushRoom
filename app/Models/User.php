<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Daftar kolom yang bisa diisi secara massal
    protected $fillable = ['email', 'phone', 'username', 'password'];

    // Kolom yang disembunyikan ketika dikonversi ke array atau JSON
    protected $hidden = ['password', 'remember_token'];

    // Kolom yang dikonversi menjadi tipe native
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator untuk mengenkripsi password sebelum menyimpannya ke database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);

    }
}


// class User extends Authenticatable
// {
//     /** @use HasFactory<\Database\Factories\UserFactory> */
//     use HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }
