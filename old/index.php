<?php
$host="localhost"; // Host name 
$username="picx7165_pab"; // Mysql username 
$password="pickabooth042013"; // Mysql password 
$db_name="picx7165_pickabooth"; // Database name 
$tbl_name="guestbook"; // Table name 


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB");

date_default_timezone_set('Asia/Jakarta');
$datetime=date("d-m-y G:i:s"); 
//date time

//$name = $_POST['name'];
//$email = $_POST['email'];
//$comment = $_POST['comment'];

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$comment = htmlspecialchars($_POST["comment"]);

if($_POST){
	if($name == ''|| $email == ''|| $comment == ''){
		$feedback = 'isi semua box form';
	}else{
		$sql="INSERT INTO $tbl_name(name, email, comment, datetime)VALUES('$name', '$email', '$comment', '$datetime')";
		$result=mysql_query($sql);
		$feedback = 'Successful';
	}
}


mysql_close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>pickabooth</title>
<link rel="stylesheet" type="text/css" href="css/styles_pickabooth.css">
<link rel="stylesheet" type="text/css" href="css/styles_nav.css" >
<link rel="stylesheet" type="text/css" href="css/styles_gallery.css">
<link rel="stylesheet" type="text/css" href="css/styles_slide.css">
<link rel="stylesheet" type="text/css" href="css/styles_contact.css">
<link rel="stylesheet" type="text/css" href="css/styles_320x480.css">
<script src="jquery-1.11.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery/smooth.js"></script>
<script type="text/javascript" src="jquery/jquery.sticky.js"></script>
</head>
<body bgcolor="#D0F7CB" marginwidth="0">


	<div id="home">
       <div id="logo1">		<img src="Images/logo new-01.svg"></div>
       <div id="logo2"><img src="Images/pick a booth text-01.svg"></div>
    </div>
    
     <div id="sticky-anchor"></div>
   		<div id="wrapper_menu" >
        
    		<div id="menu_box">
           
    			<ul>
     				<li id="nav-1"><a href="#home" rel="relativeanchor"><img src="nav/nav-01.svg"></a></li>
					<li id="nav-2"><a href="#about_us" rel="relativeanchor"><img src="nav/nav-02.svg"></a></li>
              		<li id="nav-3"><a href="#gallery" rel="relativeanchor"><img src="nav/nav-03.svg"></a></li>
     				<li id="nav-4"><a href="#event" rel="relativeanchor"><img src="nav/nav-04.svg"></a></li>
     				<li id="nav-5"><a href="#contact" rel="relativeanchor"><img src="nav/nav-05.svg"></a></li>
     			</ul>
        	
    	</div>
     </div>
   
     <div id="about_us">    
    	<div id="up_box"></div>
        <div id="left_box"></div>
       <div id="about_us_content">
         	<p>Dimulai dari tahun 2013 <b>Pick A Booth</b> Photobooth melayani jasa pemotretan Instant Photo untuk menyempurnakan acara-acara formal, casual dan perayaan anda.. kami berkomitmen untuk memberikan pelayanan terbaik dan selalu berkembang mengikuti trend yang ada.. Dengan menggunakan kamera canggih DSLR, peralatan studio foto dengan hasil kualitas warna foto serta pecahayaan yang cerah dan menarik. Selain itu, tentunya kami menggunakan mesin cetak instan dan cepat, hanya dalam 12 detik, hasil foto telah berada di tangan. Hasil foto kami akan tetap abadi dapat dipajang dan tidak pudar termakan waktu. Seiring dengan berjalannya waktu saat ini kami juga melakukan inovasi-inovasi lainnya untuk memberikan kepuasan kepada pelanggan kami.
