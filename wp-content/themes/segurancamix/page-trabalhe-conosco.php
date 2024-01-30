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
                    Junte-se à nossa equipe dedicada! Estamos em busca de talentos para fazer parte do nosso time. Confira nossas oportunidades e envie sua candidatura hoje mesmo!
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