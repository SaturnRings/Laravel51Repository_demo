<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author oomusou
 * @date 12/5/15
 * @since 12/5/15 description
 */

namespace MyBlog\Repositories;


use Illuminate\Database\Eloquent\Collection;
use MyBlog\User;

class UserRepository
{
    /** @var User 注入的User model */
    private $user;

    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param integer $age
     * @return Collection
     */
    public function getAgeLargerThen($age)
    {
        return $this->user
            ->where('age', '>', $age)
            ->orderBy('created_at')
            ->get();
    }
}