<x-Layout>



    <div class="container-fluid">
        <div class="row justify-content-center">

            <h2 class="text-center my-5">Profilo di: {{ Auth::user()->name }}</h2>
            @forelse (Auth::user()->computers as $computer)
                <div class="col-12 col-md-3">

                    <x-Cards 
                        :computer="$computer" 
                    /> 
                            
                </div>
            @empty

                <div class="col-12">
                    <h3 class="text-center my-5">Nessun Prodotto ancora inserito</h3>
                    <a href="{{route('services.ServicesCreation')}}" class="btn btn-primary">Pubblica ora il tuo Prodotto</a>
                </div>

            @endforelse

        </div>
    </div>


    
</x-Layout>