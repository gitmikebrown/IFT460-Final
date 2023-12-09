@extends('layout.main')
@section('content')
<div class="px-4 py-5 my-5 text-center">
   <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
   <h1 class="display-5 fw-bold text-body-emphasis">Michael Brown</h1>
   <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Two sensors were used in this assignment</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
         <div class="container">
            <div class="card" style="width: 18rem;">
               <img src="/img/DS18B20.jpg" class="img-thumbnail" alt="Sensor 1">
               <div class="card-body">
                  <h5 class="card-title">Sensor 1</h5>
                  <p class="card-text">DS18B20</p>
                  <a href="https://www.amazon.com/dp/B09NVWNGLQ?psc=1&ref=ppx_yo2ov_dt_b_product_details" target="_blank" class="btn btn-primary">More Info</a>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="card" style="width: 18rem;">
               <img src="/img/DHT22.jpg" class="img-thumbnail" alt="Sensor 2">
               <div class="card-body">
                  <h5 class="card-title">Sensor 2</h5>
                  <p class="card-text">DHT22</p>
                  <a href="https://www.amazon.com/dp/B078SVZB1X?psc=1&ref=ppx_yo2ov_dt_b_product_details" class="btn btn-primary" target="_blank">More Info</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection