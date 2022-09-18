<?php
include("include/login_connection.php");
if (session_destroy()) {
    header("location:login.php");
}