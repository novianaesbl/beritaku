<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">PHONEBOOK</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">  
                                    <p>
                                        <a class="btn btn-primary" href="<?=base_url()?>phone/tambah_data">+Tambah Data</a>    
                                    </p>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Data Kontak</th>
                                                <th>Nama Kontak</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=1;
                                            foreach ($data_phonebook as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?=$no;?></td>
                                                    <td><?=$row->no_kontak;?></td>
                                                    <td><?=$row->nama_kontak;?></td>
                                                    <td>
                                                        <a href="<?=base_url('phone/ubah_data/'); ?><?=$row->no_kontak; ?> " class="btn btn-success"  onclick="return confirm('Data ini akan diubah?') ">EDIT</a>

                                                        <a href="<?=base_url('phone/hapus_data/'); ?><?=$row->no_kontak; ?> " class="btn btn-danger"  onclick="return confirm('yakin dihapus !?') ">DELETE</a>
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