<?php
system('clear');
error_reporting(0);
echo "\033[1;90m EXCENTIV OFFERWALLS \n\n";


function timer($t){
$p=$t;
for ($x=$p;$x>0;$x--){
$wak = date("[i:s]", $x);
echo "\r                          \r";
echo "\r  \033[1;97mwait \033[1;93m".$wak."      \r";
sleep(1);
}
}


$rd = rand(111,999);
$us = "Mozilla/5.0 (Linux; Android 13) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/114.0.57".$rd.".130 Mobile DuckDuckGo/19 Safari/537.36";
$vvv = $us;

function ofer($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: excentiv.com",
        "content-type: application/x-www-form-urlencoded",
        "user-agent: ".$vvv.""
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function batt($url, $method, $data = null) {
	global $vvv;
    $header = array(
        "Host: coins-battle.com",
        "upgrade-insecure-requests: 1",
        "content-type: application/x-www-form-urlencoded",
        "X-Requested-With: XMLHttpRequest",
        "user-agent: ".$vvv.""
    );
    //$proxy = 'http://jmdzpqpq:imrbe2ogb5md@2.56.119.93:5074';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function curl($url, $method, $data = null) {
	global $vvv;
    $header = array(        
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    $proxy = 'socks5://hqjkjovv:aye8d6syopvg@185.199.229.156:7492';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);       
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function cap($url, $method, $data = null) {
	global $vvv;
    $header = array(        
        "Content-Type: application/json",
        "User-Agent: ".$vvv.""
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, "");
      
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$hh="610";
xx:
if($hh=="651"){exit;}
//$url = "https://excentiv.com/offerwall?userid=87626&key=AB9G6WLUvRfwcI4YtPxF";
$url = "https://excentiv.com/offerwall/?userid=71801&key=7wuDVWJmlOjadzyLYC9E";

$of = ofer($url, 'GET');

sleep(5);
$tokk = explode('"',explode('<button value="https://coins-battle.com?token=', $of)[1])[0];


if($tokk==""){sleep(3);goto xx;}

//$tokkx="MOuQSjbzVpVx7HJveROIEwO99NXcOjyUujVEOBeSTMmUMxVsY0u75LoqTGY2ytT2S7/VEz5t3hGA0dLzzZBezkLwm/JQow6RQUbUAnHQUNE=";
$url = "https://coins-battle.com/?token=".$tokk."";
$bat = batt($url, 'GET');


while(true):
$url = "https://coins-battle.com/game/play/".$hh."";
$btc = batt($url, 'GET');

$sit = explode('"',explode('<div class="g-recaptcha" data-sitekey="', $btc)[1])[0];

$idd = explode('">',explode('<input type="hidden" name="game_id" value="', $btc)[1])[0];
$csf = explode('">',explode('<input type="hidden" name="csrf_token" value="', $btc)[1])[0];
$tim = explode("';",explode("let ctimer = '", $btc)[1])[0];
$lef = explode(' today',explode('<p><b>You have already play ', $btc)[1])[0];

if($idd==""){goto xx;}
//
//sleep(2);

a:
$url = "http://sctg.xyz/in.php?";
$data = array(
    'key' => '3AZ9DG7S3JvRITp5qaovctLQZIesH19w',
    'method' => 'userrecaptcha',
    'googlekey' => $sit,
    'json' => '1',
    'pageurl' => 'https://coins-battle.com/game/claimreward'
);
$datax = http_build_query($data);
$respo = cap($url, 'POST', $datax);

$re = json_decode($respo);
$id = $re->request;
if($id==''){goto a;}
$r = 1;

c:
if($r=="30"){goto a;}
$urlParams = [
    'key' => '3AZ9DG7S3JvRITp5qaovctLQZIesH19w',
    'json' => '1',
    'action' => 'get',
    'id' => $id,
];

$url = "http://sctg.xyz/res.php?" . http_build_query($urlParams);
$res = curl($url, 'GET');
//echo $res;echo"\n";exit;
$re = json_decode($res);
$captcha = $re->request;
$ty = rand(5,15);
if ($captcha == 'CAPCHA_NOT_READY') {          
        for ($x=6;$x>0;$x--){echo "\r   \r";echo "\r   \033[1;97m[".$x."]          \r";sleep(1);}
        $r = $r + 1;
        goto c;
    }
if($captcha=="ERROR_CAPTCHA_UNSOLVABLE"){echo "\r` \033[1;94m Captcha Error.. ".$r." \r"; $r=$r+1;sleep(80);goto a;}


date_default_timezone_set('Asia/Jakarta');
$timestamp = time();
$wak = date("[H:i]", $timestamp);

$url = 'https://coins-battle.com/game/claimreward';
$data = "game_id=".$idd."&csrf_token=".$csf."&captcha=recaptchav2&g-recaptcha-response=".$captcha."";
$las = batt($url, 'POST', $data);

$suc = explode(', to continue earning',explode('<div class="alert text-center alert-success"><i class="fa fa-check-circle"></i> ', $las)[1])[0];
if($suc==""){goto xx;}
echo "\033[1;93mID [".$hh."] \033[1;97m$wak \033[1;92m$suc    \n";
timer($tim);
if($lef=="29/30"){$hh=$hh+1;goto xx;}
endwhile;




