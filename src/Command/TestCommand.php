<?php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:test')]
class TestCommand
{
    public function __invoke(): int
    {
	call_non_existent_func();
    }
}
