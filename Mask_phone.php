<?php
$phoneNum = "9999999999";
$maskedNum = substr_replace($phoneNum,"******",2,6);
print_r($maskedNum);