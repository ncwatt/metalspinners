
    <footer>
        <div class="page_footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h3>Latest News</h3>
                        <?php
                            $news = new WP_Query( array( 'category_name' => 'news' ) );
                            $post_counter = 0;

                            if ( $news->have_posts() ) {
                                while ( $news->have_posts() and $post_counter < 3 ) {
                                    $news->the_post();?>
                                    <h4><?php the_title(); ?></h4>
                                    <?php
                                    $post_counter++;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-sm">
                        <h3>Partscale Ltd.</h3>
                    </div>
                    <div class="col-sm">
                        <h3>Get In Touch</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="copyright">
                            &copy; Copyright <?php echo date("Y"); ?> Partscale Ltd., trading as North East Metal Spinners - All rights reserved.
                        </div>
                        <div class="theme">
                            WordPress theme by <a href="https://gtctek.co.uk" target="_blank">Gtctek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/site.js"></script>
    <?php wp_footer(); ?>
</body>
</html>