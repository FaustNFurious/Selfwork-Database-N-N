<x-Layout>



    <div class="container-fluid">
        <div class="row justify-content-center my-5">

            <h2 class="text-center my-5">Profilo di: {{ Auth::user()->name }}</h2>

            @forelse (Auth::user()->services as $service)
                <div class="col-12 col-md-3">

                    <x-Cards 
                        :computer="$service" 
                    /> 
                            
                </div>

            @empty

                <div class="col-12 my-5 text-center">
                    <h3 class="text-center">Nessun Prodotto ancora inserito</h3>
                    <a href="{{route('services.ServicesCreation')}}" class="btn btn-primary my-5">Pubblica ora il tuo Prodotto</a>
                </div>

            @endforelse

        </div>
    </div>


    
</x-Layout>