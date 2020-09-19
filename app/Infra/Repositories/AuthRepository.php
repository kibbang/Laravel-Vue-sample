<?php

namespace App\Infra\Repositories;

use App\Domain\Repositories\IAuthRepository;
use App\Models\User;

class AuthRepository implements IAuthRepository
{
    public function registerUser($data) {
        $user = User::create([
            'name' => $data['user']['name'],
            'email' =>$data['user']['email'],
            'password' =>$data['user']['password']
        ]);
        \Log::debug($user);
        return $user;
    }
}