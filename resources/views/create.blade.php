@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create User') }}</div>

                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                        
                            <div>
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" id="firstname">
                            </div>
                        
                            <div>
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" id="lastname">
                            </div>
                        
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email">
                            </div>
                        
                            <div>
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone">
                            </div>
                        
                            <button type="submit">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
