<?php
/**
 * The template for displaying footer
 */
?>
</div>
<?php wp_footer() ?>
    <footer>
        <div class="">
            <div class="">
                <div class="">
                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                </div>
            </div>
            <div class="">
                <div class="">
                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                </div>
            </div>
            <div class="">
                <div class="">
                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                </div>
            </div>
            <div class="">
                <div class="">
                    <?php dynamic_sidebar( 'footer_column_4' ); ?>
                </div>
            </div>
        </div>
        <div class="">
            <div class="">
                <?php dynamic_sidebar( 'footer_text' ); ?>
            </div>
        </div>
    </footer>
</body>
</html>