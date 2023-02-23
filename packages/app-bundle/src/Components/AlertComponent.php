<?php

namespace Iomedia\AppBundle\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('alert', template: '@IomediaApp/components/alert.html.twig')]
class AlertComponent
{
    public ?string $message;
    public string $type = 'success';

    public function getColor(): string
    {
        switch ($this->type) {
            case 'success':
                return 'green';
                break;

            case 'error':
                return 'red';
                break;

            case 'warning':
                return 'yellow';
                break;

            default:
                return 'blue';
                break;
        }
    }
}
