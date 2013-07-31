<?php

namespace Da\ProtoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Da\ProtoBundle\DependencyInjection\DaProtoExtension;

class DaProtoBundle extends Bundle
{
    public function __construct()
    {
        $this->extension = new DaProtoExtension();
    }
}
