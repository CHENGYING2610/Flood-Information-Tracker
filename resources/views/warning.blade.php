@extends('layouts.app')

@section('content')

<div class="container">
    <div >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('map') }}</div>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="1100" height="800" id="gmap_canvas" src="https://maps.google.com/maps?q=malaysia&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
                @guest
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('warning message') }}
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>description</td>
                        <td>warning level</td>
                        <td>location</td>
                    </tr>
                    @foreach($warnings as $warning)
                    <tr>
                        <td>{{$warning['id']}}</td>
                        <td>{{$warning['title']}}</td>
                        <td>{{$warning['description']}}</td>
                        <td>{{$warning['level']}}</td>
                        <td>{{$warning['location']}}</td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
            @else        
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('warning message') }}
                    @if (auth()->user()->role == "admin") 
                    <a href="#"><button class="btn btn-primary float-right" >Add</button></a>
                    @endif 
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>description</td>
                        <td>warning level</td>
                        <td>location</td>
                        @if (auth()->user()->role == "admin")
                        <td>action</td>
                        @endif
                    </tr>
                    @foreach($warnings as $warning)
                    <tr>
                        <td>{{$warning['id']}}</td>
                        <td>{{$warning['title']}}</td>
                        <td>{{$warning['description']}}</td>
                        <td>{{$warning['level']}}</td>
                        <td>{{$warning['location']}}</td>
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
