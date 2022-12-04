 <nav>
     <ul>
         <li class="logo">
             <h4><img src="logo\logo.png" height="5%" width="5%"> Bus Ticketing System</h4>
         </li>
         <li class="btn"><span class="fas fa-bars"></span></li>
         <div class="items">
             <li><a href="home.php">Home</a></li>
             <li><a href="loginMenu.php">Login</a></li>
             <li><a href="AboutUs.php">About Us</a></li>
             <li><a href="contact_us.php">Feedback</a></li>
         </div>
     </ul>
 </nav>
 <script>
$('nav ul li.btn span').click(function() {
    $('nav ul div.items').toggleClass("show");
    $('nav ul li.btn span').toggleClass("show");
});
 </script>