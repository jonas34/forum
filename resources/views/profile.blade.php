@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Jónas Daníel Þórisson <span style="font-size:20px;">Meðlimur í 3 vikur</span></h1>
            <hr>
            <div class="panel panel-default"  style="width:65%;">
                <div class="panel-heading">
                  Jónas Daníel Þórisson published
                  <a href="http://laravel.com">Laravel controller</a>
                </div>

                <div class="panel-body">
                  Hvernig býr maður til controller í Laravel?
                </div>
            </div>
            <div class="panel panel-default" style="width:65%;">
              <div class="panel-heading">
                Jónas Daníel Þórisson published
                <a href="http://laravel.com">Laravel 5.5</a>
              </div>

              <div class="panel-body">
                Hver er munurinn á Laravel útgáfu 5.4 og 5.5?
              </div>


        </div>
        <div class="panel panel-default" style="float:right;width:30%;top:-240px;position:relative;">
          <div class="panel-body" style="height:190px;">
            <div style="font-size:19px;">Nafn</div>
            Jónas Daníel Þórisson
            <div style="font-size:19px;">Netfang</div>
             jonasdthor@gmail.com
            <div style="font-size:19px;">Fjöldi þráða: 14</div>
          </div>
        </div>
    </div>
</div>
@endsection
