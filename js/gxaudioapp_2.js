
aud.play : (id) => {  //START PLAYING
  
  aud.now = id;       //UPDATE CURRENT & PLAY
  aud.player.src = aud.playlist[id].dataset.src;
 
  // (B2) A LITTLE BIT OF COSMETIC
  for (let i=0; i<aud.playlist.length; i++) {
    aud.playlist[i].style.backgroundColor = i==id ? "yellow" : "";
  }
};

