<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Spor Hocası Seçim Sitesi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
		<style>
		.multi-range, .multi-range * { box-sizing: border-box; padding: 0; margin: 0; float:right;   background-color: white;}
.multi-range { 
    position: relative; width: 170px; height: 30px; margin: 16px;
    border: 1px solid #ddd; font-family: arial;
	background-color: white;
}
.multi-range > hr { position: absolute; width: 100%; top: 50%; background-color: white; }
.multi-range > input[type=range] {
    width: calc(100% - 16px); 
    position: absolute; bottom: 6px; left: 0;
	background-color: white;
}
.multi-range > input[type=range]:last-of-type { margin-left: 16px; background-color: white; }
.multi-range > input[type=range]::-webkit-slider-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-webkit-slider-runnable-track { -webkit-appearance: none; height: 0px;  background-color: white;}
.multi-range > input[type=range]::-moz-range-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-moz-range-track { -webkit-appearance: none; height: 0px; background-color: white; }
.multi-range > input[type=range]::-ms-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-ms-track { -webkit-appearance: none; height: 0px; background-color: white; }
.multi-range::after { 
    content: attr(data-lbound) ' - ' attr(data-ubound); 
    position: absolute; top: 0; left: 100%; white-space: nowrap;
    display: block; padding: 0px 4px; margin: -1px 2px;
    height: 30px; width: auto; border: 1px solid #ddd; 
    font-size: 13px; line-height: 26px;
	background-color: white;
}
		</style>

		
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->

        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="#navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <img src="assets/images/logo.png"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><b><a>Sen de spor yapabilirsin!</a></b></li>
                                            
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="home" class="home">
            <div class="home_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider">
								<div class="container">
								
<form class="form-signin" action="indexsonuc.php" method="POST"/> 
								<label><p class="text-white-50">Ders Türü Seçiniz.</p></label>
<select name="ders" id="ders" class="form-control" type="number">
  <option value="0">Seçiniz</option>
  <option value="1">Zumba</option>
  <option value="2">Salsa</option>
  <option value="3">Yoga</option>
  <option value="4">Fitness</option>
  <option value="5">Pilates</option>
  <option value="6">Reformer</option>
  <option value="7">Yüzme</option>
</select>
</br>
<label><p class="text-white-50">Dersi nerede almak istersiniz?</p></label>
<select name="semt" id="semt" class="form-control" type="number">
  <option value="0">Seçiniz</option>
  <option value="1">Buca</option>
  <option value="2">Bornova</option>
  <option value="3">Balçova</option>
  <option value="4">Konak</option>
  <option value="5">Bayraklı</option>
  <option value="6">Karşıyaka</option>
  <option value="7">Göztepe</option>
  <option value="8">Çeşme</option>
  <option value="9">Foça</option>
  <option value="10">Güzelbahçe</option>
</select>
</br>
<label><p class="text-white-50">Ders için belirlediğiniz saati seçiniz?</p></label>
<select name="saat" id="saat" class="form-control" type="number">
  <option value="0">Seçiniz</option>
  <option value="8">08:00 AM</option>
  <option value="9">09:00 AM</option>
  <option value="10">10:00 AM</option>
  <option value="11">11:00 AM</option>
  <option value="12">12:00 PM</option>
  <option value="13">13:00 PM</option>
  <option value="14">14:00 PM</option>
  <option value="15">15:00 PM</option>
  <option value="16">16:00 PM</option>
  <option value="17">17:00 PM</option>
  <option value="18">18:00 PM</option>
  <option value="19">19:00 PM</option>
  <option value="20">20:00 PM</option>
</select> 
</br>

<label><p class="text-white-50">Ders için belirlediğiniz ortalama fiyatı seçiniz?</p></label>
 

 <div class='multi-range bg-light' data-lbound='0' data-ubound='500'>
    <hr />
    <input name="fiyatmin" id="fiyatmin"  type='range'  
           min='0' max='495' step='5' value='0' 
           oninput='this.parentNode.dataset.lbound=this.value;'
    />
    <input name="fiyatmax" id="fiyatmax"  type='range' 
           min='5' max='500' step='5' value='500' 
           oninput='this.parentNode.dataset.ubound=this.value;'
    />
</div>






