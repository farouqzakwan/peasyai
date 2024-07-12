@extends('template.sneat.layout')
@section('content')

<form action="{{ route('public.edit.POST',$user->uuid) }}" method="POST">
    @csrf

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <label><strong>Title</strong></label>
                    <input type="text" name="title" class="form-control" value="{{ $user->title }}" required>
                    @error('title')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label><strong>First</strong></label>
                    <input type="text" name="first" class="form-control" value="{{ $user->first_name }}" required>
                    @error('first')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <label><strong>Last</strong></label>
                    <input type="text" name="last" class="form-control" value="{{ $user->last_name }}" required>
                    @error('last')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Gender</strong></label>
                    <input type="text" name="gender" class="form-control" value="{{ $user->Gender }}" required>
                    @error('gender')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Age</strong></label>
                    <input type="number" name="age" class="form-control" value="{{ $user->age }}" required>
                    @error('age')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>City</strong></label>
                    <input type="text" name="city" class="form-control" value="{{ $user->city }}">
                    @error('city')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>State</strong></label>
                    <input type="text" name="state" class="form-control" value="{{ $user->state }}">
                    @error('state')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Street Name</strong></label>
                    <input type="text" name="street_name" class="form-control" value="{{ $user->street_name }}">
                    @error('street_name')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Street Number</strong></label>
                    <input type="number" name="street_number" class="form-control" value="{{ $user->street_number }}">
                    @error('street_number')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Country</strong></label>
                    <input type="text" name="country" class="form-control" value="{{ $user->country }}">
                    @error('country')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Postcode</strong></label>
                    <input type="number" name="postcode" class="form-control" value="{{ $user->postcode }}">
                    @error('postcode')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Timezone</strong></label>
                    <input type="text" name="timezone_offset" class="form-control" value="{{ $user->timezone_offset }}">
                    @error('timezone_offset')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Description</strong></label>
                    <input type="text" name="timezone_description" class="form-control" value="{{ $user->timezone_description }}">
                    @error('timezone_description')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Latitude</strong></label>
                    <input type="text" name="latitude"  class="form-control" value="{{ $user->latitude }}">
                    @error('latitude')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label><strong>Longitude</strong></label>
                    <input type="text" name="longitude" class="form-control" value="{{ $user->longitude}}">
                    @error('longitude')
                        <span><i class="text-danger">{{ $message }}</i></span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-right">
            <button class="btn btn-primary float-end">Update</button>
        </div>
    </div>

</form>

@endsection
