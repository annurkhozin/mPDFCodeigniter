<br>
	<h3 style="text-align: center;">Edit Data Anggota</h3>
<br>
<form class="form-horizontal" action="<?php echo base_url().'editAnggota'?>" method="post" enctype="multipart/form-data">
  	<div class="form-group">
	    <div class="col-sm-12 text-center">
	    	<img src="<?=base_url().'bootstrap/upload/'.$row['photo']?>" width="10%">
  		</div>
	</div>
	<div class="form-group">
	    <div class="col-sm-offset-4 col-sm-4 text-center">
	    	<input type="file" name="photo" class="form-control">
  		</div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">NIK :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nik" class="form-control" placeholder="NIK Anggota" required="" value="<?php echo $row['nik']?>">
	      <input type="hidden" name="nik_old" required="" value="<?php echo $row['nik']?>">
	      <input type="hidden" name="photo_old" required="" value="<?php echo $row['photo']?>">
	      <input type="hidden" name="no" required="" value="<?php echo $row['no']?>">
	    </div>
	    <label class="control-label col-sm-2">Pekerjaan :</label>
	    <div class="col-sm-4">
	      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="" value="<?php echo $row['pekerjaan']?>">
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Nama Lengkap :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="" value="<?php echo $row['nama']?>">
	    </div>
	    <label class="control-label col-sm-2">Jabatan :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jabatan" required="">
	    		
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
	    	<textarea class="form-control" required="" name="ttl"><?php echo $row['ttl']?></textarea>
	    </div>
	    <label class="control-label col-sm-2">Alamat :</label>
	    <div class="col-sm-4">
	    	<textarea class="form-control" required="" name="alamat"><?php echo $row['alamat']?></textarea>
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Agama :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="agama" required="">
	    			<option value="<?php echo $row['agama']?>"><?php echo $row['agama']?></option>
	    		<?php foreach ($dataAgama as $ag) { ?>
	    			<option value="<?php echo $ag['agama']?>"><?php echo $ag['agama']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	    <label class="control-label col-sm-2">Jenis Kelamin :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jk" required="">
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
	    	<input type="text" name="masa_beraku" class="form-control" placeholder="Masa Berlaku" required="" value="<?php echo $row['masa_berlaku']?>">
	    </div>
	 </div>
	<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10 text-center"><br>
	      <button type="submit" name="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
	      <a onclick="back()" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
	    </div>
	</div>
</form>