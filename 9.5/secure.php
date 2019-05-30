<?php
    $password="zaphodbeeblebrox";
    
    $secureHash = sha1($password);
    $crcSecure = crc32($password);
    $md5Secure = md5($password);
    print($secureHash);
    print("<br/>". $crcSecure);
    print("<br/>" . $md5Secure);


    
    
?>