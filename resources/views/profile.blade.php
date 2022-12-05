@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <td>User ID</td>
                            <td>{{ Auth::user()->id }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                    <a href="/home">
                                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                        <div>back to home</div>
                                </div>
                            </a>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
