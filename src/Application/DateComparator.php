<?php

namespace Ohce\Application;

use Nette\Utils\DateTime;

class DateComparator
{
    private function getTime(): string
    {
        return new DateTime("h:i:sa");
    }

    public function morning(): bool
    {
    }

    public function evening(): bool
    {
    }
}