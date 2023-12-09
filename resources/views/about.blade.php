@extends('layout.main')
@section('content')
<div class="px-4 py-5 my-5 text-center">
   <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
   <h1 class="display-5 fw-bold text-body-emphasis">Michael Brown</h1>
   <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">This site is for ASU IFT460.  This is the final project.</p>
      <p class="lead mb-4">The following tech was used to make this assignment what it is.<br> Click to find out more.</p>
      <p class="lead mb-4">
        <div class="list-group">
            <a href="https://aws.amazon.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">AWS EC2</a>
            <a href="https://www.raspberrypi.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">Raspberry Pi</a>
            <a href="https://laravel.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">Laravel</a>
            <a href="https://www.mysql.com/products/workbench/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">MySQL and MySql Workbench</a>
            <a href="https://getbootstrap.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">Bootstrap</a>
            <a href="https://getbootstrap.com/docs/5.3/examples/dashboard/" target="_blank" class="list-group-item list-group-item-action list-group-item-success">A Bootstrap dashboard theme</a>
        </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
         <!-- <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
      </div>
   </div>
</div>
@endsection