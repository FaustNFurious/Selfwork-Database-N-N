<x-Layout>




    <div class="container-fluid">

        <!-- Funzione che cattura gli errori del form e li fa visualizzare a schermo -->
        @if ($errors->any())
            <div class="alert alert-danger my-5 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <h3 class="text-dark text-center display-4 my-5">Modifica qui il tuo Prodotto</h3>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6">


                <form class="my-5" method="POST" action="{{route('services.ServicesUpdate', compact('computer'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="brand" class="form-label">Marchio Prodotto</label>
                        <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brandHelp" value="{{$computer->brand}}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{$computer->name}}">
                    </div>

                    <div class="mb-3">
                        <label for="utilizzo" class="form-label">Utilizzo</label>
                        <input type="text" class="form-control" name="utilizzo" id="utilizzo" aria-describedby="utilizzoHelp" value="{{$computer->utilizzo}}">
                    </div>

                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo Prodotto</label>
                        <input type="number" class="form-control" name="prezzo" id="prezzo" aria-describedby="prezzoHelp" value="{{$computer->prezzo}}">
                    </div>

                    <!-- L'operazione di value non si può assegnare per img -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine del Prodotto</label>
                        <input type="file" class="form-control" name="img" id="img" aria-describedby="imgHelp">
                    </div>

                
                    <button type="submit" class="btn btn-primary my-5">Invio Modifica</button>

                </form>


            </div>
        </div>

    </div>



    



</x-Layout>