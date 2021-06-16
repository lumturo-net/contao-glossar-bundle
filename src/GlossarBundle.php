<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace LumturoNet\Glossar;

use LumturoNet\ContaoGlossarBundle\DependencyInjection\GlossarExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GlossarBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new GlossarExtension();
    }
}
