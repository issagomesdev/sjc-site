@include('layouts.header')
<title> SJC | Contato </title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&family=Montserrat:wght@500&display=swap" rel="stylesheet">

<div class="site">
    @include('layouts.menu')

    <section id="contact">
        <div class="container">
            <h1> Entre em contato </h1>
            <div class="row">
                <div class="col-sm-5">
                    <div class="location">
                        <address>
                            <h4> Sede Global </h3>
                            <a href="https://www.google.com/maps/dir//sjc+sistemas/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x7ab191eb9341737:0x48ad4d64ce13fe65?sa=X&ved=2ahUKEwiYgsTElLD2AhWTrosKHcBwDnkQ9Rd6BAgjEAQ">
                                Rua Doutor Luiz Ribeiro Bastos, 51 - CXPST - 406 - Poço da Panela, Recife - PE, 52060-490 <br>
                            </a>
                        </address>
                        <h4> Para obter mais informações sobre recursos, pacotes e preços:</h4>
                        <div> <a href="tel:55-81-98189-7442">+55(81)98189-7442</a> </div>
                        <div><a href="mailto:contato@sjcsistemas.com.br"> contato@sjcsistemas.com.br </a></div>
                    </div>
                    <br>
                    <div class="breath">
                        <a class="btn-lg btn btn-alma" href="{{ route("info") }}">Mais Informações</a>
                    </div>
                </div>

                <div class="col-sm-7">
                    <img class="img-push img-responsive" src="imagens/mapa.png" alt="Mapa">
                </div>
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
