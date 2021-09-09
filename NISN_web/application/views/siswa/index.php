    <div class="main">
        <section class="section section-tabs">
            <div class="container pt-lg-md pt-4">
                <div class="row justify-content-center">
                <?php if(validation_errors()){?><?php echo validation_errors();?> <?php } ?>
                    <div class="col-lg-12">
                        <div class="card shadow border-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center">
                                    <a href="<?=base_url();?>PengajuanSiswa/status" class="btn btn-danger btn-lg">Cek Status</a>
                                </div>
                                <h4 class="text-center my-4">
                                    Verval PD Lulusan
                                </h4><hr>

                                <!-- action="#" method="POST" enctype="multipart/form-data" -->
                                <!-- <form  class="has-validation-callback"> -->
                                <?php echo form_open('PengajuanSiswa/tambah_siswa'); ?>
                                    <div class="row">
                                        <!-- Atribut Master -->
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="text-left text-muted mb-2">
                                                <span class="badge badge-pill badge-success text-uppercase">Identitas </span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-id-badge "></i> NISN</label>
                                                <input class="form-control " placeholder="NISN" id="nisn" name="nisn" type="text" required>
                                                <small id="emailHelp" class="form-text text-muted"> Tuliskan jika memiliki NISN (Opsional)</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="nik"><i class="fa fa-id-card "></i> NIK <span class="red-text">*</span></label>
                                                <input class="form-control " placeholder="NIK" id="nik" name="nik" type="text" maxlength="16" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user-circle"></i> Nama <span class="red-text">*</span></label>
                                                <input class="form-control" placeholder="Nama Sesuai Ijazah" type="text" id="nama" name="nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-at"></i> Email <span class="red-text">*</span></label>
                                                <input class="form-control" placeholder="Email Aktif" type="email" id="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-map-pin"></i> Tempat lahir <span class="red-text">*</span></label>
                                                <input class="form-control" placeholder="Tempat Lahir" type="text" id="tempat_lahir" name="tempat_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-calendar"></i> Tanggal lahir <span class="red-text">*</span></label>
                                                <input class="form-control date-picker" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" type="text" id="tanggal_lahir" name="tanggal_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user"></i> Jenis Kelamin <span class="red-text">*</span></label>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input name="jenis_kelamin" class="form-check-input" id="customRadio1" type="radio" value="L" required>
                                                        <span class="form-check-sign"></span>
                                                        Laki-laki
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input name="jenis_kelamin" class="form-check-input" id="customRadio2" type="radio" value="P" required>
                                                        <span class="form-check-sign"></span>
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-female"></i> Ibu Kandung <span class="red-text">*</span></label>
                                                <input class="form-control" placeholder="Nama Lengkap Ibu Kandung" type="text" id="ibu_kandung" name="ibu_kandung" required>
                                                <small id="emailHelp" class="form-text text-muted"> Nama Lengkap Ibu Kandung Sesuai KK/Akte Kelahiran</small>
                                            </div>
                                        </div>
                                        <!-- ============Profil LULUSAN============ -->
                                        <div class="col-md-6">
                                            <div class="text-left text-muted mb-2">
                                                <span class="badge badge-pill badge-success text-uppercase">Profil Lulusan</span>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-graduation-cap "></i> Tahun Ajaran Lulus <span class="red-text">*</span></label>
                                                <select id="tahun_ajaran_id" name="tahun_ajaran_id" class="form-control select2 select2-hidden-accessible" required data-select2-id="tahun_ajaran_id" tabindex="-1" aria-hidden="true">
                                                    <option value="" disabled="" selected="" data-select2-id="2">--Pilih Tahun Ajaran--</option>
                                                    <option value="2017">2017/2018</option>
                                                    <option value="2016">2016/2017</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="1" style="width: 492px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tahun_ajaran_id-container"><span class="select2-selection__rendered" id="select2-tahun_ajaran_id-container" role="textbox" aria-readonly="true" title="--Pilih Tahun Ajaran--">--Pilih Tahun Ajaran--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>   
                                            </div>

                                            <div class="form-group">
                                                <label for=""><i class="fa fa-building "></i> Sekolah Lulusan <span class="red-text">*</span></label>

                                                <input class="form-control" placeholder="Asal Sekolah" type="text" id="sekolahlulusan" name="sekolahlulusan" required>
                                                
                                                <span class="select2-selection__placeholder">Ketikan NPSN atau Nama Sekolah</span>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for=""><i class="fa fa-file-pdf-o "></i> Ijazah SMA/SMK/MA <span class="red-text">*</span></label>
                                                <input type="file" class="form-control" name="lampiran" id="lampiran" required>
                                                <small id="emailHelp" class="form-text text-muted"> File Ijazah dalam format PDF, JPG, JPEG, PNG. Max 2 MB</small>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-primary mt-4">Ajukan</button>
                                    </div>
                                    
                                <!-- </form> -->
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>