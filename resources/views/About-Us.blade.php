<x-Layout>




    <header>

        <div class="container-fluid header-custom">

            <div class="row justify-content-around align-items-center vh-100">

                <div class="col-6">
                    <h2 class="text-light text-center display-1 fw-bold">Chi Siamo</h2>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur qui nam maxime reiciendis, 
                        laudantium fugiat eligendi? Ut a excepturi cupiditate, aliquid iusto delectus officiis deleniti ad qui architecto dolore ipsa?
                    </p>
                </div>

                <div class="col-6">
                    <img src="/Media/Team.jpg" alt="Immagine Team">
                </div>

            </div>

        </div>

    </header>


    <section>

        <div class="container my-5">
            <div class="row align-items-center justify-content-around">

                @foreach ($users as $user)

                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                                <a href="{{route('AboutUsDetails', ['name' => $user['name']])}}" class="btn btn-primary">Show More</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    </section>

    


</x-Layout>