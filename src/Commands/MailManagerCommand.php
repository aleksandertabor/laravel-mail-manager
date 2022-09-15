<?php

namespace AleksanderTabor\MailManager\Commands;

use Illuminate\Console\Command;

class MailManagerCommand extends Command
{
    public $signature = 'mail-manager';

    public $description = 'MailManager command';

    public function handle()
    {
        $this->comment(config('mail-manager.command_text'));
    }
}
