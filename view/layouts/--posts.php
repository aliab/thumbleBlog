<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Tiny Blog</title>
</head>

<body style="background-color:#0CF;">

<div style="width:500px; height:300px;position:absolute;margin:auto;top:0;right:0;bottom:0;
left:0;padding:20px;border-radius:10px;box-shadow:0 3px 10px #000;background-color:#CCC;">

<?php include(VIEW_PATH.$route['controller'].DS.$route['view'].'.php'); ?>

</div>

</body>
</html>