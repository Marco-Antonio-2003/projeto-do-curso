<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Rent Mobility</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        .cars li {
            display: inline-block;
            width: 30%;
            margin-right: 4%;
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
    </style>
</head>


<script src="script.js"></script>
<header>
    <div class="col-3">
        <img src="logoSiteSmall.png" style="border-radius: 20px; width: 360px;">
    </div>
    <div class="col-9 row justify-content-end">
        <div class="col-2">
            <div class="btn_header">
                <a href="adc-veiculos.php">
                    <button class="btnLogin-popup"> Gerenciar Veículos </button>
                </a>
            </div>
        </div>
        <div class="col-2">
            <div class="btn_header">
                <a href="gerenciar-usu.php">
                    <button class="btnLogin-popup"> Gerenciar clientes </button>
                </a>
            </div>
        </div>  
        <div class="col-2">
            <div class="btn_header">
                <a href="login.php">
                    <button class="btnLogin-popup"> Produtos </button>
                </a>
            </div>
        </div>
            <div class="col-2">
            <div class="btn_header">
                <a href="login.php">
                    <button class="btnLogin-popup"> Entrar </button>
                </a>
            </div>
            </div>
            <div class="col-2">
                <div class="login">
                    <a href="login.php">
                        <button class="btnLogin-popup"> Conta </button>
                    </a>
                </div>
            </div>        
    </div>



</header>
<br>

<body style="background-image: url('pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <!-- imagem creditada a aleksandar pasaric -->
    <h2 style="color: white; margin-left: 725px;">Horário de serviço: 7:30 até as 22:30</h2>
    <script src="script3.js"></script>
    <div class="container">
        <div class="localizacao">
            <div class="caixa-pesquisa">
                <form>
                    <div class="row">
                        <div class="col-8">
                            <input type="text" id="retirada" placeholder="Pesquisar Carro"
                                style="width: 100%;height: 40px;" name="retirada">
                        </div>
                        <div class="col-4">
                            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                style="width: 100%;background-color: white;color: grey;"
                                aria-expanded="false">Marcas</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-1">
                                    <p>de</p>
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
                                    <p>Ate</p>
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
                                    <div class="img">
                                        <img style="border-radius:5px;" src="hb20_2020.jpeg" alt="carro">
                                    </div>

                                    <div class="car-price">
                                        <p>Diária: R$ 100,98</p>
                                        <p>Semana: R$ 500,98</p>
                                        <a href="detalhes.php?id=1">
                                            <button id="ver-mais-btn">Ver mais sobre</button>
                                        </a>

                                    </div>
                                </li>


                                <li>
                                    <div class="car_info">
                                        <h4>Chevrolet Onix 2019</h4>
                                        <h5>1.0 com 3 cilindros turbo</h5>
                                    </div>
                                    <img style="border-radius: 5px;" src="onix2019.jpg" alt="Onix">
                                    <div class="car-price">
                                        <p>Diária: R$ 120,99</p>
                                        <p>Semana: R$ 600,95</p>
                                        <a href="detalhes.php?id=5">
                                            <button id="ver-mais-btn">Ver mais sobre</button>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="car_info">
                                        <h4>Ford Fusion 2017</h4>
                                        <h5>Flex motor EcoBoost 2.0</h5>
                                    </div>

                                    <img style="border-radius: 5px;" src="fusionflex_capa_620x350.jpg" alt="Fusion">
                                    <div class="car-price">
                                        <p>Diária: R$ 140,99</p>
                                        <p>Semana: R$ 650,99</p>
                                        <a href="detalhes.php?id=6">
                                            <button id="ver-mais-btn">Ver mais sobre</button>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>


                    <!--                  e   <div id="esportivos" class="back_fam-esport">
                        <div class="img">
                            <h2>Carros Esportivos</h2>
                        </div>



                            </li>
                            <li>
                                <div class="car-price-eps-m3">
                                    <h4>BMW M3 2019</h4>
                                    <h5>431 cv a 5500 rpm</h5>
                                </div>
                                <div class="img-esp-m3">
                                    <img style="border-radius: 5px;" src="M3_2019.jpg" alt="M3_2019">
                                </div>

                                <div class="car-price-eps">
                                    <p>Diária: R$ 325,99</p>
                                    <p>Semana: R$ 2198,93</p>
                                    <a href="ver_mais_m3.html">
                                        <button id="ver-mais-btn">Ver mais sobre</button>
                                    </a>
                                </div>


                            </li>
                            <li>
                                <div class="car_info-eps-tt">
                                    <h4>Audi TT Rs 2022</h4>
                                    <h5>550 cv 2.5 TFSI </h5>
                                </div>
                                <div class="img-esp-tt">
                                    <img style="border-radius: 5px;" src="audi_TT_rs.jfif" alt="Audi">
                                </div>

                                <div class="car-price-eps">
                                    <p>Diária: R$ 355,95</p>
                                    <p>Semana: R$ 2495,65</p>
                                    <a href="ver_mais_audi.html">
                                        <button id="ver-mais-btn">Ver mais sobre</button>
                                    </a>
                                </div>


                            </li>
                        </ul>
                    </div> -->

                </section>
                <section class="row cars">

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
                                    <div class="img">
                                        <img style="border-radius: 5px;" src="Mercedes_CLA200.jpg" alt="CLA200">
                                    </div>

                                    <div class="car-price">
                                        <p>Diária: R$ 230,99</p>
                                        <p>Semana: R$ 1459,99</p>
                                        <a href="detalhes.php?id=7">
                                            <button id="ver-mais-btn">Ver mais sobre</button>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="car_info">
                                        <h4>Chevrolet Onix 2019</h4>
                                        <h5>1.0 com 3 cilindros turbo</h5>
                                    </div>
                                    <img style="border-radius: 5px;" src="M3_2019.jpg" alt="M3_2019">
                                    <div class="car-price">
                                        <p>Diária: R$ 120,99</p>
                                        <p>Semana: R$ 600,95</p>
                                        <a href="detalhes.php?id=8">
                                            <button id="ver-mais-btn">Ver mais sobre</button>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="car_info">
                                        <h4>Ford Fusion 2017</h4>
                                        <h5>Flex motor EcoBoost 2.0</h5>
                                    </div>

                                    <img style="border-radius: 5px;" src="audi_TT_rs.jfif" alt="Audi">
                                    <div class="car-price">
                                        <p>Diária: R$ 140,99</p>
                                        <p>Semana: R$ 650,99</p>
                                        <a href="detalhes.php?id=9">
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
    <!-- <footer style="font-style: italic; ">
        <p>Sobre nossa empresa: Alugar um carro da Rent Mobility em Sorocaba pode ser uma ótima opção para quem busca
            liberdade e praticidade durante a viagem.</p>
        <p> Com uma frota de veículos bem cuidada e diversificada, é possível escolher o carro que melhor atende às suas
            necessidades. </p>
        <p>Além disso, a Rent Mobility oferece preços competitivos e um serviço de atendimento ao cliente de qualidade,
        </p>
        <p>garantindo uma experiência satisfatória ao alugar um carro em Sorocaba.</p>

        <a style="color: rgb(96, 96, 253);" href="pagina_termos.html">termos e serviços</a> <br> <a
            style="color: rgb(96, 96, 253);" href="politica_privacidade.html">política de privacidade</a>
        <p>&copy; 2023 Rent Mobility</p>
    </footer> -->
</body>

</html>