<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milena S. M.</title>
    <link rel="stylesheet" href="estiloo.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS para o banner rotativo */
        #banner {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 700px; /* Aqui você altera a altura */
            overflow: hidden; /* Oculta o conteúdo que sai da área do banner */
            position: relative;
        }

        .carousel {
            display: flex;
            width: 40%; /* 100% para ocupar toda a largura do banner */
            position: center; /* Para sobrepor os itens */
        }

        .carousel-item {
            flex: 0 0 59%; /* Cada item ocupa 100% do espaço */
            opacity: 0; /* Inicialmente invisível */
            transition: opacity 1s ease; /* Efeito de transição de opacidade */
            position: absolute; /* Para que todos fiquem no mesmo lugar */
            top: 0; /* Alinha no topo */
            left: 0.5; /* Alinha à esquerda */
            right: 1;
            down: 1;
        }

        .carousel-item.active {
            opacity: 1; /* Exibe a imagem ativa */
        }

        .carousel-item img {
            width: 59%; /* Imagem ocupa 100% do espaço do item */
            height: 70%; /* Mantém a proporção da imagem */
            max-height: 59%; /* Garante que a imagem não ultrapasse a altura do banner */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div>
                <br><h1 class="msm"><strong>Milena da Silva Magenis</strong></h1></br>
            </div>  
            <ul>
                <li>
                    <a href="https://www.instagram.com/milesmagg_/?hl=pt-br" target="_blank">
                        <i class="fab fa-instagram"></i> Pessoal
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/menina.do.all.star.azul/?hl=pt-br" target="_blank">
                        <i class="fab fa-instagram"></i> Profissional
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/47997817789" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp 
                    </a>
                </li>
                <li>
                    <a href="mailto:milena.magenis@gmail.com" target="_blank" title="milena.magenis@gmail.com">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="far fa-heart"></i> Sobre
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="banner">
        <div class="carousel">
            <div class="carousel-item active">
                <img src="img/img1.jpg" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" alt="Banner 3">
            </div>
            <div class="carousel-item">
                <img src="img/img4.jpg" alt="Banner 4">
            </div>
            <div class="carousel-item">
                <img src="img/img5.jpg" alt="Banner 5">
            </div>
            <div class="carousel-item">
                <img src="img/img6.jpg" alt="Banner 6">
            </div>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');

        function showNextImage() {
            items[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].classList.add('active');
        }

        // Troca a imagem a cada 3 segundos
        setInterval(showNextImage, 3000);
    </script>

    <!-- Grid de Pacotes Turísticos -->
    <section id="pacotes">
        <h1 class="pct"><strong>Pacotes Fotográficos</strong></h1>   
        <div class="grid-container">
            <!-- Linha 1 -->
            <div class="grid-item">Pacote 1</div>
            <div class="grid-item">Pacote 2</div>
            <div class="grid-item">Pacote 3</div>
            <div class="grid-item">Pacote 4</div>
            <!-- Linha 2 -->
            <div class="grid-item">Pacote 5</div>
            <div class="grid-item">Pacote 6</div>
            <div class="grid-item">Pacote 7</div>
            <div class="grid-item">Pacote 8</div>
            <!-- Linha 3 -->
            <div class="grid-item">Pacote 9</div>
            <div class="grid-item">Pacote 10</div>
            <div class="grid-item">Pacote 11</div>
            <div class="grid-item">Pacote 12</div>
            <!-- Linha 4 -->
            <div class="grid-item">Pacote 13</div>
            <div class="grid-item">Pacote 14</div>
            <div class="grid-item">Pacote 15</div>
            <div class="grid-item">Pacote 16</div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MSM  </p>
    </footer>
</body>
</html>
