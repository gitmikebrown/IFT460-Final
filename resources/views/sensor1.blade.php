@extends('layout.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Sensor 1</h1>
   <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
         <!-- <button type="reset" class="btn btn-sm btn-outline-secondary">Refresh Page</button> -->
         <a href="/sensor1" class="btn btn-sm btn-outline-secondary" tabindex="-1" role="button" aria-disabled="true">Refresh Page</a>
         <a href="https://www.amazon.com/dp/B09NVWNGLQ?psc=1&ref=ppx_yo2ov_dt_b_product_details" target="_blank" class="btn btn-sm btn-outline-secondary" tabindex="-1" role="button" aria-disabled="true">Sensor Info</a>
         <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
      </div>
      <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
         <svg class="bi"><use xlink:href="#calendar3"/></svg>
         This week
         </button> -->
   </div>
</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
<div class="table-responsive small">
   <table class="table table-striped table-sm">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">temp_f</th>
            <th scope="col">temp_c</th>
            <th scope="col">Date/Time Entered (UTC-0)</th>
         </tr>
      </thead>
      <tbody>
         @foreach($temperature as $temp)
         <tr>
            <td>{{$temp->id}}</td>
            <td>{{$temp->temp_f}}</td>
            <td>{{$temp->temp_c}}</td>
            <td>{{$temp->created_at}}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div> 
@endsection