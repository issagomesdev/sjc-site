@include('layouts.header')
<title> SJC | Sobre nós </title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&family=Montserrat:wght@500&display=swap" rel="stylesheet">

<div class="site">
  @include('layouts.menu')

<section id="about" class="hero">
<div class="container text-center">
    <div class="form-msg-container row">
        <div class="alert alert-success">Thanks - we got your message. We'll be in touch with you soon!</div>
    </div>
    <h1><img class="img-push img-responsive love" style="-webkit-filter: none;" src="imagens/apaixonados.png" alt="Apaixonados"></h1>
    <p style="-webkit-filter: none;"> Por trás do nosso trabalho está um grupo de pessoas apaixonadas que se esforçam para construir um amanha melhor para o mundo de hoje. Saiba mais sobre quem somos, nossa missão, valores e visão.</p>
    <div class="row">
        <div class="col-sm-3">
            <div class="about-links text-center pop">
                  <a style="none;" href="#quem-somos" class="about-link"><img class="young" src="imagens/quem-somos.png" alt="Quem Somos">
                <img class="now" src="imagens/quem-somos-hover.png" alt="Quem Somos">
                  <h3> Quem Somos </h3></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="about-links text-center pop">
                <a style="none;" href="#nossa-missao" class="Nossa Missão"><img class="young" src="imagens/nossa-missao.png" alt="Nossa Missão">
                <img class="now" src="imagens/nossa-missao-hover.png" alt="Nossa Missão">
                <h3>Nossa Missão</h3></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="about-links text-center pop">
                <a style="none;" href="#valores" class="about-link"><img class="young" src="imagens/valores.png" alt="Valores">
                <img class="now" src="imagens/valores-hover.png" alt="Valores">
                <h3>Valores</h3></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="about-links text-center pop">
                <a style="none;" href="#visao" class="about-link"><img class="young" src="imagens/visao.png" alt="Visão">
                <img class="now" src="imagens/visao-hover.png" alt="Visão">
                <h3>Visão</h3></a>
            </div>
        </div>
    </div>
</div>
</section>
<section id="quem-somos" style="background-color: #1bbcd9;">
<div class="container text-center">
      <h1 style="font-size: 80px; color: white; text-decoration: underline; font-family: 'League Spartan', sans-serif !important;"> QUEM SOMOS </h1>

      <div class="quem-somos-text" style="font-family: 'Montserrat', sans-serif; color: white;">
      A SJC é uma empresa focada em soluções tecnológicas para as áreas mais diversas, sabemos que a tecnologia é o futuro e queremos ajudar
      todos que sente necessidade de migrar para o digital, nossos sistemas prometem aumentar o desempenho e economizar o tempo perdido com velhos hábitos manuais.  </div>

</div>
</section>

<section id="nossa-missao" style="background-color: #fec77b;">
<div class="container">
  <h1 style="font-size: 80px; color: white; text-decoration: underline; font-family: 'League Spartan', sans-serif !important;"> NOSSA MISSÃO </h1>

  <div class="nossa-missao-text" style="font-family: 'Montserrat', sans-serif; color: white;">
    A SJC utiliza tecnologia e inovação para alcançar os resultados desejados. Nosso propósito é melhorar sua vida, criando sistemas inovadores e práticos,
    além de ajudar as pessoas e empresas em todo o mundo a concretizarem todo o seu potencial, nos tornando referência em soluções tecnológicas. </div>

</div>
</section>

<section id="valores" class="alt" style="background-color: #5fc9dd;">
<div class="container">
  <h1 style="font-size: 80px; color: white; text-decoration: underline; font-family: 'League Spartan', sans-serif !important;"> VALORES </h1>

  <div class="valores-text" style="font-family: 'Montserrat', sans-serif; color: white;">
    <ul>
  <li>Inovação</li>
  <li>Integridade</li>
  <li>Responsabilidade</li>
  <li>Paixão</li>
  <li>Colaboração</li>
  <li>Diversidade</li>
  <li>Qualidade</li>
  <li>Práticidade</li>
  <li>Simples Sempre</li>
    </ul>
  </div>

</div>
</div>
</section>

<section id="visao" style="background-color: #ec6842;">
<div class="container">

  <h1 style="font-size: 80px; color: white; text-decoration: underline; font-family: 'League Spartan', sans-serif !important;"> VISÃO </h1>

  <div class="visao-text" style="font-family: 'Montserrat', sans-serif; color: white;">
    Entregar produtos de alta qualidade e fácil uso que incorporam alta tecnologia para o indivíduo, provando que a tecnologia não precisa ser intimidadora para aqueles que não são experts
    em computação, também proporcionar ao maior número de pessoas uma experiência memorável e excelência em serviços, disponibilizando softwares de excelente qualidade – a qualquer
    momento, em qualquer local e em qualquer dispositivo.
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
