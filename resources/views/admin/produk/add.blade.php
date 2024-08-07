<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (isset($produk))
                    <form action="/admin/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                @else
                    <form action="/admin/produk" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="title">Nama Produk</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ isset($produk) ? $produk->title : old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            
        
                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
        
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
        
                                  @if (isset($produk))
                                      <img src="/{{ $produk->cover }}" width="100%" class="mt-4" alt="">
                                  @endif  
        
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea type="text" id="summernote" name="body" class="form-control @error('body') is-invalid @enderror" placeholder="Body">{{ isset($produk) ? $produk->body : old('body') }}</textarea>
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    
