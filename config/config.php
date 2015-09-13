<?php
/**
 * Фаил конфигурации
 */

define("PATH", dirname(__DIR__) . DIRECTORY_SEPARATOR);
define("WEB_PATH", dirname(__DIR__) . "/web" . DIRECTORY_SEPARATOR);

/** @var array $config */
return $config = [

    /**
     * Настройки контроллера по умолчанию
     */
    'controller' => 'main',
    'action'     => 'action_index',

    /**
     * Начальный каталог
     * например если сайт лежит в папке site
     * и адрес сайта должен быть http://example.com/site
     * путь должен быть /site и так далее /site/dir/site
     */
    'dir' => '/',

    /**
     * Адрес сайта
     * без косого слеша в конце "/"
     * Например http://example.com
     */
    'host' => '',

    /**
     * Email администратора
     */
    'email' => '',

];
