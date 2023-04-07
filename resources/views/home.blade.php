@include('layouts.header')
<title> SJC | Home </title>

<body class="home page-template-default page page-id-1959 elementor-default elementor-kit-1140 elementor-page elementor-page-1959">

    <div class="site">

      @include('layouts.menu')

<section class="hero">
    <div class="container text-center">
        <img class="img-responsive" style="width:400px" src='{{ url('imagens/sjc_logo.png') }}' alt="SJC logo"/>
		<h2 class="lab"> Criação, Organização <span style="color: #D80033; font-weight: 700;"> e Tecnologia.</span></h2>
        <figure class="img-video">
            <img class="img-responsive" src='{{ url('imagens/devices.png') }}' alt="SJC devices."/>
        </figure>
        <p> SJC revolucionou tarefas diárias e simplificou o trabalho burocratico, construa uma melhor geração de educadores e ocasione uma melhor geração de alunos.</p>
    </div>
</section>
<section class="secondary">
    <div class="container text-center">
        <h2> Está Interessado?</h2>
        <div class="row">
                <a class="btn btn-lg btn-primary btn-block" href="{{ route("contato") }}"> Entre em Contato </a>
        </div>
    </div>
</section>
<section class="visibility">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
                <div id="carousel-laptop" class="carousel slide media-image" data-ride="carousel">
                    <div class="browser-frame">
                        <i class="tab-art"></i>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src='{{ url('imagens/reports-institution.png') }}' alt="institution">
                            </div>
                            <div class="item">
                                <img src='{{ url('imagens/reports-professionals.png') }}' alt="professionals">
                            </div>
                            <div class="item">
                                <img src='{{ url('imagens/reports-classes.png') }}' alt="classes">
                            </div>
                            <div class="item">
                                <img src='{{ url('imagens/reports-students.png') }}' alt="students">
                            </div>
                            <div class="item">
                                <img src='{{ url('imagens/reports-performance.png') }}' alt="performance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="media-content">
                    <h3> Tome decisões baseadas em dados.</h3>
                    <p> Análise e compreenda os relatórios direcionados ao <span class="typed">seu município</span> e <span class="typed">sua escola.</span> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secondary progressive">
    <div class="container">
        <div class="row media-set">
            <div class="col-sm-6">
                <div class="media-image">
                    <img class="img-responsive" style="width: 470px;" src='{{ url('imagens/boas-praticas.png') }}' alt="Boas Praticas">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="media-content">
                    <h3> Implemente nossas boas praticam funcionais.</h3>
                    <p> Transforme sua comunidade educativa com práticas que realmente funcionam.</p>
                </div>
            </div>
        </div>
        <ul class="highlight-list">
            <li> <i class="fas fa-sort-amount-down"></i> Eficiência na organização </li>
            <li> <i class="fas fa-search"></i> Busca avançada </li>
            <li> <i class="fas fa-filter"></i> Filtragem facilitada </li>
            <li> <i class="fas fa-folder-open"></i> Relatorios práticos </li>
            <li> <i class="fas fa-mobile-alt"></i> Compatível com todos os dispositivos </li>
            <li> <i class="fas fa-tools"></i> Ferramentas diferenciadas </li>
            <li><i class="fas fa-check-circle"></i> Simples e rápido </li>
            <li> <i class="fas fa-hand-holding-medical"></i> Suporte otimizado </li>
        </ul>
    </div>
</section>
<section class="educators">
    <div class="container">
        <div class="row  media-set">
            <div class="col-sm-6 col-sm-push-6">
                <div class="media-image">
                    <img class="img-responsive" style="width: 450px;" src='{{ url('imagens/comunidade-educativa.jpg') }}' alt="Comunidade Educativa">
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="media-content">
                    <h3> Aumente o desempenho da sua comunidade educativa. </h3>
                    <p> Finalmente, um sistema que integra sua equipe, seus alunos e os pais sem dor de cabeça. </p>
                </div>
            </div>
        </div>
        <ul class="highlight-list awesome">
            <li><i class="fa fa-heart"></i><div> Fácil de usar. </div></li>
            <li><i class="fa fa-paint-brush"></i> <div> Personalizável. </div></li>
            <li><i class="fa fa-laugh-beam"></i><div> Maior satisfação entre alunos, pais e familiares. </div></li>
            <li><i class="fa fa-bars"></i><div> Interface intuitiva. </div></li>
            <li><i class="fa fa-laptop"></i><div> Ferramentas avançadas que auxiliam a cultura orientada para a tecnologia e o aprendizado. </div></li>
            <li><i class="fa fa-user-check"></i> <div> Adaptado para o usuário final. </div></li>
            <li><i class="fa fa-thumbs-up"></i> <div> Avaliado positivamente por profissionais da areá. </div></li>
            <li><i class="fa fa-clock-o"></i><div> Economiza significativamente o tempo de toda a equipe. </div></li>
        </ul>
    </div>
</section>

<section id="why">
    <div class="container text-center">
        <h2> Escolas e municipios em todos os lugares estão <span class="orphan"> tendo sucesso com SJC. </span></h2>
        <img src='{{ url('imagens/5stars.png') }}' style="width: 250px;" alt="5 star rating" title="5 stars">
        <blockquote>
            <p>"SJC fez o que ninguém sequer pensou, é o melhor dos melhores."</p>
            <cite class="author"> Secretaria da Educação de Pernambuco </cite>
        </blockquote>
        <div class="text-center">
            <a href="{{ route("sjc-educacional") }}"> Saiba Mais </a>
        </div>
    </div>
