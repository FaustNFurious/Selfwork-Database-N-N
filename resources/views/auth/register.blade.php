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

                <h3 class="text-center display-6">Registrati ora!</h3>

                <form class="my-5" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="nomeReg" class="form-label">Inserisci il tuo Nome</label>
                        <input type="text" name="name" class="form-control" id="nomeReg" aria-describedby="nomeHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputEmailReg" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmailReg" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputPasswordReg" class="form-label">Inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control" id="inputPasswordReg">
                    </div>

                    <div class="mb-3">
                        <label for="inputPasswordCheckReg" class="form-label">Conferma la tua Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordCheckReg">
                    </div> 

                    <button type="submit" class="btn btn-primary">Registrati</button>

                </form>

            </div>
        </div>
    </div>




</x-Layout>