<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">PHONEBOOK</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Form Tambah Data
                            </div>
                            <div class="card-body">
                                <form method="post" action="">
                                <!-- <form method="POST" action="<?=base_url();?> phone/tambahdata"> -->
                                    <div class="form-group">
                                        <label class="small mb-1">Nomor Kontak</label>
                                        <input class="form-control py-4" name="no_kontak" type="text" placeholder="Masukkan Nomor Kontak" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1">Nama Kontak</label>
                                        <input class="form-control py-4" name="nama_kontak" type="text" placeholder="Masukkan Nama Kontak" />
                                    </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info float-left">
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>