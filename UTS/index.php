<?php 
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
 ?>

 <!DOCTYPE html>
 <html long= "en">
<style>
	.mainmenubtn {
    background-color: skyblue;
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.mainmenubtn:hover {
    background-color: blue;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: skyblue;
    min-width: 200px;
}
.dropdown-child a {
    color: blue;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Update Data Covid</title>
 	<link rel="shortcut icon" href="indonesia.svg" type="image/x-icon">
 	<!-- boostrap -->
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 	<!-- Fontowesome -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 </head>

 <body>

 	<nav class="navbar navbar-expand navbar-dark bg-dark">
 		<div class="nav navbar-nav">
 			<a class="nav-item- nav-link active" href="a"><i class="fa fa-fw fa-home"></i> Home <span class="ir-only"></span></a>
 		</div>
 	</nav>

 	<divc class="container">
 		<div class="row mt-4">
 			<!-- alert -->
 			<div class="col-md-12">
 				<div class="alert alert-primary" role="alert">
 					<strong>Update</strong> Data Virus Corona di Indonesia <br>
 					<strong>Nama Operator : </strong> Nanda Risky Maulana <br>
 					<strong>NIM : </strong> 181011400851
 				</div>
 			</div>

 			<div class="col-md-3">
 				<div class="card badge-primary p-3 mb-5 shadow rounded">
 					<div class="card-body">
 						<h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Positif</h4>
 						<p class="card-text text-center"> <?= $data[0]['positif'] ;?></p>
 					</div>
 				</div>
 				
 			</div>

 			<div class="col-md-3">
 				<div class="card badge-warning p-3 mb-5 shadow rounded">
 					<div class="card-body">
 						<h4 class="card-title text-center"><i class="fa fa-grin-alt"></i>Dirawat</h4>
 						<p class="card-text text-center"> <?= $data[0]['dirawat'] ;?></p>
 					</div>
 				</div>
 				
 			</div>

  			<div class="col-md-3">
 				<div class="card badge-success p-3 mb-5 shadow rounded">
 					<div class="card-body">
 						<h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Sembuh</h4>
 						<p class="card-text text-center"> <?= $data[0]['sembuh'] ;?></p>
 					</div>
 				</div>
 				
 			</div>

  			<div class="col-md-3">
 				<div class="card badge-danger p-3 mb-5 shadow rounded">
 					<div class="card-body">
 						<h4 class="card-title text-center"><i class="fa fa-frown-open"></i>Meninggal</h4>
 						<p class="card-text text-center"> <?= $data[0]['meninggal'] ;?></p>
 					</div>
 				</div>
 				
 			</div>
 		</div>

 		<div class="dropdown">
  <button class="mainmenubtn">DAFTAR WILAYAH</button>
  <div class="dropdown-child">
    <a href="https://corona.jakarta.go.id/id/data-pemantauan">DKI JAKARTA</a>
    <a href="https://pikobar.jabarprov.go.id">JAWA BARAT</a>
    <a href="https://www.bantenprov.go.id/covid-19">BANTEN</a>
    <a href="https://corona.jatengprov.go.id">JAWA TENGAH</a>
  </div>
</div>

 			<div class="row justify-content-center">
 				<div class="col-4">
 					<div class="text-center">
 						<a href="https://kawalcovid19.id/" target="_blank" class="btn btn-primary">Selengkapnya &raquo;</a>
 					</div>
 				</div>
 			</div>
 		</div>

 			<!-- footer -->
 			<footer>
 				<div class="card-footer bg-dark text-light fixed-bottom">
 					<div class="container my-auto">
 						<span>Made with &hearts; by <a href="" target="_blank">UNPAM</a></span>
 					</div>
 				</div>
 			</footer>

 </body>
 </html>