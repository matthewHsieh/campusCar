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
				<a class="nav-link active" href="dashboard.php">
				  <span data-feather="home"></span>
				  Home <span class="sr-only">(current)</span>
				</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="camera.php">
				  <span data-feather="video"></span>
				  Camera
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
			<h1 class="h1">資訊</h1>
		  </div>
		  <div class="card border-dark mb-5" style="max-width: 1500px;">
			<div class="row no-gutters">
			  <div class="col-md-4">
				<img src="Rover.png" class="card-img" alt="...">
			  </div>
			  <div class="col-md-8">
				<div class="card-body">
				  <h2 class="card-title">Rover</h3>
				  <p class="card-text" style="font-size:20px">一台可降低社區人力、設備成本的無障礙車子，全區域時段性跨層樓巡邏並搭配保全進行監控。利用現有的外部裝置來實現手/自動導航與避障、影像身分辨識、即時影像輸出、危險警告並報警等功能並搭配網頁來做一個資訊整合與查看系統來達成無死角安全社區。</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h1">設計理念</h1>
		  </div>
		  <img src="設計理念.png" width="55%" style="display:block; margin:auto;"><br>
		  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h1">特色</h1>
		  </div>
		  <img src="特色.png" width="55%" style="display:block; margin:auto;"><br>
		</main>
	  </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
      <script src="dashboard.js"></script>
  </body>
</html>
