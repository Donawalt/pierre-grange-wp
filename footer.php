<footer id="pied">
</footer>

</div>
<script type="text/javascript">
 var menu = document.querySelector('.menu-item');
 let menuChecker = document.querySelector('#menu>.menu-checker');
 let cross = document.querySelector('#menu>.menu-checker>#cross');
 let burger = document.querySelector('#menu>.menu-checker>#burger');
 cross.style.display = "none";
 menu.style.display = "none";
 menuChecker.addEventListener("click",function(){
   if(menu.style.display == "none"){
     menu.style.display = "flex";
     cross.style.display = "flex";
     burger.style.display = "none";
   }else if(menu.style.display == "flex"){
     menu.style.display = "none";
     cross.style.display = "none";
     burger.style.display = "flex";
   }
   else {
     menu.style.opacity = "none";
   };
 });
</script>
<?php wp_footer(); ?>
</body>
</html>
