<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="connect.php">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputUser" class="sr-only">Username</label>
      <input type="text"  name="id" id="inputUser" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="pw" id="inputPassword" class="form-control" placeholder="Password" required>
	  <script>
	    function refresh_code(){ document.getElementById("imgcode").src="captcha.php"; }
	  </script>
	  點擊圖片可以更換驗證碼：<p><img id="imgcode" src="captcha.php" onclick="refresh_code()" />
	  <input type="text" name="checkword" size="10" maxlength="10" />
      <p><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></p>
    </form>
  </body>
</html>
