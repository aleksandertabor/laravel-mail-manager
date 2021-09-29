<?php

namespace AleksanderTabor\MailManager\Tests;

class BasicTest extends TestCase
{
    /** @test */
    public function it_works()
    {
        dd(collect(['a', 'b']));

        dd(config('database'));

        $this->assertTrue(true);
    }
}
