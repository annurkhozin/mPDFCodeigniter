<br>
	<h3 style="text-align: center;">Tambah Data Anggota</h3>
<br>
<form class="form-horizontal" action="<?php echo base_url().'tambahAnggota'?>" method="post" enctype="multipart/form-data">
  	<div class="form-group">
	    <label class="control-label col-sm-2">NIK :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nik" class="form-control" placeholder="NIK Anggota" required="">
	    </div>
	    <label class="control-label col-sm-2">Pekerjaan :</label>
	    <div class="col-sm-4">
	      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required="">
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Nama Lengkap :</label>
	    <div class="col-sm-4">
	      <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
	    </div>
	    <label class="control-label col-sm-2">Jabatan :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jabatan" required="">
	    		<?php foreach ($dataJabatan as $jb) { ?>
	    			<option value="<?php echo $jb['jabatan']?>"><?php echo $jb['jabatan']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Tempat Tanggal Lahir :</label>
	    <div class="col-sm-4">
	    	<textarea class="form-control" required="" name="ttl"></textarea>
	    </div>
	    <label class="control-label col-sm-2">Alamat :</label>
	    <div class="col-sm-4">
	    	<textarea class="form-control" required="" name="alamat"></textarea>
	    </div>
	</div>
  	<div class="form-group">
	    <label class="control-label col-sm-2">Agama :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="agama" required="">
	    		<?php foreach ($dataAgama as $ag) { ?>
	    			<option value="<?php echo $ag['agama']?>"><?php echo $ag['agama']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	    <label class="control-label col-sm-2">Jenis Kelamin :</label>
	    <div class="col-sm-4">
	    	<select class="form-control" name="jk" required="">
	    		<?php foreach ($dataJk as $jk) { ?>
	    			<option value="<?php echo $jk['jenis_kelamin']?>"><?php echo $jk['jenis_kelamin']?></option>
	    		<?php } ?>
	    	</select>
	    </div>
	</div>
	<div class="form-group">
	    <label class="control-label col-sm-2">Photo :</label>
	    <div class="col-sm-4">
	    	<input type="file" name="photo" class="form-control" required="">
	    </div>
	    <label class="control-label col-sm-2">Masa Berlaku</label>
	    <div class="col-sm-4">
	    	<input type="text" name="masa_beraku" class="form-control" placeholder="Masa Berlaku" required="">
	    </div>
	 </div>
	<div class="form-group">
	    <label class="control-label col-sm-2">Status Aktif :</label>
	    <div class="col-sm-4">
	    	<label class="radio-inline"><input type="radio" name="is_active" value="1" checked=""> Yes</label>
	    	<label class="radio-inline"><input type="radio" name="is_active" value="0"> No</label>	    	
	    </div>
	 </div>
	<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10 text-center"><br>
	      <button type="submit" name="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Tambah</button>
	      <a onclick="back()" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
	    </div>
	</div>
</form>