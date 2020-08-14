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
                <h3 class="main-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                <p class="main-subtext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
                <p>Nossa equipe de analistas entrará em contato com você, agora por E-MAIL</p>
                <form>
                    <div class="form-group">
                        <label for="name" class="control-label">Nome Completo</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Informe seu nome" required />
                    </div>
                    <div class="form-group">
                        <label for="whastapp" class="control-label">WhatsApp</label>
                        <input type="text" id="whastapp" name="whastapp" class="form-control" placeholder="Informe seu whatsapp" required />
                    </div>
                    <div class="form-group">
                        <label for="type" class="control-label">Quero ser</label>
                        <select id="type" name="type" class="form-control" required>
                            <option value>Selecione um opcao</option>
                            <option value="consultor">Consultor</option>
                            <option value="consumidor">Consumidor</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-custom btn-lg btn-block mb-5">saber mais</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Beneficios -->
<div class="section benefits" style="background-color: #5d5d5d;color: white;">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">Lorem Ipsum is simply dummy text of the printing</h2>
            <p class="subtitle mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b1.png" alt="B1" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b2.png" alt="B2" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b3.png" alt="B3" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b4.png" alt="B4" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b5.png" alt="B5" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
            <div class="col-lg-4 text-center mb-5">
                <img src="/img/b6.png" alt="B6" class="img-fluid" />
                <h4 class="mb-3">Lorem Ipsum</h4>
                <p>Poder começar com pouco dinheiro e reinvestir conforme o resultado.</p>
            </div>
        </div>
    </div>
</div>

<!-- Simulacao de Lucros -->
<div class="section simulations" style="background-color: #e0e0e0;color: #333;">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">Lorem Ipsum is simply dummy text of the printing</h2>
            <p class="subtitle mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 1" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 2 CHÁS X R$ 20 X 30 DIAS R$ 1200 LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 2" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 2 CHÁS X R$ 20 X 30 DIAS R$ 1200 LUCRO NO MÊS</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/sim2.png" alt="Simulacao 3" class="img-fluid" />
                <p>LUCRO POR CHÁ VENDIDO = R$ 20 2 CHÁS X R$ 20 X 30 DIAS R$ 1200 LUCRO NO MÊS</p>
            </div>
        </div>
    </div>
</div>

<!-- Depoimentos -->
<div class="section testemuals">
    <div class="container">
        <div class=" text-center">
            <h2 class="title">Lorem Ipsum is simply dummy text of the printing</h2>
            <p class="subtitle mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <img src="/img/dep1.png" alt="Depoimento 1" class="img-fluid" />
                <h4>Lorem Ipsum</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep2.png" alt="Depoimento 2" class="img-fluid" />
                <h4>Lorem Ipsum</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="/img/dep3.png" alt="Depoimento 3" class="img-fluid" />
                <h4>Lorem Ipsum</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
