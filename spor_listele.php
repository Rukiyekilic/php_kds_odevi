<?php
require("baglan.php");
if(!$baglan){
	die("Bağlantı Başarısız".mysqli_connect_error());
}
else{
	echo "Bağlantı Başarılı";
	
}
$ders1=$_POST["ders"];
$semt1=$_POST["semt"];
$saat1=$_POST["saat"];
$fiyatmin=$_POST["fiyatmin"];
$fiyatmax=$_POST["fiyatmax"];



$sorgu="SELECT hocalar.hoca_ad,hocalar.hoca_soyad,hocalar.hoca_cinsiyet,hocalar.hoca_yas,hocalar.hoca_tecrube,ders.ders_ad,ders.ders_fiyat,ders_programi.ders_saat,semt.semt_ad
FROM ders,ders_programi,hocalar,semt
WHERE ders.ders_id=ders_programi.ders_id AND hocalar.hoca_id=ders_programi.hoca_id AND semt.semt_id=ders_programi.semt_id AND ders.ders_id='$ders1' AND semt.semt_id='$semt1' AND ders_programi.ders_saat='$saat1' AND ders.ders_fiyat<='$fiyatmax' AND ders.ders_fiyat>='$fiyatmin'";


$a=mysqli_query($baglan,$sorgu);

if(mysqli_num_rows($a)>0){
	while($row=mysqli_fetch_assoc($a)){
		echo "<br>Hoca Ad: ".$row["hoca_ad"]."<br>Hoca Soyad: ".$row["hoca_soyad"]."<br>Hoca Tecrübesi: ".$row["hoca_tecrube"]."<br>Hoca Yaşı: ".$row["hoca_yas"]."<br> Hoca Cinsiyeti: ".$row["hoca_cinsiyet"]."<br> Dersin Adı: ".$row["ders_ad"]."<br>Ders Fiyat: ".$row["ders_fiyat"]."<br>Semt Adı: ".$row["semt_ad"]."<br>Dersin Saati: ".$row["ders_saat"]."<br>";
	}
}
else{
	echo "Kayıt Bulunamadı";
}
?>