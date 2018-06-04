<br>
	<h3 style="text-align: center;">Edit Info KTA</h3>
<br>
<form class="form-horizontal" action="<?php echo base_url().'editKTA'?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<input type="hidden" name="id" required="" value="<?php echo $dataKTA['id']?>">
	<input type="hidden" name="ttd_old" required="" value="<?php echo $dataKTA['ttd']?>">
	<input type="hidden" name="logo_old" required="" value="<?php echo $dataKTA['logo']?>">
  	<table>
  		<tr>
  			<th style="text-align: center;"">Header</th>
  			<th style="text-align: center;"">Tanggal TTD</th>
  			<th style="text-align: center;"">TTD</th>
  			<th style="text-align: center;"">Logo</th>
  		</tr>
  		<tr>
  			<td><?php echo $dataKTA['header']?></td>
  			<td style="text-align: center;"><?php echo $dataKTA['tgl_ttd']?></td>
  			<td style="text-align: center;"><img src="<?=base_url()?>bootstrap/upload/<?=$dataKTA['ttd']?>" width="90px"></td>
  			<td style="text-align: center;"><img src="<?=base_url()?>bootstrap/upload/<?=$dataKTA['logo']?>" width="90px"></td>
  		</tr>
  		<tr>
  			<td><textarea class="form-control" required="" name="header" rows="7"><?php echo $dataKTA['header']?></textarea></td>
  			<td><textarea class="form-control" required="" name="tgl_ttd" rows="7"><?php echo $dataKTA['tgl_ttd']?></textarea></td>
  			<td style="width: 15%;"><input type="file" name="ttd" class="form-control"></td>
  			<td style="width: 15%;"><input type="file" name="logo" class="form-control"></td>
  		</tr>
  	</table>
	</div>
	
	<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10 text-center"><br>
	      <button type="submit" name="simpan" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</button>
	      <a onclick="back()" class="btn btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
	    </div>
	</div>
</form>