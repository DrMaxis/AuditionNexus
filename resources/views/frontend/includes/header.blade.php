<header class="navbar navbar-dark navbar-expand-lg navbar-light">
    <a class="navbar-brand" href=".">Audition</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-book"></i>Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-download"></i>Download</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-discord"></i>Discord</a>
            </li>
            <li class="nav-item">

                <a href="#" class="nav-link"> <img src="{{asset('/img/frontend/language/uk.png')}}"
                        alt="United Kingdom"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <img src="{{asset('/img/frontend/language/fr.png')}}"
                        alt="French"></a>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <img src="{{asset('/img/frontend/language/ge.png')}}"
                        alt="German"></a>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <img src="{{asset('/img/frontend/language/spain.png')}}"
                        alt="Spain"></a>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <img src="{{asset('/img/frontend/language/jp.png')}}"
                        alt="Japan"></a>

            </li>
        </ul>
        <ul class="navbar-nav">
            @auth

            <li class="nav-item"><a href="{{-- {{route('user account')}} --}}" class="nav-link"></a></li>
            <li class="nav-item"><a href="{{-- {{route('shop')}} --}}" class="nav-link"></a></li>
            <li class="nav-item"><a href="{{-- {{route('logout')}} --}}" class="nav-link"></a></li>


            @else

            <li class="nav-item">
                    <li class="nav-item"><a href="{{-- {{route('login')}} --}}" class="nav-link"></a></li>
               
            </li>
            <li class="nav-item">
                    <li class="nav-item"><a href="{{-- {{route('register')}} --}}" class="nav-link"></a></li>
               
            </li>

            @endauth
        </ul>
    </div>

</header>