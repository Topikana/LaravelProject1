<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

/**
 * @property mixed firstname
 * @property mixed lastname
 * @property mixed email
 * @property mixed role
 * @property mixed group_id
 * @property mixed language_id
 * @property mixed role_id
 * @property mixed password
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'group_id', 'language_id', 'role_id', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function group()
    {
    	return $this->belongsTo(Group::class);
    }

    public function projects()
    {
    	return $this->belongsToMany(Project::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
