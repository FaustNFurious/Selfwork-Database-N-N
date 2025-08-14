<x-layout>




    <header>

        <div class="container-fluid header-custom ">

            <div class="row vh-100 align-items-center justify-content-around">

                <div class="col-12">
                    <h2 class="text-light text-center display-1 fw-bold">Come Contattarci</h2>
                </div>

                <div class="col-md-3 box-custom text-center d-flex flex-column justify-content-center align-items-center text-white">

                    <div class="row">
                        <div class="col-12">
                            <i class="icons-custom bi bi-whatsapp"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p>Scrivici su Whatsapp</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 box-custom text-center d-flex flex-column justify-content-center align-items-center text-white">

                    <div class="row">
                        <div class="col-12">
                            <i class="icons-custom bi bi-instagram"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p>Taggaci su Instagram</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3 box-custom text-center d-flex flex-column justify-content-center align-items-center text-white">
                
                    <div class="row">
                        <div class="col-12">
                            <i class="icons-custom bi bi-twitter"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p>Scrivici su Twitter</p>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="row align-items-center justify-content-around">
                <h3 class="text-center text-white display-6">Scrivici una Email</h3>

                <div class="col-12 text-white">
                    
                    <form class="m-5" method="post" action="{{route('email.contattiEmail')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Inserire la propria Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">Inserire il proprio nome</label>
                            <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="testoUser" class="form-label">Scrivici qualcosa</label>
                            <textarea name="testoUser" id="testoUser" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
                
            </div>

        </div>

    </header>

    



</x-layout>