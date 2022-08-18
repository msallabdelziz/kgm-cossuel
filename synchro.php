<?php

$db_host="13.38.168.135";
$db_name="cossuelsen_db";
$db_user="admindb";
$db_pass="p45544dm1n";

$file = '/Applications/MAMP/htdocs/res_php.txt';
// Ouvre un fichier pour lire un contenu existant
$current = file_get_contents($file);
// Ajoute date jour pour log
$current .= date("Ymd Hi")."\n";

try {
    $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_name.'', $db_user, $db_pass, array(PDO::ATTR_PERSISTENT => true));
    $dbh->query("SET NAMES 'utf8';");

} catch (Exception $e) {
    $err= '<br /><h3 style=" font-family:verdana; font-size:15px; border:1px solid #033; border-radius:4px; background-color:red; color:#fff; width:600px; margin-left:auto; margin-right:auto;" align="center">ERREUR:: Impossible de se connecter &agrave; la base de donn&eacute;es!</h3><br />'.$e->getMessage().'<br />';
    $current .= $err."\n\n";
    return false;
}

$err_req="";

$tab = array ();
$req = "select * from attestation_conf where synchronise1='0'";
$res = $dbh->query ( $req );
if (! $res) {
    $obj_err=$dbh->errorInfo();
    $err_req .= "<li><b><u>Erreur survenue le</u>: ".date("d-m-Y H:i:s")."</b></li>";
    $err_req .= "<li><b><u>Requ&ecirc;te</u></b>: " . $req . "</li><li> <b><u>Nature erreur</u></b> :" . htmlentities($obj_err[2]) . "</li>";
    $current .= $err_req."\n\n";
} else {
	while ( $lig = $res->fetch(PDO::FETCH_OBJ) ) {
		$tab [$i] = ( $lig );
		$i ++;
        $current .= "Ligne ".$tab [$i]->id."\n";
	}
}
file_put_contents($file, $current);


/*
while ( $lig = $res->fetch(PDO::FETCH_OBJ) ) {
    $tab [$i] =  ( $lig );
    $req_maj[]="insert into attestation_conf () values()";
    $i ++;
}

$dbh->beginTransaction();

$dbh->commit();
*/
