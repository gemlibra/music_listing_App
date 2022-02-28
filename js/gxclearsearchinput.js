



$(document).ready(function(){

/*clearsearchinput = document.getelementByid("srchinputfld");
btnclearsearchinput = document.getelementByid("btnclr");*/

    $("#btnclr").on('click', clearSearchitem);
          function clearSearchitem(){
            $('#srchinputfld').val('');
            $('#dynamicoutput').val('');
          };
       };
  });
