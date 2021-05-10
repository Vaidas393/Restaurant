<section class="home-slider owl-carousel">

  <div class="slider-item" style="background-image: url(theme/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Order Online</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="ftco-menu mb-5 pb-5">
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-lg-12 ftco-animate p-md-5">
          <div class="col-md-12 d-flex align-items-center">
            <div class="row">

              @foreach ($products as $product)
                  <div class="col-md-3">
                    <div class="menu-entry">
                      <a href="#" class="img" style="background-image: url(theme/images/products/{{$product->image}});"></a>
                      <div class="text text-center pt-4">
                        <h3>{{$product->name}}</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <p class="price"><span>{{$product->regular_price}}</span></p>
                        <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                      </div>
                    </div>
                  </div>
                @endforeach

            </div>

          </div>
        </div>
      </div>
      <div class="wrap-paginationiinfo">
      {{$products->links()}}
    </div>
    </div>
</section>
