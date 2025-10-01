<x-Layout>




    <section>

        <div class="container-fluid section-custom">
            <div class="row align-items-center justify-content-center">

                <div class="row">
                    <h2 class="text-dark text-center display-4 my-5">{{$computer['name']}}</h2>
                </div>

                <div class="col-12 col-md-6 align-items-center justify-content-center text-dark">
                    <h5>Nome Prodotto: {{$computer['name']}}</h5>
                    <h6>Marchio Prodotto: {{$computer['brand']}}</h6>
                    <p>Utilizzo Principale: {{$computer['utilizzo']}}</p>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{Storage::url($computer->img)}}" class="card-img-top card-img-custom" alt="Immagine di {{$computer['name']}}">
                </div>

                <div class="row">

                    <form action="{{route('services.ServicesDelete', compact('computer'))}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger my-5" type="submit">Cancella Prodotto</button>

                    </form>

                </div>
                            
            </div>
        </div>

    </section>

    



</x-Layout>