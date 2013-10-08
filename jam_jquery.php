<html>
<head>
<link rel="stylesheet" href="main.css" type="text/css" />
<script src="jquery-1.4.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function() {
	     $('#divjam').load('jam.php?acak='+ Math.random());
    }, 1000);
  });
</script>
</head>
<body>
<div class="demo" style="width: 250px;" align="center">
<div id="divjam"></div>
</div>
</body>
</html>
