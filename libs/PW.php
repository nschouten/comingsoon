<?php

$inputPW = "123";
$hashPW = password_hash("123", PASSWORD_DEFAULT);

echo($hashPW);

// echo password_verify($inputPW, $hashPW);

?>