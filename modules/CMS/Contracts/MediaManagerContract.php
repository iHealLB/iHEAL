<?php
/**
 * JUZAWEB CMS - The Best CMS for Laravel Project
 *
 * @package    juzaweb/iHealCMS
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://juzaweb.com/cms
 * @license    MIT
 */

namespace Juzaweb\CMS\Contracts;

use Juzaweb\CMS\Models\Model;
use Juzaweb\CMS\Support\FileManager\Media;

interface MediaManagerContract
{
    public function find(string|int|Model $media, string $type = 'file'): null|Media;

    public function findFile(string|int|Model $file): null|Media;

    public function findFolder(string|int|Model $folder): null|Media;
}
