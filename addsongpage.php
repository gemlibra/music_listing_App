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
<link rel="stylesheet" href="assets/style.css/phpindexpagebgcolor.css">  
<link rel="stylesheet" href="assets/style.css/header.css">
<link rel="stylesheet" href="assets/style.css/artistpic.css">
<link rel="stylesheet" href="assets/style.css/gxfooter.css"> 
<title>Music Listing App</title>
</head>
<body>

<div class="container-fluid border border-primary">
    <div class="row">
        <div class="col-12">
    
                             
                    <?php require_once('assets/partials/gxheader.php')?>


                <div class="card bg-primary text-center mt-5 shadow">
                    <div class="card-body rounded">  
   <!--NOTE - SOS ==> THE FORM [action=gxprocesstest.php] Points to or contains the [coded/script] "executable" when the form submit button is clicked - that processes the form data and saves it to json or any other file -->
                        <form  action="gxaddsongprocess.php" method="post" class="bg-info rounded" id="myform">
                            <div class="form-group">
                                <input type="text" id="artist" name="artist" placeholder="Enter artist name" /><br></br>
                                <input type="text" id="title" name="title" placeholder="Enter song title"/><br></br>
                                <input type="text" id="genre" name="genre" placeholder="Enter Song Genre "/><br></br>
                                <input type="file" id="picimg" name="picimg"/><br><br>   
                                <button type="submit" value="submit" class="btn btn-primary text-white mb-2" id="btnsubmit">SAVE RECORD</button>               
                                <button type="reset" value="reset" class="btn btn-primary text-white mb-2">CLEAR FORM</button>
                                <a type="button" class="btn btn-primary text-white mb-2 mr-2" href="index.php">HOME</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div> 
</div> 

			 
	<style>
		 .container-fluid{
                    background-image: url(assets/img/bgimageheadphone.jpg);
                    background-size: cover;
                }		 
	</style>
					 
		<?php require_once('assets/partials/gxfooter.php')?>  

		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     
</body>
</html>
