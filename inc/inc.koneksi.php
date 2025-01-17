<?php
$myConnection = mysqli_connect("db", "root", "password") or die("could not connect to mysql");
mysqli_select_db($myConnection, "db_sinamira") or die("no database");
