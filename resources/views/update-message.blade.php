@extends('layouts.app')

@section('title-block')update record @endsection

@section('content')
  <h1>update record</h1>

  

  <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Input name</label> 
      <input type="text" name="name" placeholder="Input name" id="name" class="form-control" value="{{$data->name}}">
    </div>

    <div class="form-group">
      <label for="email">Email</label> 
      <input type="text" name="email" placeholder="Input email" id="email" class="form-control" value="{{$data->email}}">
    </div>

    <div class="form-group">
      <label for="name">Theme message</label> 
      <input type="text" name="subject" placeholder="Theme message" id="subject" class="form-control" value="{{$data->subject}}">
    </div>

    <div class="form-group">
      <label for="message">Message</label> 
      <textarea name="message" id="message" class="form-control" placeholder="Input message">{{$data->message}}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
@endsection

