<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rover</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

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
    <link href="dashboard.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">Rover</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="loading2.php">Sign out</a>
        </li>
      </ul>
	</nav>

	<div class="container-fluid">
	  <div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
		  <div class="sidebar-sticky pt-3">
			<ul class="nav flex-column">
			  <li class="nav-item">
				<a class="nav-link" href="dashboard.php">
				  <span data-feather="home"></span>
				  Home
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="camera.php">
				  <span data-feather="video"></span>
				  Camera <span class="sr-only">(current)</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="photo.php">
				  <span data-feather="file"></span>
				  Photo
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="map.php">
				  <span data-feather="map"></span>
				  Map
				</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
		  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h1">即時影像</h1>
		  </div>
		  <style type="text/css">
		    #screen{
			  position:relative;
			  display:inline-block;
			  left:200px;
			  top:50px;
			}
		  </style>
		  <div id="screen">
		    <iframe src="http://140.129.18.218:8080" width="660" height="540" frameborder="0" scrolling="no"></iframe>
		  </div>
		  <style type="text/css">
		    #sitebody{
			  position:relative;
			  display:inline-block;
			  left:350px;
			  bottom:80px;
			}
		  </style>
		  <div id="sitebody">
		    <form id="selection1" method="get">
		      <div style="font-size:30px">
			    <input type="radio" name="switch" value="1" style="width:20px;height:20px;" checked/>手動
			    <input type="radio" name="switch" value="0" style="width:20px;height:20px;"/>自動
			  </div>
		    </form>
		    <script>
			  $('#selection1').change
			  (
				  function() 
				  {
					  var selected_value1 = $("input[name='switch']:checked").val();

					  $.ajax
					  ( 
						  {
							  url: "new.php",
							  dataType : "html",
							  method: "POST",
							  cache: false,
							  data: { selected_value1 : selected_value1 },

							  success: function(response1)
							  {
							     var test1 = "<p>"+response1+"</p>";
							     $("h3").html(test1);
							  }
						  }
					  );
				  }
			  );
		    </script>
		    <form id="selection" method="get">
		      <div style="font-size:30px">
		        請選擇控制項目:<br>
			    <input type="radio" name="control" value="0,0" style="width:20px;height:20px;" checked/>停止<br>
			    <input type="radio" name="control" value="50,0" style="width:20px;height:20px;"/>前進
			    <input type="radio" name="control" value="-50,0" style="width:20px;height:20px;"/>後退<br>
			    <input type="radio" name="control" value="50,-100" style="width:20px;height:20px;"/>左前進
			    <input type="radio" name="control" value="50,100" style="width:20px;height:20px;"/>右前進<br>
			    <input type="radio" name="control" value="-50,-100" style="width:20px;height:20px;"/>左後退
			    <input type="radio" name="control" value="-50,100" style="width:20px;height:20px;"/>右後退<br>
			  </div>
		    </form>
		    <div id="target">
			  <h3>Rover Status</h3>
		    </div>
		    <script>
			  $('#selection').change
			  (
				  function() 
				  {
					  var selected_value = $("input[name='control']:checked").val();

					  $.ajax
					  ( 
						  {
							  url: "new.php",
							  dataType : "html",
							  method: "POST",
							  cache: false,
							  data: { selected_value : selected_value },

							  success: function(response)
							  {
							     var test1 = "<p>"+response+"</p>";
							     $("h3").html(test1);
							  }
						  }
					  );
				  }
			  );
		    </script>
		  </div>
		</main>
	  </div>
	</div>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="dashboard.js"></script>
  </body>
</html>
