
<div id="footer-menus">
    <div id="footer-menu-container">
        <div class="extra-menu-class">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'extra-menu',
                'container_class' => 'extra-menu-class'
            ));
            ?>

        </div>
        <div class="second-extra-menu-class">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'second-extra-menu',
                'container_class' => 'second-extra-menu-class'
            ));
            ?>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>