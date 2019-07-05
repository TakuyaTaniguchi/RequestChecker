<!DOCTYPE html><!-- [if IEMobile 7 ]>  <html lang="ja-JP" class="no-js iem7"><![endif] -->
<!-- [if lt IE 7]><html lang="ja-JP" class="no-js lt-ie9 lt-ie8 lt-ie7 ie6"><![endif] -->
<!-- [if IE 7]><html lang="ja-JP" class="no-js lt-ie9 lt-ie8 ie7"><![endif] -->
<!-- [if IE 8]><body lang="ja-JP" class="no-js lt-ie9 ie8"><![endif] -->

<!-- [if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><body lang="ja-JP" class="no-js"><!--<![endif]-->
<!--上書きしたい箇所があればブロックを呼び出して記述-->
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta id="viewport" content="width=device-width" name="viewport">
</head>
<body class="home" id="top">




<?php

// $url = "https://script.google.com/macros/s/AKfycbxL__CONRl8UGB1Q_OCve_ds703Gpw-rOSfctnoYlYhTIajQY4/exec";
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
// curl_setopt($ch,CURLOPT_MAXREDIRS,10);
// curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
// curl_setopt($ch,CURLOPT_AUTOREFERER,true);
// $gasjson .=  curl_exec($ch);
// curl_close($ch);
// $gasjson = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $gasjson);
// $gasjson= mb_convert_encoding($gasjson, 'UTF-8', "auto");
// $gasjson = preg_replace('/\\\\x([0-9a-f][0-9a-f])/i', '\\u00$1', $gasjson);
// $gasjson = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $gasjson);
// $gasjson  = preg_replace('/.+?({.+}).+/','$1',$gasjson);
// $gasjson = preg_replace('/.*"{/u', '"[{', $gasjson);
// $gasjson  = mb_convert_encoding($gasjson , 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');


// $start = '[';
// $close = "]";
// $gasjson = $start.$gasjson.$close;

// $array = json_decode($gasjson , true);

// $target_org = $array[0]['org'];
// $target_biz = $array[0]['biz'];



// $count_json_org = count($target_org);
// $count_json_biz = count($target_biz);
// echo $count_json_biz;



// for ($i = 0; $i < $count_json_org; ++$i) {
//     $url_list[] = $target_org[$i]['url'];
// }

// for ($i = 0; $i < $count_json_biz; ++$i) {
//     $url_list_2[] = $target_biz[$i]['url'];
// }


// $ch = curl_init();
// curl_setopt_array($ch, [
//     CURLOPT_FOLLOWLOCATION => true, // Locationヘッダを自動で追跡する
//     CURLOPT_NOBODY => true, // GETリクエストの代わりにHEADリクエストを送る (HTMLを取得しない),
// ]);

// $json = array();




// for ($i = 0; $i < $count_json_org; ++$i) {
//     curl_setopt($ch, CURLOPT_URL, "$url_list[$i]");
//     $result = curl_exec($ch);
//     $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

//     if(preg_match('/password-protected/',$url)){
//         // コンテンツが見つからない
//         //error_log(print_r('404'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = 401;
//         continue;
//     }
//     if ($result === false || $code >= 500) {
//         // 通信障害，またはサーバが不調
//         //error_log(print_r('500'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = $code;
//         continue;
//     }
//     if ($code === 404) {
//         // コンテンツが見つからない
//         //error_log(print_r('404'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = $code;
//         continue;
//     }
//     if ($code >= 401) {
//         // basic認証の失敗
//         //error_log(print_r('401'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = $code;
//         continue;
//     }
//     if ($code >= 400) {
//         // 何かしら問題のあるアクセスをしている
//         //error_log(print_r('400'),"3","/home/web-practice-rin/www/debug.log");

//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = $code;
//         continue;
//     }
//         $json['data']['org'][$i]['url'] = $url_list[$i];
//         $json['data']['org'][$i]['code'] = $code;
// }


// for ($i = 0; $i < $count_json_biz; ++$i) {
//     curl_setopt($ch, CURLOPT_URL, "$url_list_2[$i]");
//     $result = curl_exec($ch);
//     $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

//     if(preg_match('/password-protected/',$url)){
//         // コンテンツが見つからない
//         //error_log(print_r('404'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = 401;
//         continue;
//     }
//     if ($result === false || $code >= 500) {
//         // 通信障害，またはサーバが不調
//         //error_log(print_r('500'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = $code;
//         continue;

//     }
//     if ($code === 404) {
//         // コンテンツが見つからない
//         //error_log(print_r('404'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = $code;
//         continue;
//     }
//     if ($code >= 401) {
//         // basic認証の失敗
//         //error_log(print_r('401'),"3","/home/web-practice-rin/www/debug.log");
//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = $code;
//         continue;
//     }
//     if ($code >= 400) {
//         // 何かしら問題のあるアクセスをしている
//         //error_log(print_r('400'),"3","/home/web-practice-rin/www/debug.log");

//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = $code;
//         continue;
//     }
//         $json['data']['biz'][$i]['url'] = $url_list_2[$i];
//         $json['data']['biz'][$i]['code'] = $code;
// }
// $json = json_encode($json);

// header('Content-Type: application/json; charset=utf-8');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$json = 'gheoghaihgia ||||||';
$fp = fopen("./hoge.json", "a+");
    fputs($fp, $json );
    fclose($fp);
?>
 

</body>
</html>


<?php
/*
$slackApiKey = 'xoxp-3670473625-339475712323-489405482384-8a4d379cf9359e0a4818e5ac5b03dfae';
$url = "https://slack.com/api/chat.postMessage?token=${slackApiKey}&channel=request_check&text=```${urL_status[i]}```&as_user=true";
file_get_contents($url);
*/
?>
