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
          <h3>Hubungi Kami</h3>
        </div>
      </div>
    </div>

<div class="container">
    <div class="container my-5">
        <div class="text-center">
          
          <p>Berikan saran dan masukan untuk kami</p>
        </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <form action="/hubungikami/send" method="POST">
                    @csrf
                <div class="form-grup">
                    <label for="">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukan nama anda">
                    @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="form-grup mt-4">
                    <label for="">Isi Pesan ini</label>
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror"  placeholder="Masukan pesan anda"></textarea>
                    @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <button type="submit" class="btn btn-warning mt-4">Kirim</button>
                </form>
                </div>
            </div>
           
        </div>
        <div class="col-md-6">
            <div class="flex">
                <i class="fas fa-phone fa-2x px-3"></i> <h3>00000000</h3>
            </div>

            <div class="flex mt-3">
                <i class="fas fa-envelope fa-2x px-3"></i> <h3>email@email.com</h3>
            </div>

            <div class="flex">
                <i class="fas fa-map-marker fa-2x px-3"></i> <h3>JL. Jambu No. 34</h3>
            </div>
        </div>
    </div>
</div>