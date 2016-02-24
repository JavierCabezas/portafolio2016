<?php
/**
 * Created by PhpStorm.
 * User: Javier
 * Date: 23-02-2016
 * Time: 23:40
 */

if(isset($_POST['name'], $_POST['email'], $_POST['mensaje'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    $from="From: $name<$email>\r\nReturn-path: $email";
    $subject="Mensaje desde el sitio web (".date('m-d-Y h:i:s', time()).')';
    mail("youremail@yoursite.com", $subject, $message, $from);
}
