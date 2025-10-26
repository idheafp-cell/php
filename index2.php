<html>
    <body>
<h3> Perintah Dasar </h3>
 <?php 
echo "Hallo semuanya!"; 
?> 

<h3> Comment </h3>
 <?php 
//Ini adalah komentar yg akan diabaikan 
/* 
Dan ini adalah 
satu blok komentar 
*/ 
?> 

<h3> Variabel </h3>
<?php 
$kata = "Ini Tes"; 
$angka = 88; 
?> 

<h3> String </h3>
<?php 
$teks = "Hallo semuanya!"; 
echo $teks; 
?> 

<h3> Penggabungan String </h3>
<?php 
$teks = "Hallo semuanya!"; 
$teks2= "12345"; 
echo $teks . " " .$teks2; 
?>

<h3> Panjang String </h3>
 <?php 
echo strlen("Hallo semuanya!"); 
?> 

<h3> Mencari Karakter di dalam string </h3>
 <?php 
echo strpos("Hallo semuanya!","semua"); 
?> 

<h3> Array Numerik </h3>
 <?php 
$nama[0] = "Joko"; 
$nama[1] = "Parto"; 
$nama[2] = "Jono"; 
echo $nama[1]." dan ".$nama[2]." adalah tetangga Pak ".$nama[0]; 
?> 

<h3> Array Assosiatif </h3>
<?php
$umur = array("Joko"=>33, "Parto"=>35, "Jono"=>29); 
$umur['Joko'] = "33"; 
$umur['Parto'] = "35"; 
$umur['Jono'] = "29"; 
?>

<h3> Array Multidimensi </h3>
<?php
$keluarga = array 
( "Joko"=>array 
("Jojon", "Joni", "Joana" ), 
"Parto"=>array
("Parmi"), 
"Warto"=>array 
( "Warman", "Warno", "Warmin" ) 
);
?> 

<h3> if..else  </h3>

<?php 
$d=date("D"); 
if ($d=="Sat") 
echo "Selamat berakhir pekan!"; 
else 
echo "Semoga hari anda menyenangkan!"; 
?> 
 

<h3> else if </h3>
 
<?php 
$d=date("D"); 
if ($d=="Sat") 
echo "Selamat berakhri pekan!"; 
elseif ($d=="Sun") 
echo "Semoga hari Minggu anda menyenangkan!"; 
else 
echo "Semoga hari anda menyenangkan!"; 
?> 
 

<h3> switch </h3>

<?php 
$x = 2; 
switch ($x) 
{ 
case 1: echo "Angka 1"; 
break; 
case 2: echo "Angka 2"; 
break; 
case 3: echo "Angka 3"; 
break; 
default:echo "Bukan angka antara 1 sampai 3"; 
} 
?> 


<h3> while </h3>

<?php 
$i=1; 
while($i<=5) 
{ 
$i++; 
} 
?> 


<h3> do while </h3>

<?php 
$i=0; 
do 
{ 
$i++; 
echo "Angka " . $i . "<br />"; 
} 
while ($i<5); 
?> 


<h3> for </h3>
 
<?php 
for ($i=1; $i<=5; $i++) 
{ 
echo "Hello World!<br />"; 
} 
?> 


<h3> for each </h3>

<?php 
$arr=array("satu", "dua", "tiga"); 
foreach ($arr as $nilai) 
{ 
echo "Nilai: " . $nilai . "<br />"; 
} 
?> 


<h3> fuction </h3>
<?php  
include 'vars2.php'; 
echo "Sebuah $buah $warna"; //Sebuah apel hijau 
?> 

<?php 
function tulisNama() 
{ 
echo "Merapi"; 
} 
tulisNama(); 
?> 


<h3> URL </h3>
 <?php 
echo "<a href=vars.php?nama=Merapi&alamat=Sleman>Gunung</a>"; 
?> 

<h3> Form </h3>
 <html> 
<body> 
<form action="welcome.php" method="post"> 
Nama: <input type="text" name="nama" /> 
Umur: <input type="text" name="umur" /> 
<input type="submit" value="Kirim"/> 
</form> 
</body> 
</html> 