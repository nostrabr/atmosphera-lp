<style>
/* Estilo geral */
.bg-1 {
    background-color: #3b4313;
    color: #fff;
}

.plantas-container {
    position: relative;
    text-align: center;
}

.plantas-nav {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    justify-content: center;
    gap: 10px;
    margin-bottom: 1.5rem;
}

.plantas-nav button {
    white-space: nowrap;
    border: none;
    border: 1px solid  #e5d2a7;
    background-color: transparent;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    padding: 15px 50px !important;
    cursor: pointer;
}

.plantas-nav button.active {
    background-color: #e5d2a7;
    color: #3D441E;
}

.plantas-slider {
    position: relative;
}

.plantas-img {
    width: 70%;
    height: auto;
    border-radius: 10px;
}

.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #6b8e23;
    border: none;
    color: white;
    font-size: 24px;
    padding: 0.5rem 1rem;
    cursor: pointer;
    z-index: 10;
    border-radius: 5px;
}

.arrow.left {
    left: 0;
}

.arrow.right {
    right: 0;
}

.btn-fancy, .btn-more {
    margin-top: 1rem;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
}

.btn-fancy {
    background-color: #6b8e23;
    color: white;
    font-weight: 500;
    padding: 15px 45px !important;
}

.btn-more {
    background-color: #e5d2a7;
    color: #3D441E;
    padding: 15px 45px !important;
}
.btn-more:hover {
    background-color: #e5d2a7;
    color: #3D441E !important;
    padding: 15px 45px !important;
}



/* NAV MOBILE */
.plantas-nav-mobile {
    width: 100%;
}

.arrow-mobile {
    background-color: #6b8e23;
    border: none;
    color: white;
    font-size: 20px;
    padding: 7px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.plantas-carousel-wrapper {
    flex: 1;
    text-align: center;
    border: 1px solid #e5d2a7;
    border-radius: 5px;
    padding: 10px 30px;
    color: #fff;
    white-space: nowrap;
    font-weight: bold;
    font-size: 16px;
    background-color: transparent;
}


@media (min-width: 768px) {
    .plantas-nav {
        overflow-x: visible;
    }
}

@media(max-width:992px){
    .arrow.left {
        left: 0;
        display: none;
    }

    .arrow.right {
        right: 0;
        display: none;
    }

    .plantas-img {
        width: 90%;
    }

    #btn-fullscreen{
        font-size: 12px;
    }
    .btn-more{
        font-size: 12px;
    }

    .plantas-nav {
        display: none;
    }
}
</style>

<section class="py-5 bg-1">
    <div class="container mx-auto py-5">
        <h2 class="text-5 fw-semibold text-center mb-0">Plantas</h2>
        <p class="text-white fs-5 mb-5 text-center">Selecione a tipologia desejada:</p>

        <div class="plantas-container">
            <!-- desktop -->
            <div class="plantas-nav mb-5" id="plantas-nav">
                <button data-index="0" class="active">Pavimento Tipo</button>
                <button data-index="1">4º Pav. Área de Lazer</button>
                <button data-index="2">3º Pav. Garagem</button>
                <button data-index="3">2º Pav. Garagem</button>
                <button data-index="4">1º Pav. Térreo</button>
            </div>
            <!-- desktop -->

            <!-- mobile -->
            <div class="px-3 plantas-nav-mobile d-flex align-items-center justify-content-center mb-5 d-md-none">
                <button class="arrow-mobile left" id="mobile-prev">&#8592;</button>
                
                <div class="plantas-carousel-wrapper mx-3">
                    <div class="plantas-carousel-item" id="plantas-carousel-item">Pavimento Tipo</div>
                </div>
                
                <button class="arrow-mobile right" id="mobile-next">&#8594;</button>
            </div>
            <!-- mobile -->

            <div class="plantas-slider">
                <button class="arrow left" id="prev">&#8592;</button>
                <a data-fancybox="gallery" id="plantas-link" href="<?= $base_url; ?>assets/imagens/site/planta-1.png">
                    <img src="<?= $base_url; ?>assets/imagens/site/planta-1.png" id="plantas-img" class="plantas-img" alt="Planta">
                </a>
                <button class="arrow right" id="next">&#8594;</button>
            </div>

            <button class="btn-fancy mt-5" id="btn-fullscreen">Ver em tela cheia <i class="ms-e fas fa-maximize"></i></button><br>
            <a href="<?= $base_url; ?>#formulario" class="d-inline-block btn-more">Saiba mais</a>
        </div>
    </div>
</section>

<script>
const plantas = [
    { title: "Pavimento Tipo", src: "<?= $base_url; ?>assets/imagens/site/planta-1.png" },
    { title: "4º Pav. Área de Lazer", src: "<?= $base_url; ?>assets/imagens/site/planta-2.png" },
    { title: "3º Pav. Garagem", src: "<?= $base_url; ?>assets/imagens/site/planta-3.png" },
    { title: "2º Pav. Garagem", src: "<?= $base_url; ?>assets/imagens/site/planta-4.png" },
    { title: "1º Pav. Téreo", src: "<?= $base_url; ?>assets/imagens/site/planta-5.png" },
];

let currentIndex = 0;

const img = document.getElementById("plantas-img");
const link = document.getElementById("plantas-link");
const navButtons = document.querySelectorAll("#plantas-nav button");

function updateSlider(index) {
    currentIndex = index;
    img.src = plantas[index].src;
    link.href = plantas[index].src;
    navButtons.forEach(btn => btn.classList.remove("active"));
    navButtons[index].classList.add("active");
}

document.getElementById("prev").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + plantas.length) % plantas.length;
    updateSlider(currentIndex);
});

document.getElementById("next").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % plantas.length;
    updateSlider(currentIndex);
});

navButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        updateSlider(parseInt(btn.dataset.index));
    });
});

document.getElementById("btn-fullscreen").addEventListener("click", () => {
    link.click();
});



const mobileTitle = document.getElementById("plantas-carousel-item");

document.getElementById("mobile-prev").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + plantas.length) % plantas.length;
    updateMobileSlider();
});

document.getElementById("mobile-next").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % plantas.length;
    updateMobileSlider();
});

function updateMobileSlider() {
    // atualiza imagem e link
    img.src = plantas[currentIndex].src;
    link.href = plantas[currentIndex].src;

    // atualiza texto no carrossel mobile
    mobileTitle.textContent = plantas[currentIndex].title;

    // sincroniza highlight com o desktop (opcional, caso volte para desktop e queira o botão ativo certo)
    navButtons.forEach(btn => btn.classList.remove("active"));
    if (navButtons[currentIndex]) {
        navButtons[currentIndex].classList.add("active");
    }
}
</script>