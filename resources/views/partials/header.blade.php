<header>

    <div class="cont_img_nav">

        <div class="cont_img_header">

            <img src=" {{ asset('images/dc-logo-bg.png') }} " alt="Test" />
        </div>

        <nav>
            <a href="{{ route('home') }}">HOME</a>
            <a class="attivo" href="{{ route('comics') }}">COMICS</a>
            <a href="#">MOVIES</a>
            <a href="#">TV</a>
            <a href="#">GAMES</a>
            <a href="#">COLLECTIBLES</a>
            <a href="{{ route('admin.comics.index') }}">ADMIN</a>
            <a href="#">FANS</a>
            <a href="#">NEWS</a>
            <a href="#">SHOP</a>
        </nav>

    </div>

</header>
