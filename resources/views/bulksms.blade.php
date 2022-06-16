@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Bulk SMS Portal with Twilio</h3>
    <form class="jumbotron" action='' method='post'>
        @csrf
        @if($errors->any())
        <ul>
             @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
             @endforeach
        @endif

        @if( session( 'success' ) )
            {{ session( 'success' ) }}
        @endif

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Phone numbers (seperate with a comma [,])</label>
                <input type='text' name='numbers' class="form-control"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name='message' rows="3"></textarea>
            </div>

            <button class="btn btn-primary mt-3" type='submit'>Send!</button>
    </form>
</div>
@endsection
