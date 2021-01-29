<?php
echo "\n\n\n";
system("clear");
$banner="
\033[1;31m
 ____                  _ _
/ ___|  __ _ _ __   __| (_)
\___ \ / _` | '_ \ / _` | |
 ___) | (_| | | | | (_| | |
|____/ \__,_|_| |_|\__,_|_|
\033[1;31m
__  __     ____             _
\ \/ /    |  _ \  __ _ _ __| | __
 \  /_____| | | |/ _` | '__| |/ /
 /  \_____| |_| | (_| | |  |   <
/_/\_\    |____/ \__,_|_|  |_|\_\
 ";
 
 
 
 echo $banner;
 echo"
(========[]:::::::::::::::::::::::::::::::::::::[]========)
Creator : Muhamad Sandi Pratama
Youtube channel : Sandi X-Dark
City : Pemalang
Province : Jawa Tengah
Country : Indonesia
(========[]:::::::::::::::::::::::::::::::::::::[]========)


                   all script : https://semawur.com/9shwj
                    \033[1;34m~Don't Forget To Like And Subscribe~
\n\n";


include "cfg.php";
while(true){
$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);

$bb= explode('"key":"daily_read_',$list)[1];
$bb= explode('",',$bb)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$bb."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";
echo "\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);


$dd= explode('"key":"daily_read_',$list)[2];
$dd= explode('",',$dd)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$dd."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";
echo "\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);

$jj= explode('"key":"daily_read_',$list)[3];
$jj= explode('",',$jj)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$jj."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";
echo "\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);

$uu= explode('"key":"daily_read_',$list)[4];
$uu= explode('",',$uu)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$uu."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";
echo "\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);

$gg= explode('"key":"daily_read_',$list)[5];
$gg= explode('",',$gg)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$gg."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";
echo "\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$list= curl_exec($ch);

$io= explode('"key":"daily_read_',$list)[6];
$io= explode('",',$io)[0];

// data misi2 harian

$data='{"read_time":181}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/done/daily_read_".$io."?".$Manifest."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$misi= curl_exec($ch);
$misi= json_decode($misi);
$err_tips= $misi->err_tips;

echo "\033[1;36m$err_tips\n";

// data bukak petih

$data='{}';

$headers=array(
"Content-Length:".strlen($data),
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608450702003",
"User-Agent:".$Useragent,
"Content-Type: application/json; charset=UTF-8"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/open_treasure?locale=".$petih."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$peti= curl_exec($ch);
$peti= json_decode($peti);
$err_tips= $peti->err_tips;

echo "\033[1;31mPeti: $err_tips\n";
sleep(2);

$headers=array(
"Cookie: excgd=".$Excgd,
"X-Tt-Token:".$token,
"X-SS-REQ-TICKET: 1608423545151",
"User-Agent:".$Useragent,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://i.sgsnssdk.com/luckycat/spicy/v1/task/page?locale=".$id."");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$kk= curl_exec($ch);
$kk= json_decode($kk);
$score_balance= $kk->data->income_data->score_balance;
	
echo "\033[1;31m[Balance]: $score_balance\n";

// data detik 
echo "\r                                                \r";
for ($×=3600;$×>0;$×--){
echo "\r[\033[1;31m=[\033[1;33mBuka \033[1;32mPeti \033[1;36mUang 1 \033[1;33mjam \033[1;37mTanpa Batas]: [$×] ";
sleep(1);
}
echo "\r                                                \r";
}