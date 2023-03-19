<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">FORM KATEGORI</h1>
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
                            <label class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" placeholder="Input Nama Kategori">
                            </div>
                        </div>
                                            <div class="form-group d-flex align-items-center  mt-4 mb-0">
                                                <p>
                                                    <!-- <a class="btn btn-primary" href="<?=base_url()?>berita/simpan_data">SIMPAN</a>     -->
                                                    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info float-left">                                                     
                                                    <input type="reset" value="BATAL" class="btn btn-danger">    
                                                </p>
                                            </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Kategori
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">  
                                    <!-- <p>
                                        <a class="btn btn-primary" href="<?=base_url()?>phone/tambah_data">+Tambah Data</a>    
                                    </p> -->
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=1;
                                            foreach ($data_kategori as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?=$no;?></td>
                                                    <td><?=$row->kategori;?></td>
                                                    <td>
                                                        <a href="<?=base_url('berita/ubah_data/'); ?><?=$row->id_kategori; ?> " class="btn btn-success"  onclick="return confirm('Data ini akan diubah?') ">EDIT</a>
                                                        <a href="<?=base_url('berita/hapus_data/'); ?><?=$row->id_kategori; ?> " class="btn btn-danger"  onclick="return confirm('yakin dihapus !?') ">DELETE</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>