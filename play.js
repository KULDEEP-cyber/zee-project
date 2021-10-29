function playM3u8(url){
    if(Hls.isSupported()) {
        console.log("Supported");
        var video = document.getElementById('video');
        video.volume = 1.0;
        var hls = new Hls();
        var m3u8Url = decodeURIComponent(url)
        hls.loadSource(m3u8Url);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
          video.play();
        });
      }
      else
      console.log("Not-Supported");
  }
  var l = document.getElementById("lenk").textContent;
  playM3u8(l);