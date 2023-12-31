<footer>
    <section class="home-fale_conosco">
        <p>Receba as nossas novidades!</p>
        <!-- <button class="home-btn__solicitar_orcamento">
            <a href="http://">SOLICITAR ORÇAMENTO</a>
        </button> -->
        <?php echo do_shortcode('[wpforms id="60"]'); ?>
    </section>
    <section class="info-rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="<? bloginfo('template_url') ?>/assets/images/logotipo-rodape.png" alt="Segurança Mix">
                </div>
                <div class="col-md-3">
                    <div class="footer-contact__content">
                        <a href="tel:551123512762" class="footer-contact__item" target="_blank" rel="noopener">
                            <i class="footer-contact__icon icon fas fa-phone"></i>
                            <span>(11) 2351-2762 / 2351-2716</span>
                        </a>
                        <a href="mailto:contato@segurancamix.com.br" class="footer-contact__item" target="_blank" rel="noopener">
                            <i class="footer-contact__icon icon fas fa-envelope"></i>
                            <span>contato@segurancamix.com.br</span>
                        </a>
                        <a href="https://maps.app.goo.gl/1Vk2ed1wY3b5Wmst8" class="footer-contact__item" target="_blank" rel="noopener">
                            <i class="footer-contact__icon icon fas fa-map-marker-alt"></i>
                            <span>R. Eng. José Bueno Bicalho, 443 - Jardim Vergueiro (Sacomã)</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-contact__social social">
                        <a href="https://www.instagram.com/seguranca_mix/" rel="noopener" target="_blank" class="social__item" title="Instagram">
                            <i class="social__icon icon fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100066742211796" rel="noopener" target="_blank" class="social__item" title="Facebook">
                            <i class="social__icon icon fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/segurancamix/" rel="noopener" target="_blank" class="social__item" title="LinkedIn">
                            <i class="social__icon icon fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ouvidoria">
                        <h2>Ouvidoria</h2>
                        <div class="ouvidoria-contact__content">
                            <a href="tel:551123512762" class="ouvidoria-contact__item" target="_blank" rel="noopener">
                                <i class="ouvidoria-contact__icon icon fas fa-phone"></i>
                                <span>(11) 2351-2762 </span>
                            </a>
                            <a href="https://wa.me/5511957871570" class="ouvidoria-contact__item" target="_blank" rel="noopener">
                                <i class="ouvidoria-contact__icon icon fab fa-whatsapp"></i>
                                <span>(11) 95787-1570</span>
                            </a>
                            <a href="mailto:contato@segurancamix.com.br" class="ouvidoria-contact__item" target="_blank" rel="noopener">
                                <i class="ouvidoria-contact__icon icon fas fa-envelope"></i>
                                <span>contato@segurancamix.com.br</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer__copyright">
        <div class="container info-footer">
            <span>© Plataformanet <?php echo Date('Y') ?> - Todos os direitos reservados</span>
            <span class="politica-privacidade">Política de privacidade</span>
        </div>
    </div>
</footer>
</main>
<? wp_footer(); ?>
</body>

</html>