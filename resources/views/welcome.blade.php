<x-master-layout>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-info" style="height:100vh; background-size: cover; background-image: url();">
        <div class="container-fluid">
           <div class="row  justify-content-center align-items-center d-flex text-center h-100">
             <div class="col-12 col-md-8  h-50 ">
                 <h1 class="display-2  text-light mb-2 mt-5"><strong>Bienvenue sur Shopify !</strong> </h1>
                 <p class="lead  text-light mb-5">Accédez à tous vos produits à des prix défiant toute concurrence !</p>
        <p>
         <a href="https://blueprintsapp.launchaco.com/" class="btn bg-danger shadow-lg btn-round text-light btn-lg btn-rised">Consultez nos produits</a>
        </p>

             </div>

           </div>
         </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-4 mb-4">
                <h1>Nos derniers Produits !</h1>
            </div>
            {{-- <div class="col-md-12"> --}}
                @foreach ($produits as $produit)
                <div class="col-md-4">
                    <div class="card text-center">
                      <img class="card-img-top" src="{{ $produit->image ? asset('storage/upload/produits/'.$produit->image) : 'https://picsum.photos/200/150' }}" alt="">
                      <div class="card-body">
                        <h4 class="card-title">{{ $produit->designation }}</h4>
                        <p class="card-text">{{ $produit->description }}</p>
                      </div>
                    </div>
                </div>
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
</x-master-layout>
