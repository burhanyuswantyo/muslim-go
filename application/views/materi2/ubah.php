<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="card-box">
                        <h4 class="header-title mb-3"><?php echo $title; ?></h4>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <?php echo form_open_multipart('materi2/update/' . $materi['id']); ?>
                                    <div class="form-group">
                                        <label class="col-md-2 col-form-label" for="simpleinput">Gambar</label>
                                        <div class="col-md-10">
                                            <?php echo form_upload('image'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-form-label" for="simpleinput">Deskripsi</label>
                                        <div class="col-md-10">
                                            <input type="text" id="deskripsi" name="deskripsi" class="form-control" value="<?php echo $materi['deskripsi']; ?>">
                                        </div>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->




        </div> <!-- end container-fluid -->

    </div> <!-- end content -->