<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-10/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 11:01:51 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="./preview.colorlib.com/theme/bootstrap/login-form-10/fonts/icomoon/style.css">
<link rel="stylesheet" href="./preview.colorlib.com/theme/bootstrap/login-form-10/css/owl.carousel.min.css">

<link rel="stylesheet" href="./preview.colorlib.com/theme/bootstrap/login-form-10/css/bootstrap.min.css">

<link rel="stylesheet" href="./preview.colorlib.com/theme/bootstrap/login-form-10/css/style.css">
<title>Login #10</title>
<script nonce="1985ef71-0c2a-4b99-9860-f29a24806f7f">(function(w,d){!function(bt,bu,bv,bw){bt[bv]=bt[bv]||{};bt[bv].executed=[];bt.zaraz={deferred:[],listeners:[]};bt.zaraz.q=[];bt.zaraz._f=function(bx){return function(){var by=Array.prototype.slice.call(arguments);bt.zaraz.q.push({m:bx,a:by})}};for(const bz of["track","set","debug"])bt.zaraz[bz]=bt.zaraz._f(bz);bt.zaraz.init=()=>{var bA=bu.getElementsByTagName(bw)[0],bB=bu.createElement(bw),bC=bu.getElementsByTagName("title")[0];bC&&(bt[bv].t=bu.getElementsByTagName("title")[0].text);bt[bv].x=Math.random();bt[bv].w=bt.screen.width;bt[bv].h=bt.screen.height;bt[bv].j=bt.innerHeight;bt[bv].e=bt.innerWidth;bt[bv].l=bt.location.href;bt[bv].r=bu.referrer;bt[bv].k=bt.screen.colorDepth;bt[bv].n=bu.characterSet;bt[bv].o=(new Date).getTimezoneOffset();if(bt.dataLayer)for(const bG of Object.entries(Object.entries(dataLayer).reduce(((bH,bI)=>({...bH[1],...bI[1]})),{})))zaraz.set(bG[0],bG[1],{scope:"page"});bt[bv].q=[];for(;bt.zaraz.q.length;){const bJ=bt.zaraz.q.shift();bt[bv].q.push(bJ)}bB.defer=!0;for(const bK of[localStorage,sessionStorage])Object.keys(bK||{}).filter((bM=>bM.startsWith("_zaraz_"))).forEach((bL=>{try{bt[bv]["z_"+bL.slice(7)]=JSON.parse(bK.getItem(bL))}catch{bt[bv]["z_"+bL.slice(7)]=bK.getItem(bL)}}));bB.referrerPolicy="origin";bB.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bt[bv])));bA.parentNode.insertBefore(bB,bA)};["complete","interactive"].includes(bu.readyState)?zaraz.init():bt.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="content">
<div class="container">
<div class="row align-items-center">
<div class="col-md-5">
<span class="d-block text-center my-4 text-muted"> or sign in with</span>
<div class="social-login text-center">
<a href="#" class="facebook btn btn-block">
<span class="icon-facebook mr-3"></span>
</a>
<a href="#" class="twitter btn btn-block">
<span class="icon-twitter mr-3"></span>
</a>
<a href="#" class="google btn btn-block">
<span class="icon-google mr-3"></span>
</a>
</div>
</div>
<div class="col-md-2 text-center">
&mdash; or &mdash;
</div>
<div class="col-md-5 contents">
<div class="form-block">
<div class="mb-4">
<?php
  session_start();
  if(isset($_SESSION["message"])){?>  
<div class="alert alert-danger" role="alert">
  Error username or password please try again 
</div>

<?php }?>
<h3>Sign In to <strong>Medinova</strong></h3>
</div>
<form action="../php/controller/login.php" method="post">
<div class="form-group first">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" id="username">
</div>
<div class="form-group last mb-4">
<label for="password">Password</label>
<input type="password" class="form-control" name="password"id="password">
</div>
<div class="d-flex mb-5 align-items-center">
<label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
<input type="checkbox" checked="checked" />
<div class="control__indicator"></div>
</label>
<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
</div>
<input type="submit" name="log-form" value="Log In" class="btn btn-pill text-white btn-block btn-primary">
</form>
</div>
</div>
</div>
</div>
</div>
<script src="./preview.colorlib.com/theme/bootstrap/login-form-10/js/jquery-3.3.1.min.js"></script>
<script src="./preview.colorlib.com/theme/bootstrap/login-form-10/js/popper.min.js"></script>
<script src="./preview.colorlib.com/theme/bootstrap/login-form-10/js/bootstrap.min.js"></script>
<script src="./preview.colorlib.com/theme/bootstrap/login-form-10/js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f26c8c30a8fcd4d","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-10/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 11:01:54 GMT -->
</html>