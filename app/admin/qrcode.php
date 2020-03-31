<?php

require './class/phpqrcode.php';

ob_clean();
header('Content-Type: image/png');

QRcode::png('http://'.$_SERVER['HTTP_HOST'].'/index.php?id='.$_GET['id'].'&type='.$_GET['type'], false, 'L', 15);