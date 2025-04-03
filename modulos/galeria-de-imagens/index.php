<style>
    .swiper {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto; 
    }

    .conatiner-imagem{
        width: 100% !important;
        height: 370px !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        margin: 0px 15px !important;
    }

    .container-img-galeria{
        width: 100%;
        height: 85%;
        overflow: hidden;
    }
    .container-img-galeria img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    #controlador{
        position: absolute;
        z-index: 9;
        top: 55%;
        width: 100% !important;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    #controlador img{
        width: 40px;
    }

    .arrow-galeria-left{
        transform: translateX(-65px);
    }
    .arrow-galeria-right{
        transform: translateX(50px);
    }

    @media(min-width: 1500px) {
        .conatiner-imagem{
            height: 500px !important;
        }
    }

    @media(max-width: 992px) {
        #controlador{
            display: none;
        }
    }
</style>



<section class="py-5 bg-2" style="border-top: 7px solid #DCCC97;">
    <div class="position-relative container py-5 my-4 my-lg-5 mx-auto">
        <h2 class="mb-0 text-center fw-semibold text-5">Galeria de Imagens</h2>
        <p class="mb-5 fs-4 text-white fw-normal text-center">Áreas Comuns</p>

        <!-- slider -->
        <div class="swiper">
            <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/lounge-terraco.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/lounge-terraco.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/sofa.png' style="width: 25px;" class="me-2"> Lounge Terraço</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/pet-place.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/pet-place.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/pet.png' style="width: 25px;" class="me-2"> Pet Place</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/piscina.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/piscina.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/pscina.png' style="width: 25px;" class="me-2"> Piscina</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/playground.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/playground.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/bola.png' style="width: 25px;" class="me-2"> Playground</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/salao-festas.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/salao-festas.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/taca-2.png' style="width: 25px;" class="me-2"> Salão de Festas</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/espaco-kids.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/espaco-kids.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/bebe.png' style="width: 25px;" class="me-2"> Espaço Kids</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/salao-festas-2.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/salao-festas-2.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/taca-2.png' style="width: 25px;" class="me-2"> Salão de festas</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/mini-market.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/mini-market.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/compras.png' style="width: 25px;" class="me-2"> Mini Market</div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="conatiner-imagem">
                            <div class="container-img-galeria rounded"><a href="<?= $base_url ?>assets/imagens/site/espaco-fitness.png" data-fancybox="galeria"><img src='<?= $base_url ?>assets/imagens/site/espaco-fitness.png'></a></div>
                            <div class="px-4 bg-5 py-3 rounded mt-3 text-1 fw-bold w-100"><img src='<?= $base_url ?>assets/imagens/site/tenis.png' style="width: 25px;" class="me-2"> Espaço Fitness</div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- slider -->

        <!-- controlador -->
        <div id="controlador">
            <img class="arrow-galeria-left" src='<?= $base_url ?>assets/imagens/site/arrow-galeria-left.png'>
            <img class="arrow-galeria-right" src='<?= $base_url ?>assets/imagens/site/arrow-galeria-right.png'>
        </div>
        <!-- controlador -->
    </div>
</section>



<script src="<?= $base_url; ?>assets/utils/swiper/swiper.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1, 
        spaceBetween: 3, 
        autoplay: {
            delay: 4000, 
            disableOnInteraction: false,
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
        },
        loop: false, 
        navigation: {
            nextEl: '.arrow-galeria-right',
            prevEl: '.arrow-galeria-left',
        },
    });
</script>