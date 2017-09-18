@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                    <div class="form-group">
                      <label>Title:</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Body:</label>
                      <textarea type="text" rows="7" class="form-control"></textarea>
                      <h1>  </h1>
                      <button type="button" class="btn btn-info" style="background-color:#5bc0de; border-color:#46B8D9">Publish</button>
                    </div>
                </div>
                @foreach($countries as $country)

                  @if($country === 'Ísland')
                    <h1>{{ $country }}</h1>
                  @else
                    <p>{{ $country }}</p>
                  @endif

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
