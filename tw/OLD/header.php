<header>
	<div class="wrapper">
	
	   <nav id="nav">
			<div class="show_menu_btn" data-target="#nav ul" data-shown-text="Hide menu" data-hidden-text="Menu">Menu</div>
		
	    	<ul>
        <li><a href="index.php"><strong>ACAbet</strong></a></li>
        <li><a href="top_curse.php">Top curse</a></li>
        <li><a href="top_castiguri.php">Top castiguri</a></li>
        <li><a href="contact.php">Contact</a></li>
				<!-- Button to open the modal login form -->
				<li style="background-color: #52528C;"><button onclick="document.getElementById('loginModal').style.display='block'">Log In!</button></li>
			</ul>
		</nav>
	</div>

<!-- The Modal -->
<div id="loginModal" class="modal">
  <span onclick="document.getElementById('loginModal').style.display='none'" 
class="close" title="Exit Login">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="indexAfterLogIn.php">
    <!-- <div class="imgcontainer">
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

    <div class="container exit" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
      <button type="button" onclick="document.getElementById('loginModal').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('loginModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</header>
