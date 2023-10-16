@extends('layouts.app')

@section('title', 'Members Index')

@section('content')

    <a href="{{ route('members.create') }}">Add Member</a>
@endsection
