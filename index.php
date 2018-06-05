

<input type="text" id="TrackNo" maxlength="50">
<input type="button" value="TRACK" onclick="inputTrack()">
<script src="//www.tracking.my/track-button.js"></script>
<script>
  function inputTrack() {
    var num = document.getElementById("TrackNo").value;
    if(num===""){
      alert("Please enter tracking number");
      return;
    }
    TrackButton.track({
      tracking_no: num
    });
  }
</script>