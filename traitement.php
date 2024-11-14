<?php
if(isset($_POST["first_name"])&isset($_POST["last_name"])&isset($_POST["age"]))
{
  echo "<h2> salut ".stripslashes($_POST["first_name"]).
  " ".stripslashes($_POST["last_name"]).
  ". je vois que vous avez ".stripslashes($_POST["age"])."</h2>";
}
?>


