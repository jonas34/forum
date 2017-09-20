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
                <ul>
                  @foreach($tasks as $task)

                    @if( ! $task ['complete'] )
                      <li>
                        <a href="{{ $task['anchor'] }}"> {{ $task['title'] }}</li></a>
                    @else
                      <li>
                        <a href="{{ $task['anchor'] }}"></a>
                          <s>{{ $task['title'] }}</s>
                      </li>
                    @endif

                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
