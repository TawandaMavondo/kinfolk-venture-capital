   <!-- Modal Nav-->

   <div id="nav-modal" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
              <!-- <a href="./story.html">Story</a>
              <a href="./team.html">Team</a>
              <a href="./contact.html">Contact</a> -->

        <?php wp_nav_menu( array(
            'theme_location'=>'primary',
            'menu_class'=>'text-center'
              ) 
              );?>
        </div>
    </div>
</div>