@extends('index')

@section('content')
<div class="container-fluid">
    {{-- @include('home.partials.slider') --}}
    @include('home.partials.ads')
    @include('home.partials.content')
</div>
@endsection
