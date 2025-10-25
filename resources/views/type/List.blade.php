<x-Layout>



    <div class="container-fluid">

        <div class="row my-5">
            <h2 class="text-center display-2 my-5">Prodotto del tipo <span>{{$type->name}}</span> </h2>
        </div>

        <div class="row justify-content-center">

            @forelse($type->services as $service)

                <div class="col-12 col-md-4 d-flex justify-content-center">

                    <x-Cards 
                        :computer="$service"
                    />
                </div>
            
            @empty

                <div class="col-12 col-md-5 my-5">
                    <h3 class="text-center">Nessun prodotto associato a questa tipologia</h3>
                    <a href="{{route('services.ServicesCreation')}}" class="btn btn-outline-warning">Inseriscilo tu adesso!</a>
                </div>

            @endforelse
        
    </div>


    
    
</x-Layout>