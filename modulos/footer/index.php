<style>
    #container-logo-footer img{
        width: 70%;
    }

    #wpp-footer{
        background: #6A9033;
        color: #DCCC97;
        padding: 10px 35px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: normal;
    }

    #logo-footer-hover:hover{
        cursor: pointer;
        opacity: 1 !important;
    }
</style>


<!-- FOOTER -->
<footer class="pt-5 bg-1">
    <div class="container py-5 mb-5">
        <div class="row">
            <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-5 pb-3 pb-lg-0 mb-lg-0 col-12 col-lg-5" id="container-logo-footer">
                <a href="<?= $base_url; ?>" class="d-none d-lg-block" id="logo-footer-hover"><img src='<?= $base_url ?>assets/imagens/site/footer-desktop.png'></a>
                <img src='<?= $base_url ?>assets/imagens/site/footer-mobile.png' class="d-block d-lg-none">
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 pb-3 -b-lg-0 mb-lg-0">
                <a href="https://wa.me/5554999013231" target="_blank" class="mb-3 fw-semibold text-5"><i class="me-2 fas fa-phone"></i> +55 54 9 9901-3231</a>
                <a href="mailto:contato@rlcassic.com.br" target="_blank" class="mb-3 fw-semibold text-5"><i class="me-2 fas fa-envelope"></i> contato@rlcassic.com.br</a>
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                    <a href="https://www.instagram.com/varianiconstrutora/" target="_blank" class="text-5 fs-3 me-4"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/construtoravariani/" target="_blank" class="text-5 fs-3"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center align-items-lg-start">
                <h6 class="mb-4 mb-lg-3 text-5 fw-semibold">Rua Eduardo de Brito, Nº 407, Passo Fundo/RS</h6>
                <a href="https://maps.app.goo.gl/2XCLUY2pLbxbs26K8" target="_blank" id="ver-no-mapa" class="fw-semibold">Ver no mapa</a>
                <a href="https://api.whatsapp.com/send/?phone=5554999013231&text&type=phone_number&app_absent=0" target="_blank" id="wpp-footer" class="fw-semibold mt-5"><i class="me-2 fab fa-whatsapp"></i> Saber mais</a>
            </div>
        </div>
    </div>

    <!-- RODAPÉ -->
    <div class="py-4" style="border-top: 1px solid #DCCC97;">
        <div class="container mx-auto d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
            <span class="mb-4 mb-lg-0 small text-5 text-center text-lg-start"><?= date('Y') ?> © ATMOSPHERA APARTMENTS - TODOS OS DIREITOS RESERVADOS.</span>
            <a href="https://nostrabr.com/" target="_blank"><img style="width: 100px;" src='<?= $base_url ?>assets/imagens/site/logo-nostra.png'></a>
        </div>
    </div>
    <!-- RODAPÉ -->
</footer>
<!-- FOOTER -->

