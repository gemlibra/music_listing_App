
$('#myaudioplayer').on('click', function () {
      var player = $(this).parent().find('audio').get(0); // if you restructure your HTML this has to change
      if (player.paused || player.currentTime == 0) {
        player.play();
  } else {
    player.pause();
  }
});