</section>
<section id="meet">
    <div class="container text-center">
        <h2> Uma plataforma. <span class="orphan"> Centenas de funcionalidades. </span></h2>
        <p> SJC oferece todos os recursos necessários sem maiores complicações. </p>
        <ul class="horizontal-media list-unstyled">
            <li> <i class="icon fas fa-unlock-alt fa-4x"> </i> <div> Permissões </div> </li>
            <li> <i class="icon fas fa-bell fa-4x"></i> <div> Comunicados </div> </li>
            <li> <i class="icon fas fa-outdent fa-4x"></i> <div> Relatórios </div> </li>
            <li> <i class="icon fas fa-user-tie fa-4x" ></i> <div> Cadastro de Profissionais </div> </li>
            <li> <i class="icon fas fa-user-graduate fa-4x" ></i> <div> Matriculas, Enturmação, Transferências e Rematrículas </div> </li>
            <li> <i class="icon fas fa-pen-square fa-4x"></i> <div> Diário de Classe </div> </li>
            <li> <i class="icon fas fa-archive fa-4x"></i> <div> Banco De Aulas </div> </li>
            <li> <i class="icon fas fa-address-book fa-4x"> </i> <div> Atribuição de Notas </div> </li>
            <li> <i class="icon fas fa-check-double fa-4x"> </i> <div> Registro de Comparecimento </div> </li>
            <li> <i class="icon fas fa-scroll fa-4x"></i> <div> Boletim Digital </div> </li>
            <li> <i class="icon fas fa-bus fa-4x" ></i> <div> Transporte Escolar </div> </li>
            <li> <i class="icon fas fa-book-open fa-4x" ></i> <div> Biblioteca </div> </li>
            <li> <i class="icon fas fa-warehouse fa-4x"></i> <div> Almoxarifado </div> </li>
            <li> <i class="icon fas fa-calendar-alt fa-4x" ></i> <div> Calendario </div> </li>
        </ul>
        <a href="{{ route("sjc-educacional") }}" type="button" class="btn btn-alma"> Acesse a lista completa de recursos </a>
    </div>
</section>
<section class="cta">
    <div class="container learn-more">
      <div class="container learn-more">
          <h2> Milhares de escolas estão se transformando com SJC. Não fique para trás. </h2>
          <div class="btn-grouping">
              <a class="btn-lg btn btn-alt" href="{{ route("info") }}"> Solicite um tour virtual </a>
              <a class="btn-lg btn btn-alma" href="{{ route("info") }}"> Mais Informações </a>
          </div>
          <br><p> Ou ligue para <a href="tel:55-81-98189-7442">+55(81)98189-7442</a> e tire suas dúvidas agora mesmo. </p>
      </div>
    </div>
</section>

@include('layouts.footer')

</div>

<script type='text/javascript' src='{{ url('js/jquery/ui/core.min35d0.js?ver=1.12.1') }}' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='{{ url('js/jquery/ui/datepicker.min35d0.js?ver=1.12.1') }}' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/js/jquery.typewatch01b1.js?ver=5.21.5') }}' id='mec-typekit-script-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlight01b1.js?ver=5.21.5') }}' id='featherlight-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.min01b1.js?ver=5.21.5') }}' id='mec-select2-script-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltip01b1.js?ver=5.21.5') }}' id='mec-tooltip-script-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/lity/lity.min01b1.js?ver=5.21.5') }}' id='mec-lity-script-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.min01b1.js?ver=5.21.5') }}' id='mec-colorbrightness-script-js'></script>
<script type='text/javascript' src='{{ url('plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.min01b1.js?ver=5.21.5') }}' id='mec-owl-carousel-script-js'></script>
<script type='text/javascript' src='{{ url('essential-addons-elementor/cb70d11b8.min03ad.js?ver=1645735494') }}' id='cb70d11b8-js'></script>
<script type='text/javascript' src='{{ url('js/dist/bootstrap.min68b3.js') }}' id='bootstrap-js'></script>
<script type='text/javascript' src='{{ url('js/dist/stickykit68b3.js') }}' id='sticky-js'></script>
<script type='text/javascript' src='{{ url('js/alma62ea.js?ver=1.2') }}' id='alma-js'></script>
<script type='text/javascript' src='{{ url('js/wp-embed.minc8d8.js?ver=5.8.3') }}' id='wp-embed-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/js/frontend-modules.min19ce.js?ver=3.0.3') }}' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minc27b.js?ver=2.10.3') }}' id='elementor-sticky-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor-pro/assets/js/frontend.minc27b.js?ver=2.10.3') }}' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1') }}' id='elementor-dialog-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2') }}' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6') }}' id='swiper-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/lib/share-link/share-link.min19ce.js?ver=3.0.3') }}' id='share-link-js'></script>
<script type='text/javascript' src='{{ url('plugins/elementor/assets/js/frontend.min19ce.js?ver=3.0.3') }}' id='elementor-frontend-js'></script>

</body>
</html>
