<?php
/**
 * JUZAWEB CMS - The Best CMS for Laravel Project
 *
 * @package    juzaweb/iHealCMS
 * @author     Juzaweb Team <admin@juzaweb.com>
 * @link       https://juzaweb.com
 * @license    GNU General Public License v2.0
 */

namespace Juzaweb\CMS\Interfaces\Repositories;

/**
 * @deprecated
 */
interface WithAppendSearch
{
    public function appendCustomSearch($builder, $keyword, $input);
}
