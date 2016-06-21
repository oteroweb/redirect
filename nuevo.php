<!DOCTYPE html>
<html>
<head>
	<title>	
	</title>
</head>
<body>


<script>

//cambiar lenguaje con codigo
// navigator.__defineGetter__('language', function(){
    // return 'foo' // customized user agent
// });

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

var_dump($_COOKIE);

?> </body>
</html>
