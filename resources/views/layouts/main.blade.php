@extends('layouts.app')

@section('header')
  <header-component></header-component>
@endsection

@section('content')
  @yield('main-content')
@endsection

@section('footer')
  <footer-component></footer-component>
@endsection