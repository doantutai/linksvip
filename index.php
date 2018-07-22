<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Link Fshare | Getlink VIP Fshare.vn | Tải nhanh Fshare | linksvip fshare</title>
    <meta name="description" content="Get Link VIP Fshare.vn hoàn toàn miễn phí, không quảng cáo, không short link, lấy link vip tải nhanh fshare trong vòng 5s" />
    <meta property="og:image" content="https://www.fshare.vn/images/sharing.jpg" />
    <link rel="shortcut icon" href="https://www.fshare.vn/images/favicon.png" title="Favicon" />
</head>
<body>
  <form id="diem" method="POST">
    <input type="text" name="link" required/>
    <button type="submit" name="sb">Getlink</button>
  </form>

<?php
if(isset($_POST['sb']))
{
    $link = "link=".$_POST['link']."&pass=undefined&hash=&captcha=";
    $URL = 'https://linksvip.net/GetLinkFs';

function file_get_contents_curl($url, $retries=5, $post)
{
    $ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.82 Safari/537.36';
    if (extension_loaded('curl') === true)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
//proxy suport

        curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: linksvip.net',
    'Accept: application/json, text/javascript, */*; q=0.01',
    'Origin: https://linksvip.net',
    'X-Requested-With: XMLHttpRequest',
    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'DNT: 1',
    'Referer: https://linksvip.net/',
    'Cookie: __zlcmid=n3hR9IAbd8RSN0;; user=itvtdsnb%40gmail.com; pass=cdf3440b07c7c26b9f93c5e946a43d55; __zlcmid=k0gyT6eoKkbPCg; PHPSESSID=vnnjgcdcpq7mi6utvkf117lq90; SL_GWPT_Show_Hide_tmp=1; SL_wptGlobTipTmp=1'));
        $result = curl_exec($ch);
        curl_close($ch);
    }
    else
    {
        $result = file_get_contents($url);
    }        
    if (empty($result) === true)
    {
        $result = false;
       if ($retries >= 1)
        {
            sleep(1);
            return file_get_contents_curl($url, --$retries);
        }
    }    
    return $result;
}
  $result = preg_replace( '/[^[:print:]\r\n]/', '',file_get_contents_curl($URL, 5, $link));
  $echo = json_decode($result,TRUE);
    if ($echo['trangthai'] == 1) {
         echo ('Tên File: '.$echo['filename']); 
  ?>
  <br><?php echo ('Link Download: '.$echo['linkvip']); 

  } elseif ($echo['trangthai'] == 0) {
          echo $echo['loi'];
  }
}
 ?>   
</body>
</html>
