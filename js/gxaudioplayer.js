  <?php

       $(document).ready(function() {

                   $('#trackselector').on('change', function() {
                     change($(this).val());
                   });
              });

            function change(sourceUrl) {
                   var audio = document.getElementById("myaudioplayer");
                   var source = document.getElementById("myaudiosource");

                   audio.pause();

           if (sourceUrl) {
                 source.src = sourceUrl;
                 audio.load();
                 audio.play();
              };
            };   
  ?>
