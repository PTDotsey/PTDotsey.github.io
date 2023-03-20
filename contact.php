<?php
if($_POST["message"]) {
mail("ptdotsey@gmail.com", "Here is the subject line",
$_POST["insert your message here"]. "From: portfoliocontact@gitportfolio.com");
}
?>
