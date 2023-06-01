<?php

namespace App\Models\Models;



use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'admin_role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function adminRole()
    {
        return $this->belongsTo(AdminRole::class, 'admin_role_id');
    }
}
