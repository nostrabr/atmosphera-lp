<style>
    #banner-inicial{
        position: relative;
    }
    #arrow-down{
        position: absolute;
        bottom: 10%;
        left: 12%;
        z-index: 10 !important;
    }
    #arrow-down img{
        width: 55px;
    }
    @media(max-width:992px) {
        #arrow-down{
            bottom: 7%;
            left: 6%;
        }

        #arrow-down img{
            width: 35px;
        }
    }
</style>

<section id="banner-inicial">
    <img class="w-100 d-none d-lg-block" src='<?= $base_url; ?>assets/imagens/site/desktop.png'>
    <img class="w-100 d-block d-lg-none" src='<?= $base_url; ?>assets/imagens/site/mobile.png'>

    <div id="arrow-down">
        <a href="#formulario"><img src='<?= $base_url ?>assets/imagens/site/arrow-down.png' alt="Seta para baixo"></a>
    </div>
</section>