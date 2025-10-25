<x-Layout>




    <div class="container-fluid">

        <div class="row my-5">
            <h3 class="text-dark text-center display-4 my-5">Inserisci il tuo Prodotto desiderato</h3>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6">

                <!-- Indica all'utente cosa si è dimenticato di inserire -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="my-5" method="POST" action="{{route('services.Submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marchio Prodotto</label>
                        <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brandHelp" value="{{old('brand')}}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="usage" class="form-label">Utilizzo</label>
                        <input type="text" class="form-control" name="usage" id="usage" aria-describedby="usageHelp" value="{{old('usage')}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo Prodotto</label>
                        <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelp" value="{{old('price')}}">
                    </div>


                    <!-- Per il campo file, non si può memorizzare il file inserito in precedenza se non si compilano tutti i campi, pertanto si dovrà necessariamente reinserire -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine del Prodotto</label>
                        <input type="file" class="form-control" name="img" id="img" aria-describedby="imgHelp">
                    </div>

                    @foreach($types as $type)
                        
                        <input type="checkbox" id="{{'typeCheck' . $type->id}}" name="types[]" value="{{$type->id}}">
                        <label for="{{'typeCheck' . $type->id}}">{{$type->name}}</label>

                    @endforeach

                    <p>Non trovi la tipologia di utilizzo corretto? <a href="{{route('type.Create')}}">Aggiungila tu!</a> </p>
                

                    
                    <button type="submit" class="btn btn-primary my-5">Invio Modulo</button>

                </form>

            </div>
        </div>

    </div>



    



</x-Layout>