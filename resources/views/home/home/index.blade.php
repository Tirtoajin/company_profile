<style>
  /* slider */
    .carousel-item{
      height: 100vh;
      min-height: 300px;
      background: no-repeat scroll center scroll;
      -webkit-background-size:cover;
      background-size: cover;
    }
    .carousel-item::before{
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: #000;
      opacity: 0.5;
    }
    .carousel-caption{
      bottom: 180px;
      padding-left: 100px;
      padding-right: 100px;
    }
    .carousel-caption h5{
      font-size: 100px;
      font-weight: 400;
    }
    .carousel-caption p{
      font-size: 15px;
      top: 2rem;
    }
    .carousel-item img {
      object-fit: cover;
      width: 100%;
      height: 100vh;
    }
    @media (max-width: 768px) {
  .carousel-item {
    height: 100vh; /* sesuaikan tinggi menjadi nilai yang lebih kecil untuk layar yang lebih kecil */
  }
}


/* slider*/

/* Styling untuk background-container */
.background-container {
  background-color: #f2f5f4; /* Warna latar belakang */
  padding: 50px; /* Padding untuk memberi ruang pada konten */
  color: black; /* Warna teks agar terlihat di atas gambar latar */
}

/* Styling untuk image-container dan elemen di dalamnya */
.image-container {
  position: relative;
  text-align: center;
  color: white; /* Warna teks pada gambar tetap putih */
}

.image-container img {
  border-radius: 10px; /* Radius sudut untuk gambar */
  transition: transform 0.3s ease; /* Transisi perubahan saat hover */
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Efek gelap pada gambar */
  border-radius: 10px; /* Radius sudut untuk gambar */
  opacity: 1; /* Mulai dengan opasitas nol */
  transition: opacity 0.3s ease; /* Transisi perubahan opasitas */
}

.centered-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1; /* Pastikan teks berada di atas overlay */
  padding: 10px;
  opacity: 1; /* Mulai dengan opasitas satu */
  transition: opacity 0.3s ease; /* Transisi perubahan opasitas */
}

/* Efek hover */
.image-container:hover img {
  transform: scale(1.1); /* Memperbesar gambar saat hover */
}

.image-container:hover .overlay {
  opacity: 0; /* Menampilkan overlay saat hover */
}
.background-container .image-container:hover .centered-text {
      opacity: 1; /* Menampilkan teks saat hover */
    }
</style>
<!--carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
   @foreach ($banner as $key => $item)
       
   
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
      <img src="{{ $item->gambar }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column align-items-center justify-content-center d-md-block">
        <h5>{{ $item->headline }}</h5>
        <p class=>{{ $item->desc }}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--end carousel-->

<!--tentang kami-->
  <div class="container mt-5">
    <div class="text-center">
      <h4>Tentang kami</h4>
        <p> Anda tahu kami? kami akan beri tahu anda</p>
    </div>
    <div class="row">
        <div class="col-md-6">
          <img src="{{ $abaout->cover }}" width="70%" height="70%" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          {!! Illuminate\Support\Str::limit($abaout->desc, 400) !!}
          <div class="text-center mt-4">
            <a href="/tentangkami" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
    </div>  
  </div>
  {{-- start produk --}}
  <div class="container my-5">
    <div class="container mt-5">
      <div class="content text-center">
        <h4>Produk</h4>
        <p>Temukan produk yang anda butuhkan</p>
        <div class="row justify-content-center">
          <div class="col-md-6 my-3">
            <div class="image-container">
              <img src="/img/gb2.jpg" class="mx-auto d-block" width="100%" alt="">
              <div class="overlay"></div>
              <div class="centered-text"><a href="/produk" class="btn btn-outline-light" style="font-size: 30px; font-family: Arial;">Semen</a></div>
            </div>
          </div>
          <div class="col-md-6 my-3">
            <div class="image-container">
              <img src="/img/batu.jpg" class="mx-auto d-block" width="100%" alt="">
              <div class="overlay"></div>
              <div class="centered-text"><a href="/produk" class="btn btn-outline-light" style="font-size: 30px; font-family: Arial;">Non semen</a></div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

{{-- service --}}
<div class="container my-4">
  <div class="text-center">
    <h4>Services</h4>
  </div>
  <div class="row py-2">
    
    {{-- // Jumlah produk
    $jumlah_produk = 4;

    // --}}
    @foreach ($service as $item)
      <div class="col-md-3">
        <div class="text-center"> 
          <i class="{{ $item->icon }} fa-2x text-warning"></i>
          <h5><b>{{ $item->title }}</b></h5>
          <p>L{{ $item->desc }}</p>
        </div>
      </div>
      @endforeach
    
  </div>
  <div class="text-center mt-4">
    <a href="/services" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
</div>
{{-- end service --}}

<!--blog-->
<div class="container my-2">
  <div class="text-center">
    <h4 class="">News & Infomation</h4>
    <p>Ada kabar apa saja hari ini? kami akan beri tahu anda</p>
  </div>
<!--card-->
<div class="row">
  @foreach ( $blog as $item)
  <div class="col-md-3 py-2">
    <div class="card shadow-sm">
      <div class="wrapper-card-blog">
        <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
      </div>
      <div class="p-3">
        <a href="" class="text-decoration-none"><h5>{{ $item->title }}</h5></a>
        <p>
          {!! Illuminate\Support\Str::limit($item->body, 50) !!}
        </p>
        
      </div>      
    </div>
  </div>
  @endforeach

  <div class="text-center  mt-4">
    <a href="/blog" class="btn btn-warning px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
</div>
</div>
</div>
<!--end card-->
<!--end blog-->

<div class="container my-2 mb-5">
  <div class="text-center">
    <h4 class="">Hubungi kami</h4>
    <p>Anda dapat bertanya langsung ke kami</p>

    <a href="https://web.whatsapp.com/" class="btn btn-warning px-5" target="blank"><i class="fas fa-phone"></i> hubungi kami di Whatsapp</a>
  </div>
</div>


