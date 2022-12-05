
<?php
$con=mysqli_connect("localhost","root","","chat") or die (mysqli_error($con));
$sel=mysqli_query($con,"select * from conv");
$conectados=mysqli_query($con,"select * from conectados");
mysqli_query($con,"delete from conv where chat='' or username=''");
echo "<div style='margin-left: 400px; border: 3px solid black;border-bottom: 0; text-align:center;'><strong><i>CHAT</i></strong>";
echo "</div>";
echo"<div style='margin-left: 400px; border: 3px solid black; height: 600px; overflow-y: scroll;'>";
echo"<div id='ch' style='margin: 3px 3px 3px 3px'>";
while($se=mysqli_fetch_array($sel))
{
	echo "<strong style='color:".$se['color']."'>".$se['username'].":</strong>&nbsp;".$se['chat']."<br>";
	if($se['dir']!=''){
	echo "<img src=".$se['dir']." style='max-width: 450px; max-height: 450px'><br>";
	}
}
echo"</div></div>";
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#ch").load(' #ch')
}, 500);
});
</script>