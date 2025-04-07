<style>
    #container-slider-desktop{
        position: absolute;
        right: 0;
        top: 0;
        height: 99%;
        z-index: 8;
    }
    #container-slider-mobile-mobile{
        display: none;
    }

    #control-slider{
        position: absolute;
        top: 3%;
        right: 2%;
        z-index: 9;
        display: flex;
        flex-direction: column;
    }

    @media(max-width:992px){
        #container-slider-mobile{
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 8;
        }

        #container-slider-desktop{
            display: none;
        }

        #control-slider-mobile{
            position: absolute;
            bottom: 2%;
            left: 4%;
            z-index: 9;
            display: flex;
            flex-direction: column;
        }
    }
</style>


<section class="position-relative">
    <img src='<?= $base_url ?>assets/imagens/site/banner-slider-desktop.png' class="w-100 d-none d-lg-block">
    <img src='<?= $base_url ?>assets/imagens/site/banner-slider-mobile.png' class="w-100 d-block d-lg-none">
    
    <div id="container-slider-desktop">
        <img src='<?= $base_url ?>assets/imagens/site/slider-desktop-1.png' class="h-100 d-none d-lg-block" id="img-slider-desktop">
    </div>

    <div id="container-slider-mobile">
        <img src='<?= $base_url ?>assets/imagens/site/slider-mobile-1.png' class="w-100 d-block d-lg-none" id="img-slider-mobile">
    </div>

    <div id="control-slider" class="d-none d-lg-flex">
        <img onclick="trocarSlider('prev')" style="width: 50px; cursor: pointer;" class="mb-3" src='<?= $base_url ?>assets/imagens/site/up-slider.png'>
        <img onclick="trocarSlider('next')" style="width: 50px; cursor: pointer;" src='<?= $base_url ?>assets/imagens/site/down-slider.png'>
    </div>

    <div id="control-slider-mobile" class="d-flex d-lg-none">
        <img onclick="trocarSlider('prev')" style="width: 40px; cursor: pointer;" class="mb-3" src='<?= $base_url ?>assets/imagens/site/up-slider.png'>
        <img onclick="trocarSlider('next')" style="width: 40px; cursor: pointer;" src='<?= $base_url ?>assets/imagens/site/down-slider.png'>
    </div>
</section>


<script>
    function trocarSlider(direcao){
        let imgSliderDesktop = document.getElementById('img-slider-desktop');
        let imgSliderMobile = document.getElementById('img-slider-mobile');
        let imgAtualDesktop = imgSliderDesktop.src.split('/').pop();
        let imgAtualMobile = imgSliderMobile.src.split('/').pop();
        
        let indexAtualDesktop = parseInt(imgAtualDesktop.split('-')[2].split('.')[0]);
        let indexAtualMobile = parseInt(imgAtualMobile.split('-')[2].split('.')[0]);

        if(direcao == 'next'){
            indexAtualDesktop++;
            indexAtualMobile++;
        }else{
            indexAtualDesktop--;
            indexAtualMobile--;
        }

        if(indexAtualDesktop > 6) indexAtualDesktop = 1;
        if(indexAtualDesktop < 1) indexAtualDesktop = 6;

        if(indexAtualMobile > 6) indexAtualMobile = 1;
        if(indexAtualMobile < 1) indexAtualMobile = 6;

        imgSliderDesktop.src = '<?= $base_url ?>assets/imagens/site/slider-desktop-' + indexAtualDesktop + '.png';
        imgSliderMobile.src = '<?= $base_url ?>assets/imagens/site/slider-mobile-' + indexAtualMobile + '.png';
    }
</script>