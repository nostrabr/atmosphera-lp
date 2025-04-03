<?php
    include_once __DIR__ . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once  __DIR__ .'/modulos/header/index.php'; ?>

</head>
<body>

    <!-- LOADING -->
    <?php include_once  __DIR__ .'/modulos/loading/index.php'; ?>
    <!-- LOADING -->

    <!-- BANNER INÍCIAL -->
    <?php include_once  __DIR__ .'/modulos/banner-inicial/index.php'; ?>
    <!-- BANNER INÍCIAL -->

    <!-- FORMULÁRIO -->
    <?php include_once  __DIR__ .'/modulos/formulario/index.php'; ?>
    <!-- FORMULÁRIO -->

    <!-- BANNER 2 -->
    <?php include_once  __DIR__ .'/modulos/banner-bem-vindo/index.php'; ?>
    <!-- BANNER 2 -->

    <!-- BANNER SLIDER -->
    <?php include_once  __DIR__ .'/modulos/banner-slider/index.php'; ?>
    <!-- BANNER SLIDER -->

    <!-- GALERIA DE IMAGENS -->
    <?php include_once  __DIR__ .'/modulos/galeria-de-imagens/index.php'; ?>
    <!-- GALERIA DE IMAGENS -->

    <!-- PLANTAS -->
    <?php include_once  __DIR__ .'/modulos/plantas/index.php'; ?>
    <!-- PLANTAS -->

    <!-- DETALHES -->
    <?php include_once  __DIR__ .'/modulos/detalhes/index.php'; ?>
    <!-- DETALHES -->

    <!-- MAPA -->
    <?php include_once  __DIR__ .'/modulos/mapa/index.php'; ?>
    <!-- MAPA -->

    <!-- FOOTER -->
    <?php include_once  __DIR__ .'/modulos/footer/index.php'; ?>
    <!-- FOOTER -->

    
    

    

    <!-- SCROLL ANIMATION -->
    <script src="<?= $base_url; ?>assets/utils/anima-scroll/aos.js"></script>
    <script>AOS.init()</script>

    <!-- BOOTSTRAP -->
    <script src="<?= $base_url; ?>assets/utils/bootstrap/bootstrap.js"></script>

    <!-- LOADING JS -->
    <script src="<?= $base_url; ?>assets/js/loading.js"></script>

    <!-- FANCYBOX JS -->
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-1.js"></script>
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-2.js"></script>

    <!-- JS GLOBAL -->
    <script src="<?= $base_url; ?>assets/js/app.js"></script>
</body>
</html>