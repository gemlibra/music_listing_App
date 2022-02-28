

//THIS AJAX MODULE CONTAIN JQUERY

$('#btnsearch').click(function(){
	$.ajax({
			url:'assets/gxjsonfile.json',
			type:'get',
			cache:false,
			dataType:'json',
			success:function(jsonfile){ /*NOTE: all executable code block goes in here-between the "success: function(data)" curly bracket*/

				let recordfound = false;

				var searchfld = document.getElementById("srchinputfld").value.toLowerCase();
				console.log(searchfld); /* <= to see searchfld content in the console*/

        $.each(jsonfile, function(index, value){

          if (searchfld == '') {
            alert("Please, enter search item.");
            return false;
          };  //this bracket ends the first "if statement"
     
          if ((searchfld == value.artist) || ( searchfld == value.title)){ 

        // WEB SAMPLE ==>  if(value1.indexOf(value2.charAt(i)) === -1) { return false; } 

      //   if((value.artist.indexOf(searchfld !=== -1) || (value.title.indexOf(searchfld !=== -1))
            
						recordfound = true;
            
						$("#dynamicoutput").append(`
							<div>
                <h5>Artist Name: ${value.artist}</h5><br>
                <h5>Song Title:  ${value.title}</h5><br>
                <h5>Artist Picture: <img src="assets/${value.img}"></h5><br>
              </div>
						`); 
          };
        });

				if(!recordfound){
					alert('Record Not found, Please, try another search')
				}
				
		  } 
	});
}); 
          

      