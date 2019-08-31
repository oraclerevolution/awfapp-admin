<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 28/03/2019
 * Time: 12:11
 */


session_start();
session_destroy();
header('Location:./index.php');

?>