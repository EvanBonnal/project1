<?php
if(isset($_POST["login"])&isset($_POST["password"])){

$codes=array("bonnal"=>"test1",
"root"=>"root1234");

$ID=$_POST["login"];
$psw=$_POST["password"];
$decision=FALSE;
foreach ($codes as $login=>$password){

  if($login==$ID && $password==$psw){
 	echo " BIENVENUE";
   	$decision=TRUE;
}
}
 if($decision==FALSE) {
 	echo " ACCES REFUSÉ";
	echo "<table><tr><th>"ident"</th><th>"mdp"</th>";
	foreach ($codes as $login=>$password){
		echo "<tr><td>".$login."</td><td>".$password."</td></tr>";
		}
	echo "</table>";
}
}
?>
