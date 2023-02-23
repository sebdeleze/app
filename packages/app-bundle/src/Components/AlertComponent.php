<?php

namespace Iomedia\AppBundle\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('alert', template: '@IomediaApp/components/alert.html.twig')]
class AlertComponent
{
}
