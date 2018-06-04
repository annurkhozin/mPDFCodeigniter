<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?> | Mitra Karang Taruna</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/style.css" type="text/css"  />
  <style type="text/css">
    .bgkta{
       background-image: url("<?=base_url()?>bootstrap/upload/bgkta.gif");
    }
  </style>
</head>
<body>
      <?php foreach ($dataAnggota as $row) { ?>
    <div class="container">
      <div class="form-container bgkta">
        <table style="width: 100%; font-size: 9px;">
          <tr>
            <td colspan="4">
              <?=$infoKTA['header']?>
            </td>
            <td style="text-align: right;">
              <img src="<?=base_url()?>bootstrap/upload/<?=$infoKTA['logo']?>" width="47px">
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <hr style="height: 1px double; color: double #8c8c8c; margin-top: 2px">
            </td>
          </tr>
          <tr>
            <td style="width: 19%;">No</td>
            <td style="width: 2%">:</td>
            <td style="width: 52%"><?=$row->no?></td>
            <td rowspan="5" colspan="2" style="vertical-align: bottom; text-align: center;">
              <img src="<?=base_url()?>bootstrap/upload/<?=$row->photo?>" width="62px" height="83px">
            </td>
            
          </tr>
          <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?=$row->nik?></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$row->nama?></td>
          </tr>
          <tr>
            <td>TTL</td>
            <td>:</td>
            <td><?=$row->ttl?></td>
          </tr>
          <tr>
            <td style="vertical-align: top;">Alamat</td>
            <td style="vertical-align: top;">:</td>
            <td><?=$row->alamat?></td>
          </tr>
          <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?=$row->pekerjaan?></td>
            <td rowspan="4" colspan="2" style="font-size: 7px; text-align: center; vertical-align: top;">
              <?=$infoKTA['tgl_ttd']?>
              <!-- <img src="<?=base_url()?>bootstrap/upload/<?=$infoKTA['ttd']?>" width="88px" height="27px"> -->

            </td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?=$row->agama?></td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$row->jabatan?></td>
          </tr>
          <tr>
            <td>Masa Berlaku</td>
            <td>:</td>
            <td><?=$row->masa_berlaku?></td>
          </tr>
        </table>
      </div>
    </div>
      <?php } ?>
  
</body>
</html>
	
