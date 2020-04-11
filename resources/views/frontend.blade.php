<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="{{ asset('style.min.css') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

		<!-- font icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

		{{-- font google --}}
		<link href="https://fonts.googleapis.com/css?family=Allerta&display=swap" rel="stylesheet">

		<link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">

		<title>Toko Online Lara</title>
	</head>
	<body class="bg-white">
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow">
			<!-- brand -->
			<div class="navbar-brand text-center text-allerta font-weight-bolder" href="#">
				<img class="" src="{{ asset('favicon.svg') }}" width="50" height="50" alt="">
				<br>
				Toko Online Lara
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		 
			<div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item ml-3 active font-weight-bolder">
						<a class="nav-link" href="#">
							<i class="zmdi zmdi-hc-lg zmdi-layers"></i> Beranda
						</a>
					</li>
					<li class="nav-item ml-3">
						<a class="nav-link" href="#">
							<i class="zmdi zmdi-hc-lg zmdi-label"></i> Promo
						</a>
					</li>
					<li class="nav-item ml-3">
						<a class="nav-link" href="#">
							<i class="zmdi zmdi-hc-lg zmdi-mall"></i> Produk
						</a>
					</li>
					<li class="nav-item ml-3">
						<a class="nav-link" href="#">
							<i class="zmdi zmdi-hc-lg zmdi-store"></i> Pedagang
						</a>
					</li>
					<li class="nav-item ml-3">
						<a class="nav-link" href="#">
							<i class="zmdi zmdi-hc-lg zmdi-shopping-basket"></i> Keranjang
							<sup class="badge badge-warning text-white">9</sup>
						</a>
					</li>
				</ul>
			  
				<form class="form-inline my-2 my-lg-0 ml-auto">
					<input class="form-control mr-sm-2" type="search" placeholder="Pencarian produk">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
						<i class="zmdi zmdi-hc-lg zmdi-search"></i>&nbsp; Cari
					</button>
				</form>

				<ul class="navbar-nav">
					<li class="nav-item ml-3 active font-weight-bolder">
						<a class="nav-link" href="#">MASUK</a>
					</li>
				</ul>
			</div>
      </nav>
       
      @yield('konten')

      <div class="container-fluid">
         <div class="row bg-white">
            <div class="col-12">
               <div class="container-fluid pt-4 my-md-5 pt-md-2">
                  <div class="row">
                     <div class="col-4">
                        <h5 class="font-weight-bold text-allerta">Tentang</h5>
                        <hr class="bg-success">
                        <small class="d-block mb-3"></small>
                        <div class="row">
                           <div class="col-3 my-auto text-center">
                              <img class="img-fluid" src="{{ asset('favicon.svg') }}" alt="" width="75" height="75">
                           </div>
                           <div class="col-9 text-justify">
                              <small>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, ex. Ipsum,<br>
                                 Email : admin@admin.com<br>
                                 Telepon : 085246805241 <br>
                                 &copy; {{ date('Y') }} Toko Online Lara
                              </small>
                           </div>
                        </div>
                     </div>
                     <div class="col-4">
                        <h5 class="font-weight-bold text-allerta">Bantuan</h5>
                        <hr class="bg-success">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Menjadi Pedagang
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-arrow-right"></i>&nbsp;Link Bantuan
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2">
                        <h5 class="font-weight-bold text-allerta">Menu</h5>
                        <hr class="bg-success">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-layers"></i>&nbsp;Beranda
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-label"></i>&nbsp;Produk
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-store"></i>&nbsp;Pedagang
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-shopping-basket"></i>&nbsp;Keranjang
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-2">
                        <h5 class="font-weight-bold text-allerta">Media Sosial</h5>
                        <hr class="bg-success">
                        <ul class="list-unstyled text-small">
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-facebook"></i>&nbsp;Facebook
                              </a>
                           </li>
                           <li>
                              <a class="text-success" href="#">
                                 <i class="zmdi zmdi-twitter"></i>&nbsp;Twitter
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-instagram"></i>&nbsp;Instagram
                              </a>
                           </li>
                           <li>
                              <a class="text-white" href="#">
                                 <i class="zmdi zmdi-youtube-play"></i>&nbsp;YouTube
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

		<!-- Optional JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>