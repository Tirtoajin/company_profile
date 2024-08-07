<div class="row">
    <div class="col-md-8">
        <div class="card ">
            <div class="card-body">
                <a href="/admin/produk" class="btn btn-primary px-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                <h4><b>{{ $produk->title }}</b></h4>
                <p>date created {{ $produk->created_at }}</p>

                <img src="/{{ $produk->cover }}" width="100%" alt="">
                <div class="py-3">

                </div>
                <p>{!! $produk->body !!}</p>
            </div>
        </div>
    </div>
</div>
