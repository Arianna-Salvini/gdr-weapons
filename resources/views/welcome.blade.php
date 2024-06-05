@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
        <div class="container">
            <h1 class="display-4 medieval">GDR Weapons</h1>
            <p class="lead">This is loading platform for weapons and characters. Log in to continue.</p>
            <hr class="my-4">
            <p>Get ready to explore a world of wonder and excitement.</p>
            <a class="btn btn-danger my-5 btn-lg" href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <form>
                    <div class="form-group my-3">
                        <label for="nome">Name</label>
                        <input type="text" class="form-control" id="nome" placeholder="Enter your name">
                    </div>
                    <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group my-3">
                        <label for="messaggio">Message</label>
                        <textarea class="form-control" id="messaggio" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Project by:</p>
                <ul class="list-group">
                    <li class="list-group-item">Giovanni Cattaneo</li>
                    <li class="list-group-item">Daniele Colaci</li>
                    <li class="list-group-item">Nicola Dell'Olio</li>
                    <li class="list-group-item">Simone Nolberto</li>
                    <li class="list-group-item">Stanyslav Tryfenko</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
