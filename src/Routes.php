<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 12:41
 *
 *
 * @var $module \ispomazkin\hummer\Module
 */

return [
    //====== Groups ==========================
    $module->base_url . '/parts/<year_url:[0-9-_\w]+>/<last_url:[0-9-_\w]+>' => 'hummer/hummer/parts',
    $module->base_url .'/<year_url:[0-9-_\w]+>/<category_url:[0-9-_\w]+>' => 'hummer/hummer/groups',
    //====== Categories ==========================
    $module->base_url .'/<year_url:[0-9-_\w]+>' => 'hummer/hummer/categories',
    $module->base_url  => 'hummer/hummer/index',
];