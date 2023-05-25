<html>

<body>



<video id="myVideo" width="320" height="240" controls autoplay poster="Untitled.png">
  <source src="sike.webm" type="video/webm">
</video>


</body>
<script>





var x = document.getElementById("myVideo"); 
window.onload = function() {
  playVid();
  document.getElementById('myVideo').click();
};
function playVid() { 
  x.play(); 
  console.log("played")
} 

function pauseVid() { 
  x.pause(); 
} 
</script>
</html>
