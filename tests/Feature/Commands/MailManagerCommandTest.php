<?php

namespace AleksanderTabor\MailManager\Tests\Feature\Commands;

use AleksanderTabor\MailManager\Tests\TestCase;

class MailManagerCommandTest extends TestCase
{
    /** @test */
    public function the_mail_manager_command_works()
    {
        $this->artisan('mail-manager')->assertExitCode(0);
    }

    /** @test */
    public function the_config_file_value_is_used_as_output()
    {
        $this->artisan('mail-manager')
        ->expectsOutput(config('mail-manager.command_text'))
        ->assertExitCode(0);

        $newText = 'New command text';

        config()->set('mail-manager.command_text', $newText);

        $this->artisan('mail-manager')
        ->expectsOutput($newText)
        ->assertExitCode(0);
    }
}
