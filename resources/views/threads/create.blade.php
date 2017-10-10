@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                  @include('common.errors')
                  <form method="post" action="/threads">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Title:</label>
                      <input type="text" name="title" class="form-control" value="{{ old('title') }}" >
                    </div>
                    <div class="form-group">
                      <label>Body:</label>
                      <textarea type="text" name="body" rows="7" class="form-control">{{{ Input::old('body') }}}</textarea>
                      <h1>  </h1>
                      <button class="btn btn-info" style="background-color:#5bc0de; border-color:#46B8D9">Publish</button>
                    </div>
                  </form>
                </div>
                <ul>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
