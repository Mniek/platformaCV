<?php
$username = 'root';
$password = 'marlowe1Sql';
$db = 'mniek';
$host = 'localhost';

$conn = mysqli_connect($host, $username, $password,$db);
if(!conn)
{
	echo "Nie udało się połączyć :(".mysqli_connect_error();
}
// $sql = "SELECT cfg_name, cfg_logo, cfg_break, cfg_motto, cfg_id FROM config WHERE cfg_id = 1";
// $result = msqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result) ;
//  $webName = $row['cfg_name'];
//  echo $webname;
?>