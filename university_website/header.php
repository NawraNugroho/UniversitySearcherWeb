<div>
<img src="image/univ_logo.png" class="center"></header>
    <div class="icon-bar">
      <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a> 
      <a href="https://www.twitter.com" target="_blank" ><i class="fab fa-twitter"></i></a> 
      <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a> 
      <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a> 
    </div>
    <div class="navbar-parent">
      <div class="navbar">
        <a href="home.php">Home</a>
        <a href="tentang_kami.php">Tentang Kami</a>
        <a href="hubungi_kami.php">Hubungi Kami</a>
        <a href="pencarian_univ_idaman.php">Pencarian Universitas</a>
        <a href="pencarian_minat.php">Pencarian Minat Bakat</a>
        <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Informasi
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="form-daftar.php">Daftar Menjadi Tour Guide</a>
          <a href="form_daftar_universitas.php">Daftar Untuk Tour Universitas</a>
          <a href="Universitas1.php">Universitas Terbaik di Indonesia</a>
        </div>
        </div> 
        
      </div>
    </div>
    
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
</div>


