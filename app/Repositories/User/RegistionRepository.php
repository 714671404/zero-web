<?php
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