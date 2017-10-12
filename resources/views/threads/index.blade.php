@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($threads as $thread)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">

                    
                        <article>
                            <div>
                                <h4>
                                    <a href="/threads/{{ $thread->id }}">
                                        {{ $thread->title }}
                                    </a>
                                </h4>
                            </div>
                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>
                    

                    
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection