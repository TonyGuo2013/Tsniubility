<?php
/*
 * Created by PhpStorm.
 * User: YexuanGuo
 * Email:TonyGuo@staff.tsniubility.com
 * Date: 15-7-31
 * Time: 下午1:09
 */
define('APPLICATION_PATH', dirname(__FILE__)."/../");

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
