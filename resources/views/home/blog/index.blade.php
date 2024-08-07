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
        <h3>Blog</h3>
      </div>
    </div>
  </div>

<div class="container my-5">
    <div class="text-center">
      <h4 class="">News & Infomation</h4>
      <p>Ada kabar apa saja hari ini? kami akan beri tahu anda</p>
    </div>

<div class="row">
    @foreach ($blog as $item)
        
    
     <div class="col-md-3 my-3">
        <div class="card shadow-sm">
             <div class="wrapper-card-blog">
                <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
             </div>
         <div class="p-3">
             <a href="/blog/show/{{ $item->id }}" class="text-decoration-none"><h5>{{ $item->title }}</h5></a>
                {!! Illuminate\Support\Str::limit($item->body, 50) !!}   
         </div>      
        </div>
     </div>
     @endforeach
    </div>
  </div>