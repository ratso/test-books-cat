Для установки нужно выгрузить данные из таблицы books.sql и в файле index.php в блоке "Настраиваем базу данных" указать нужные данные по БД.
Также, при необходимости, нужно назначить права доступа на запись для папкок temp и cache

Для работы скриптов нам потербуется:
 * PHP >= 5.3
 * модуль PDO_MYSQL к нему
 * Apache с mod_rewrite
 * MySQL (либой поддерживаемый PDO)
 * JS в браузере должен быть включен

Дря реализации исползьовались:
 * 	PHP framework fatFree (http://bcosca.github.com/fatfree/)
 *  JS библиотека jQuery
 *  CCS Фреймворк Twitter Bootstrap http://twitter.github.com/bootstrap/