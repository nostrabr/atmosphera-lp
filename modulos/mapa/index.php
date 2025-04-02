<style>
    #content-mapa{
        position: absolute;
        top: 4%;
        width: 100%;
        z-index: 10 !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    #ver-no-mapa{
        background: #DCCC97;
        color: #3D441E;
        padding: 7px 35px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: normal;
    }

    .icone-mapa{
        width: 35px;
    }

    @media(min-width:1500px){
        .title-mapa{
            font-size: 25px;
        }

        #ver-no-mapa{
            padding: 12px 55px;
            margin-top: 15px !important;
        }

        .icone-mapa{
            width: 55px;
        }
    }

    @media(max-width:992px){
        #content-mapa{
            top: 10%;
        }
    }
</style>


<section class="position-relative">
    <div id="content-mapa">
        <img class="icone-mapa" src='<?= $base_url ?>assets/imagens/site/maps.png'>
        <h6 class="title-mapa mt-3 mb-0 text-5 fw-semibold">Rua Eduardo de Brito, 407</h6>
        <h6 class="title-mapa mb-3 mt-0 text-white fw-normal">Divisa entre o Centro e a Vila Fátima</h6>
        <a href="https://maps.app.goo.gl/2XCLUY2pLbxbs26K8" id="ver-no-mapa" target="_blank">Ver no mapa</a>
    </div>

    <img src='<?= $base_url ?>assets/imagens/site/mapa.png' class="w-100 d-none d-lg-block">
    <img src='<?= $base_url ?>assets/imagens/site/mapaa.png' class="w-100 d-block d-lg-none">
</section>