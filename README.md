Имитация мультидомена какой-то организации расположенной в разных городах:
* tyumen.october.ru
* moscow.october.ru

#админ
login: admin
password: admin

# информация
* контактные данные, которые меняются в зависимости от домена (например: tyumen.ocotber.local), находятся на вкладке "/contact"
* там же находится форма обратной связи, которая отправляет письма по адресу, прикрепленному к заданному контакту домена
* данные о доступных доменах (городах), связанных с ними контактных данных, а также данные формы обратной связи хранятся в MySQL и доступны к просмотру и редактированию по ссылке "/back/admin/test/contacts"
* отправка почты по SMTP происходит через сервер smtp.google.com (необходимы данные аутентификации для работы сервиса)

# установка
* настроить сервер днс чтобы реализовать мультидоменную системы (например: *.domen.local)
* настроить подключение к бд. Создать в СУБД базу "test" (MySQL) и выпонлить "php artisan october:up"
* чтобы заработал сервис отправки почты по SMTP, нужно заполнить на влкадке "/back/system/settings/update/october/system/mail_settings" необходимые поля

October CMS v1.0 has a few system requirements:

* PHP version 7.2 or higher
* PDO PHP Extension (and relevant driver for the database you want to connect to)
* cURL PHP Extension
* OpenSSL PHP Extension
* Mbstring PHP Extension
* ZipArchive PHP Extension
* GD PHP Extension
* SimpleXML PHP Extension
