@extends('layouts.app')

@section('content')

<div class="container">
    <div >
        <div class="col-md-8">
            <div class="card">
                @guest
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('Emergency Contact') }}
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>name</td>
                        <td>number</td>
                        <td>email</td>
                        <td>description</td>
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact['id']}}</td>
                        <td>{{$contact['name']}}</td>
                        <td>{{$contact['number']}}</td>
                        <td>{{$contact['email']}}</td>
                        <td>{{$contact['description']}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @else
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('Emergency Contact') }}
                    @if (auth()->user()->role == "admin") 
                    <a href="#"><button class="btn btn-primary float-right" >Add</button></a>
                    @endif 
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>name</td>
                        <td>number</td>
                        <td>email</td>
                        <td>description</td>
                        @if (auth()->user()->role == "admin")
                        <td>action</td>
                        @endif
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact['id']}}</td>
                        <td>{{$contact['name']}}</td>
                        <td>{{$contact['number']}}</td>
                        <td>{{$contact['email']}}</td>
                        <td>{{$contact['description']}}</td>
                        @if (auth()->user()->role == "admin") 
                        <td>
                            <a href="#"><button class="btn btn-danger" >delete</button></a>
                            <a href="#"><button class="btn btn-success" >edit</button></a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endguest
        </div>
    </div>
</div>
@endsection
