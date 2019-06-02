<footer id="pied">
</footer>

</div>
<script type="text/javascript">
 var menu = document.querySelector('.menu ul');
 let burger = document.querySelector('#menu>#burger');
 menu.style.display = "none";
 burger.addEventListener("click",function(){
   if(menu.style.display == "none"){
     menu.style.display = "flex";
   }else if(menu.style.display == "flex"){
     menu.style.display = "none";
   }
   else {
     menu.style.opacity = "none";
   };
 });
</script>
<?php wp_footer(); ?>
</body>
</html>
