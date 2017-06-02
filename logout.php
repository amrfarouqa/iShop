<?php
include('db.php');
session_start();
$delete=mysql_query("DELETE FROM `welcome` WHERE 1");
if(session_destroy())
{
header("Location: index.php");
}
?>