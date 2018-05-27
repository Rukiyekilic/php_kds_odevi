<!doctype html>

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
                                        <a class="navbar-brand" href="index.php">
                                            <img src="assets/images/logo.png"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><b><a></a></b></li>
                                            
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



<!-- End of Banner Section -->




        <section id="summer" class="summer">
            
        </section>


        <section id="bigidea" class="bigidea">
            <div class="container">
                <div class="row">
                    <div class="main_bigidea_area">
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
					
                    </div>
					
                </div>
            </div>
        </section>



        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
					<div class="main_footer text-center">
                        <p>Rukiye Kılıç <i class="fa fa-heart"></i><a ></a></p>
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
