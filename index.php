<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<author name="Gift Xtian"></author>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css/header.css">
<link rel="stylesheet" href="assets/style.css/phpindexpagebgcolor.css">  
<link rel="stylesheet" href="assets/style.css/gxfooter.css"> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Music Listing App</title>
</head>
<body>

    
<div class="container-fluid border border-primary">
     <div class="row">      
        <div class="col-12">
                                  
           <?php require_once('assets/partials/gxheader.php');?>

  <!--  <form method="" action=""> -->
                <div class="form-group" class="bg-info rounded" id="myform">
                    <div class="card text-center bg-info mt-5 shadow">
                        <div class="card-body"> 
                          <input class="form-control" type="search" id="srchinputfld"  placeholder="Search Song title or Artist name..">

                          <!--New button below -->
                          <button type="submit" name="submit" id="btnclr" class="btn btn-primary text-white mt-3 mr-2"">CLEAR FORM</button>
                          <!--END-->

                          <button type="Search" name="submit" id="btnsearch" class="btn btn-primary text-white mt-3 mr-2"">SEARCH</button>

                            <a type="button" class="btn btn-primary text-white mt-3 mr-2" href="addsongpage.php">ADD NEW SONGS TO LIST</a><br>
                           
                            <div class="content">
                                <label for="trackselector"></label>
                                <select id="trackselector">
                                
                                      <option value="assets/media/01 Shayne_Ward-Breathless.mp3" selected>Shane Ward - Breathless</option>

                                      <option value="assets/media/03 Dreezy Ft. Jeremih - Body (2)mp3">Select a track, click Play</option>
                                      
                                      <option value="assets/media/03 Dreezy Ft. Jeremih - Body (2)mp3">Jeremih - Body</option>

                                      <option value="assets/media/04 Fetty Wap ft. Montana  - Let It Bang (Remix)1.mp3">Fettt Wap - Let it bang</option>
                                </select><br>
                                
                                <audio controls="controls" id="myaudioplayer" preload="none">
                                  <source id="myaudiosource" src="assets/media/01 Shayne_Ward-Breathless.mp3" type="audio/mp3"> 
                                </audio> 

                            </div>                      
                        </div>      
                    </div>
                </div><br><br> 

                <!--DYNAMIC HTML OUTPUT AREA:
                 //========================= -->
                           
                 <div class="card-body rounded bg-primary ml-10 text-white">
                      <p id="dynamicoutput"> </p>      
                 </div>

  <!--  </form> -->
              
        
        </div>
    </div>
</div> 

		 
    <style>
      .container-fluid{
            background-image: url(assets/img/bgimageheadphone.jpg);
            background-size: cover;
    }		 
    </style>
					 
		<?php require_once('assets/partials/gxfooter.php');?>   
   
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     <!--AJAX & JQUERY SCRIPTS FOR PHP FORM ITEM SEARCH MODULE -->
    <!-- <script src="assets/js/gxappprocesstest.js"></script> -->   
    <!-- <script src="assets/js/gxclearsearchinput.js"></script> -->
     <script src="assets/js/gxajaxappprocess.js"></script> 
   

</body>
</html>



