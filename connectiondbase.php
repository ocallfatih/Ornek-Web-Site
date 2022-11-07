
<?php

$baglanti=mysql_connect("localhost","root","usbw");


if ($baglanti)  { echo "Veritabanina baglandim"; }	 //or die("hata");}
else 
{ echo "Veritabani hatasi"; }


$vt=mysql_select_db("uyelerr",$baglanti);

if ($vt)  { echo "<br> Veritabani seçildi"; }
else
{
	echo "veritabanini secemedim";
}

$adi=$_POST['Adı'];
$soyadi=$_POST['Soyadı'];
$kullaniciadi=$_POST['kullanıcıadı'];
$sifre=$_POST['şifre'];
$eposta=$_POST['eposta'];
$cinsiyet_0=$_POST['cinsiyet_0'];
$cinsiyet_1=$_POST['cinsiyet_1'];
$cins="";
$adres=$_POST['adres'];
if($cinsiyet_0)
{
	$cins="Erkek";
}
else if($cinsiyet_1)
{
	$cins="Kadın";
}
echo "ademdolaslan";

?>
