<?php

namespace LumturoNet\ContaoGlossarBundle\Models;

use Contao\DataContainer;
use Contao\Model;
use Contao\StringUtil;

/**
 * Class Entry
 *
 * @property int $id
 * @property int $pid
 * @property int $tstamp
 * @property string $title
 * @property string $description
 *
 * @package LumturoNet\ContaoGlossarBundle\Models
 */
class Entry extends Model
{
    protected static $strTable = 'tl_lt_glossar';

    public static function updateSlug($mixedValue, DataContainer $objDataContainer)
    {
        $entity = self::createModelFromDbResult($objDataContainer->activeRecord);
        $entity->slug = StringUtil::generateAlias($mixedValue);

        $entity->save();
    }
}