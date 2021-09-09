<div class="main">
<!-- <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <i class="glyphicon glyphicon-thumbs-up"></i>
    <strong>Berhasil...</strong> Pengajuan NISN Peserta Didik 12121212 berhasil.
  </div> -->

    <section class="section section-tabs">
        <div class="container pt-lg-md pt-4 ">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card  shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                        
                            <h4 class="text-center mb-4">
                                Status Pengajuan
                            </h4>
                            <hr>
                            <?php echo form_open('PengajuanSiswa/cekStatus'); ?>
                                <div class="row justify-content-center">
                                    <!-- Atribut Master -->
                                    <div class="col-md-6 ">
                                        
                                        <div class="form-group">
                                            <label for=""><i class="fa fa-at"></i> Email <span class="red-text">*</span></label>
                                            <input class="form-control" placeholder="NISN" type="text" id="nisn" name="nisn" required>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary mt-4">Status</button>
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            <?php if ($this->session->flashdata('ada')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('ada'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('tidakada')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Siswa <strong>tidak</strong> <?= $this->session->flashdata('tidakada'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 fixed-bottom" style="height:70px; padding-left:110px;">
        <a class="nav-link" href="http://kemdikbud.go.id" style="color:white;">
            KEMDIKBUD
        </a>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>