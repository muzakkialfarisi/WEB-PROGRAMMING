<div id="center" class="contentcetner">
    <div class="RadAjaxPanel" id="ctl00_ctl00_centerListPanel" style="display: block;">
	    <div id="centerList">    
            <div id="contentCenter_contentHTML">
            <div id="contentCenter_pvRes2" class="rmpView textUp14" style="height:500px;width:100%;">
        <h2>Cari NISN Berdasarkan NISN</h2>
        <div class="style1">
            Hasil pencarian berdasakan NISN <b>
            <!-- <span id="contentCenter_lRes2Nama">Muzakki Ahmad Al Farisi</span></b>: -->
            <br>
            <br>
        </div>
        <div>
            <div>
                <div id="ctl00_contentCenter_gridRes2" class="RadGrid RadGrid_Default" tabindex="0">
		            <table class="table table-md table-striped table-hover table-bordered container" style="width:100%;table-layout:auto;empty-cells:show;">
                
                        <thead>
                            <tr background="">
                                <th scope="col" class="rgHeader">NISN</th>
                                <th scope="col" class="rgHeader">Nama</th>
                                <th scope="col" class="rgHeader">Jenis Kelamin</th>
                                <th scope="col" class="rgHeader">Tempat Lahir</th>
                                <th scope="col" class="rgHeader">Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($siswa as $data)   
                            {
                            ?>
			                <tr class="rgNoRecords">
                                <td style="text-align:left;"><?php echo $data['nisn']; ?></td>
                                <td  style="text-align:left;"><?php echo $data['nama']; ?></td>
                                <td style="text-align:left;"><?php echo $data['jenis_kelamin']; ?></td>
                                <td style="text-align:left;"><?php echo $data['tempat_lahir']; ?></td>
                                <td style="text-align:left;"><?php echo $data['tanggal_lahir']; ?></td>
                            </tr>
                            <?php }?>
			            </tbody>

		            </table>
                    <div id="ctl00_contentCenter_gridRes2_SharedCalendarContainer" style="display:none;">
		            </div><input id="ctl00_contentCenter_gridRes2_ClientState" name="ctl00_contentCenter_gridRes2_ClientState" type="hidden" autocomplete="off">
                </div>
            </div>
        </div>
	</div>
            </div>
        </div>
    </div>
</div>
    