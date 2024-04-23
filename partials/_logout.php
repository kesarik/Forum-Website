<?php
session_start();
session_destroy();
header("location:../");
exit();
echo "Logging you out.Please wait....";
?>