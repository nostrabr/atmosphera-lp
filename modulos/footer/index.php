<style>
    #division{
        height: 8px !important;
        width: 100% !important;
        background-image: linear-gradient(to right, #DCCC97, #6A9033, #497B55) !important;
    }

    #container-logo-footer img{
        width: 70%;
    }
</style>


<!-- DIVISION -->
<div id="division"></div>
<!-- DIVISION -->


<!-- FOOTER -->
<footer class="pt-5 bg-1">
    <div class="container py-5 mb-5">
        <div class="row">
            <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-5 pb-3 pb-lg-0 mb-lg-0 col-12 col-lg-5" id="container-logo-footer">
                <img src='<?= $base_url ?>assets/imagens/site/footer-desktop.png' class="d-none d-lg-block">
                <img src='<?= $base_url ?>assets/imagens/site/footer-mobile.png' class="d-block d-lg-none">
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column align-items-center align-items-lg-start mb-5 pb-3 -b-lg-0 mb-lg-0">
                <a href="https://wa.me/5554999013231" target="_blank" class="mb-3 fw-semibold text-5"><i class="me-2 fas fa-phone"></i> +55 54 9 9901-3231</a>
                <a href="mailto:contato@construtoravariani.com.br" target="_blank" class="mb-3 fw-semibold text-5"><i class="me-2 fas fa-envelope"></i> contato@construtoravariani.com.br</a>
                <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                    <a href="https://www.instagram.com/varianiconstrutora/" target="_blank" class="text-5 fs-3 me-4"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/construtoravariani/" target="_blank" class="text-5 fs-3"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column align-items-center align-items-lg-start">
                <h6 class="mb-4 mb-lg-3 text-5 fw-semibold">Rua Eduardo de Brito, Nº 407, Passo Fundo/RS</h6>
                <a href="https://maps.app.goo.gl/2XCLUY2pLbxbs26K8" target="_blank" id="ver-no-mapa" class="fw-semibold">Ver no mapa</a>
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