</br>
<INPUT type="reset" class="btn btn-lg btn-warning btn-block" value="Sil" onclick="Silme()" /></br>	
<button class="btn btn-lg btn-success btn-block" type="submit"> Ara </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->


        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="main_about_area">
                        <div class="features_area">
                            <div class="col-sm-3">
                                <div class="single_features">
                                    <div class="feature_icon"><i class="lnr lnr-cloud"></i></div>
                                    <h2>Müşteri Yorumları</h2>
                                    <p>Fulya hocayla yaptığım antremanlarda dikkat ettiğim en büyük özelliği hocanın tavizsiz ve disiplinli antreman yönetimi oldu.Hocama teşekkür edip hayatı boyunca başarılar diliyorum.
				                      </p><br>
									
                                    
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single_features">
                                    <div class="feature_icon"><i class="lnr lnr-cloud"></i></div>
                                    <h2>Müşteri Yorumları</h2>
                                    <p> 12 yıldır devam eden spor tutkumu daha da geliştirdiğiniz için çok teşekkür ederim Okan Hocam.</p>
                                    
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single_features">
                                    <div class="feature_icon"><i class="lnr lnr-cloud"></i></div>
                                    <h2>Müşteri Yorumları</h2>
                                    <p>İstediğim sonucu istediğim zamanda almamı sağlayan, beni hergün motive eden mecit hocama çok teşekkür ederim.</p>
                                   
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single_features">
                                    <div class="feature_icon"><i class="lnr lnr-cloud"></i></div>
                                    <h2>Müşteri Yorumları</h2>
                                    <p>Sadece spor ile hedeflerime ulaşabileceğimi sanıyordum ta ki Ayşegül hocayı tanıyana kadar. </p>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                

                

            </div>
        </section>

        <section id="summer" class="summer">
            
        </section>


       
					<!--
					<table class="table table-hover table-bordered text-white bg-primary  ">
        <thead>
            <tr>
                <td>Hoca Ad</td>
                <td>Hoca Soyad</td>
				<td>Tecrübe (Yıl)</td>
				<td>Yaş</td>
				<td>Cinsiyet</td>
				<td>Ders Ad</td>
				<td>Ders Fiyat</td>
				<td>Semt Ad</td>
				<td>Ders Saat</td>
				
            </tr>
        </thead>
        <tbody>
        <?php
$ders1=$_POST["ders"];
$semt1=$_POST["semt"];
$saat1=$_POST["saat"];
$fiyatmin=$_POST["fiyatmin"];
$fiyatmax=$_POST["fiyatmax"];
			$sorgu="SELECT hocalar.hoca_ad,hocalar.hoca_soyad,hocalar.hoca_cinsiyet,hocalar.hoca_yas,hocalar.hoca_tecrube,ders.ders_ad,ders.ders_fiyat,ders_programi.ders_saat,semt.semt_ad
FROM ders,ders_programi,hocalar,semt
WHERE ders.ders_id=ders_programi.ders_id AND hocalar.hoca_id=ders_programi.hoca_id AND semt.semt_id=ders_programi.semt_id AND ders.ders_id='$ders1' AND semt.semt_id='$semt1' AND ders_programi.ders_saat='$saat1' AND ders.ders_fiyat<='$fiyatmax' AND ders.ders_fiyat>='$fiyatmin'";
            $connect=mysqli_connect("localhost","root","","kds2001");
			mysqli_query($connect,"SET CHARACTER SET 'utf8'");
			mysqli_query($connect,"SET SESSION collation_connection ='utf8_unicode_ci'");
			
            if (!$connect) {
                die(mysqli_error());
            }
            
            $results = mysqli_query($connect,$sorgu);
            while($row = mysqli_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['hoca_ad']?></td>
                    <td><?php echo $row['hoca_soyad']?></td>
					<td><?php echo $row['hoca_tecrube']?></td>
					<td><?php echo $row['hoca_yas']?></td>
					<td><?php echo $row['hoca_cinsiyet']?></td>
                    <td><?php echo $row['ders_ad']?></td>
					<td><?php echo $row['ders_fiyat']?></td>
					<td><?php echo $row['semt_ad']?></td>
					<td><?php echo $row['ders_saat']?></td>					
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
			--->
					
                    </div>
					
                </div>
            </div>
        </section>



        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
					<div class="main_footer text-center">
                        <p>Rukiye Kılıç <i class="fa fa-heart"></i><a href="http://bootstrapthemes.co"></a></p>
                    </div>
                </div>
            </div>
        </footer>
        

       

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>
        <script>
            var map = new GMaps({
                el: '.map',
                scrollwheel: false,
                lat: -12.043333,
                lng: -77.028333
            });
        </script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
