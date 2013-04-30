<?php

namespace CunningsoftCustom\MessageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CunningsoftCustomMessageBundle extends Bundle
{
    public function getParent()
    {
        return 'CunningsoftMessageBundle';
    }
}
