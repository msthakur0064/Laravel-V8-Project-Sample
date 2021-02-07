<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable {
    use HasFactory, Notifiable;

    /**
     * table name
     */
    protected $table = 'admin';

    /**
     * overwrite column name
     */
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    const DELETED_AT = 'deletedAt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'rememberToken',
    ];

    public function getRememberToken() {
        return $this->rememberToken;
    }

    public function setRememberToken($value) {
        $this->rememberToken = $value;
    }

    public function getRememberTokenName() {
        return 'rememberToken';
    }
}
