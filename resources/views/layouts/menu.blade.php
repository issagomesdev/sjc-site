<header class="navbar navbar-fixed-top" role="banner">
    <div class="container-responsive">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"> Menu </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route("home") }}"> SJC </a>
        </div>
        <nav id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
        <ul id="menu-header" class="nav navbar-nav navbar-right">
        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Home" href="{{ route("home") }}"> Home </a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Sobre nós" href="{{ route("sobre-nos") }}"> Sobre nós </a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="SJC Educacional" href="{{ route("sjc-educacional") }}"> SJC Educacional </a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Contato" href="{{ route("contato") }}"> Contato </a></li>
        <li class="menu-item btn btn-alma"><a href="{{ route("info") }}"> Mais Informações </a> </li>
        </ul>
      </nav>
</div>
</header>
