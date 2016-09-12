<?php
include "config.php";

function getSalt($hash) {
     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
     $randString = $hash;
     $randStringLen = 64;

     while(strlen($randString) < $randStringLen) {
         $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
         $randString .= $randChar;
     }

     return $randString;
}

?>