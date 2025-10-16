<x-Layout>




    <section>

        <div class="container-fluid">
            <div class="row align-items-center justify-content-center my-5">

                <div class="row">
                    <h3 class="text-dark text-center display-4 my-5">Tutti i nostri prodotti</h3>
                </div>

                @forelse($computers as $computer)

                    <div class="col-12 col-md-3">

                        <x-Cards 
                            :computer="$computer" 
                        /> 
                            
                    </div>
                    
                @empty

                    <div class="col-12">
                        <h3 class="text-center my-5 text-dark">Nessun prodotto ancora registrato</h3>
                    </div>

                @endforelse
            
            </div>

        
            <div class="col-12 my-5 text-center">
                <a href="{{route('services.ServicesCreation')}}" class="btn btn-primary">Scrivici il tuo prodotto preferito</a>
            </div>
        

        </div>

    </section>




</x-Layout>