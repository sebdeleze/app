<?php

namespace Iomedia\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IomediaAppBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
