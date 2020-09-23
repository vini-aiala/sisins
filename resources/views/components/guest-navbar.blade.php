<nav class="navbar navbar-expand-lg navbar-light sisins-nav fixed-top">
    <div class="container">
        <a href="{{ route('index') }}">
            <img src="/img/globo.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Cadastro</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
