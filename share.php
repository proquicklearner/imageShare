<!DOCTYPE html>
<html lang="en">
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body{
        background-image: url("./pexels-sohel-patel-1199824.jpg");
    }
body,h1,h2,h3,h4,h5 {font-family: sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
</style>
<body class="w3-light-grey">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0; background-color: black; color:white" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a> 
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HOME</a> 
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">LOGIN</a> 
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">LOGOUT</a>
  <a href="share.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">SHARED WITH</a>
  <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">ABOUT</a>
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">HELLO USER</span>
  <img src="avatar2.png" alt="Logo" style="width: 40px; height: 40px; margin-top: 8px; border-radius: 50%;">
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px; margin-right:83px; margin-left:83px;">
  
  <!-- Photo grid -->
  <div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
   </div>
    
   <div class="w3-quarter">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-quarter">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="avatar2.png" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


</div>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>


</body>
</html>
