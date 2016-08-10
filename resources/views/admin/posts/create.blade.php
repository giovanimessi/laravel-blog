@extends('app')

@section('title')
    Blog Admin
@endsection

@section('content')

        <div class="postagens" style="margin-top: 20px;">
            <div class="row">
                <div class="col-sm-5" style="font-size: 20px;"><strong>Novo Post</strong></div>                
            </div>

        <div class="row">

            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

                @include('admin.posts._form')
                
            {!! Form::close() !!}
        </div>
           
        </div>

@endsection