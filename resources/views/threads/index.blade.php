@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                  @foreach($threads as $thread)
                    <h2 class="panel-title"></h2>
                      <div class="panel-body">
                        {{ $thread->title }}
                    </div>
                <div class="panel-body">
                  <h4 class="panel-title"></h4>
                    {{ $thread->body }}
                </div>
                <hr>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
