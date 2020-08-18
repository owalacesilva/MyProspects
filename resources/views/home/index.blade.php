@extends('layouts.home')

@section('content')
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center mb-5">
                <a class="d-block">
                    <img alt="Header Logo" src="/img/logo.png" class="img-fluid" />
                </a>
            </div>
            <div class="col-lg-7"></div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <a class="d-block mb-4">
                    <img alt="Image 1" src="/img/image2.png" class="img-fluid" />
                </a>    
            </div>
            <div class="col-lg-7">
                <h3 class="main-text"> QUER INICIAR SEU NEGÓCIO PRÓPRIO COM UM PRODUTO QUE TEM ALTO POTENCIAL DE LUCRO E QUE É DESEJADO POR MUITOS?</h3>
                <p class="main-subtext">Te ensinaremos a construir uma nova fonte de renda com resultados baseados com seu próprio mérito.</p>
            </div>
        </div>
    </div>
</header>

<!-- Video -->
<div class="section" style="background-color: #efefef;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="main-video mb-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_VceQT4Y2Hk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="text-center font-weight-bold">Insira seus dados</h2>
                <p>Um de nossos Líderes entrará em contato com você, pelo WHATSAPP</p>
                <form role="form" class="form" method="post" action="{{ route('home_create_contact') }}">
                    @csrf
                    <div class="form-group">
                        <label for="display_name" class="control-label">Nome Completo</label>
                        <input type="text" id="display_name" name="display_name" class="form-control" placeholder="Informe seu nome" required />
                    </div>
                    <div class="form-group">
                        <label for="whatsapp" class="control-label">WhatsApp</label>
                        <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="Informe seu whatsapp" required />
                    </div>
                    <div class="form-group">
                        <label for="type" class="control-label">Quero ser</label>
                        <select id="type" name="type" class="form-control" required>
                            <option value>Selecione um opcao</option>
                            <option value="consultor">Consultor</option>
                            <option value="consumidor">Consumidor</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-custom btn-lg btn-block mb-5">saber mais</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Beneficios -->
<div class="section benefits" style="background-color: #5d5d5d;color: white;">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">BENEFÍCIOS DE INICIAR SEU NEGÓCIO</h2>
            <p class="subtitle mb-5">Além da possibilidade de ganhar mais, existem outros benefícios:</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b1.png" alt="B1" class="img-fluid" />
                <h4 class="mb-3">Liberdade de Horário</h4>
                <p>Trabalhar quanto quiser e nos horários que forem ideais pra você.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b2.png" alt="B2" class="img-fluid" />
                <h4 class="mb-3">Flexibilidade de Investimento</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b3.png" alt="B3" class="img-fluid" />
                <h4 class="mb-3">Sem cobrança</h4>
                <p>Trabalhar de acordo com suas ambições, podendo atingir SEUS objetivos e metas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b4.png" alt="B4" class="img-fluid" />
                <h4 class="mb-3">Treinamento e suporte</h4>
                <p>Ter um ambiente virtual com treinamentos em vídeo e suporte por Whatsapp.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b5.png" alt="B5" class="img-fluid" />
                <h4 class="mb-3">Desenvolvimento Profissional</h4>
                <p>Aprender e desenvolver habilidades super valorizadas no mercado de trabalho.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b6.png" alt="B6" class="img-fluid" />
                <h4 class="mb-3">Sistema meritocrático</h4>
                <p>Poder aumentar seus ganhos, aumentando sua dedicação.</p>
            </div>
        </div>
    </div>
</div>

<!-- Simulacao de Lucros -->
<div class="section simulations" style="background-color: #e0e0e0;color: #333;">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">SIMULAÇÃO DE LUCRO EM 30 DIAS</h2>
            <p class="subtitle mb-5">Se você vender algumas unidades por dia no preço sugerido, você poderá incrementar sua renda mensal com valores muito atrativos.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 1" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 1 CHÁ X R$ 20 X 30 DIAS R$ 600 LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 2" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 2 CHÁS X R$ 20 X 30 DIAS R$ 1200 LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 3" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 3 CHÁ X R$ 20 X 30 DIAS R$ 1800 LUCRO NO MÊS</p>
            </div>
        </div>
    </div>
</div>

<!-- Depoimentos -->
<div class="section testemuals">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">DEPOIMENTOS</h2>
            <p class="subtitle mb-5">Conheça um pouco a história de pessoas que estão tendo sucesso na comercialização do Superchá</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="/img/dep1.png" alt="Depoimento 1" class="img-fluid" />
                <h4>Celma Martins</h4>
                <p>Meu nome é Celma Martins, sou representante da Maravilhas da Terra a 3 meses. Somente com a venda do produto tenho uma renda mensal média mensal de R$ 2.500,00. No mês de fevereiro cheguei a lucrar R$ 3.400,00 somente com vendas dos Chás, estou extremamente feliz com os resultados financeiros e de bem-estar que venho obtendo com o produto.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep2.png" alt="Depoimento 2" class="img-fluid" />
                <h4>Camila Costa</h4>
                <p>Eu sou Camilla Costa, campeã de três tambores, comecei a usar os produtos da Maravilhas da Terra por indicação do meu personal e do nutricionista e tive um resultado incrível.  Várias pessoas começaram a me pergutar de que forma tinha emagreci em tão pouco tempo, com isso já me interessei em vender o Superchá SB. O mais fantástico foi descobrir que existia outros produtos maravilhosos, além de um grande negócio, que está me permitindo ganhar uma boa  grana.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep3.png" alt="Depoimento 3" class="img-fluid" />
                <h4>Jaqueline Queiros</h4>
                <p>Olá meu nome é Jaqueline Queiros e posiciono os produtos da Maravilhas da Terra no mercado a 3 meses. Sou funcionária pública, mas como precisamos ter mais de uma fonte de renda, a Maravilhas da Terra veio me proporcionar essa segunda renda em minha vida.  Estou muito satisfeita com meus resultados. O Superchá SB é um produto que se vende sozinho e esse mês já estou com novas estratégias para aumentar minhas vendas!</p>
            </div>
        </div>
    </div>
</div>

<!-- Contato -->
<div class="section contact" style="background-color: #5d5d5d;color: white;">
    <div class="container">
        <h5 class="text-center mb-3">Estou à disposição caso queira entrar em contato direto comigo, seguem os dados abaixo:</h5>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 text-center">
                <img src="/img/profile.png" alt="Profile" class="img-fluid" />
            </div>
            <div class="col-lg-3 text-center">
                <p class="mb-1">Aurélio Azevedo</p>
                <p class="mb-1">+55 (62) 98235-8500</p>
                <p class="mb-3">contato@aurelioazevedo.com</p>
                <button type="button" class="btn btn-custom btn-lg">chamar no whats</button>
            </div>
        </div>
    </div>
</div> 

<!-- Footer -->
<footer id="footer">
    <div class="container text-center">
        <img src="/img/footer.png" alt="Footer" class="img-fluid" />
        <p>©2020 Revenda Superchá - Página desenvolvida por distribuidor independente Maravilhas da Terra.</p>
    </div>
</footer>
@endsection
