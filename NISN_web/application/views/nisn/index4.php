    <div id="center" class="contentcetner pl-3">
        
            <ul class="nav nav-tabs" id="myTab" role="tablist" >
                <li class="">
                    <a class="nav-link active" id="nisn-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:black;">Pencarian Berdasarkan NISN</a>
                </li>
                <li class="">
                    <a class="nav-link" id="namae-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color:black;">Pencarian Berdasarkan Nama</a>
                </li>
            </ul>
            <div class="tab-content border border-secondary" id="myTabContent"  >
                <div class="tab-pane fade show active px-3 py-3" id="home" role="tabpanel" aria-labelledby="nisn-tab">
                <!-- <div class="form-group"> -->
                <?php echo form_open('HomeNISN/CariSiswa_NISN'); ?>
                    <label for="" > Masukan NISN Siswa</label><br>
                        <input id="nisn" name="nisn" type="text" maxlength="10" required><br>
                <!-- </div>                   -->
                <!-- <div class="form-group"> -->
                    <label for="" class="mt-2"> Masukan Nama Ibu Kandung </label><br>
                        <input type="text" id="ibu_kandung" name="ibu_kandung" required  style="width=50%"><br><br><br>
                <!-- </div> -->
                    <input class="px-3" type="submit" name="submit" value="cari">

                <?php echo form_close(); ?>
                </div>

                <div class="tab-pane fade px-3 py-3" id="profile" role="tabpanel" aria-labelledby="name-tab">
                <div>
                <?php 
                    echo form_open('HomeNISN/CariSiswa_Nama'); 
                ?>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            Nama Siswa
                        </div>
                        <div class="col-sm-8">
                            <input id="nama" name="nama" type="text" required ><br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            Tempat Lahir
                        </div>
                        <div class="col-sm-8">
                            <input id="tempat_lahir" name="tempat_lahir" type="text" required><br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            Tanggal Lahir
                        </div>
                        <div class="col-sm-8">
                            <input id="tanggal_lahir" name="tanggal_lahir" type="text" required ><br>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            Nama Ibu
                        </div>
                        <div class="col-sm-8">
                            <input id="ibu_kandung" name="ibu_kandung" type="text" required><br>
                        </div>
                    </div><br><br>
                    
                <input class="px-3" type="submit" name="submit" value="cari">
                </div>
                <?php 
                    echo form_close(); 
                ?>
                </div>
            </div>
        
	</div>
