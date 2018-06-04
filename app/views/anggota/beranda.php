<div class="col-md-offset-1 col-md-10 col-sm-12">
	<!-- <h4><small>Beranda <i class="glyphicon glyphicon-play"></i> Daftar Baju</small></h4><hr> -->
	<h3 style="padding-top: 15px;"><?php echo $title;?></h3><br>
	<button class="btn btn-primary" id="btnTambah" onclick="loadView('0','tambah','0')"><i class="glyphicon glyphicon-plus"></i> Tambah</button></td>
	<button class="btn btn-primary" id="btnInfoKTA" onclick="loadView('0','infoKTA','0')"><i class="glyphicon glyphicon-pencil"></i> Info KTA</button></td>
	<button onclick="cetakKartu()" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Cetak KTA</button>
	<div id="tampil-box"></div><br><br>
	<?php 
        if($success=$this->session->flashdata('success')) { ?>
            <div class="alert alert-info">
                <i class="glyphicon glyphicon-edit"></i> &nbsp; <?php echo $success; ?> !
            </div>
        <?php }
        if($error=$this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
                <i class="glyphicon glyphicon-alert"></i> &nbsp; <?php echo $error; ?> !
            </div>
        <?php } ?>
	<form action="<?php echo base_url();?>cetakKartu" method="post" id="tableDataAnggota" >
	<table class="table">
    	<thead>
    		<tr>
		        <th>#</th>
		        <th>No</th>
		        <th>NIK</th>
		        <th>Nama</th>
		        <th>Alamat</th>
		        <th>Jabatan</th>
		        <th>Masa Berlaku</th>
		        <th class="text-center">Aksi</th>
		    </tr>
	    </thead>
	    <tbody>
	    	<?php
	    		foreach ($anggota as $row) { ?>
				<tr>
					<td><input type="checkbox" name="noAnggota[]" value="<?php echo $row->no;?>"></td>
					<td><?php echo $row->no;?></td>
					<td><?php echo $row->nik;?></td>
					<td><?php echo $row->nama;?></td>
					<td><?php echo $row->alamat;?></td>
					<td><?php echo $row->jabatan;?></td>
					<td><?php echo $row->masa_berlaku;?></td>
					<td class="text-center">
						<a onclick="loadView('<?php echo $row->no;?>','detail')" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
						<a onclick="loadView('<?php echo $row->no;?>','edit')" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="<?php echo base_url().'DeleteAnggota/'.$row->no;?>" onclick="return confirm('Data Akan <?php echo $row->nama;?> di Nonaktifkan!');" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
	    		<?php }	?>
	    </tbody>
	</table>
</form>
	
</div>
<script>
	function back(){
	    $('#tableDataAnggota').removeClass('hidden');
	    $('#tampil-box').addClass('hidden');
	}
	function loadView(no,action){
		$.ajax({
          type:"POST",
          url:"<?=base_url()?>AnggotaCTRL/loadView",
          data:{no:no, action:action},
          cache:false,
          success:function(a){
	        $('#tableDataAnggota').addClass('hidden');
	    	$('#tampil-box').removeClass('hidden');
	        $('#tampil-box').html(a);
          }
        });
	}
	function cetakKartu(){
	    $('#tableDataAnggota').submit();
	}
</script>