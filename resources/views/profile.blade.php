@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Jónas Daníel Þórisson <span style="font-size:20px;">Meðlimur í 3 vikur</span></h1>
            <hr>
            <div class="panel panel-default"  style="width:70%;">
                <div class="panel-heading">
                  Jónas Daníel Þórisson published
                  <a href="http://laravel.com">Laravel controller</a>
                </div>

                <div class="panel-body">
                  Hvernig býr maður til controller í Laravel?
                </div>
            </div>
            <div class="panel panel-default" style="width:70%;">
              <div class="panel-heading">
                Jónas Daníel Þórisson published
                <a href="http://laravel.com">Laravel 5.5</a>
              </div>

              <div class="panel-body">
                Hver er munurinn á Laravel útgáfu 5.4 og 5.5?
              </div>

              <div class="panel panel-default" style="float:right;height:250px;width:75%">
                <div class="panel-body">
                  <h1 style="font-size:20px;"> Nafn </h1>
                  <p> Jónas Daníel Þórisson </p>
                  <h2 style="font-size:20px;"> Netfang </h2>
                  <p> jonasdthor@gmail.com </p>
                  <h3 style="font-size:20px;"> Fjöldi þráða: 14 </h3>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
