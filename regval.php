<?php
session_start();
if(isset($_SESSION["lastname"]))
{
unset($_SESSION["lastname"]);
}
?>