    <?php if(is_front_page()):
        
    elseif (is_page(63)) :
        ?>
   <footer class="contact-footer">
        <p>Copyright <?php echo date('Y');?> | All Rights Reserved</p>
    </footer>

<?php
    else:
?>
<footer>
    <p>Copyright <?php echo date('Y');?> | All Rights Reserved</p>
</footer>
<?php
    endif;
?>

         

<?php wp_footer()?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="<?php bloginfo( 'template_directory' )?>/lib/uikit-3.3.1/js/uikit.min.js"></script>
<script src="<?php bloginfo( 'template_directory' )?>/lib/uikit-3.3.1/js/uikit-icons.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo( 'template_directory' )?>/js/main.js"></script>
</body>

</html>