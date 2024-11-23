		<footer class="site-footer">
		  <inner-column>
        <!-- <h2>TESTSTTSSTST</h2> -->
			  <?php 
         
        if (getPage()=== "about") {
          aboutPageNav();
          // echo aboutPageNav();
        }
        
        include "../src/components/nav.php";
        ?>
			  
		  </inner-column>
		</footer>
		<script src="./assets/scripts/theme-changer.js"></script>
		<script src="./assets/scripts/get-query-param.js"></script>
  </body>
</html>