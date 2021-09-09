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
            font-family: Verdana;
            font-size: 8pt;
        }
        .container {
            width: 749px;
            padding: 0;
            margin: auto;
            background-image: url("<?= base_url(); ?>/images/container.png");
        }
        #header {
            height: 200px;
            width: 100%;
            background-image: url("<?= base_url(); ?>/images/header.png");
        }
        .paddingR10{
            padding-right: 10px;
            /* color: black; */
        }
        a{
            color: black;
        }
        #sidebar_left{
            float: left;
            width: 175px;
            margin: 0px 9px;
            padding: 10px;
            /* border: 0px solid #000; */
            background-image: url("<?= base_url(); ?>/images/menu2.png");
            background-repeat: no-repeat;
        }
        #contentCenter_contentHTML {
            color: black;
        }
        .RadMenu_Default, .RadMenu_Default a.rmLink {
            font: normal 12px/23px "Segoe UI",Arial,sans-serif;
            color: black;
            text-decoration: none;
        }
        #sidebar_left ul {
            padding-left: 12px;
            list-style-type: none;
        }
        .RadMenu ul.rmVertical, .RadMenu ul.rmHorizontal, .RadMenu ul.rmRootScrollGroup, .RadMenu_Context ul.rmHorizontal {
            margin: 0;
            padding: 0;
            position: relative;
            left: 0;
        }
        .rmRootGroup {
            background: none !important;
            border: none !important;
        }

        /* #header ul, menu, dir {
    display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        } */
        li:hover{
            background-color:white;
        }
        #center {
            float: left;
            width: 500px;
            margin-top: 10px;
            color: black;
        }
        #footer {
            height: 85px;
            border: 0px solid #000;
            clear: both;
            background-image: url("<?= base_url(); ?>/images/footer.png");
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <div class="container">

        <div id="header"></div>

        
        <div id="sidebar_left">
            <div class="paddingR10" >
                <div tabindex="0" id="ctl00_RadMenu1" class="RadMenu RadMenu_Default rmSized" style="width: 140px; z-index: 7000;">
                    <ul class="rmRootGroup rmVertical">
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>">Beranda</a></li>
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>HomeNISN/index2"><span class="rmText">Aturan &amp; Kebijakan</span></a></li>
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>HomeNISN/index3"><span class="rmText">Mekanisme Penerbitan<br> NISN</span></a></li>
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>HomeNISN/index4"><span class="rmText">Data Siswa</span></a></li>
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>HomeNISN/index5"><span class="rmText">Kontak Kami</span></a></li>
                        <li><a class="nav-link px-0 py-0 mx-0 my-0" href="<?= base_url(); ?>HomeNISN/index6"><span class="rmText">FAQ</span></a></li>
	                </ul>
                </div>
            </div>
            <div style="position: relative; left: -8px;">
                <img src="<?= base_url(); ?>/images/keymenu.png">
            </div>
        </div>     
        