<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/pesan" class="btn btn-primary btn-sm px-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h4><b>From : {{ $pesan->name }}</b></h4>
                    <p>date created : {{ $pesan->created_at }}</p>
                    {!! $pesan->desc !!}
                </div>
            </div>
        </div>
    </div>
</div>