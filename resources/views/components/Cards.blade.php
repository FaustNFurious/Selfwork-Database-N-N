                    <div class="card my-5 mb-5" style="width: 18rem;">
                        <img src="{{$computer['img']}}" class="card-img-top card-img-custom" alt="Immagine di {{$computer['name']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$computer['name']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$computer['brand']}}</h6>
                            <p class="card-text">utilizzo {{$computer['utilizzo']}}</p>
                            <a href="{{route('services.ServicesDetails', ['id' => $computer['id']])}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>