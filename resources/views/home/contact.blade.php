@extends('layouts.app')

@section('title', $title)

@section('subtitle', $subtitle)

@section('content')

<div class="container">

<div class="row">

<div class="col-lg-4 ms-auto">

<p class="lead">{{ $description }}</p>

</div>

<div class="col-lg-4 me-auto">

  <ul>
    <li><strong>E-mail:</strong> {{$email}}</li>
    <li><strong>Phone:</strong> {{$phone}}</li>
    <li><strong>Address:</strong> {{$address}}</li>
  </ul>

</div>

</div>

</div>

@endsection