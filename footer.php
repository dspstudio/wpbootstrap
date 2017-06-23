
              
              <div class="col-xs-12 col-md-3">
                <?php if ( is_active_sidebar( 'footer_widget1' ) ) : ?>
                    <aside>
                        <?php dynamic_sidebar( 'footer_widget1' ); ?>
                    </aside>
                <?php endif; ?>
              </div>
              
              <div class="col-xs-12 col-md-3">
                <?php if ( is_active_sidebar( 'footer_widget2' ) ) : ?>
                    <aside>
                        <?php dynamic_sidebar( 'footer_widget2' ); ?>
                    </aside>
                <?php endif; ?>
              </div>
              
</footer>
<?php wp_footer(); ?>
</body>
</html>