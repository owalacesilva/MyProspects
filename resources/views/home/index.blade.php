@extends('layouts.home')

@section('content')
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center mb-3">
                <a class="d-block">
                    <img alt="Header Logo" src="/img/logo.png" class="img-fluid" style="max-width: 180px;" />
                </a>
            </div>
            <div class="col-lg-7"></div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <a class="d-block mb-2">
                    <img alt="Image 1" src="/img/image2.png" class="img-fluid" />
                </a>    
            </div>
            <div class="col-lg-6">
                <h3 class="main-text"> QUER INICIAR SEU <span class="text-color">NEGÓCIO PRÓPRIO</span> COM UM PRODUTO QUE TEM <span class="text-color">ALTO POTENCIAL DE LUCRO</span> E QUE É <span class="text-color">DESEJADO POR MUITOS?</span></h3>
                <p class="main-subtext">Te ensinaremos a construir uma nova fonte de renda com resultados baseados com seu próprio mérito.</p>
            </div>
        </div>
    </div>
</header>

<!-- Conheca -->
<div class="section" style="background-color: #ffffff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6"> 
                <h2>CONHEÇA A MARAVILHAS DA TERRA</h2>
                <h4 class="text-color font-weight-bold">Fundada em 2017</h4>
                <p>Somos grupo em todos os sentidos da palavra. Pensamos juntos para pensar muito maior. Reunimos ideias, sonhos e pessoas em um único lugar. Lutamos para fazer a diferença: na vida de cada um de nós e no mundo todo. Por que cada dia é uma nova oportunidade de vencer. E, para nós, vitória só vale se for no plural.</p>
            </div>
            <div class="col-lg-6">
                <div class="video-wrapper mb-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/D-VURvUjx4Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video -->
