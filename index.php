<?php

   // Format: dd-mm-yyyy
   $string = '11-12-2018';

   // Год 2018, Месяц 12, День 11.
   $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

   $replacement = 'Год $3, Месяц $2, День $1';

   echo preg_replace($pattern, $replacement, $string);
   die;

   // FRONT CONTROLLER


   // 1. Общие настройки

  ini_set('display_errors',1);
  error_reporting(E_ALL);


  // 2. Подключение файлов системы

  define('ROOT', dirname(__FILE__));
  require_once('components/Router.php');


  // 3. Установка соединения с БД


  // 4. Вызов ROUTER

  $router = new Router();
  $router->run();


