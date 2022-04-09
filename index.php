<?php

#### Telegram-bot Free To Use Template // https://core.telegram.org/bots/api // https://github.com/blogchik/php-telegram-bot

// Include Files
require "include/config.php"; // Bot and Administrators datas
require "include/varibles.php"; // Variables [php://input]
require "include/keyboards.php"; // Keyboards
require "include/functions.php"; // Telegram API Method
# require "include/connect.php"; // DataBase Connect / If Need delete this comment!

// Ini Set [Turn off Display errors and reports]
ini_set('error_reporting', 'off');
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');

// Default Timezone [Asia/Tashkent]
date_default_timezone_set('Asia/Tashkent');
$time = date('H:i');
$date = date('d.m.Y');

?>
