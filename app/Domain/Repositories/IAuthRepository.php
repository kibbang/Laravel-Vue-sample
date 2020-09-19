<?php

namespace App\Domain\Repositories;

interface IAuthRepository 
{
    public function registerUser($data);
}