<?
session_start();
if(!$_SESSION['emailaddress']) {
  header("location: /athena/index.php");
}
?>