Selama ini kami telah bekerja sama dengan beberapa Event Organizer, Wedding Organizer dan Perusahaan besar seperti Sharp, Samsung, Hotel Shangrilla, Plataran dan beberapa Perusahaan lainnya.
<p>
       </div>
     </div>
       	<div id="gallery">        
        	<div id="up_box_gallery">
            	<div id="up_box_gallery2"></div>
            <section>
				<ul class="lb-album">
                	  <!--Grand Opening BLU-->
					<li>
						<a href="#image-1">
							<img src="gallery/image_1_thumbs.jpg" alt="image01">
							<span>Grand Opening BLU</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<img src="gallery/full/image_1.jpg" alt="image01" />
							<div>
                            
								<h3>Grand Opening BLU</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-1-5" class="lb-prev">Prev</a>
								<a href="#image-1-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-1-2">
							<img src="gallery/full/image_1 2.jpg" alt="image02" />
							<div>
								<h3>Grand Opening BLU</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-1" class="lb-prev">Prev</a>
								<a href="#image-1-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-1-3">
							<img src="gallery/full/image_1 3.jpg" alt="image03" />
							<div>
								<h3>Grand Opening BLU</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-1-2" class="lb-prev">Prev</a>
								<a href="#image-1-4" class="lb-next">Next</a>
							</div>
                            </div>
                            <div class="lb-overlay" id="image-1-4">
							<img src="gallery/full/image_1 4.jpg" alt="image04" />
							<div>
								<h3>Grand Opening BLU</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-1-3" class="lb-prev">Prev</a>
								<a href="#image-1-5" class="lb-next">Next</a>
							</div>
                            </div>
                            <div class="lb-overlay" id="image-1-5">
							<img src="gallery/full/image_1 5.jpg" alt="image05" />
							<div>
								<h3>Grand Opening BLU</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-1-4" class="lb-prev">Prev</a>
								<a href="#image-1" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>    
					</li>
                    <!--Grand Opening BLU-->
                    
                    <!--Rena Buntario's 35th Birthday-->
					<li>
                    
						<a href="#image-2">
							<img src="gallery/image_2_thumbs.jpg" alt="image02">
							<span>Rena Buntario's 35th Birthday</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="gallery/full/image_2.jpg" alt="image02" />
							<div>							
								<h3>Rena Buntario's 35th Birthday</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-2-5" class="lb-prev">Prev</a>
								<a href="#image-2-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-2-2">
							<img src="gallery/full/image_2 2.jpg" alt="image02" />
							<div>							
								<h3>Rena Buntario's 35th Birthday</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-2" class="lb-prev">Prev</a>
								<a href="#image-2-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-2-3">
							<img src="gallery/full/image_2 3.jpg" alt="image03" />
							<div>							
								<h3>Rena Buntario's 35th Birthday</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-2-2" class="lb-prev">Prev</a>
								<a href="#image-2-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                        <div class="lb-overlay" id="image-2-4">
							<img src="gallery/full/image_2 4.jpg" alt="image04" />
							<div>							
								<h3>Rena Buntario's 35th Birthday</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-2-3" class="lb-prev">Prev</a>
								<a href="#image-2-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div> 
                        <div class="lb-overlay" id="image-2-5">
							<img src="gallery/full/image_2 5.jpg" alt="image05" />
							<div>							
								<h3>Rena Buntario's 35th Birthday</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-2-4" class="lb-prev">Prev</a>
								<a href="#image-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>   
					</li>
                    <!--Rena Buntario's 35th Birthday-->
                    
                    <!--Undian Simpedes BRI Cibinong-->
					<li>
						<a href="#image-3">
							<img src="gallery/image_3_thumbs.jpg" alt="image03">
							<span>Undian Simpedes BRI Cibinong</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="gallery/full/image_3.jpg" alt="image03" />
							<div>							
								<h3>Undian Simpedes BRI Cibinong</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-3-5" class="lb-prev">Prev</a>
								<a href="#image-3-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-3-2">
							<img src="gallery/full/image_3 2.jpg" alt="image03" />
							<div>							
								<h3>Undian Simpedes BRI Cibinong</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-3" class="lb-prev">Prev</a>
								<a href="#image-3-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-3-3">
							<img src="gallery/full/image_3 3.jpg" alt="image03" />
							<div>							
								<h3>Undian Simpedes BRI Cibinong</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-3-2" class="lb-prev">Prev</a>
								<a href="#image-3-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-3-4">
							<img src="gallery/full/image_3 4.jpg" alt="image04" />
							<div>							
								<h3>Undian Simpedes BRI Cibinong</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-3-3" class="lb-prev">Prev</a>
								<a href="#image-3-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-3-5">
							<img src="gallery/full/image_3 5.jpg" alt="image05" />
							<div>							
								<h3>Undian Simpedes BRI Cibinong</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-3-4" class="lb-prev">Prev</a>
								<a href="#image-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Undian Simpedes BRI Cibinong-->
                    
                    <!--Big Babol Karaoke With Cowboy Jr-->
					<li>
						<a href="#image-4">
							<img src="gallery/image_4_thumbs.jpg" alt="image04">
							<span>Big Babol Karaoke With Cowboy Jr</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="gallery/full/image_4.jpg" alt="image01" />
							<div>							
								<h3>Big Babol Karaoke With Cowboy Jr</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-4-5" class="lb-prev">Prev</a>
								<a href="#image-4-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-4-2">
							<img src="gallery/full/image_4 2.jpg" alt="image02" />
							<div>							
								<h3>Big Babol Karaoke With Cowboy Jr</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-4" class="lb-prev">Prev</a>
								<a href="#image-4-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-4-3">
							<img src="gallery/full/image_4 3.jpg" alt="image03" />
							<div>							
								<h3>Big Babol Karaoke With Cowboy Jr</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-4-2" class="lb-prev">Prev</a>
								<a href="#image-4-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-4-4">
							<img src="gallery/full/image_4 4.jpg" alt="image04" />
							<div>							
								<h3>Big Babol Karaoke With Cowboy Jr</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-4-3" class="lb-prev">Prev</a>
								<a href="#image-4-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-4-5">
							<img src="gallery/full/image_4 5.jpg" alt="image05" />
							<div>							
								<h3>Big Babol Karaoke With Cowboy Jr</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-4-4" class="lb-prev">Prev</a>
								<a href="#image-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Big Babol Karaoke With Cowboy Jr-->
                    
                    <!--Birthday Ibu Anit-->
					<li>
						<a href="#image-5">
							<img src="gallery/image_5_thumbs.jpg" alt="image05">
							<span>Birthday Ibu Anit</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="gallery/full/image_5.jpg" alt="image01" />
							<div>							
								<h3>Birthday Ibu Anit</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-5-5" class="lb-prev">Prev</a>
								<a href="#image-5-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-5-2">
							<img src="gallery/full/image_5 2.jpg" alt="image02" />
							<div>							
								<h3>Birthday Ibu Anit</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-5" class="lb-prev">Prev</a>
								<a href="#image-5-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-5-3">
							<img src="gallery/full/image_5 3.jpg" alt="image03" />
							<div>							
								<h3>Birthday Ibu Anit</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-5-2" class="lb-prev">Prev</a>
								<a href="#image-5-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-5-4">
							<img src="gallery/full/image_5 4.jpg" alt="image04" />
							<div>							
								<h3>Birthday Ibu Anit</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-5-3" class="lb-prev">Prev</a>
								<a href="#image-5-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-5-5">
							<img src="gallery/full/image_5 5.jpg" alt="image05" />
							<div>							
								<h3>Birthday Ibu Anit</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-5-4" class="lb-prev">Prev</a>
								<a href="#image-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Birthday Ibu Anit-->
                    
                    <!--Family Gathering Kalbe Farma-->
					<li>
						<a href="#image-6">
							<img src="gallery/image_6_thumbs.jpg" alt="image06">
							<span>Family Gathering Kalbe Farma</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="gallery/full/image_6.jpg" alt="image01" />
							<div>							
								<h3>Family Gathering Kalbe Farma</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-6-5" class="lb-prev">Prev</a>
								<a href="#image-6-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-6-2">
							<img src="gallery/full/image_6 2.jpg" alt="image02" />
							<div>							
								<h3>Family Gathering Kalbe Farma</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-6" class="lb-prev">Prev</a>
								<a href="#image-6-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-6-3">
							<img src="gallery/full/image_6 3.jpg" alt="image03" />
							<div>							
								<h3>Family Gathering Kalbe Farma</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-6-2" class="lb-prev">Prev</a>
								<a href="#image-6-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-6-4">
							<img src="gallery/full/image_6 4.jpg" alt="image04" />
							<div>							
								<h3>Family Gathering Kalbe Farma</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-6-3" class="lb-prev">Prev</a>
								<a href="#image-6-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-6-5">
							<img src="gallery/full/image_6 5.jpg" alt="image05" />
							<div>							
								<h3>Family Gathering Kalbe Farma</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-6-4" class="lb-prev">Prev</a>
								<a href="#image-6" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Family Gathering Kalbe Farma-->
                    
                    <!--Samsung Dealer Gathering-->
					<li>
						<a href="#image-7">
							<img src="gallery/image_7_thumbs.jpg" alt="image07">
							<span>Samsung Dealer Gathering</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="gallery/full/image_7.jpg" alt="image01" />
							<div>							
								<h3>Samsung Dealer Gathering</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-7-5" class="lb-prev">Prev</a>
								<a href="#image-7-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-7-2">
							<img src="gallery/full/image_7 2.jpg" alt="image02" />
							<div>							
								<h3>Samsung Dealer Gathering</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-7" class="lb-prev">Prev</a>
								<a href="#image-7-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-7-3">
							<img src="gallery/full/image_7 3.jpg" alt="image03" />
							<div>							
								<h3>Samsung Dealer Gathering</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-7-2" class="lb-prev">Prev</a>
								<a href="#image-7-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-7-4">
							<img src="gallery/full/image_7 4.jpg" alt="image04" />
							<div>							
								<h3>Samsung Dealer Gathering</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-7-3" class="lb-prev">Prev</a>
								<a href="#image-7-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-7-5">
							<img src="gallery/full/image_7 5.jpg" alt="image05" />
							<div>							
								<h3>Samsung Dealer Gathering</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-7-4" class="lb-prev">Prev</a>
								<a href="#image-7" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Samsung Dealer Gathering-->
                    
                    <!--Sharp-Mandiri Jakarta Marathon 2014-->
					<li>
						<a href="#image-8">
							<img src="gallery/image_8_thumbs.jpg" alt="image08">
							<span>Sharp-Mandiri Jakarta Marathon 2014</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="gallery/full/image_8.jpg" alt="image01" />
							<div>							
								<h3>Sharp-Mandiri Jakarta Marathon 2014</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-8-5" class="lb-prev">Prev</a>
								<a href="#image-8-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-8-2">
							<img src="gallery/full/image_8 2.jpg" alt="image02" />
							<div>							
								<h3>Sharp-Mandiri Jakarta Marathon 2014</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-8" class="lb-prev">Prev</a>
								<a href="#image-8-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-8-3">
							<img src="gallery/full/image_8 3.jpg" alt="image03" />
							<div>							
								<h3>Sharp-Mandiri Jakarta Marathon 2014</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-8-2" class="lb-prev">Prev</a>
								<a href="#image-8-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-8-4">
							<img src="gallery/full/image_8 4.jpg" alt="image04" />
							<div>							
								<h3>Sharp-Mandiri Jakarta Marathon 2014</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-8-3" class="lb-prev">Prev</a>
								<a href="#image-8-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-8-5">
							<img src="gallery/full/image_8 5.jpg" alt="image05" />
							<div>							
								<h3>Sharp-Mandiri Jakarta Marathon 2014</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-8-4" class="lb-prev">Prev</a>
								<a href="#image-8" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Sharp-Mandiri Jakarta Marathon 2014-->
                    
                    <!--Wedding Aldyth & Otto-->
                    <li>
						<a href="#image-9">
							<img src="gallery/image_9_thumbs.jpg" alt="image09">
							<span>Wedding Aldyth & Otto</span>
						</a>
						<div class="lb-overlay" id="image-9">
							<img src="gallery/full/image_9.jpg" alt="image01" />
							<div>							
								<h3>Wedding Aldyth & Otto</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-9-5" class="lb-prev">Prev</a>
								<a href="#image-9-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-9-2">
							<img src="gallery/full/image_9 2.jpg" alt="image02" />
							<div>							
								<h3>Wedding Aldyth & Otto</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-9" class="lb-prev">Prev</a>
								<a href="#image-9-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-9-3">
							<img src="gallery/full/image_9 3.jpg" alt="image03" />
							<div>							
								<h3>Wedding Aldyth & Otto</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-9-2" class="lb-prev">Prev</a>
								<a href="#image-9-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-9-4">
							<img src="gallery/full/image_9 4.jpg" alt="image04" />
							<div>							
								<h3>Wedding Aldyth & Otto</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-9-3" class="lb-prev">Prev</a>
								<a href="#image-9-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-9-5">
							<img src="gallery/full/image_9 5.jpg" alt="image05" />
							<div>							
								<h3>Wedding Aldyth & Otto</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-9-4" class="lb-prev">Prev</a>
								<a href="#image-9" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Wedding Aldyth & Otto-->
                    
                    <!--Wedding Citra & Ihsan-->
					<li>
						<a href="#image-10">
							<img src="gallery/image_10_thumbs.jpg" alt="image10">
							<span>Wedding Citra & Ihsan</span>
						</a>
						<div class="lb-overlay" id="image-10">
							<img src="gallery/full/image_10.jpg" alt="image01" />
							<div>							
								<h3>Wedding Citra & Ihsan</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-10-5" class="lb-prev">Prev</a>
								<a href="#image-10-2" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-10-2">
							<img src="gallery/full/image_10 2.jpg" alt="image02" />
							<div>							
								<h3>Wedding Citra & Ihsan</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-10" class="lb-prev">Prev</a>
								<a href="#image-10-3" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-10-3">
							<img src="gallery/full/image_10 3.jpg" alt="image03" />
							<div>							
								<h3>Wedding Citra & Ihsan</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-10-2" class="lb-prev">Prev</a>
								<a href="#image-10-4" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-10-4">
							<img src="gallery/full/image_10 4.jpg" alt="image04" />
							<div>							
								<h3>Wedding Citra & Ihsan</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-10-3" class="lb-prev">Prev</a>
								<a href="#image-10-5" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
                      <div class="lb-overlay" id="image-10-5">
							<img src="gallery/full/image_10 5.jpg" alt="image05" />
							<div>							
								<h3>Wedding Citra & Ihsan</h3>
								<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>-->
								<a href="#image-10-4" class="lb-prev">Prev</a>
								<a href="#image-10" class="lb-next">Next</a>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
                    <!--Wedding Citra & Ihsan-->
                    </ul>
				</section>
            </div>
        </div> 
    <div id="event">
        <div id="box_1"><div class="svg_2" id="event_promo_svg"><img src="head/head_event & promo.svg"></div></div>
        <div id="box_2"></div>
        <div id="slide">
            	<div class="scrollable">
    				<div class="items">
    				   <img src="Images/Birthday.png">
     				   <img src="Images/Happy-New-Year.png">
                     <img src="Images/Birthday.png">
     				   <img src="Images/Happy-New-Year.png">
                     <img src="Images/Birthday.png">
   					 </div>
            	</div>
  		 </div>
   </div>
	<div id="contact">
        <div id="contact_up_box"></div>
       		
         
      <div id="form">
        	<p id="feedback" style="width:auto; height: auto; font-size:10px"><?php echo $feedback; ?>
			<?php /*?> <?php //check if query successful 
				if($result){
				echo "Successful";
				echo "<BR>";

				}

				else {
				echo "ERROR";
			} ?> <?php */?>
           </p>
        	<form id="form2" action="index.php" method="post">
            <div id="name_email_wrapper">
        	<div class="form2">
            <input type="text" name="name"   id="name" class="feedback-input" placeholder="Name"/>
            </div>
           <div class="form2">
           <input type="text" name="email"  id="email" class="feedback-input" placeholder="Email"/>
           </div>
           </div>
           <div class="form2">
           <textarea name="comment" id="comment" class="feedback-input" cols="42" rows="9" placeholder="Message" ></textarea>
           <div class="submit">
           <input type="submit" value="SEND" id="button"/>
           </div>
           </div>
        	</form>
       </div>
       
       <div id="info_wrapper">
         	<div id="info">
            	<div id="phone"><h3 class="info_1" id="phone_head">Phone</h3>
				<p class="info_2" id="phone_content">0811-108 2398</p></div>
                    
              <div id="facebook"><h3 class="info_1" id="facebook_head">Facebook</h3>
              <p class="info_2" id="facebook_content">pick a booth</p></div>
                    
              <div id="twitter"><h3 class="info_1" id="twitter_head">Twitter</h3>
              <p class="info_2" id="twitter_content">pickabooth_id</p></div>
            </div>
          </div>
       
 </div>   




<script>
$(window).load(function(){
      $("#wrapper_menu").sticky({ topSpacing: -1 });
    });
    
$(document).ready(function(){
  $("#logo1").fadeIn(500);
  $("#logo2").fadeIn(1500);
});   
 </script>

</body>
</html>
</html>





