@extends('layouts.admin')
@section('content')
<div>
    <div class="w-full bg-red-400">
        <p>estamos en el EDIT de PRODUCTS</p>
        {{$product}}
        @livewire('admin.product-edit-component',['product'=>$product])
    </div>
</div>
@endsection