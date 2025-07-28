<x-layout>




    <section>

      <div class="container-fluid section-custom">
        <div class="row align-items-center justify-content-center">
            <div class="row">
                <h2 class="text-dark text-center display-4 my-5">Prodotto: {{$computer['name']}}</h2>
            </div>
            <div class="col-12 col-md-6 align-items-center justify-content-center text-dark">
                <h5>Nome Prodotto: {{$computer['name']}}</h5>
                <h6>Marchio Prodotto: {{$computer['brand']}}</h6>
                <p>Utilizzo Principale: {{$computer['utilizzo']}}</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{$computer['img']}}" class="card-img-top card-img-custom" alt="Immagine di {{$computer['name']}}">
            </div>
            
            
        </div>
      </div>

    </section>

    



</x-layout>