<?php
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.1.4472.202 Mobile Safari/537.36";
$van = "$do ➜$luc";
$k = "0";
$vt="0";
$banner = "
\033[1;95m╔════════════════════════════════════════════════════════╗
\033[1;95m║ \033[1;96m███████╗\033[1;91m███╗   ██╗  \033[1;93m║ \033[1;36m ✍ Facebook.com/sangnguyen.user\033[1;95m  ║
\033[1;95m║ \033[1;96m██╔════╝\033[1;91m████╗  ██║  \033[1;93m║\033[1;33m  ☎ Zalo : 0376942586            \033[1;95m ║
\033[1;95m║ \033[1;96m███████╗\033[1;91m██╔██╗ ██║  \033[1;93m║\033[0;94m  ♥ MOMO : 0376942586         \033[1;95m    ║
\033[1;95m║ \033[1;96m╚════██║\033[1;91m██║╚██╗██║  \033[1;93m║  \033[1;92m☭ Youtube : Sáng Developer      \033[1;95m║
\033[1;95m║ \033[1;96m███████║\033[1;91m██║ ╚████║ \033[1;93m ║\033[1;97m  ♕ Tool Auto CronJob1s \033[1;95m          ║
\033[1;95m║ \033[1;96m╚═╝  ╚═╝\033[1;91m╚═╝  ╚═══╝ \033[1;93m ║ \033[0;31m ⚑ Bản Quyền By Nguyễn Văn Sáng\033[1;95m  ║
\033[1;95m║ \033[1;92m  © 2022 - Thiết Kế Và Vận Hành Bởi Nguyễn Văn Sáng\033[1;95m    ║
\033[1;95m╚════════════════════════════════════════════════════════╝\n";
function info($time) { $chaynoti = strlen($noti); for ($x = 0; $x < $chaynoti; $x++) { echo $noti[$x]; usleep($time); } } function loading($time) { for ($x = 0; $x <= 28; $x++) { echo "\033[1;90m▬"; usleep($time); echo "\033[1;96m▬"; usleep($time); } } 
@system('clear');
echo $banner;

loading (5000);
echo "\n";
$a = "\033[1;95m<>";
echo $a."Nhập Link Cron : ";
$web = trim(fgets(STDIN));
loading (5000);
echo "\n";
echo $a."Bạn Muốn Sau Bao Nhiêu Giây Cron Chạy 1 Lần : ";
$dl = trim(fgets(STDIN));
while(true){
    $API = json_decode(requests($web), true);
    print_r($API);
    delay($dl);
}
function delay ($dl){
    for($tt = $dl ;$tt>= 1;$tt--){
      echo "\r\033[1;93m   Sẽ Chạy Job Tiếp Theo Sau \033[1;91m <>       \033[1;92m LO      \033[1;91m | $tt | ";
      usleep(150000);
      echo "\r\033[1;91m   Sẽ Chạy Job Tiếp Theo Sau \033[0;33m   <>     \033[0;37m LOA     \033[0;31m | $tt | ";
      usleep(150000);
      echo "\r\033[1;92m    Sẽ Chạy Job Tiếp Theo Sau \033[0;33m     <>   \033[0;37m LOAD    \033[0;31m | $tt | ";
      usleep(150000);
      echo "\r\033[1;94m    Sẽ Chạy Job Tiếp Theo Sau \033[0;33m       <> \033[0;37m LOADI   \033[0;31m | $tt | ";
      usleep(150000);
      echo "\r\033[1;95m   Sẽ Chạy Job Tiếp Theo Sau \033[0;33m        <>\033[0;37m LOADIN  \033[0;31m | $tt | ";
      usleep(150000);
      echo "\r\033[1;95m    Sẽ Chạy Job Tiếp Theo Sau \033[0;33m        <>\033[0;37m LOADING \033[0;31m | $tt | ";
      usleep(150000);
      echo "\r\033[1;95m    Sẽ Chạy Job Tiếp Theo Sau \033[0;33m        <>\033[0;37m LOADING.\033[0;31m | $tt | ";
      usleep(150000);}
    echo "\r\e[1;95m         <> Vui Lòng Chờ <>        \r";
    }

function requests($url){
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36",
        CURLOPT_ENCODING => TRUE,
        CURLOPT_HEADER => FALSE,
    ));
    $send = curl_exec($ch);
    curl_close($ch);
    return $send;
}
