<?php
/**
 * Created by PhpStorm.
 * User: snowday
 * Date: 2018/3/30
 * Time: 13:08
 */

namespace App\Repositories\User;


use App\Model\User;

class RegistionRepository
{

    protected $user;

    public function __construct(User $user)
    {
           $this->user = $user;
    }

    public function create(array $data)
    {
        return $this->user::create($data);
    }
}