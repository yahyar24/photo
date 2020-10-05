<?php

    $submit = $_POST['submit'];
    $name=$_POST['username'];
    $email=$_POST['email_address'];
    $message = $_POST['messages'];


    if(isset($submit)){
      if (($name == "")||($email=="")||($message==""))
          {
          echo "All fields are required, please fill <a href=\"\">the form</a> again.";
          }
      else{
          $from="From: $name<$email>\r\nReturn-path: $email";
          $subject="Speekloud Contact";
          mail("admin@bootstrapcafe.net", $subject, $message, $from);
          header('Location: thank-you.html#contact');
        }
    }
?>