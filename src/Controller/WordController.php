<?php

namespace LumturoNet\ContaoGlossarBundle\Controller;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\DataContainer;
use Contao\StringUtil;
use LumturoNet\ContaoGlossarBundle\Models\Entry;
use Symfony\Component\HttpFoundation\Response;

class WordController
{
    private $framework;

    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }

    public function findAction($strWord = 'abc')
    {
        $this->framework->initialize();

        $objEntity = Entry::findBy('slug', StringUtil::generateAlias($strWord));

        return new Response($objEntity->description);
    }

    public function generateSlugAction($mixedValue, DataContainer $objDataContainer)
    {
        Entry::updateSlug($mixedValue, $objDataContainer);

        return $mixedValue;
    }
}