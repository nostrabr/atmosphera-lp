<style>
    #empreendimento-img{
        width: 60% !important;
    }

    #container-empreendimento{
        width: 80%;
    }

    #wpp-empree{
        background: #6A9033;
        color: #DCCC97;
        padding: 14px 60px !important;
        border-radius: 5px;
        text-decoration: none;
        font-weight: normal;
        font-size: 18px;
    }

    @media(min-width:1500px){
        #wpp-empree{
            padding: 18px 85px !important;
            font-size: 27px;
        }
    }

    @media(max-width:992px){
        #empreendimento-img{
            width: 90% !important;
        }

        #container-empreendimento{
            width: 90%;
        }

        #wpp-empree{
            padding: 13px 55px !important;
            font-size: 18px;
        }
    }
</style>


<section class="bg-5 py-5">
    <div id="container-empreendimento" class="py-5 mx-auto row">
        <div class="col-12 col-lg-8">
            <img id="empreendimento-img" src='<?= $base_url ?>assets/imagens/site/empreendimento.png'>
        </div>

        <div class="mt-5 mt-lg-0 col-12 col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end">
            <a href="https://api.whatsapp.com/send/?phone=5554999013231&text&type=phone_number&app_absent=0" target="_blank" id="wpp-empree" class="fw-semibold"><i class="me-2 fab fa-whatsapp"></i> Falar agora!</a>
        </div>
    </div>
</section>