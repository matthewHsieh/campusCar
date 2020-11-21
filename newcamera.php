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
	  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">安全巡邏車</a>
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
				<a class="nav-link active" href="newcamera.php">
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
			  left:50px;
			  top:50px;
			}
		  </style>
		  <div id="screen">
		    <iframe src="http://140.129.18.218:8080" width="660" height="540" frameborder="0" scrolling="no"></iframe>
		  </div>
		  <style type="text/css">
		    #sitebody2{
			  position:relative;
			  display:inline-block;
			  left:228px;
			  bottom:20px;
			}
		  </style>
		  <div id="sitebody2">
			<form action = "judge_level_up.php" method = "post" target = "nm_iframe">
			  <label><input type = "submit" id = "id_submit" name = "nm_submit" value = "" style="display:none"/>
			  <img src="zumoup2.png" style="width:90px;height:90px;"></label><br>
			</form>
			<form action = "judge_level_down.php" method = "post" target = "nm_iframe1">
			  <label><input type = "submit" id = "id_submit" name = "nm_submit1" value = "" style="display:none"/>
			  <img src="zumodown2.png" style="width:90px;height:90px;"></label>
			</form>
			<iframe id = "myIframe" name = "nm_iframe" style = "display:none;"></iframe>
			<iframe id = "myIframe1" name = "nm_iframe1" style = "display:none;"></iframe>
		  
		  
		  
		  
		    
		  </div>
		  <style type="text/css">
		    #sitebody{
			  position:relative;
			  display:inline-block;
			  left:40px;
			  bottom:250px;
			}
		  </style>
		  <div id="sitebody">
			<form id="selection" method="get">
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:40px;height:40px;"></label>
			  <label><input type="radio" name="control" value="e" /><img src="on.png" style="width:40px;height:40px;"></label>
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:30px;height:30px;"></label>
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:30px;height:30px;"></label>
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:30px;height:30px;"></label>
			  <label><input type="radio" name="control" value="q" /><img src="off.png" style="width:40px;height:40px;"></label><br>
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:90px;height:90px;"></label>
			  <label><input type="radio" name="control" value="w" /><img src="zumoup2.png" style="width:90px;height:90px;"></label><br>
			  <label><input type="radio" name="control" value="a" /><img src="zumoleft2.png" style="width:90px;height:90px;"></label>
		      <label><input type="radio" name="control" value="x" /><img src="zimoc.png" style="width:90px;height:90px;"></label>
			  <label><input type="radio" name="control" value="d" /><img src="zumoright2.png" style="width:90px;height:90px;"></label><br>
			  <label><input type="radio" name="control" /><img src="empty.png" style="width:90px;height:90px;"></label>
			  <label><input type="radio" name="control" value="s" /><img src="zumodown2.png" style="width:90px;height:90px;"></label>
			</form>
			<style type="text/css">
		      [type=radio] { 
			    position: absolute;
			    opacity: 0;
			    width: 0;
			    height: 0;
			  }
		    </style>
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
