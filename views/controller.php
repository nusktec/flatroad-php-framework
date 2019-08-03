<?php
session_start();
//set page titling
//set menus and description
function setHeader($title, $description)
{
    $arr = array('title' => $title, 'desc' => $description);
    $_SESSION['header'] = $arr;
}
