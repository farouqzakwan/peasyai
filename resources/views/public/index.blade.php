@extends('template.sneat.layout')
@section('content')
    @if (!empty($users))
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-12 col-md-8 mx-auto mb-5">
                        <form action="{{ route('public.index.GET') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="enter keyword" value="{{ Request()->keyword ?? '' }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">Bil</th>
                                <th>Name</th>
                                <th width="5%" class="text-right">Age</th>
                                <th width="15%" >Gender</th>
                                <th width="10%">Created At</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td class="text-center">{{ (!empty(Request()->page))?((($key) + (10 * Request()->page))-9): $key + 1}}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td class="text-right">{{ $user->age }}</td>
                                    <td>{{ $user->Gender }}</td>
                                    <td>
                                        {{ $user->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('public.edit.GET',$user->uuid) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>

                                                <form action="{{ route('public.remove.DELETE',$user->uuid) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item" ><i class="bx bx-trash me-1"></i> Delete</button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $users->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
