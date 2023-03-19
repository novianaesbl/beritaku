<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Berita</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">            
                            <div class="sb-sidenav-menu-heading">NAVIGASI</div>
                            <a class="nav-link" href="<?=base_url('berita')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                HOME
                            </a>
                            <a class="nav-link" href="<?=base_url('berita/kategori')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                KATEGORI
                            </a>
                            <a class="nav-link" href="<?=base_url('berita/artikel')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                ARTIKEL
                            </a>
                            <a class="nav-link" href="<?=base_url('berita/logout')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                LOGOUT
                            </a>

                        </div>
                    </div>
                </nav>
            </div>