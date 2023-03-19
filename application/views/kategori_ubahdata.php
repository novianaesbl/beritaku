<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">UBAH KATEGORI</h1>

                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori" placeholder="Input Nama Kategori" value="<?= $data_kategori['kategori']; ?>">
                                    </div>
                                </div>
                                                    <div class="form-group d-flex align-items-center  mt-4 mb-0">
                                                        <p>
                                                            <!-- <a class="btn btn-primary" href="<?=base_url()?>berita/simpan_data">SIMPAN</a>     -->
                                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info float-left">                                                     
                                                        </p>
                                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>