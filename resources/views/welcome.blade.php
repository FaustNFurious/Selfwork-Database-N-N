<x-Layout>




    <header>

      <div class="container-fluid header-custom ">

        @if (session()->has('email-inviata'))
          <div class="alert alert-secondary m-5">
            {{ session('email-inviata') }}
          </div>
        @endif

        @if (session()->has('erroreEmail'))
          <div class="alert alert-danger">
            {{ session('erroreEmail') }}
          </div>
        @endif

        <div class="row vh-100 align-items-center">
          <div class="col-12">
            <h1 class="text-light text-center display-1 fw-bold">Blog Personale</h1>
          </div>
        </div>
      </div>

    </header>

    



</x-Layout>