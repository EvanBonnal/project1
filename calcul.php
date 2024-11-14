<?php
if(isset($_POST["operande1"])&isset($_POST["operande2"])&isset($_POST["operateur"]))
            $a = $_POST['operande1'];
            $b = $_POST['operande2'];
	    $c = $_POST['operateur'];
if($c == "+"){
	echo  $a+$b; 
} else if($c == "-"){
        echo $a-$b;
} else if($c == "*"){
        echo $a*$b;
} else if($c == "/"){
        echo $a/$b;
} else {
    // opération non prévue
echo '<p>Erreur</p>';
                }
?>
