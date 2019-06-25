<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Redirection in Progress...</title>
<style>
html,body {margin:0;padding:0;color:#000;height: 100%;overflow: hidden;}
body {background: #ededed;overflow-x: hidden;}
body:after {overflow: hidden;content:'';top:0;transform:translateX(100%);width:50%;height:110%;position: absolute;z-index:1;animation: slide 2s 1 0s;
background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.8) 50%, rgba(128,186,232,0) 99%, rgba(125,185,232,0) 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(50%,rgba(255,255,255,0.8)), color-stop(99%,rgba(128,186,232,0)), color-stop(100%,rgba(125,185,232,0)));
background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.8) 50%,rgba(128,186,232,0) 99%,rgba(125,185,232,0) 100%);
background: -o-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.8) 50%,rgba(128,186,232,0) 99%,rgba(125,185,232,0) 100%);
background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.8) 50%,rgba(128,186,232,0) 99%,rgba(125,185,232,0) 100%);
background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0.8) 50%,rgba(128,186,232,0) 99%,rgba(125,185,232,0) 100%); /* W3C */
}
#container {margin: 4% auto;width: 420px;text-align: center;color: #8E9089;overflow-x: hidden;}
@keyframes slide {
	0% {transform:translateX(-100%);}
	100% {transform:translateX(100%);}
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="robots" content="noindex, follow">
</head>
<body>
	<div id="container">
		<div id="content">You are being redirected to</div>
		<p><?php echo date("m/d/Y h:i:s a", time()); ?> | <?PHP echo($referral_uri); ?></p>
	    <script>
	      function hndlr(response) {
	      for (var i = 0; i < response.items.length; i++) {
	        var item = response.items[i];
	        // in production code, item.htmlTitle should have the HTML entities escaped.
	        document.getElementById("content").innerHTML += "<br>" + item.link;
					window.location.replace(item.link);
	      }
	    }
	    </script>
	    <script src="https://www.googleapis.com/customsearch/v1/siterestrict?key=<INSERT-GOOGLE-API-KEY-HERE>&cx=016915822800209588117:65i6qz9rv3u&q=<?php echo $_GET['q']; ?>&num=1&callback=hndlr">
	    </script>
	</div><!-- end container -->
</body>
</html>
