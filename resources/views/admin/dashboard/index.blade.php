<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body bg-primary">
        Selamat Datang {{ auth()->user()->name }} di halaman admin 😊
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pesan</span>
        <span class="info-box-number">
          {{ $pesan }}
          <small>Pesan</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

  </div>
  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Blog</span>
        <span class="info-box-number">
          {{ $blog }}
          <small>Blog</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Services</span>
        <span class="info-box-number">
          {{ $service }}
          <small>Services</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">User</span>
        <span class="info-box-number">
          {{ $user }}
          <small>User</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>