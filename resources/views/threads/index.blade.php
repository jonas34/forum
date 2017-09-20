@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                  @foreach($threads as $thread)
                    <h2 class="panel-title"></h2>
                      <h3>
                        {{ $thread->title }}
                      </h3>

                    </div>

                <div class="panel-body">
                  <h4 class="panel-title"></h4>
                  <p>
                    {{ $thread->body }}
                  </p>

                </div>
                <hr>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
