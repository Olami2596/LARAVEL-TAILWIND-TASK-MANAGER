@extends('layouts.app')

<x-header :showAddTaskLink="false" />

@section('content')
    @include('form')
@endsection
