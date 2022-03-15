<?php

namespace Ohce\Application;

interface SessionManager
{
    public function getSessions(): int;

    public function login(string $userName, string $password): bool;

    public function logout(string $userName);

    public function secureLogin(string $userName);
}