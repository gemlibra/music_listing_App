<?php

    $formdata = $_POST;

    $tempstorage = $_FILES['pic']['tmp_name'];
    $imagefile = 'img/'.$_FILES['pic']['name'];
    move_uploaded_file( $tempstorage, $imagefile );

  // $formdata['picimg'] = $imagefile;

    $jsonfile = file_get_contents('gxjsonoutputfile.json'); //OPEN JSON FILE
    $jsonfile = json_decode($jsonfile, true); //DECODE/CONVERT JSON FILE AS COMPATIBLE FILE W/JS

    array_push($jsonfile, $formdata); //FORM SUBMIT BTN CLICK SENDS/POSTS FORM DATA TO JSON TEMP FILE

    $jsonfile = json_encode($jsonfile); //RE-CODE (ENCODE) FORM INPUT DATA TO JSON FORMAT 
    file_put_contents('gxjsonoutputfile.json', $jsonfile); //SAVE FORM INPUT DATA TO ORIGINAL JSON SPECIFIED IN "file_get_contents"

    header('location:addsongpage.php'); // REDIRECT USER TO MAIN OR ANY OTHER PAGE

?>


