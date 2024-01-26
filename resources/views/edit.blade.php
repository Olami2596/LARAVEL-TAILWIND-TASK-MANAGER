@extends('layouts.app')

<x-header />

@section('content')
  @include('form', ['task' => $task])
@endsection