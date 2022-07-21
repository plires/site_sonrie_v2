<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = '';
  }

  if (isset($_GET['last_name'])) {
    $last_name = $_GET['last_name'];
  } else {
    $last_name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['errors'])) {

    $errors = unserialize(urldecode($_GET['errors']));
  } else {
    $errors = '';
  }

  if (isset($_GET['msg_contacto'])) {
    $msg_contacto = urldecode($_GET['msg_contacto']);
  }

?>