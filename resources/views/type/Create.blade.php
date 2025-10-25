<x-Layout>




    <div class="container-fluid bg-black text-white min-vh-100 pt-5">

        <div class="row my-5">
            <div class="col-12 text-center my-5">
                <h2>Inserisci nuova tipologia di utilizzo</h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center my-5">
            
            <div class="col-12 col-md-5">

                <!-- Segmento che ritorna errori di compilazione del form -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('type.Submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="type" class="form-label">Inserisci la tipologia di utilizzo</label>
                        <input type="text" name="name" class="form-control" id="type" aria-describedby="typeHelp" value="{{old('name')}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Invio</button>

                </form>
                
            </div>

        </div>

    </div>



    
    
</x-Layout>