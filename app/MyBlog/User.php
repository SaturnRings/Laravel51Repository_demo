<?php

namespace MyBlog;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * MyBlog\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\MyBlog\User whereUpdatedAt($value)
 */
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
