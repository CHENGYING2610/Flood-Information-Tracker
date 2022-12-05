@extends('layouts.app')

@section('content')

<div class="container">
    <div >
        <div class="col-md-8">
            <div class="card">
            @guest
            <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('SOPs/Guidelines/Instruction') }}
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>details</td>
                        <td>author</td>
                        <td>date created</td>
                        
                    </tr>
                    @foreach($sops as $sop)
                    <tr>
                        <td>{{$sop['id']}}</td>
                        <td>{{$sop['title']}}</td>
                        <td>{{$sop['details']}}</td>
                        <td>{{$sop['user_id']}}</td>
                        <td>{{$sop['created_at']}}</td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
            @else
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('SOPs/Guidelines/Instruction') }}
                    @if (auth()->user()->role == "admin") 
                    <a href="#"><button class="btn btn-primary float-right" >Add</button></a>
                    @endif 
                </div>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>details</td>
                        <td>author</td>
                        <td>date created</td>
                        @if (auth()->user()->role == "admin")
                        <td>action</td>
                        @endif
                    </tr>
                    @foreach($sops as $sop)
                    <tr>
                        <td>{{$sop['id']}}</td>
                        <td>{{$sop['title']}}</td>
                        <td>{{$sop['details']}}</td>
                        <td>{{$sop['user_id']}}</td>
                        <td>{{$sop['created_at']}}</td>
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
