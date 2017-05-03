<?php
session_start();
session_destroy();
header("location:../LoginScreens/index.php");
