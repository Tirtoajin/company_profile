<style>
  .nav-link img.nav-icon {
    width: 50px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
    height: 50px; /* Pastikan tinggi ikon konsisten */
  }

  .nav-text {
    margin-top: 5px; /* Jarak antara gambar dan teks */
    font-size: 12px; /* Ukuran font teks */
    color: black; /* Warna teks hitam */
  }

  .wrapper-hero {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .text-hero {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 100%;
  }

  .text-hero h3 {
    color: white; /* Warna teks hitam */
  }

  .img-hero {
  width: 100%;
  height: 100vh; /* tambahkan height untuk membuat gambar full screen */
  object-fit: cover; /* membuat gambar menutupi seluruh area */
  filter: brightness(0.8); /* membuat gambar sedikit lebih gelap */
}

.text-hero {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff; /* tambahkan warna putih untuk teks */
  text-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* tambahkan bayangan untuk teks */
}
</style>

<div class="container-fluid">
  <div class="wrapper-hero">
    <img src="/img/gb1.jpg" class="img-hero" width="100%" alt="">
    <div class="text-hero">
      <h3>Produk</h3>
    </div>
  </div>
</div>

<div class="nav-scroller bg-body shadow-sm">
  
  <nav class="nav nav-underline justify-content-center" aria-label="Secondary navigation">
    @foreach ($produk as $item)
    <a class="nav-link active" aria-current="page" href="/produk/show/{{ $item->id }}"> 
      <img src="/{{ $item->cover }}" class="img-fluid nav-icon" alt="Dashboard">
      <span class="nav-text">{{ $item->title }}</span>
    </a>
    @endforeach
  </nav>
</div>

<div class="container my-5">
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-6 text-center">
      <div class="card-body">
        <img src="/{{ $item->cover }}" class="card-img img-fluid" alt="Gambar" style="max-width: 200px; height: auto;">
      </div>
    </div>
    <div class="col-md-6 my-4">
      {!! $item->body !!}
    </div>
  </div>
</div>
</div>

