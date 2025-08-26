<x-Layout>




    <section>

      <div class="container section-custom">
        <div class="row align-items-center justify-content-center">
            <div class="row">
                <h3 class="text-dark text-center display-4 my-5">Tutti i nostri prodotti</h3>
            </div>

            @foreach($computers as $computer)

                <div class="col-12 col-md-4">

                    <x-Cards 
                        :computer="$computer" 
                    /> 
                        
                    

                </div>

            @endforeach
        
        </div>

        
        <div class="row my-5 w-100">
            <a href="{{route('services.ServicesCreation')}}" class="btn btn-primary">Scrivici il tuo prodotto preferito</a>
        </div>


      </div>

    </section>




</x-Layout>