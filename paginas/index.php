<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Rent Mobility</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
    .cars li {
        display: inline-block;
        width: 30%;
        vertical-align: top;
        text-align: center;
    }

    .cars li:last-child {
        margin-right: 0;
    }

    .cars li img {
        max-width: 50%;
        height: auto;
    }

    .car-price {
        padding-top: 10px
    }

    .search-icon {
        color: white;
        /* Defina a cor desejada para o ícone de pesquisa */
        font-size: 28px;
        /* Ajuste o tamanho do ícone conforme necessário */
        margin-right: 5px;
        /* Adiciona um pequeno espaçamento entre o texto e o ícone */
    }

    .btn_header a {
        text-decoration: none;
        color: white;
        /* Defina a cor desejada para os links no cabeçalho */
    }

    /* Adiciona estilos para alinhar verticalmente o texto e o ícone */
    .btn_header a {
        display: flex;
        align-items: center;
        padding: 30px;
        border-radius: 6px;
        width: 170px;
        height: 40px;
        border: 2px solid white;
        color: white;
        font-weight: 500;
    }
    </style>
</head>


<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<header>
    <div class="col-3">
        <img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;">
    </div>
    <div class="col-9 row justify-content-end">
        <div class="col-2">
            <div class="btn_header">
                <a href="../paginas/adc-veiculos.php">
                    Gerenciar Veículos
                </a>
            </div>
        </div>
        <div class="col-2">
            <div class="btn_header">
                <a href="../paginas/gerenciar-usu.php">
                    Gerenciar clientes
                </a>
            </div>
        </div>

        <div class="col-2">
            <div class="btn_header">

                <a href="../paginas/ver-mais-carro.php">
                    Pesquisar Carros
                    <ion-icon style="font-size:100px;padding-left:10px" name="search-outline" class="search-icon"></ion-icon>
                </a>

            </div>
        </div>

        <div class="col-2" >
            <div class="btn_header" style="text-align: center;">
                <a href="../paginas/login.php" style="width:60%">
                    Entrar
                </a>
            </div>
        </div>
    </div>
</header>
<br>

<br>

<body style="background-image: url('../img/pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <h2 style="color: white; margin-left: 725px;">Horário de serviço: 7:30 até as 22:30</h2>
    <!--
<script src="../paginas/script3.js"></script>
    <div class="container">
        <div class="localizacao">
            <div class="caixa-pesquisa">
                <form>
                    <div class="row">
                       
                        <div class="col-4">
       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong>de</strong>
                                </div>
                                <div class="row col-11 ">
                                    <div class="col-7">
                                        <input type="date" id="retirada" placeholder="Pesquisar Carro"
                                            style="width:100%;height: 40px;" name="retirada">
                                    </div>
                                    <div class="col-5">
                                        <input type="time" id="retirada" placeholder="Pesquisar Carro"
                                            style="width:100%;height: 40px;" name="retirada">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong>Até</strong>
                                </div>
                                <div class="col-11">
                                    <div class="row ">
                                        <div class="col-7">
                                            <input type="date" id="retirada" placeholder="Pesquisar Carro"
                                                style="width:100%;height: 40px;" name="retirada">
                                        </div>
                                        <div class="col-5">
                                            <input type="time" id="retirada" placeholder="Pesquisar Carro"
                                                style="width:100%;height: 40px;" name="retirada">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>




    -->


    <div>
        <main>
            <section class="row cars">
                <div class="col back_fam">
                    <div class="img">
                        <h2>Carros familiares</h2>
                    </div>
                    <div class="img-car">
                        <br>
                        <ul>
                            <li>
                                <div class="car_info">
                                    <h4>HB20 2020</h4>
                                    <h5>1.0 flex automático</h5>
                                </div>
                                <div class="img" style="text-align: center;">
                                    <img style="border-radius: 5px; width: 50%; margin: auto;"
                                        src="../img/hb20_2020.jpeg" alt="carro">
                                </div>

                                <div class="car-price">
                                    <p>Diária: R$ 100,98</p>

                                    <a href="../paginas/detalhes.php?id=1">
                                        <button id="ver-mais-btn">Ver mais sobre</button>
                                    </a>

                                </div>
                            </li>


                            <li>
                                <div class="car_info">
                                    <h4>Chevrolet Onix 2019</h4>
                                    <h5>1.0 com 3 cilindros turbo</h5>
                                </div>
                                <div class="img" style="text-align: center;">
                                    <img style="border-radius: 5px; width: 50%; margin: auto;" src="../img/onix2019.jpg"
                                        alt="Onix">
                                </div>
                                <div class="car-price">
                                    <p>Diária: R$ 120,99</p>

                                    <a href="../paginas/detalhes.php?id=5">
                                        <button id="ver-mais-btn">Ver mais sobre</button>
                                    </a>
                                </div>
                            </li>


                            <li>
                                <div class="car_info">
                                    <h4>Ford Fusion 2017</h4>
                                    <h5>Flex motor EcoBoost 2.0</h5>
                                </div>

                                <div class="img" style="text-align: center;">
                                    <img style="border-radius: 5px; width: 50%; margin: auto;"
                                        src="../img/fusionflex_capa_620x350.jpg" alt="Fusion">
                                </div>
                                <div class="car-price">
                                    <p>Diária: R$ 140,99</p>

                                    <a href="../paginas/detalhes.php?id=6">
                                        <button id="ver-mais-btn">Ver mais sobre</button>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
    </div>

    <section class="row cars" style="padding-left:40px;padding-right:40px">
        <div class="col back_fam">
            <div class="img">
                <h2>Carros Esportivos</h2>
            </div>
            <div class="img-car">
                <br>
                <ul>
                    <li>
                        <div class="car_info">
                            <h4>Mercedes CLA200 2019</h4>
                            <h5>156 cv(a) a 5300 rpm</h5>
                        </div>
                        <div class="img" style="text-align: center;">
                            <img style="border-radius: 5px; width: 50%; margin: auto;" src="../img/Mercedes_CLA200.jpg"
                                alt="CLA200">
                        </div>

                        <div class="car-price">
                            <p>Diária: R$ 230,99</p>

                            <a href="../paginas/detalhes.php?id=7">
                                <button id="ver-mais-btn">Ver mais sobre</button>
                            </a>
                        </div>
                    </li>


                    <li>
                        <div class="car_info">
                            <h4>BMW M3</h4>
                            <h5>1.0 com 3 cilindros turbo</h5>
                        </div>
                        <div class="img" style="text-align: center;">
                            <img style="border-radius: 5px; width: 50%; margin: auto;" src="../img/M3_2019.jpg"
                                alt="M3_2019">
                        </div>
                        <div class="car-price">
                            <p>Diária: R$ 245,45</p>

                            <a href="../paginas/detalhes.php?id=8">
                                <button id="ver-mais-btn">Ver mais sobre</button>
                            </a>
                        </div>
                    </li>


                    <li>
                        <div class="car_info">
                            <h4>AUDI TT rs </h4>
                            <h5>Flex motor EcoBoost 2.0</h5>
                        </div>

                        <div class="img" style="text-align: center;">
                            <img style="border-radius: 5px; width: 50%; margin: auto;"
                                src="../img/audi-tt-rs-2022-7.jpg" alt="Audi">
                        </div>
                        <div class="car-price">
                            <p>Diária: R$ 270,50</p>

                            <a href="../paginas/detalhes.php?id=9">
                                <button id="ver-mais-btn">Ver mais sobre</button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </main>
    </div>
    </div>


    <script src="script.js"></script>
</body>

</html>