<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 28/03/2019
 * Time: 10:37
 */

if(!(isset($_SESSION['NIV0'])))
{
    header("location:index.php");
    exit;
}
else
{
    if ($_SESSION['NIV0'] != 1)
    {
        header("location:index.php");
        exit;
    }

}

?>
