<div class="container">
   <!-- Banner -->
   <div class="banner">
      <img src="{{url('assets/slider/slider1.png')}}" alt="">
   </div>

   <!-- Pilih Liga -->
   <section class="pilih-liga mt-4">
      <h3><strong> Pilih Liga</strong></h3>
      <div class="row mt-4">
         @foreach($ligas as $liga)
         <div class="col">
            <div class="card shadow">
               <div class="card-body text-center">
                  <img src="{{ url('assets/liga') }}/{{ $liga->images }}" alt="ligas" class="img-fluid">
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>

     <!-- Best Products -->
     <section class="best-product mt-4 mb-5">
      <h3><strong> Best Products</strong></h3>
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/jersey') }}/{{ $product->images }}" alt="jersey" class="img-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <h5><strong>{{ $product->name }}</strong></h5>
                        <h5>Rp. {{ number_format($product->harga) }} </h5>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <a href="#" class="btn btn-dark btn-block">Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>


</div>
