<?php
/* Template name: Projeto Selecionado */
get_header();
?>

<section class="projetos title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Projetos</h2>
                <h3>Projeto 01</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="project-main__gallery">
                        <div class="project-main__gallery-main owl-carousel owl-theme" id="sync1">
                            <a href="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" data-lightbox="project-gallery" class="project-main__gallery-main-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </a>

                            <a href="" data-lightbox="project-gallery" class="project-main__gallery-main-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </a>

                        </div>
                        <div class="project-main__gallery-thumb owl-carousel owl-theme" id="sync2">
                            <div class="project-main__gallery-thumb-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </div>

                            <div class="project-main__gallery-thumb-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </div>
                            <div class="project-main__gallery-thumb-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </div>

                            <div class="project-main__gallery-thumb-item">
                                <img src="<? bloginfo('template_url') ?>/assets/images/projeto-01.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>