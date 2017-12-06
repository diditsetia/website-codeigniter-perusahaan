<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">

                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="<?php echo base_url('assets/admin/img/profile-photos/1.png') ?>" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">Aaron Chavez</p>
                                <span class="mnp-desc">aaron.cha@themeon.net</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div>

                    <ul id="mainnav-menu" class="list-group">

            <!--Category name-->
            <li class="list-header">Navigation</li>

            <!--Menu list item-->
            <?php if($this->uri->segment(2) == '') { ?>
            <li class="active-sub">
                <a href="<?php echo site_url('admin') ?>">
                    <i class="ti-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                </a>

            </li>
            <!--Menu list item-->
              <li class="list-divider"></li>
            <!--Menu list item-->
            <li >
                <a href="<?php echo site_url('admin/visimisi')?>">
                     <i class="ti-user"></i>
                    <span class="menu-title">Profile</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                  <li><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                  <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                  <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                </ul>
            </li>
            <!--Menu list item-->

              <li class="list-divider"></li>
            <!--Menu list item-->
            <li>
                  <a href="<?php echo site_url('admin/gallery')?>">
                  <i class="ti-gallery"></i>
                  <span class="menu-title">
                    Gallery
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li>
                  <a href="<?php echo site_url('admin/contact') ?>">
                  <i class="ti-id-badge"></i>
                  <span class="menu-title">
                    Contact
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li >
                <a href="#">
                     <i class="ti-settings"></i>
                    <span class="menu-title">Pengaturan Web</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li class=""><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                  <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                  <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                  <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                  <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>

                </ul>
            </li>

          <?php } elseif ($this->uri->segment(2) == 'visimisi' || $this->uri->segment(2) == 'sejarah' || $this->uri->segment(2) == 'strukturorganisasi' || $this->uri->segment(2) == 'layanan'  ) { ?>
            <li class="">
                <a href="<?php echo site_url('admin') ?>">
                    <i class="ti-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                </a>

            </li>
            <!--Menu list item-->
              <li class="list-divider"></li>
            <!--Menu list item-->
            <li class="active-sub">
                <a href="">
                     <i class="ti-user"></i>
                    <span class="menu-title">Profile</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->

                  <ul class="collapse in">
                    <?php $menu = $this->uri->segment(2) ?>
                    <?php if ($menu == 'visimisi') { ?>
                      <li class="active-link"><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                      <li><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                      <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                      <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                    <?php }elseif ($menu == 'sejarah') { ?>
                      <li ><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                      <li class="active-link"><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                      <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                      <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                    <?php }elseif ($menu == 'strukturorganisasi') { ?>
                      <li ><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                      <li ><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                      <li class="active-link"><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                      <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                    <?php }elseif ($menu == 'layanan') { ?>
                      <li ><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                      <li ><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                      <li ><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                      <li class="active-link"><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                    <?php } ?>
                  </ul>

            </li>
            <!--Menu list item-->

              <li class="list-divider"></li>
            <!--Menu list item-->
            <li>
                  <a href="<?php echo site_url('admin/gallery')?>">
                  <i class="ti-gallery"></i>
                  <span class="menu-title">
                    Gallery
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li>
                  <a href="<?php echo site_url('admin/contact') ?>">
                  <i class="ti-id-badge"></i>
                  <span class="menu-title">
                    Contact
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li >
                <a href="#">
                     <i class="ti-settings"></i>
                    <span class="menu-title">Pengaturan Web</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li class=""><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                  <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                  <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                  <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                  <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>

                </ul>
            </li>
          <?php } elseif ($this->uri->segment(2) == 'gallery') { ?>
            <li class="">
                <a href="<?php echo site_url('admin') ?>">
                    <i class="ti-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                </a>

            </li>
            <!--Menu list item-->
              <li class="list-divider"></li>
            <!--Menu list item-->
            <li >
                <a href="<?php echo site_url('admin/visimisi')?>">
                     <i class="ti-user"></i>
                    <span class="menu-title">Profile</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                  <li><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                  <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                  <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                </ul>
            </li>
            <!--Menu list item-->

              <li class="list-divider"></li>
            <!--Menu list item-->
            <li class="active-link">
                  <a href="<?php echo site_url('admin/gallery')?>">
                  <i class="ti-gallery"></i>
                  <span class="menu-title">
                    Gallery
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li>
                  <a href="<?php echo site_url('admin/contact') ?>">
                  <i class="ti-id-badge"></i>
                  <span class="menu-title">
                    Contact
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li >
                <a href="#">
                     <i class="ti-settings"></i>
                    <span class="menu-title">Pengaturan Web</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li class="active-link"><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                  <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                  <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                  <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                  <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>

                </ul>
            </li>
          <?php }elseif ($this->uri->segment(2) == 'contact') { ?>
            <li class="">
                <a href="<?php echo site_url('admin') ?>">
                    <i class="ti-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                </a>

            </li>
            <!--Menu list item-->
              <li class="list-divider"></li>
            <!--Menu list item-->
            <li >
                <a href="<?php echo site_url('admin/visimisi')?>">
                     <i class="ti-user"></i>
                    <span class="menu-title">Profile</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                  <li><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                  <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                  <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                </ul>
            </li>
            <!--Menu list item-->

              <li class="list-divider"></li>
            <!--Menu list item-->
            <li class="">
                  <a href="<?php echo site_url('admin/gallery')?>">
                  <i class="ti-gallery"></i>
                  <span class="menu-title">
                    Gallery
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li class="active-link">
                  <a href="<?php echo site_url('admin/contact') ?>">
                  <i class="ti-id-badge"></i>
                  <span class="menu-title">
                    Contact
                  </span>
                </a>
            </li>

            <li class="list-divider"></li>

            <li >
                <a href="#">
                     <i class="ti-settings"></i>
                    <span class="menu-title">Pengaturan Web</span>
                    <i class="arrow"></i>
                </a>

                <!--Submenu-->
                <ul class="collapse out">
                  <li class=""><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                  <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                  <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                  <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                  <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>

                </ul>
            </li>
          <?php } elseif ($this->uri->segment(2) == 'header' || $this->uri->segment(2) == 'menunavbar' || $this->uri->segment(2) == 'slider' || $this->uri->segment(2) == 'footer' || $this->uri->segment(2) == 'pengaturanadmin') { ?>
              <li class="">
                  <a href="<?php echo site_url('admin') ?>">
                      <i class="ti-dashboard"></i>
                      <span class="menu-title">Dashboard</span>
                  </a>

              </li>
              <!--Menu list item-->
                <li class="list-divider"></li>
              <!--Menu list item-->
              <li >
                  <a href="<?php echo site_url('admin/visimisi')?>">
                       <i class="ti-user"></i>
                      <span class="menu-title">Profile</span>
                      <i class="arrow"></i>
                  </a>

                  <!--Submenu-->
                  <ul class="collapse out">
                    <li><a href="<?php echo site_url('admin/visimisi') ?>">Visi Misi</a></li>
                    <li><a href="<?php echo site_url('admin/sejarah')?>">Sejarah</a></li>
                    <li><a href="<?php echo site_url('admin/strukturorganisasi') ?>">Struktur Organisasi</a></li>
                    <li><a href="<?php echo site_url('admin/layanan')?>">Layanan</a></li>
                  </ul>
              </li>
              <!--Menu list item-->

                <li class="list-divider"></li>
              <!--Menu list item-->
              <li class="">
                    <a href="<?php echo site_url('admin/gallery')?>">
                    <i class="ti-gallery"></i>
                    <span class="menu-title">
                      Gallery
                    </span>
                  </a>
              </li>

              <li class="list-divider"></li>

              <li class="">
                    <a href="<?php echo site_url('admin/contact') ?>">
                    <i class="ti-id-badge"></i>
                    <span class="menu-title">
                      Contact
                    </span>
                  </a>
              </li>

              <li class="list-divider"></li>

              <li >
                  <a href="#">
                       <i class="ti-settings"></i>
                      <span class="menu-title">Pengaturan Web</span>
                      <i class="arrow"></i>
                  </a>

                  <!--Submenu-->
                  <ul class="collapse in">
                    <?php if ($this->uri->segment(2) == 'header') { ?>
                      <li class="active-link"><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                      <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                      <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                      <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                      <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>
                    <?php }elseif ($this->uri->segment(2) == 'menunavbar') { ?>
                      <li><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                      <li class="active-link" ><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                      <li><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                      <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                      <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>
                    <?php }elseif ($this->uri->segment(2) == 'slider') { ?>
                      <li><a href="<?php echo site_url('admin/header') ?>">Header</a></li>
                      <li><a href="<?php echo site_url('admin/menunavbar') ?>">Menu Navbar</a></li>
                      <li class="active-link" ><a href="<?php echo site_url('admin/slider')?>">Slider</a></li>
                      <li><a href="<?php echo site_url('admin/footer')?>">Footer</a></li>
                      <li><a href="<?php echo site_url('admin/pengaturanadmin') ?>">Admin</a></li>
                    <?php } ?>
                  </ul>
              </li>
            <?php } ?>
            <!--Menu list item-->

              <li class="list-divider"></li>
            <!--Menu list item-->

              </div>
          </div>
        </div>
        <!--================================-->
        <!--End menu-->
    </div>
</nav>
