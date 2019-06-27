yii2-cadillac
=================



Установка
------------------
* Установка пакета с помощью Composer
```
composer require ispomazkin/yii2-cadillac
```


В конфигурации common/config/main-local.php добавить параметры. 

    'modules' => [
        'cadillac'=>[
            'class'=>'\ispomazkin\cadillac\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_cadillac',
            'search_pattern'=>'/search/?article={article}&brand=cadillac',
        ],
    ],

Строка поиска может быть любая, вместо паттерна {article} будет подставляться артикул.
После установки и настройки каталог будет доступен по адресу /cadillac

Чтобы задать собственные шаблон генерации title, keywords, description,
используются предустановленные шаблоны переменные {model},{year},{group},{parts} 

        'chevrolet'=>[
            'class'=>'\ispomazkin\cadillac\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_cadillac',
            'search_pattern'=>'/search/?article={article}&brand=cadillac',
            'base_url'=>'/cadillac',
            'titlePattern=>[
                   'years'=>'Запчасти Кадилак',
                   'categories'=>'{model} {year}',
                   'groups'=>'{category}',
                   'parts'=>'{parts}'
            ],
            'descriptionPattern'=>[
                   'years'=>'Каталог запчастей Кадилак',
                   'categories'=>'Каталог запчастей  {model} {year}',
                   'groups'=>'Каталог запчастей  {model} {year} по категории {category}',
                   'parts'=>'Каталог запчастей  {model} {year} {category} {group} {parts}'
            ],
            'keywordsPattern'=>[
                   'years'=>'EPC Cadilac',
                   'categories'=>'{model} {year}',
                   'groups'=>'{model} {year} ',
                   'parts'=>'{parts}'
            ],
        ],
        
