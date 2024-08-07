 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <span class="brand-text font-weight-light">Sampurna Jaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt "></i>
                  <p>
                    Dashboard
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li> 

               <li class="nav-item">
                <a href="/admin/pesan" class="nav-link {{ Request::is('admin/pesan*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    Pesan
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li>  

              <li class="nav-item">
                <a href="/admin/abaout" class="nav-link {{ Request::is('admin/abaout*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-calendar"></i>
                  <p>
                    Abaout
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="/admin/produk" class="nav-link {{ Request::is('admin/produk*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-cube "></i>
                  <p>
                    Produk
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="/admin/service" class="nav-link {{ Request::is('admin/service*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-list"></i>
                  <p>
                    Sevices
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
              </li> 

       
            
              <li class="nav-item">
                <a href="/admin/posts/blog" class="nav-link {{ Request::is('admin/posts/blog*') ?'active' : '' }}">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>Blog</p>
                </a>
              </li>
           
          

          <li class="nav-item">
            <a href="/admin/banner" class="nav-link {{ Request::is('admin/banner*') ?'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banner
                 {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ?'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                 {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li> 

           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>