@extends('layout')
@section('title', 'about')

@section('content')

<h1>Create a New Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
  <label>Title</label>
  <input type="text" name="title">

  <label>Description</label>
  <textarea name="description"></textarea>

  <button type="submit">Submit</button>
</form>
@endsection