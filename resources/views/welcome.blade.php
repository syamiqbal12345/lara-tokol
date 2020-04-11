@extends('frontend')

@section('title')
  Welcome
@endsection

@section('konten')
  {{-- block halaman admin --}}
  <div class="index-block mt-100">
    <div class="content py-5">
      <div class="container">
        <div class="row align-items-center py-md-5 py-3">
          <div class="col-md-5 content-left pt-md-0 pt-5 text-left">
            <h1 class="text-allerta">Ayo Berbelanja !</h1>
            <p class="mt-3 mb-md-5 mb-4">
              Making use of the respective industries and our team works. Build an online presence with this professional 
              bootstrap 4 template.
            </p>
            <a href="#login.html" class="btn btn-success btn-theme text-allerta">
              GO SHOPPING &nbsp;
              <i class="zmdi zmdi-shopping-cart"></i>
            </a>
          </div>
          <div class="col-md-7 content-photo mt-md-0 mt-5 text-right">
            <img src="{{ asset('index-block.svg') }}" class="img-fluid" alt="main image">
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>

  {{-- 4 promo terbaru pedagang --}}
  <section>
    <div class="container mt-4">
      <h2 class="text-center">
        <span class="badge badge-warning text-white text-allerta">4 Promo Terbaru</span>
      </h2>
      <div class="row">
        <div class="col-6 mt-2 card-promo">
          <div class="card mb-3 border-white shadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('promo.svg') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-allerta">Nama Pedagang</h5>
                  <p class="card-text text-justify">
                    berlaku tanggal 10 April - 10 Mei 2020
                  </p>
                  <p class="card-text">
                    <a href="" class="text-success">
                      Lihat Promo &nbsp;
                      <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mt-2">
          <div class="card mb-3 border-white shadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('promo.svg') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-allerta">Nama Pedagang</h5>
                  <p class="card-text text-justify">
                    berlaku tanggal 10 April - 10 Mei 2020
                  </p>
                  <p class="card-text">
                    <a href="" class="text-success">
                      Lihat Promo &nbsp;
                      <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mt-2">
          <div class="card mb-3 border-white shadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('promo.svg') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-allerta">Nama Pedagang</h5>
                  <p class="card-text text-justify">
                    berlaku tanggal 10 April - 10 Mei 2020
                  </p>
                  <p class="card-text">
                    <a href="" class="text-success">
                      Lihat Promo &nbsp;
                      <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 mt-2">
          <div class="card mb-3 border-white shadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('promo.svg') }}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-allerta">Nama Pedagang</h5>
                  <p class="card-text text-justify">
                    berlaku tanggal 10 April - 10 Mei 2020
                  </p>
                  <p class="card-text">
                    <a href="" class="text-success">
                      Lihat Promo &nbsp;
                      <i class="zmdi zmdi-arrow-right"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- 4 produk terbaru --}}
  <section class="bg-light">
    <h2 class="text-center">
      <span class="badge badge-danger text-allerta">4 Produk Terbaru</span>  
    </h2>
    <div class="container">
      <div class="d-flex justify-content-around flex-row bd-highlight">
        <div class="p-2 bd-highlight">
          <div class="card shadow" style="width: 18rem;">
            <img src="{{ asset('promo.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-allerta">Nama Produk</h5>
              <p class="card-text">
                <span class="badge badge-danger">5%</span>
                <del>Rp. 150.000</del>
              </p>
              <button type="button" class="btn btn-sm btn-success">
                Rp. 125.000
              </button>
              <a href="#" class="btn btn-sm btn-warning text-white float-right">
                Masuk &nbsp;
                <i class="zmdi zmdi-shopping-basket"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="p-2 bd-highlight">
          <div class="card shadow" style="width: 18rem;">
            <img src="{{ asset('promo.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-allerta">Nama Produk</h5>
              <p class="card-text">
                <span class="badge badge-danger">5%</span>
                <del>Rp. 150.000</del>
              </p>
              <button type="button" class="btn btn-sm btn-success">
                Rp. 125.000
              </button>
              <a href="#" class="btn btn-sm btn-warning text-white float-right">
                Masuk &nbsp;
                <i class="zmdi zmdi-shopping-basket"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="p-2 bd-highlight">
          <div class="card shadow" style="width: 18rem;">
            <img src="{{ asset('promo.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-allerta">Nama Produk</h5>
              <p class="card-text">
                <span class="badge badge-danger">5%</span>
                <del>Rp. 150.000</del>
              </p>
              <button type="button" class="btn btn-sm btn-success">
                Rp. 125.000
              </button>
              <a href="#" class="btn btn-sm btn-warning text-white float-right">
                Masuk &nbsp;
                <i class="zmdi zmdi-shopping-basket"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="p-2 bd-highlight">
          <div class="card shadow" style="width: 18rem;">
            <img src="{{ asset('promo.svg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-allerta">Nama Produk</h5>
              <p class="card-text">
                <span class="badge badge-danger">5%</span>
                <del>Rp. 150.000</del>
              </p>
              <button type="button" class="btn btn-sm btn-success">
                Rp. 125.000
              </button>
              <a href="#" class="btn btn-sm btn-warning text-white float-right">
                Masuk &nbsp;
                <i class="zmdi zmdi-shopping-basket"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection