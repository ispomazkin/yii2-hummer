<?php

namespace ispomazkin\cadillac;

use yii\base\Module as BaseModule;



class Module extends BaseModule
{
    /**
     * @var string
     * Хост для обращениий к АПИ и Картинкам
     */
    public $host;

    /**
     * @var string
     * Адрес папки с картинками на хосте
     */
    public $image_path;

    /**
     * @var string
     * поисковый шаблон
     */
    public $search_pattern;

    /**
     * @var string
     * Базовый путь к каталогу
     */
    public $base_url='/cadillac';


    /**
     * @var array
     * Паттерн для вывода различного типа title на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $titlePattern=[
        'years'=>'Запчасти Кадилак',
        'categories'=>'{model} {year}',
        'groups'=>'{category}',
        'parts'=>'{parts}'
    ];

    /**
     * @var array
     * Паттерн для вывода различного типа keywords на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $kwdsPattern=[
        'years'=>'EPC Cadilac',
        'categories'=>'{model} {year}',
        'groups'=>'{model} {year} ',
        'parts'=>'{parts}'
    ];


    /**
     * @var array
     * Паттерн для вывода различного типа description на страницах
     * Доступны шаблоны
     * {model},{category},{group},{last}
     */
    public $descriptionPattern=[
        'years'=>'Каталог запчастей Кадилак',
        'categories'=>'Каталог запчастей  {model} {year}',
        'groups'=>'Каталог запчастей  {model} {year} по категории {category}',
        'parts'=>'Каталог запчастей  {model} {year} {category} {group} {parts}'

    ];




    public $controllerNamespace = 'ispomazkin\cadillac\controllers';

}
