<?php

#https://www.cnblogs.com/daochong/p/7084729.html
$str = exec('whereis php');
echo $str;
echo '<br/>';
echo shell_exec('php -v');
