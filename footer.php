<footer class="footer-zoo">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a>
                        <img src="http://localhost:8170/wp-content/uploads/2024/04/logo-footer-1.webp" alt="">
                    </a>
                    <div class="navbar-collapse collapse">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'zoo_footer_menu',
                            'container' => 'ul',
                            'container_class' => 'navbar-nav ms-auto', // Alterei de 'navbar-nav ms-lg-auto' para 'navbar-nav ms-auto'
                            'menu_class' => 'navbar-nav ms-auto', // Alterei de 'navbar-nav ms-lg-auto' para 'navbar-nav ms-auto'
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Mantive a estrutura do items_wrap igual ao que você forneceu
                        ));

                        ?>
                        <!-- Button -->
                        <a class="lift ms-auto link-top" href="#hero">
                            <img src="http://localhost:8170/wp-content/uploads/2024/04/Frame8.webp" alt="">
                        </a>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>