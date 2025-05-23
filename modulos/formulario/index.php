<style>
    .container-content-formulario{
        width: 100%;
    }
    .container-content-formulario img{
        width: 75%;
    }

    .form-input{
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #DCCC97;
        padding: 10px 3px !important;
        color: #DCCC97 !important;
    }
    .form-input::placeholder{
        color: #DCCC97 !important;
        font-weight: bold;
    }
    #button-form{
        background-color: #DCCC97;
        color: #3D441E;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 6px;
        width: 180px;
        transition: .3s;
    }
    #button-form:hover{
        background-color: transparent;
        color: #DCCC97;
        border: 1px solid #DCCC97;
        transition: .5s;
    }
    .form-input:focus {
        outline: none;
    }

    @media(max-width:992px){
        .container-content-formulario img{
            width: 90%;
        }
    }

    #division{
        height: 8px !important;
        width: 100% !important;
        background-image: linear-gradient(to right, #DCCC97, #6A9033, #497B55) !important;
    }
</style>

<!-- DIVISION -->
<div id="division"></div>
<!-- DIVISION -->


<section id="formulario" class="bg-1 py-5" style="border-bottom: 1px solid #DCCC97;">
    <div class="container mx-auto row py-3">
        <div class="col-12 col-lg-6 mb-5 mb-lg-0">
            <div class="container-content-formulario"><img src='<?= $base_url ?>assets/imagens/site/content-contato.png'></div>
        </div>

        <div class="col-12 col-lg-6">
            <form onsubmit="loading()" class="d-flex flex-column align-items-center" action="<?= $base_url; ?>helpers/enviar-email.php" method="post">
                <input type="text" name="nome" id="nome" placeholder="Seu nome" required class="form-input mb-4 w-100">
                <input type="email" name="email" id="email" placeholder="Seu e-mail" required class="form-input mb-4 w-100">
                <input type="tel" inputmode="tel" maxlength="15" name="tel" id="tel" placeholder="Seu telefone" required class="form-input mb-5 w-100">

                <button type="submit" id="button-form">Enviar</button>
            </form>
        </div>
    </div>
</section>



<script>    
    document.getElementById('tel').addEventListener('keyup', (e) => {
        let input = e.target;
        input.value = phoneMask(input.value);
    });
    
    const phoneMask = (value) => {
        if (!value) return "";
        value = value.replace(/\D/g, '');
        if (value.length <= 2) {
            return `(${value})`;
        } else if (value.length <= 6) {
            return `(${value.slice(0, 2)}) ${value.slice(2)}`;
        } else if (value.length <= 10) {
            return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6)}`;
        } else {
            return `(${value.slice(0, 2)}) ${value.slice(2, 6)}-${value.slice(6, 10)}${value.slice(10, 15)}`;
        }
    };

    <?php
        if (isset($_GET['success'])) {
            if ($_GET['success'] == 'true') {
                echo "alert('Mensagem enviada com sucesso!');";
                echo "history.pushState({}, document.title, window.location.pathname);";
            }
        }
    ?>
</script>