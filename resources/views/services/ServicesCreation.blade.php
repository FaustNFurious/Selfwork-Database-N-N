<x-Layout>




    <div class="container-fluid">

        <div class="row">
            <h3 class="text-dark text-center display-4 my-5">Inserisci il tuo Prodotto desiderato</h3>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6">

                <form class="my-5" method="POST" action="{{route('services.Submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marchio Prodotto</label>
                        <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brandHelp">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
                    </div>

                    <div class="mb-3">
                        <label for="utilizzo" class="form-label">Utilizzo</label>
                        <input type="text" class="form-control" name="utilizzo" id="utilizzo" aria-describedby="utilizzoHelp">
                    </div>

                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo Prodotto</label>
                        <input type="number" class="form-control" name="prezzo" id="prezzo" aria-describedby="prezzoHelp">
                    </div>
                
                    <button type="submit" class="btn btn-primary my-5">Invio Modulo</button>

                </form>

            </div>
        </div>

    </div>



    



</x-Layout>