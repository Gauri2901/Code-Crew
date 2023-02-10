<?php
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_FILES["file"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $file = $_FILES["file"]["tmp_name"];

    $to = "your-email@example.com";
    $subject = "Patient Medical History from $name";
    $message = "A patient named $name has uploaded their medical history. You can find the file attached to this email.";
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=".md5('boundary1')."\r\n\r\n";

    $message = "--".md5('boundary1')."\r\n";
    $message .= "Content-Type: text