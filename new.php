<!DOCTYPE html>
<html>
<head>
	<title>	
	</title>
</head>
<body>


<script>
document.cookie = "appName="+navigator.appName;
document.cookie = "appVersion="+navigator.appVersion;
document.cookie = "platform="+navigator.platform;
document.cookie = "appCodeName="+navigator.appCodeName;
document.cookie = "product="+navigator.product;
document.cookie = "productSub="+navigator.productSub;
document.cookie = "language="+navigator.language;
document.cookie = "userAgent="+navigator.userAgent;
document.cookie = "vendor="+navigator.vendor;
document.cookie = "vendorSub="+navigator.vendorSub;
document.cookie = "width="+screen.width;
document.cookie = "height="+screen.height;
document.cookie = "innerWidth="+window.innerWidth;
document.cookie = "innerHeight="+window.innerHeight;
document.cookie = "offsetWidth="+document.body.offsetWidth;
document.cookie = "offsetHeight="+document.body.offsetHeight;
</script>




<?php
include("geoiploc.php"); 
		
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$user_ip = getUserIP();

function getisp($ip='') {
   if ($ip=='')    $ip = '45.43.30.221';
   $ipjson= json_decode(file_get_contents('http://ip-api.com/json/'.$ip));
   // $url   
   $myisp = $ipjson->isp;
   // echo $myisp; 
   // echo json_decode($ipjson);
   // var_dump($ipjson);
   // $longisp = @gethostbyaddr($ip);
   // $isp = explode('.', $longisp);
   // $isp = array_reverse($isp);
   // $tmp = $isp[1];
   // if (preg_match("/\<(org?|com?|net)\>/i", $tmp)) {
   //     $myisp = $isp[2].'.'.$isp[1].'.'.$isp[0];
   // } else {
   //     $myisp = $isp[1].'.'.$isp[0];
   // }
   // if (preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp))
   //    return 'ISP lookup failed.';
   return $myisp;
}




 $fi=fopen("archivo11.txt","a")
or die("problemas al crear archivo");
 
 fwrite($fi,"Datos:");
 fwrite($fi,"\n");
 fwrite($fi,"appname: ");
 fwrite($fi,$_COOKIE['appName']);
 fwrite($fi,"\n");
 fwrite($fi,"appVersion: ");
 fwrite($fi,$_COOKIE['appVersion']);
 fwrite($fi, "\n");
 fwrite($fi,"platform: ");
 fwrite($fi,$_COOKIE['platform']);
 fwrite($fi, "\n");
 fwrite($fi,"appCodeName: ");
 fwrite($fi,$_COOKIE['appCodeName']);
 fwrite($fi, "\n");
 fwrite($fi,"product: ");
 fwrite($fi,$_COOKIE['product']);
 fwrite($fi, "\n");
 fwrite($fi,"productSub: ");
 fwrite($fi,$_COOKIE['productSub']);
 fwrite($fi, "\n");
 fwrite($fi,"language: ");
 fwrite($fi,$_COOKIE['language']);
 fwrite($fi, "\n");
 fwrite($fi,"userAgent: ");
 fwrite($fi,$_COOKIE['userAgent']);
 fwrite($fi, "\n");
 fwrite($fi,"vendor: ");
 fwrite($fi,$_COOKIE['vendor']);
 fwrite($fi, "\n");
 fwrite($fi,"width: ");
 fwrite($fi,$_COOKIE['width']);
 fwrite($fi, "\n");
 fwrite($fi,"height: ");
 fwrite($fi,$_COOKIE['height']);
 fwrite($fi, "\n");
 fwrite($fi,"innerWidth: ");
 fwrite($fi,$_COOKIE['innerWidth']);
 fwrite($fi, "\n");
 fwrite($fi,"innerHeight: ");
 fwrite($fi,$_COOKIE['innerHeight']);
 fwrite($fi, "\n");
 fwrite($fi,"offsetWidth: ");
 fwrite($fi,$_COOKIE['offsetWidth']);
 fwrite($fi, "\n");
 fwrite($fi,"offsetHeight: ");
 fwrite($fi,$_COOKIE['offsetHeight']);
 fwrite($fi, "\n");
 fwrite($fi,"ip: ");
 fwrite($fi,$user_ip);
 fwrite($fi, "\n");
   fwrite($fi,"date: ");
 fwrite($fi,date("F j, Y, g:i a"));
 fwrite($fi, "\n");
  fwrite($fi,"country: ");
 fwrite($fi,getCountryFromIP($user_ip, " NamE"));
 fwrite($fi, "\n");
   fwrite($fi,"isp: ");
 fwrite($fi,getisp($user_ip));
 fwrite($fi, "\n");

 fwrite($fi, "--------------------------------------------------- \n\n");
 fclose($fi);
?> 
</body>
</html>
