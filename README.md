## Тестовое задание
Выполнить задачу на фреймворке Laravel.
После выполнения задания нужно выложить на публичный аккаунт https://github.com/ и прислать ссылку на почту dev@sushi-market.com


## Настройка проекта
- `composer install`
- настроить `.env` файл
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`

## Дополнительная информация
Статусты заказа:
- 0 новый
- 10 подтвержден
- 20 завершен

Для верстки использовать bootstrap `/public/js/app.js`, `/public/css/app.css`

Свой js код писать в файл `/public/js/script.js` 

Свои css стили писать в файл `/public/css/style.css` 

## Техническое задание

- Создать страницу на которой выводится текущая температура в Омске (запрос из php) (Работа с api какого-либо сервиса например: https://tech.yandex.ru/weather/)

- Создать страницу со списоком заказов в табличном виде
    - поля 
        - ид_заказа 
        - название_партнера 
        - стоимость_заказа 
        - наименование_состав_заказа 
        - статус_заказа
    - ид_заказа - ссылка на редактирование заказа в новой вкладке
- Создать страницу редактирования заказа
    - поля для редактирования:
        + email_клиента(редактирование, обязательное)
        + партнер(редактирование, обязательное)
        - продукты(вывод наименования + количества единиц продукта)
        - статус заказа(редактирование, обязательное)
        - стоимость заказ(вывод)
        - сохранение изменений в заказе
