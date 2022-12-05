<html>
<script type='text/javascript'>
// Grab elements, create settings, etc.
var video = document.getElementById('cam');
var act=0;
// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
		video.play();
		act=1;
    });
}
function dframe(mcan,vid,con){
	con.drawImage(vid,0,0);
	var dataurl = mcan.toDataUrl('image/jpeg',0.2);
	if(act!=0) websocket.emit('newFrame',dataurl);
}
function rep(){
var mcan = document.querySelector('#canv');
var vid = document.querySelector('video');
var con = mcan.getcontext('2d');
}
</script>
</html>