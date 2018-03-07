<!DOCTYPE html>
<html>
<head>
  <title>404 Not Found</title>
  <meta http-equiv="refresh" content="http://saisatgurusolutions.com" />
  <style>
    .container {
      text-align: center;
    }
  </style>
</head>
<body>


<?php
// This results in an error.
// The output above is before the header() call
header('Location: http://saisatgurusolutions.com/');
?>
<div class="container">
  <h1>404 Not Found</h1>
  <div><a id="link" href="http://saisatgurusolutions.com/">Try this link</a></div>
  <div>or</div>
  <div><a href="http://saisatgurusolutions.com/">Back to Home</a></div>
</div>

<script>
  var prefix = "https://github.com/siongui/userpages/blob/master/content";
  var redirect_url = prefix + window.location.pathname;
  var linkElm = document.getElementById("link");
  linkElm.href = redirect_url;
</script>
</body>
</html>