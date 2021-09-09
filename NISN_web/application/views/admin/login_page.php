<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?php echo $judul ?></title>
    <style>
        body{
            background-image: url("<?= base_url(); ?>/images/bg-login.png");
            font-size: 12px;
        }
    </style>

</head>
<body>

    
    <div class="conntainer pt-3">
        <div align="center">
            <h1 style="margin-bottom: 10px">Kemdikbud Login</h1>
        </div>
        <div class="row justify-content-center pt-3">
            <div class="col-md-4 mr-5 bg-light pb-3">
                <span id="LoginInfoDefault">
                <p></p><h6><strong>Sekolah Kita</strong></h6>Cek Profil Sekolah dan Saran Masukan dari masyarakat<br>melalui laman <a href="http://sekolah.data.kemdikbud.go.id/">http://sekolah.data.kemdikbud.go.id</a><p></p>
                
                <p></p><h6><strong>Informasi Verifikasi dan Validasi Peserta Didik</strong></h6>
                    Untuk mengantisipasi kebutuhan <strong>NISN</strong> (Nomor Induk Siswa Nasional), pastikan setiap Peserta Didik memiliki NISN,<br>
                    yang dilakukan oleh setiap operator sekolah (layanan mandiri) <br>melalui laman <a href="http://vervalpd.data.kemdikbud.go.id">http://vervalpd.data.kemdikbud.go.id</a>
                <p></p>
                </span>
            </div>

            
            <div class="col-md-3 bg-light border border-light pt-3" >
                <?php echo form_open('LoginAdmin/proses'); ?>
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } ?>
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user-circle"></i> Username</label>
                        <input class="form-control" type="email" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fa fa-user-circle"></i> Password</label>
                        <input class="form-control" type="password" id="password" name="password" required>
                    </div>

                    <div align="right">
                    <button class="btn btn-light border border-dark" type="submit" >Submit form</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
    </body>
</html>