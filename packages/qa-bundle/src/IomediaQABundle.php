<?php

namespace Iomedia\QABundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IomediaQABundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
