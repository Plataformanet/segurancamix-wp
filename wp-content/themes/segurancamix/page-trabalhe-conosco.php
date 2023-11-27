<?php
/* Template name: Trabalhe Conosco */
get_header();
?>

<section class="trabalhe-conosco title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Trabalhe Conosco</h2>
                <h3>Faça parte do nosso time</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[wpforms id="57"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>