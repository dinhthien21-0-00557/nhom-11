@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="container">

  
<div class="row">
    @foreach ($viewData['user'] as $user)
<div class="col ">
   
<a href="{{ route('user.show', ['id' => $user -> getId()]) }}"class="btn bg-primary text-white ">{{ $user -> getName() }}</a>
</div>
@endforeach
</div>

</div>
@endsection