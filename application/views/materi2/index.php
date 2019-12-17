            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title"><?php echo $title; ?></h4>
                                    <a href="<?php echo base_url('materi2/tambah'); ?>" class="btn btn-primary my-2"><i class="fa fa-plus"> Tambah Materi</i></a>
                                    <?php echo $this->session->flashdata('message'); ?>

                                    <div class="table-responsive">

                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Gambar</th>
                                                    <th>Deskripsi</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($materi as $m) : ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i; ?></th>
                                                        <td><img width="100" src="<?php echo base_url('upload/img/') . $m['image']; ?>" alt=""></td>
                                                        <td><?php echo $m['deskripsi']; ?></td>
                                                        <td class="text-center">
                                                            <a href="<?php echo base_url('materi2/ubah/') . $m['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                                                            <a href="<?php echo base_url('materi2/delete/') . $m['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin hapus?');"><i class="fa fa-trash"></i> Hapus</a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2019 &copy; Adminox theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->