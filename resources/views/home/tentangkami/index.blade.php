<style>
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
      <h3>Tentang Kami</h3>
    </div>
  </div>
</div>

<div class="container my-5">
   <div class="row">
    <div class="col-md-6">
        <img src="/{{ $abaout->cover }}" width="100%" alt="">
    </div>
    <div class="col-md-6">
        <p>{!! $abaout->desc !!}</p>
    </div>
   </div>
</div>