<x-Layout>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <form class="my-5" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Inserisci la tua Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

            </div>
        </div>
    </div>




</x-Layout>