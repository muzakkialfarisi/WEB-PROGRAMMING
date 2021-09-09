


<div class="text-center" style="margin-top:50px;">
    <a href="<?=base_url();?>LoginAdmin/tambahsiswa_page" class="btn btn-success btn-lg">Tambah Data Siswa</a>
</div>
<?php if ($this->session->flashdata('hapus')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('success')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Siswa <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
    <table class="table table-md table-striped table-hover table-bordered container" style="margin-top:50px;">
        <thead>
            <tr class="thead-dark">
                <th scope="col">No</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">NIK</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col"><span class="text-dark">___</span>Option<span class="text-dark">___</span></th>
            </tr>
        </thead>
        <tbody id="myTable">
        
            <?php 
            $i=1;
            foreach($getdata as $data)   
            {
            ?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $data['nisn']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['tempat_lahir']; ?></td>
                <td><?php echo $data['tanggal_lahir']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['ibu_kandung']; ?></td>
                <td><?php echo $data['sekolahlulusan']; ?></td>
                <td>
                        <a href="<?= base_url(); ?>LoginAdmin/ubahsiswa/<?= $data['nisn'] ?>" class="btn btn-warning btn-sm nav-link py-0 mb-1">Update</a>
                        <a href="<?= base_url(); ?>LoginAdmin/hapussiswa/<?= $data['nisn'] ?>" class="btn btn-danger btn-sm nav-link py-0 mt-1">Delete</a>
                    
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
