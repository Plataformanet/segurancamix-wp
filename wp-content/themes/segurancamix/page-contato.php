<?php
/* Template name: Contato */
get_header();
?>

<section class="contato title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contato</h2>
                <h3>Fale conosco</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>

                <div class="info-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-contact__content">
                                    <a href="tel:1145911709" class="info-contact__item" target="_blank" rel="noopener">
                                        <i class="info-contact__icon icon fas fa-phone"></i>
                                        <span>(11) 0000-0000</span>
                                    </a>
                                    <a href="mailto:contato@segurancamix.com.br" class="info-contact__item" target="_blank" rel="noopener">
                                        <i class="info-contact__icon icon fas fa-envelope"></i>
                                        <span>contato@segurancamix.com.br</span>
                                    </a>
                                    <a href="mailto:contato@segurancamix.com.br" class="info-contact__item" target="_blank" rel="noopener">
                                        <i class="info-contact__icon icon fas fa-map-marker-alt"></i>
                                        <span>R. Eng. José Bueno Bicalho, 443 - Jardim Vergueiro (Sacoma)</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[wpforms id="43"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14620.828922180315!2d-46.602768!3d-23.6327485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b5d53629c5d%3A0x83e5895df5a089f5!2sSeguran%C3%A7a%20Mix%20Blindagem%20Arquitet%C3%B4nica!5e0!3m2!1spt-BR!2sbr!4v1700677173512!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php get_footer(); ?>