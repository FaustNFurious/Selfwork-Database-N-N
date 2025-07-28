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

            </ul>
            
            </div>
        </div>
    </nav>