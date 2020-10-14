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
				<a class="nav-link" href="camera.php">
				  <span data-feather="video"></span>
				  Camera
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="photo.php">
				  <span data-feather="file"></span>
				  Photo <span class="sr-only">(current)</span>
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
			<h1 class="h1">照片</h1>
		  </div>
		  <div style="font-size:20px">
		  <?php header('refresh: 30;url="photo.php"') ?>
		  <?php
			 $folder = "Pic";
			 $files = array();
			 $handle = opendir($folder);
			 while(($file=readdir($handle))!==false){
			   if($file!='.' && $file!='..'){
				 $hz=strstr($file,".");
				   if($hz==".png") $files[] = $file; 
			   }
			 }
			 $filesTemp = array();
			 if($files){
			   foreach($files as $k=>$v){
				 array_unshift($filesTemp,$v);
			   }
			 }
			 $count = 0;
			 if($files){
			   foreach($filesTemp as $k=>$v){
				 echo'<p style="display:inline-block">';
				 if($count == 9) break;
				 echo '<img widht=320 height=240 src="'.$folder.'/'.$v.'">';
				 echo substr($v,0,-4);
				 if($count == 3 && $count == 6);
				 $count++;
				 echo'</p>';
			   }
			 }
		  ?>
		  </div>
		</main>
	  </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	  <script src="dashboard.js"></script>
  </body>
</html>
