<?php
if (isset($_POST['submit'])) {
  $to = "g.leberruyer@gmail.com";
  $subject = "Message from your website";
  $message = $_POST['textarea'];
  $headers = "From: sender_g.leberruyer@gmail.com\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "The email was sent successfully.";
  } else {
    echo "The email could not be sent.";
  }
}
?>

<form action="email.php" method="post">
                <textarea name="textarea" placeholder="ricky ticky tabby biatch"></textarea>
                <input type="submit" class="button expanded" value="interdimensional sends." name="submit">
