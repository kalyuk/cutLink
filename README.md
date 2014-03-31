Для запуска проекта необходимо выполнить:

1. git clone https://github.com/kalyuk/cutLink.git
2. Затем установить зависимости через Composer
    В папке куда был склонирован проект выполнить "composer install"
3. Отредактировать application/configuration.php изменить настройки базы данных на свои
4. Затем создать таблицы в базе из миграций, путем ввода комманды
   php application/console.php migration up
   после чего будут созданы 10 таблиц в базе данных
5. Настроить веб сервер, для запуска скрипта public/index.php

Как настроить веб сервер можно прочить тут: http://www.yiiframework.com/doc/guide/1.1/ru/quickstart.apache-nginx-config