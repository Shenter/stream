#Установка:
Установка docker (опционально):

`sudo apt install docker-compose`

`sudo chown $USER /var/run/docker.sock`
#Запуск
`git clone https://github.com/Shenter/stream`

`cd stream`

`cp .env.example .env`

`docker-compose up -d`

`docker exec app composer install`

`docker exec app php artisan key:generate`

`docker exec app php artisan migrate` 

`docker exec app php artisan db:seed`

![Stream](https://raw.githubusercontent.com/Shenter/stream/master/image.gif)


## Тестовая задача
Необходимо реализовать простой симулятор работы с товарами.
##Детализация задачи.
Необходимо реализовать несколько методов для работы с товарами:
- Создать товар
- Положить товар в корзину
- Получить список товаров из корзины

Можно использовать любой современный фреймворк (Laravel, Slim, Yii)
##Задача со звездочкой.
При наличии опыта и желания, можно дополнительно сделать развертывание (сборку
и запуск проекта) с использованием Docker.
##Результат выполнения.
В качестве результатов выполнения ожидаем ссылку на публичный репозиторий
(github/gitlab) с выполненным заданием и инструкциями по запуску проекта в
ReadMe-файле.
