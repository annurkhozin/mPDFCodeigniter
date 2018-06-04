<br>
	<h3 style="text-align: center;">Detail Data Anggota</h3>
<br>
<form class="form-horizontal">
  	<div class="form-group">
	    <div class="col-sm-12 text-center">
	    	<img src="<?=base_url().'bootstrap/upload/'.$row['photo']?>" width="10%">
  		</div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">NIK :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nik" class="form-control" placeholder="NIK Anggota" required="" readonly="" value="<?php echo $row['nik']?>">
	    </div>
	    <label class="control-label col-sm-2">Pekerjaan :</label>
	    <div class="col-sm-4">
	      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="" readonly="" value="<?php echo $row['pekerjaan']?>">
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Nama Lengkap :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="" readonly="" value="<?php echo $row['nama']?>">
	    </div>
	    <label class="control-label col-sm-2">Jabatan :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jabatan" required="" readonly="">
	    		
	    			<option  value="<?php echo $row['jabatan']?>"><?php echo $row['jabatan']?></option>
	    		<?php foreach ($dataJabatan as $jb) { ?>
	    			<option value="<?php echo $jb['jabatan']?>"><?php echo $jb['jabatan']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Tempat Tanggal Lahir :</label>
	    <div class="col-sm-4">
	    	<textarea class="form-control" required="" name="ttl" readonly=""><?php echo $row['ttl']?></textarea>
	    </div>
	    <label class="control-label col-sm-2">Alamat :</label>
	    <div class="col-sm-4">
	    	<textarea class="form-control" required="" name="alamat" readonly=""><?php echo $row['alamat']?></textarea>
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Agama :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="agama" required="" readonly="">
	    			<option value="<?php echo $row['agama']?>"><?php echo $row['agama']?></option>
	    		<?php foreach ($dataAgama as $ag) { ?>
	    			<option value="<?php echo $ag['agama']?>"><?php echo $ag['agama']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	    <label class="control-label col-sm-2">Jenis Kelamin :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jk" required="" readonly="">
	    			<option value="<?php echo $row['jenis_kelamin']?>"><?php echo $row['jenis_kelamin']?></option>
	    		<?php foreach ($dataJk as $jk) { ?>
	    			<option value="<?php echo $jk['jenis_kelamin']?>"><?php echo $jk['jenis_kelamin']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	</div>
	<div class="form-group">
	    <label class="control-label col-sm-2">Masa Berlaku</label>
	    <div class="col-sm-4">
	    	<input type="text" name="masa_beraku" class="form-control" placeholder="Masa Berlaku" required="" readonly="" value="<?php echo $row['masa_berlaku']?>">
	    </div>
	 </div>
	<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10 text-center"><br>
	      <a onclick="back()" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
	    </div>
	</div>
</form>