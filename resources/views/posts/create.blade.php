@extends('layout')
@section('title', 'about')

@section('content')

<h1>Create a New Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
  <label>Title</label>
  <input class="@error('title')
  error-border
@enderror" type="text" value="{{old('title')}}" name="title">
  @error('title')
    <div class="error">
      {{ $message }}
    </div>
  @enderror
  <label>Description</label>
  <textarea class="@error('description')
    error-border
  @enderror" name="description">
    {{old('description')}}
  </textarea>
  @error('description')
    <div class="error">
      {{ $message }}
    </div>
  @enderror

  <button class="hover:bg-red" type="submit">Submit</button>
</form>
@endsection