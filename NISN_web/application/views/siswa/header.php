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
        body {
            font-size: 14px;
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
            -moz-osx-font-smoothing: grayscale;
            background-color: #fff;
        }
        .main {
            position: relative;
            background: #FFFFFF;
        }
        .section-tabs {
            background: linear-gradient(0deg, rgba(44, 44, 44, 0), rgba(204, 201, 192,1));
        }
        .page-header[filter-color="blue"] {
            background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(102, 204, 255, 1));
        }
        #nav{
            background: linear-gradient(0deg,rgba(102, 204, 255, 1), rgba(44, 44, 44, 0.2));
            padding-left: 130px;
            padding-right: 130px;
            color: white;
        }
        
    </style>
</head>

<body>

    
    <div class="container px-5">
        <nav class="navbar nav-pills navbar-expand-sm navbar-dark bg-primary fixed-top" id="nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?=base_url();?>LoginAdmin/login" rel="tooltip" title="" data-placement="bottom" data-original-title="">
                    <strong><i class="fa ui-2_favourite-28 "></i> PD</strong>
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url();?>PengajuanSiswa/status"><strong>Status</strong></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="page-header" filter-color="blue" style="height: 150px; padding-top:70px; color: white">
            <h3 align="center">Verifikasi Validasi Data NISN Siswa Lulusan</h3>            
    </div>
        