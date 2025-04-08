<style>
    #wpp-float{
        position: fixed;
        bottom: 3%;
        right: 2%;
        z-index: 9 !important;
    }
    #wpp-float img{
        width: 65px;
        height: 65px;
    }

    @media(min-width:1500px) {
        #wpp-float{
            position: fixed;
            bottom: 4%;
            right: 4%;
            z-index: 9 !important;
        }
        #wpp-float img{
            width: 80px;
            height: 80px;
        }
    }
    
    @media(max-width:992px) {
        #wpp-float{
            position: fixed;
            bottom: 3%;
            right: 4%;
            z-index: 9 !important;
        }
        #wpp-float img{
            width: 50px;
            height: 50px;
        }
    }
</style>

<div id="wpp-float">
    <a href="https://api.whatsapp.com/send/?phone=5554999013231&text&type=phone_number&app_absent=0" target="_blank"><img src='<?= $base_url ?>assets/imagens/site/wpp-float.png'></a>
</div>