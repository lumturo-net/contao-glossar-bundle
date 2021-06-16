<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace LumturoNet\ContaoGlossarBundle;

use LumturoNet\ContaoGlossarBundle\DependencyInjection\GlossarExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoGlossarBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new GlossarExtension();
    }
}
