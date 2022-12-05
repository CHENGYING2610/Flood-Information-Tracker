@extends('layouts.app')

@section('content')

<div class="container">
    <div id="welheading" class="wel2">
        <h1>Create New Shelter</h1>
    </div>
    <form method="POST" action="/addshelter">
        @csrf
        <div class="row">
            <div class="spacer2"></div>
            <label for="name" class="col-3">{{ __('Name') }}</label>
            <input type="text" id="name" name="name"></input>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="number" class="col-3">{{ __('Phone Number') }}</label>
            <input type="text" id="number" name="number"></input>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="description" class="col-3">{{ __('Embed map code') }}</label>
            <textarea id="description" name="description" rows="10" cols="20"></textarea>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="maxpax" class="col-3">{{ __('Max Pax') }}</label>
            <input type="number" id="maxpax" name="maxpax"></input>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="address" class="col-3">{{ __('Address') }}</label>
            <textarea id="address" name="address" rows="10" cols="20"></textarea>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="state" class="col-3">{{ __('State') }}</label>
            <div class="col-8">
                <select name="state" id="state" class="form-control @error('state') is-invalid @enderror" name="state" class="col-8">
                    <option selected>choose State</option>
                    <option value="Johor">Johor</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Malacca">Malacca</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Penang">Penang</option>
                    <option value="Perak">Perak</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="Malaysia">Malaysia</option>
                </select>
                @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <label for="email" class="col-3">{{ __('Email/website') }}</label>
            <input type="text" id="email" name="email"></input>
        </div>
        <div class="row">
            <div class="spacer2"></div>
            <button type="submit">Add Shelter</button>
        </div>
    </form>
    <div class="spacer"></div>
</div>
</div>

@endsection