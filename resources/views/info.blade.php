@include('layouts.header')
<title> SJC | Informações </title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"

<div class="site">
    <header class="navbar navbar-fixed-top" role="banner">
      @include('layouts.menu')
    </header>

    <div data-elementor-type="wp-page" data-elementor-id="1286" class="elementor elementor-1286" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-9470a86 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="9470a86" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ad0984" data-id="0ad0984" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-819f551 elementor-widget elementor-widget-text-editor" data-id="819f551" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix">
            <div id="lp-pom-text-36" class="lp-element lp-pom-text nlh">
            <p class="lplh-20" style="font-family: 'Raleway', sans-serif;  text-transform: uppercase; font-size: 25px; text-align: center; margin: 0px;">
              Pronto para conversar sobre um sistema mais robusto, <br>
              confiável e preparado para o futuro? </p>
            </div>
          </div>
				</div>
				</div>
				<div class="elementor-element elementor-element-67d040e elementor-widget elementor-widget-text-editor" data-id="67d040e" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix">
            <div id="lp-pom-text-36" class="lp-element lp-pom-text nlh">
              <p class="lplh-20" style="font-family: 'Raleway', sans-serif;  text-transform: uppercase; font-size: 25px; text-align: center; margin: 0px; color: #EB6841;">
                Claro que você está! </p>
            </div>
          </div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>

@if (session('status')) <div class="alert alert-success" style="text-align: center;"> {{ session('status') }} </div> @endif

				<section class="elementor-section elementor-top-section elementor-element elementor-element-9273cfc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9273cfc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-wider">
							<div class="send-div" style="width: 100%">

					<div class="form-email" style="background-color: #f7f7f7;">
          <div class="form">

            <form method="POST" action="{{ route("send-email") }}" enctype="multipart/form-data" style="margin: 5rem;">
            @csrf
            <div class="form-group" style="padding-top: 5rem;">
                <label> Informe seu nome e sobrenome </label>
                <input class="form-control" type="text" name="nome" id="nome" value="{{ old('nome', '') }}" required>
            </div>

            <div class="form-group">
                <label> Preencha com seu numero de telefone </label>
                <input class="form-control" type="text" name="numero" id="numero" value="{{ old('numero', '') }}" required>
            </div>

            <div class="form-group">
                <label> Preencha com seu email </label>
                <input class="form-control" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
            </div>

            <div class="form-group">
                <label> Indique se trabalha para uma escola ou um município </label> <br>
                <input type="radio" id="escola" name="tipo" value="Escola"> <label for="escola" style="margin-right: 10px;"> Escola </label>
                <input type="radio" id="municipio" name="tipo" value="Municipio"> <label for="municipio"> Município </label>
            </div>

            <div class="form-group">
                <label> Nome do Local </label>
                <input class="form-control" type="text" name="team" id="team" value="{{ old('team', '') }}"
                placeholder="Informe o nome da sua escola ou do seu municipio de acordo com o que foi selecionado no campo."
                required>
            </div>

            <div class="form-group">
                <label> Informe seu Cargo </label>
                <input class="form-control" type="text" name="cargo" id="cargo" value="{{ old('cargo', '') }}" required>
            </div>


            <div class="form-group">
                <label> Diga como podemos te ajudar </label>
                <input class="form-control" type="text" name="ajuda" id="ajuda" value="{{ old('ajuda', '') }}" required>
            </div>

            <div class="form-group">
                <label> Selecione Seu Estado </label>
                <select id="estado" name="estado" value="{{ old('estado', '') }}" required>
                <option value="">Selecione por favor</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                </select>
            </div>

            <div class="form-group">
                <label> Informe Sua Cidade </label>
                <input class="form-control" type="text" name="cidade" id="cidade" value="{{ old('cidade', '') }}" required>
            </div>

            <div class="form-group">
                <label> Espaço para comentários adicionais: (opcional) </label>
                <input class="form-control" type="text" name="comentarios" id="comentarios" value="{{ old('comentarios', '') }}">
            </div>

                <button class="btn btn-danger" type="submit">
                    Proximo
                </button>
        </form>

</div>
</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0409043"
        style="width: 100%">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6f4b82f elementor-hidden-phone elementor-widget elementor-widget-text-editor" data-id="6f4b82f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><h2> Tem perguntas? Precisa de respostas? <br/> Nós estamos aqui para ajudar! </h2></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-7f18515 elementor-hidden-phone elementor-widget elementor-widget-text-editor" data-id="7f18515" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p> Nós deixe saber se você deseja obter mais informações,<strong> conversar </strong> com a nossa equipe ou agendar um <strong>tour online</strong> sem nenhum compromisso.</p></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ba85a75 elementor-hidden-phone elementor-widget elementor-widget-text-editor" data-id="ba85a75" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p> *Um tour completo geralmente leva de 30 a 60 minutos, dependendo do que você gostaria de ver. </p></div>
				</div>
				</div>

				<div class="elementor-element elementor-element-3962e80 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="3962e80" data-element_type="widget" data-settings="{&quot;lightbox&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="elementor-wrapper elementor-open-lightbox">
              <img width="1920" height="1080" src="imagens/sjc_logo.png" class="attachment-full size-full" sizes="(max-width: 1920px) 100vw, 1920px" style="-webkit-filter: drop-shadow(-1px 1px 1px black) drop-shadow(-1px -1px 3px black);">
					</div>
				</div>
				</div>
						</div>
					</div>
		        </div>
							</div>
					</div>
		</section>
						</div>
						</div>
					</div>

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
