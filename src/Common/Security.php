<?php

namespace Hsoderlind\Tradera\Common\Security;

use Ramsey\Uuid\Uuid;

class Security
{
    public static function generateSessionKey()
    {
        return Uuid::uuid4();
    }
}
