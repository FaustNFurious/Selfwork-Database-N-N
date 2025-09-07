    <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('Home')}}"><i class="bi bi-rocket-takeoff-fill"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Home')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('AboutUs')}}">Chi Siamo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('Contacts')}}">Contatti</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('services.ServicesList')}}">Servizi</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Opzioni Utente
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>

                        <!--Per il pulsante di Logout bisogna eseguire più passaggi, perchè di norma i <li> supportano solo il metodo GET, 
                            al Logout serve il metodo POST -->
                        <li>

                            <a href="{{route('logout')}}" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>

                            <form action="{{route('logout')}}" method="POST" id="form-logout">@csrf</form>
                            
                        </li>
                        
                    </ul>
                </li>

            </ul>
            
            </div>
        </div>
    </nav>