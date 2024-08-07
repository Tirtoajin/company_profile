<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/service/create" class="btn btn-primary mb-3"><i class="fas fa-plus">Tambah</i></a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Icon</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($service as $item)
            
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <i class="{{ $item->icon }}"></i>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/service/{{ $item->id }}/edit" class="btn btn-success mx-2"> <i class="fas fa-edit"></i>Edit</a>
                            <form action="/admin/service/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> hapus</button>
                            </form>
                            </div>     
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>