<div class="row">
    <div class="offset-2 col-md-8 py-5">
       
        <h4><b>{{ $blog->title }}</b></h4>
        <p>date created {{ $blog->created_at }}</p>
        <img src="/{{ $blog->cover }}" width="100%" alt="">
        <div class="py-3">

        </div>
        <p>{!! $blog->body !!}</p> 
    </div>
</div>