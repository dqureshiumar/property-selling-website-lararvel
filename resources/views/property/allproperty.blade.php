@if(auth()->user()->isAdmin == 1)
@extends('layouts.app', ['title' => __('My Properties')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('My Properties') }}</h3>
                            </div>
                            {{-- <div class="col-4 text-right">
                                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('View Details') }}</a>
                            </div> --}}
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Location') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th scope="col">{{ __('Price') }}</th>
                                    <th scope="col">{{ __('Sold/Rent') }}</th>
                                    <th scope="col">{{ __('Verified?') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($properties->isEmpty())
                                    <p align ="center">
                                        There are no Verified Properties
                                    </p>
                                    
                                @else
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>{{ $property->location }}</td>
                                        <td>{{ $property->status }}</td>
                                        <td>{{ $property->price }}</td>
                                        <td>@if($property->prop_status == NULL) N/A @elseif($property->prop_status == 1) Sold @else Rented @endif</td>
                                        <td>@if($property->verify == NULL) N/A @elseif($property->verify == 1) Yes @else No @endif</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @if ($property->userid == auth()->id() || @auth()->user()->isAdmin == 1)
                                                    <a class="dropdown-item" href="submit-property/{{$property->id}}">{{ __('View') }}</a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('View') }}</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{-- {{ $errors->links() }} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection
@else
<h1 align="center">Pehli Fursat Me Nikal</h1>
@endif