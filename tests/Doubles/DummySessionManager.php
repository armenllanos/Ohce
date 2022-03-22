<?php

namespace Ohce\Tests\Doubles;

use Ohce\Application\SessionManager;

class DummySessionManager implements SessionManager
{
    public function getSessions(): int
    {

    }

    public function login(string $userName, string $password): bool
    {
        
    }

    public function logout(string $userName)
    {

    }
    public function secureLogin(string $userName){}

}