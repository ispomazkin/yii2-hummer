yii2-hummer
=================



Установка
------------------
* Установка пакета с помощью Composer
```
composer require ispomazkin/yii2-hummer
```


В конфигурации common/config/main-local.php добавить параметры. 

    'modules' => [
        'hummer'=>[
            'class'=>'\ispomazkin\hummer\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_hummer',
            'search_pattern'=>'/search/?article={article}&brand=hummer',
        ],
    ],

Строка поиска может быть любая, вместо паттерна {article} будет подставляться артикул.
После установки и настройки каталог будет доступен по адресу /hummer

Чтобы задать собственные шаблон генерации title, keywords, description,
используются предустановленные шаблоны переменные {model},{year},{group},{parts} 

        'chevrolet'=>[
            'class'=>'\ispomazkin\hummer\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_hummer',
            'search_pattern'=>'/search/?article={article}&brand=hummer',
            'base_url'=>'/hummer',
            'titlePattern=>[
                   'years'=>'Запчасти Hummer',
                   'categories'=>'{model} {year}',
                   'groups'=>'{category}',
                   'parts'=>'{parts}'
            ],
            'descriptionPattern'=>[
                   'years'=>'Каталог запчастей Hummer',
                   'categories'=>'Каталог запчастей  {model} {year}',
                   'groups'=>'Каталог запчастей  {model} {year} по категории {category}',
                   'parts'=>'Каталог запчастей  {model} {year} {category} {group} {parts}'
            ],
            'keywordsPattern'=>[
                   'years'=>'EPC Hummer',
                   'categories'=>'{model} {year}',
                   'groups'=>'{model} {year} ',
                   'parts'=>'{parts}'
            ],
        ],
        
