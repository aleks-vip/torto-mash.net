<?php
$action = $_POST['action'];
require_once 'fanction.php';
switch ($action) {
    case 'init':
        init();
        break;
//    case 1:
//        echo "i ����� 1";
//        break;
//    case 2:
//        echo "i ����� 2";
//        break;
}