<div class="section" style="background-color: #efefef;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="main-video video-wrapper mb-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_VceQT4Y2Hk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div id="div-form" class="col-lg-5">
                <h2 class="text-center font-weight-bold">Insira seus dados</h2>
                <p>Um de nossos Líderes entrará em contato com você, pelo WHATSAPP</p>
                <form id="form-contact" role="form" class="form" method="post" action="{{ route('home_create_contact') }}">
                    @csrf
                    @if (session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="display_name" class="control-label">Nome Completo</label>
                        <input type="text" id="display_name" name="display_name" class="form-control form-control-lg" placeholder="Informe seu nome" maxlength="36" required />
                    </div>
                    <div class="form-group">
                        <label for="whatsapp" class="control-label">Seu WhatsApp</label>
                        <input type="text" id="whatsapp" name="whatsapp" class="form-control form-control-lg" placeholder="Informe seu whatsapp" required />
                    </div>
                    <div class="form-group">
                        <label for="type" class="control-label">Quero ser um</label>
                        <select id="role" name="role" class="form-control form-control-lg" required>
                            <option value>Selecione um opcao</option>
                            <option value="consultor">Consultor</option>
                            <option value="consumidor">Consumidor</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-custom btn-lg btn-block mb-5"> <i class="fa fa-whatsapp fa-fw"></i>chamar no whats</button>
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

<!-- Linha de chás -->
<div class="section simulations products">
    <div class="container">
        <div class="text-center">
            <h2 class="title">CONHEÇA NOSSA LINHA DE CHÁS</h2>
            <p class="subtitle mb-5">Os chás funcionais com tecnologia exclusiva MDTea e mais vendidos do Brasil!</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Superchá SB</h5>
                <img src="/img/prod1.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Ajuda a eliminar as toxinas do corpo; Desintoxica e promove a limpeza do organismo; Melhora a digestão e funcionamento intestinal.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Linfachá</h5>
                <img src="/img/prod2.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Ajuda na queima da gordura corporal; Elimina toxinas e líquidos; Diminui o inchaço; Termogênico, Desintoxicante e Diurético.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Sbeltchá</h5>
                <img src="/img/prod3.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Promove a saciedade; Queima gordura corporal; Acelera o metabolismo; Melhora a digestão; Termogênico.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Glycontrol</h5>
                <img src="/img/prod4.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Auxilia no controle da glicemia; Normaliza os níveis de açúcar no sangue.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Sonobom</h5>
                <img src="/img/prod5.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Reduz os efeitos da insônia; Ajuda a reduzir dores de cabeça; Promove um sono de qualidade; Ajuda a relaxar; Alivia o stress; Reduz a ansiedade.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <h5 class="name">Santé</h5>
                <img src="/img/prod6.png" alt="Simulacao 1" class="img-fluid animate__animated" />
                <span class="head">Principais Benefícios:</span>
                <p class="desc">Elimina toxinas; Promove o rejuvenescimento; Desintoxica o organismo; Melhora a digestão e o funcionamento intestinal; Antioxidante.</p>
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
                <img src="/img/sim1.png" alt="Simulacao 1" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO <strong>R$ 20</strong><br/><strong>1 CHÁ</strong> X R$ 20 X 30 DIAS<br/><span class="text-color-red">R$ 600</span> LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 2" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO <strong>R$ 20</strong><br/><strong>2 CHÁS</strong> X R$ 20 X 30 DIAS<br/><span class="text-color-red">R$ 1200</span> LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim3.png" alt="Simulacao 3" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO <strong>R$ 20</strong><br/><strong>3 CHÁS</strong> X R$ 20 X 30 DIAS<br/><span class="text-color-red">R$ 1800</span> LUCRO NO MÊS</p>
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
                <h4 class="font-weight-bold">Celma Martins</h4>
                <p>Meu nome é Celma Martins, sou representante da Maravilhas da Terra a 3 meses. Somente com a venda do produto tenho uma renda mensal média de R$ 2.500,00.</br></br>No mês de fevereiro cheguei a lucrar R$ 3.400,00 somente com vendas dos Chás, estou extremamente feliz com os resultados financeiros e de bem-estar que venho obtendo com o produto.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep2.png" alt="Depoimento 2" class="img-fluid" />
                <h4 class="font-weight-bold">Camila Costa</h4>
                <p>Eu sou Camilla Costa, campeã de três tambores, comecei a usar os produtos da Maravilhas da Terra por indicação do meu personal e do nutricionista e tive um resultado incrível.</br></br>Várias pessoas começaram a me pergutar de que forma tinha emagreci em tão pouco tempo, com isso já me interessei em vender o Superchá SB.</br></br>O mais fantástico foi descobrir que existia outros produtos maravilhosos, além de um grande negócio, que está me permitindo ganhar uma boa  grana.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep3.png" alt="Depoimento 3" class="img-fluid" />
                <h4 class="font-weight-bold">Jaqueline Queiros</h4>
                <p>Olá meu nome é Jaqueline Queiros e posiciono os produtos da Maravilhas da Terra no mercado a 3 meses.</br></br>Sou funcionária pública, mas como precisamos ter mais de uma fonte de renda, a Maravilhas da Terra veio me proporcionar essa segunda renda em minha vida.  Estou muito satisfeita com meus resultados.</br></br>O Superchá SB é um produto que se vende sozinho e esse mês já estou com novas estratégias para aumentar minhas vendas!</p>
            </div>
        </div>
    </div>
</div>

<!-- Empreender -->
<div class="section enterpreuner">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <img src="/img/brand.png" alt="Brand image" class="img-fluid" />
                </div>
                <div class="col-lg-8">
                    <h2>A forma mais simples de começar a <strong>empreender</strong></h2>
                    <p>Nossa Missão: Ajudar o máximo possível de pessoas à mudar de vida.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer id="footer" class="section">
    <div class="container text-center">
        <div class="mb-3">
            <img src="/img/footer.png" alt="Footer" class="img-fluid" />
        </div>
        <p>©2020 Fique Rico com Saúde - Página desenvolvida por um <strong>Líder em Expansão</strong></p>
    </div>
</footer>
@endsection
