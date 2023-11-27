<?php
/* Template name: Orçamento */
get_header();
?>

<section class="orcamento title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Orçamento</h2>
                <h3>Fale conosco</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[wpforms id="54"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>