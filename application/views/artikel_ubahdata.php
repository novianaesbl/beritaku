<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">FORM ARTIKEL</h1>
                        <?php
                                if ($this->session->flashdata('flash'))
                                { 
                                    $status=$this->session->flashdata('flash');
                                    if ($status=="gagal")
                                    {
                                        ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Gagal!</strong> Data Sudah Ada.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php
                                    }
                                }
                        ?>
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <form method="post" action="">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pilih Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="kategori" placeholder="Input Nama Kategori" value="<?= $data_artikel['kategori']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Judul Artikel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="judul" placeholder="Input Judul Artikel" value="<?= $data_artikel['judul']; ?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Isi Artikel</label>
                                    <!-- <div class="form-group col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="isi" value="< = $data_artikel['isi']; ?>"></textarea>
                                    </div> -->
                                    <div class="form-group col-sm-10">
                                        <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="5" name="isi" value="<?= $data_artikel['isi'];?>">
                                    </div>
                                </div>
                                            <div class="form-group d-flex align-items-center  mt-4 mb-0">
                                                <p>
                                                    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info float-left">                                                         
                                                </p>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>