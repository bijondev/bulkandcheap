<?php
include "config.php";
session_destroy();

header("Location: ".base_url);
?>