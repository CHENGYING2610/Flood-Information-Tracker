@extends('layouts.app')

@section('content')

<div class="container">
    <div >
        <div class="col-md-8">
            <div class="card">
            @guest
            <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('Announcements') }}
                </div>
                <table border="1">
                    
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>content</td>
                        <td>catergory</td>
                        <td>author</td>
                        
                    </tr>
                    @foreach($announcements as $announcement)
                    <tr>
                        <td>{{$announcement['id']}}</td>
                        <td>{{$announcement['title']}}</td>
                        <td>{{$announcement['content']}}</td>
                        <td>{{$announcement['catergory']}}</td>
                        <td>{{$announcement['user_id']}}</td>
                        
                    </tr>
                    @endforeach
                </table>
            </div>
            @else
                <div class="card-header d-flex justify-content-between align-items-center" >
                    {{ __('Announcements') }}
                    @if (auth()->user()->role == "admin") 
                    <a href="#"><button class="btn btn-primary float-right" >Add</button></a>
                    @endif 
                </div>
                <table border="1">
                    
                    <tr>
                        <td>ID</td>
                        <td>title</td>
                        <td>content</td>
                        <td>catergory</td>
                        <td>author</td>
                        @if (auth()->user()->role == "admin")
                        <td>action</td>
                        @endif
                    </tr>
                    @foreach($announcements as $announcement)
                    <tr>
                        <td>{{$announcement['id']}}</td>
                        <td>{{$announcement['title']}}</td>
                        <td>{{$announcement['content']}}</td>
                        <td>{{$announcement['catergory']}}</td>
                        <td>{{$announcement['user_id']}}</td>
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
        <div >       
                <div><iframe src="https://www.bing.com/news/search?q=malaysia+latest+flood+update&nvaug=%5bNewsVertical+Category%3d%22rt_malaysia+latest+flood+update%22%5d&qft=sortbydate%3d%221%22&form=YFNR" width="100%" height="30%"></iframe></div>
            
                <div><iframe src="https://publicinfobanjir.water.gov.my/?lang=en#" width="100%" height="1000" scrolling="no"></iframe></div>
                    
                <div><iframe src="http://infobanjirjps.selangor.gov.my/index.html" width="100%" height="1000"></iframe></div>
        </div>
        <div>
        <div id="example"></div>
        </div>
        
        
    </div>
</div>
@endsection

100af9a2a98e40e9b52c932fec339bb5