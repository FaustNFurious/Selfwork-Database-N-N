<x-Layout>

    <!-- Segmento che ritorna errori di compilazione del form -->
    @if ($errors->any())
        <div class="alert alert-danger my-5">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <h3 class="text-center display-6">Effettua subito il Login</h3>

                <form class="my-5" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmailLogin" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmailLogin" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputPasswordLogin" class="form-label">Inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control" id="inputPasswordLogin">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

            </div>
        </div>
    </div>




</x-Layout>