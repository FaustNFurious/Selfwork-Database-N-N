<x-Layout>




    <section>

        <div class="container-fluid servizi-custom">

            <div class="row align-items-center justify-content-center vh-100">

                <div class="row">
                    <h2 class="text-white text-center display-4 my-5">{{$computer['name']}}</h2>
                </div>

                <div class="col-12 col-md-6 align-items-center justify-content-center text-white">

                    <h5>Nome Prodotto: {{$computer['name']}}</h5>
                    <h6>Marchio Prodotto: {{$computer['brand']}}</h6>
                    <p>Utilizzo Principale: {{$computer['usage']}}</p>
                    <p>Prezzo Prodotto: {{$computer['price']}}€</p>

                    <ul>
                        @forelse($computer->types as $type)
                            <li>{{$type->name}}</li>
                        @empty
                            <p>Nessuna Tipologia Associata</p>
                        @endforelse
                    </ul>

                </div>

                <div class="col-12 col-md-6">
                    <img src="{{Storage::url($computer->img)}}" class="card-img-top card-img-custom text-white" alt="Immagine di {{$computer['name']}}">
                </div>

                @auth
                    <!-- Il pulsante viene mostrato solo se l'utente è autenticato ed è stato lui a creare il prodotto -->
                    @if ($computer->user_id == Auth::id())
                        <div class="row">

                            <form action="{{route('services.ServicesDelete', compact('computer'))}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger my-5" type="submit">Cancella Prodotto</button>

                            </form>

                        </div>
                    @endif

                @endauth
                            
            </div>
            
        </div>

    </section>

    



</x-Layout>