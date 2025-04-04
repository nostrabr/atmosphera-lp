<style>
    .numero-detalhes{
        font-size: 75px !important;
        color: #3D441E;
        margin-bottom: 0px !important;
        font-weight: 600 !important;
    }

    .sub-detalhes{
        color: #3D441E;
    }

    .op-detalhes{
        font-size: 18px;
    }

    .container-img-detalhe{
        width: 100%;
        height: 400px;
        overflow: hidden;
        border-radius: 8px;
    }
    .container-img-detalhe img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    @media(min-width:1500px){
        .numero-detalhes{
            font-size: 85px !important;
        }
        .sub-detalhes{
            font-size: 27px;
        }

        .op-detalhes{
            font-size: 22px;
        }

        .container-img-detalhe{
            height: 500px;
        }

        .control-detalhe{
            font-size: 23px;
        }

        .contador-detalhe{
            font-size: 23px;
        }

        .title-detalhe{
            font-size: 23px;
        }
    }

    @media(max-width:992px){
        .numero-detalhes{
            font-size: 35px !important;
        }
        .sub-detalhes{
            font-size: 12px;
        }

        .op-detalhes{
            font-size: 14px;
        }
    }
</style>


<section class="py-5 bg-5">
    <div class="container mx-auto py-5">
        <h2 class="text-1 text-center fw-semibold mb-5">Detalhes</h2>

        <div class="d-flex justify-content-center">
            <div class="mx-3 mx-lg-5 text-center text-lg-start">
                <h1 class="numero-detalhes">17</h1>
                <h5 class="sub-detalhes">Pavimentos</h5>
            </div>
            <div class="mx-3 mx-lg-5 text-center text-lg-start">
                <h1 class="numero-detalhes">46</h1>
                <h5 class="sub-detalhes">Apartamentos</h5>
            </div>
            <div class="mx-3 mx-lg-5 text-center text-lg-start">
                <h1 class="numero-detalhes">3</h1>
                <h5 class="sub-detalhes">Andares de Garagem</h5>
            </div>
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                <div class="container-img-detalhe"><img src='<?= $base_url ?>assets/imagens/site/detalhe-1.png'></div>
                <!-- desktop -->
                <div class="mt-2 py-2 d-none d-lg-flex justify-content-between">
                    <p class="title-detalhe text-1 fw-semibold" id="ap-title-desktop">Apto 02 dormitórios - Final 01</p>

                    <div>
                        <span class="contador-detalhe fw-semibold text-1 me-4">1-5</span>
                        <i onclick="trocarImg('prev')" style="cursor: pointer;" class="control-detalhe text-1 me-3 fa-solid fa-arrow-left"></i>
                        <i onclick="trocarImg('next')" style="cursor: pointer;" class="control-detalhe text-1 fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <!-- desktop -->

                <!-- mobile -->
                <div class="d-flex px-2 d-lg-none mt-3 py-2 d-flex justify-content-between">
                    <i onclick="trocarImg('prev')" style="cursor: pointer;" class="fs-1 text-1 me-3 fa-solid fa-arrow-left"></i>
                    <p class="text-1 fw-semibold" id="ap-title-mobile">Apto 02 dormitórios - Final 01</p>
                    <i onclick="trocarImg('next')" style="cursor: pointer;" class="fs-1 text-1 fa-solid fa-arrow-right"></i>
                </div>
                <!-- mobile -->
            </div>

            <div class="px-4 px-lg-0 col-12 col-lg-5 ps-lg-5">
                <p class="op-detalhes text-1 mb-4 fw-semibold">Fachada contemporânea com concreto aparente e madeira wpc.</p>
                <p class="op-detalhes text-1 mb-4 fw-semibold">Porte-cochère.</p>
                <p class="op-detalhes text-1 mb-4 fw-semibold">Hall de entrada decorado.</p>
                <p class="op-detalhes text-1 mb-4 fw-semibold">Amplas esquadrias.</p>
                <p class="op-detalhes text-1 mb-4 fw-semibold">Excelente ventilação e iluminação natural dos ambientes.</p>
                <p class="op-detalhes text-1 mb-4 fw-semibold">Ampla área de lazer</p>
            </div>
        </div>
    </div>
</section>


<script>
    let imgIndex = 0;
    const imgList = [
        '<?= $base_url ?>assets/imagens/site/detalhe-1.png',
        '<?= $base_url ?>assets/imagens/site/detalhe-2.png',
        '<?= $base_url ?>assets/imagens/site/detalhe-3.png',
        '<?= $base_url ?>assets/imagens/site/detalhe-4.png',
        '<?= $base_url ?>assets/imagens/site/detalhe-5.png',
    ];

    const imgTitleList = [
        'Apto 02 dormitórios - Final 01',
        'Apto 02 dormitórios - Final 01',
        'Apto 01 dormitório - Final 03',
        'Apto 01 dormitório - Final 03',
        'Porte-cochère',
    ];

    function trocarImg(direction) {
        if (direction === 'next') {
            imgIndex = (imgIndex + 1) % imgList.length;
        } else {
            imgIndex = (imgIndex - 1 + imgList.length) % imgList.length;
        }
        document.querySelector('.container-img-detalhe img').src = imgList[imgIndex];
        document.getElementById('ap-title-desktop').innerHTML = imgTitleList[imgIndex];
        document.getElementById('ap-title-mobile').innerHTML = imgTitleList[imgIndex];
        document.querySelector('.contador-detalhe').innerText = `${imgIndex + 1}-${imgList.length}`;
    }
</script>