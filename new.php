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
 fwrite($fi, "--------------------------------------------------- \n\n");
 fclose($fi); 
?> 

</body>
</html>


