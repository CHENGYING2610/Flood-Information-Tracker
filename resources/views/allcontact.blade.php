@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" width="100%">
        <div id="welheading" class="wel1">
            <h1>Emergency Contact</h1>
        </div>
        <div class="wel3">
            <ul>
                <li><a href="{{route('contactlist')}}" class="<?php if ($selection == "all") { echo "active"; } ?>"><h1>All Contact</h1></a></li>
                <li><a href="{{route('cJohor')}}" class="<?php if ($selection == "Johor") { echo "active"; } ?>"><h1>Johor</h1></a></li>
                <li><a href="{{route('cKedah')}}" class="<?php if ($selection == "Kedah") { echo "active"; } ?>"><h1>Kedah</h1></a></li>
                <li><a href="{{route('cKelantan')}}" class="<?php if ($selection == "Kelantan") { echo "active"; } ?>"><h1>Kelantan</h1></a></li>
                <li><a href="{{route('cMalacca')}}" class="<?php if ($selection == "Malacca") { echo "active"; } ?>"><h1>Malacca</h1></a></li>
                <li><a href="{{route('cNegeriSembilan')}}" class="<?php if ($selection == "NegeriSembilan") { echo "active"; } ?>"><h1>Negeri Sembilan</h1></a></li>
                <li><a href="{{route('cPahang')}}" class="<?php if ($selection == "Pahang") { echo "active"; } ?>"><h1>Pahang</h1></a></li>
                <li><a href="{{route('cPenang')}}" class="<?php if ($selection == "Penang") { echo "active"; } ?>"><h1>Penang</h1></a></li>
                <li><a href="{{route('cPerak')}}" class="<?php if ($selection == "Perak") { echo "active"; } ?>"><h1>Perak</h1></a></li>
                <li><a href="{{route('cPerlis')}}" class="<?php if ($selection == "Perlis") { echo "active"; } ?>"><h1>Perlis</h1></a></li>
                <li><a href="{{route('cSabah')}}" class="<?php if ($selection == "Sabah") { echo "active"; } ?>"><h1>Sabah</h1></a></li>
                <li><a href="{{route('cSarawak')}}" class="<?php if ($selection == "Sarawak") { echo "active"; } ?>"><h1>Sarawak</h1></a></li>
                <li><a href="{{route('cSelangor')}}" class="<?php if ($selection == "Selangor") { echo "active"; } ?>"><h1>Selangor</h1></a></li>
                <li><a href="{{route('cTerengganu')}}" class="<?php if ($selection == "Terengganu") { echo "active"; } ?>"><h1>Terengganu</h1></a></li>
            </ul>
        </div>
        <div class="spacer2"></div>
        @foreach($contacts as $contact)
            <div class="row NewsGrid">
                    <div class="col-8">
                        <h1>{{$contact->name}}</h1>
                        <h5><b>Phone Number:</b>{{$contact->number}}</h5>
                        <h5><b>Email Address:</b> {{$contact->email}}</h5>
                        <p>Details: {{$contact->description}}</p>
                    </div>
                    <div class="col-2">
                    @auth
                    @if (auth()->user()->role == "admin")
                        <a href="{{route('deletecontact',[$id=$contact->id])}}"><button>DELETE</button></a>
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
            <a href="{{ route('createcontact') }}">+</a>
        </div>
    </div>
    @endif
    @endauth
</div>
@endsection