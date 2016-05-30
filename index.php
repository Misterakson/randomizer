<?php
session_start();
error_reporting(0);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding("UTF-8");

include_once './settings.php';
include_once './config.php';
include_once './libs/text_correct.php';
include_once './libs/class_Text.php';




include './modules/'.$_GET['module'].'/'.$_GET['page'].'.php';
include './skins/index.tpl';

/*
 * 1.Достаем данные из бд (имена и их описание) +
 * 2.Пишем обработчик (контроллер) , который будет обрабатывать текст, полученный из бд. (с использовнием ООП)
 * 3.Сохраняем полученный текст в новую БД
 * 4.Разбираемся где в друпале лежат документы из бд (имена, словарь таксономии, термин таксономии и т.д.)
 * 5.Разбираемся как импортировать таблицы в бд, чтобы они отображались с учетом таксономии
 * 6.Импортируем.
 *
 */