<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?> | Mitra Karang Taruna</title>
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" type="text/css"  />
  <script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
    /* Remove the navbar's default margin-bottom and rounded borders */ 
	    .navbar {
	      margin-bottom: 0;
	      border-radius: 0;
	    }
	    
	    /* Add a gray background color and some padding to the footer */
	    footer {
	      background-color: #f2f2f2;
	      padding: 25px;
	    }
	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: #fff;">Mitra Karang Taruna</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<span id="header_date" style="color: #fff;"></span></a>
        </li>
        <li>
          <a href="#"><i class='fa fa-spinner faa-spin animated'></i>&nbsp;&nbsp;<span style="color: #fff;" id="header_jam"></span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid">
    <div class="row content">
      <?php include $content;?>
    </div>
  </div>
  <div class="footer">
      <div class="text-center"><br><br><br>
        <label>&copy; <?=date('Y')?> Mitra Karang Taruna Plesungan</label>
      </div>
  </div>
  <script language="JavaScript">
      function show(){
      var Digital=new Date();
      var hours=Digital.getHours();
      var minutes=Digital.getMinutes();
      var seconds=Digital.getSeconds();
      var day=Digital.getDate();
      var years=Digital.getFullYear();
      var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var month = month[Digital.getMonth()];
      if (hours<=9){
        hours="0"+hours;
      }
      if (minutes<=9){
        minutes="0"+minutes;
      }
      if (seconds<=9){
        seconds="0"+seconds;
      }
      var tampil=hours+":"+minutes+":"+seconds;
      var tampil_day=day+" "+month+" "+years;
      document.getElementById("header_jam").innerHTML=tampil;
      document.getElementById("header_date").innerHTML=tampil_day;
      setTimeout("show()",1000);
    }
    show();
    function Mustnumber(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
      return true;
    }
  </script>
</body>
</html>
	
