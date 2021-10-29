<?php
 function tkn()
 {
    $t = file_get_contents("https://useraction.zee5.com/tokennd/");
    $t = json_decode($t);
    return $t->video_token;
 }
 $srch = $_GET['id'];
 if($srch)
 {
        $token = tkn();
         $ans = file_get_contents("https://gwapi.zee5.com/content/details/".$srch."?translation=en&country=IN&version=2");
         $ans = json_decode($ans);
         $hls = str_replace("drm","hls","https://zee5vodnd.akamaized.net".$ans->hls[0].$token);
         $page = file_get_contents("resp2.html");
         echo sprintf($page,$hls);
 }
?>