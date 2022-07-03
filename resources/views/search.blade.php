@extends('layouts.app')

@section('content')
    <div>
       {{--  hola search controller
        <p>{{ $product . $category }}</p> --}}
        @livewire('search-component', ['category' => $category, 'product' => $product])
    </div>
@endsection
