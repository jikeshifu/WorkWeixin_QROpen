<?php

require './class/phpqrcode.php';

ob_clean();
header('Content-Type: image/png');

QRcode::png('http://'.$_SERVER['HTTP_HOST'].'/index.php?id='.$_GET['id'].'&line='.$_GET['line'], false, 'L', 15);