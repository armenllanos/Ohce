<?php
namespace Ohce\Tests\Doubles;
use Ohce\Application\SessionManager;

class StubSessionManager implements SessionManager
{
    public function getSessions(): int
    {
        return 10;
    }

    public function login(string $userName, string $password): bool
    {
        return false;
    }

    public function logout(string $userName): bool
    {
        return false;
    }
    public function secureLogin(string $userName){}
}