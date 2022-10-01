<?php
echo "simple script by https://github.com/khairulkrhacx";
echo "[?] Get Instagram Video Downloader from sssinstagram.com\n";
echo "[*] NOTE: Jika terdapat error \n 1.mungkin cookies dan xsrf-token nya perlu di perbaharui. [ last update 02-10-2022 ] \n 2.silahkan di run ulang script nya.\n\n";
echo "[!] Masukan Link video. \n";
$linkvideo = trim(fgets(STDIN));


$body = "{\"link\":\"$linkvideo\",\"token\":\"\"}";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://sssinstagram.com/id/request');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$headers = array();
$headers[] = 'Host: sssinstagram.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: id,en-US;q=0.7,en;q=0.3';
// $headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Content-Type: application/json;charset=utf-8';
$headers[] = 'X-Xsrf-Token: eyJpdiI6ImlpL1pJUUMwZTZxQzY3U2VLRE9DZFE9PSIsInZhbHVlIjoiZHppeHhEc1IrczhXQjdmbHVrWk5nczFzbnM1c3lEL3hSRW1Ra0RBQ095bVlsSExmcmlxeUpBSWZnODNTbVRRSUp4Y2Vzd1hpQlhzVmNBSk1kalRCNmZ5a0RhUEJEa0FvZjQyeEZBVDlvK04ySW53cFRrams4MHhrOWhIbHRPejkiLCJtYWMiOiJmMDFiM2Q4OTQ3YmMwNTVhYzBmZjZiNTdlNDAyOGVjOTkwY2JhNjgyOWQyYmZhMjZiZGE3Yjc4MjZiZjg4Njc5IiwidGFnIjoiIn0=';
$headers[] = 'Content-Length: 62';
$headers[] = 'Origin: https://sssinstagram.com';
$headers[] = 'Connection: close';
$headers[] = 'Cookie: _ga_90WCZ6NHEE=GS1.1.1664664558.19.1.1664664781.0.0.0; _ga=GA1.2.1020265283.1662008704; XSRF-TOKEN=eyJpdiI6ImlpL1pJUUMwZTZxQzY3U2VLRE9DZFE9PSIsInZhbHVlIjoiZHppeHhEc1IrczhXQjdmbHVrWk5nczFzbnM1c3lEL3hSRW1Ra0RBQ095bVlsSExmcmlxeUpBSWZnODNTbVRRSUp4Y2Vzd1hpQlhzVmNBSk1kalRCNmZ5a0RhUEJEa0FvZjQyeEZBVDlvK04ySW53cFRrams4MHhrOWhIbHRPejkiLCJtYWMiOiJmMDFiM2Q4OTQ3YmMwNTVhYzBmZjZiNTdlNDAyOGVjOTkwY2JhNjgyOWQyYmZhMjZiZGE3Yjc4MjZiZjg4Njc5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlR1WWZkZVVLSUp6VGFza1dQdGhUNlE9PSIsInZhbHVlIjoicHBUczJ2K3NZcm1WL2FWQ2dyU1dNYUNleGxLRU9uRGxWdFppemVuZHhyMVhyYndtdGNOcENrY1E1My9KZDg4UDUrckpyUXhRUFBuMWR1cEdJZVduVFJMSnVWUUVVVHpOM2x3L0ZGYUQ2MTZ2ZzhMc21MTERTSTNQZ1kyMk8va2ciLCJtYWMiOiJlMTY5N2Y1MTY2MDMwYmZkODMwNzYyM2NiNDA4YWRkZTdjODU1NzUwNTQxY2RmYzQyMjExMzAwOTM3YmVmOTUwIiwidGFnIjoiIn0%3D; _gid=GA1.2.1842436311.1664664559; __cf_bm=KR_Srn.iDVRaR9UuqSam8KZEgI1DKIGwWdGdR_qKcPs-1664664557-0-AUGRSerL9nlfxvP6NDaQy43H9u1yRKpBaShq2Bx5o7hYUDfIca4jpJiPaF0+4AFBDITtRmUYLJYwxRRwYOr89+AinGc68FAJsuTsCgaiFxbB6K4+jnrU8CTBv3hTGTbpPR4AiWu4zbKdvVjbJ7lgpis=; _gat_UA-3524196-4=1';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

$ambilkata = explode('"video_url":"', $result);
$pecah = explode('"}', $ambilkata[1]);
$hasil = $pecah[0];
$title = preg_replace('/\\\\/', '', $hasil);

echo "Loading .. \n";
sleep(2);
echo "Menunggu link download .. \n";
echo "$title"; 
curl_close($ch);

?>
