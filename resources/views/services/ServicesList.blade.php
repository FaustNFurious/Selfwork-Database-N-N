<x-Layout>




    <section>

      <div class="container-fluid section-custom">
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
      </div>

    </section>

    



</x-Layout>