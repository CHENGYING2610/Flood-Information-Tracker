@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" width="100%">
        <div id="welheading" class="wel1">
            <h1>Shelter</h1>
        </div>
        <div class="wel3">
            <ul>
                <li><a href="{{route('shelter')}}" class="<?php if ($selection == "all") { echo "active"; } ?>"><h1>All Contact</h1></a></li>
                <li><a href="{{route('sJohor')}}" class="<?php if ($selection == "Johor") { echo "active"; } ?>"><h1>Johor</h1></a></li>
                <li><a href="{{route('sKedah')}}" class="<?php if ($selection == "Kedah") { echo "active"; } ?>"><h1>Kedah</h1></a></li>
                <li><a href="{{route('sKelantan')}}" class="<?php if ($selection == "Kelantan") { echo "active"; } ?>"><h1>Kelantan</h1></a></li>
                <li><a href="{{route('sMalacca')}}" class="<?php if ($selection == "Malacca") { echo "active"; } ?>"><h1>Malacca</h1></a></li>
                <li><a href="{{route('sNegeriSembilan')}}" class="<?php if ($selection == "NegeriSembilan") { echo "active"; } ?>"><h1>Negeri Sembilan</h1></a></li>
                <li><a href="{{route('sPahang')}}" class="<?php if ($selection == "Pahang") { echo "active"; } ?>"><h1>Pahang</h1></a></li>
                <li><a href="{{route('sPenang')}}" class="<?php if ($selection == "Penang") { echo "active"; } ?>"><h1>Penang</h1></a></li>
                <li><a href="{{route('sPerak')}}" class="<?php if ($selection == "Perak") { echo "active"; } ?>"><h1>Perak</h1></a></li>
                <li><a href="{{route('sPerlis')}}" class="<?php if ($selection == "Perlis") { echo "active"; } ?>"><h1>Perlis</h1></a></li>
                <li><a href="{{route('sSabah')}}" class="<?php if ($selection == "Sabah") { echo "active"; } ?>"><h1>Sabah</h1></a></li>
                <li><a href="{{route('sSarawak')}}" class="<?php if ($selection == "Sarawak") { echo "active"; } ?>"><h1>Sarawak</h1></a></li>
                <li><a href="{{route('sSelangor')}}" class="<?php if ($selection == "Selangor") { echo "active"; } ?>"><h1>Selangor</h1></a></li>
                <li><a href="{{route('sTerengganu')}}" class="<?php if ($selection == "Terengganu") { echo "active"; } ?>"><h1>Terengganu</h1></a></li>
            </ul>
        </div>
        <div class="spacer2"></div>
        @foreach($shelters as $shelter)
            <div class="row NewsGrid">
                    <div class="col-8">
                        <h1>{{$shelter->name}}</h1>
                        <h5><b>Phone Number:</b>{{$shelter->number}}</h5>
                        <h5><b>Email Address:</b> {{$shelter->email}}</h5>
                        <div class="row" style="height:auto;"><?php echo stripslashes($shelter->description) ?></div>
                    </div>
                    <div class="col-2">
                    @auth
                    @if (auth()->user()->role == "admin")
                        <a href="{{route('deleteshelter',[$id=$shelter->id])}}"><button>DELETE</button></a>
                    @endif
                    @endauth
                    </div>
                </div>
        @endforeach
    </div>
    @auth
    @if (auth()->user()->role == "admin")
    <div class="fab-container">
        <div class="button iconbutton">
            <a href="{{ route('createshelter') }}">+</a>
        </div>
    </div>
    @endif
    @endauth
</div>
@endsection