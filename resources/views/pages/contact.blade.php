@extends('layouts.default')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="card mt-4 pl-2 pr-2">
            <div class="card-title">
                <h1>Contact us</h1>
                <p>Please use this form to contact the owner</p>
            </div>
            <div class="card-body">
                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="namelHelp" placeholder="John">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@example.com">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="body">Example textarea</label>
                        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection()
