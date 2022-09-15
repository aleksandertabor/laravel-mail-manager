<?php

namespace AleksanderTabor\MailManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AleksanderTabor\MailManager\MailManager
 */
class MailManagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mail-manager';
    }
}
