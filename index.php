<?php
/**
 * Created by PhpStorm.
 * User: tuananh
 * Date: 30/01/2019
 * Time: 14:16
 */
include_once "ArrayList.php";
$listInter = new ArrayList();
$listInter->add(1);
$listInter->add(2);
$listInter->add(3);

echo $listInter->get(0);