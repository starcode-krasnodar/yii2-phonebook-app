Телефонная книга
============================

Установка
---------

    composer global require "fxp/composer-asset-plugin:1.0.0"
    composer install
    yii migrate --migrationPath=@yii/rbac/migrations/
    yii migrate


Роли
----

Создано две роли `admin` и `user`. Доступы admin/admin и user/user соответсвенно.

Инициализация RBAC происходит в миграции `migrations/m150609_054251_init_rbac.php`
