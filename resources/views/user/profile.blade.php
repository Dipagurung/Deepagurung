@extends('template')

@section('title')
profileUser;
@endsection

@section('content')
<h1>Welcome!,{{Auth::user()->name}}</h1>

@endsection