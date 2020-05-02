@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Edit your Property now and Send us for Re-Verification of your property.Incase your property is Legit, your Property will be Displayed on our Website.Thank You!!'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Edit your Property') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('submit-property.update', [$properties->id]) }}" autocomplete="off" enctype="multipart/form-data" accept-charset="UTF-8">
                            @method('PUT')
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Property information') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Location') }}</label>
                                <input type="text" name="location" id="input-name" class="form-control form-control-alternative{{ $errors->has('location') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter your Property Location (Eg: Malad)') }}" }}" required autofocus value="{{$properties->location}}">

                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Property Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                                      <option value="For Sale">For Sale</option>
                                      <option value="For Rent">For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Property Type</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="type">
                                      <option value="Family House">Family House</option>
                                      <option value="Apartment">Apartment</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Beds</label>
                                    <select class="form-control" id="exampleFormControlSelect3" name="beds">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect4">Baths</label>
                                    <select class="form-control" id="exampleFormControlSelect4" name="baths">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('sqft') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-sqft">{{ __('Square feet') }}</label>
                                    <input type="text" name="sqft" id="input-sqft" class="form-control form-control-alternative{{ $errors->has('sqft') ? ' is-invalid' : '' }}" placeholder="{{ __('Square Feet') }}" required>

                                    @if ($errors->has('sqft'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sqft') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-price">{{ __('Price ') }}</label>
                                    <input type="text" name="price" id="input-price" class="form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price in Rupees') }}" required>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Address ') }}</label>
                                    <textarea type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter your Full Address') }}" required></textarea>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="upload">Upload your Property Image</label>
                                    <input type="file" id="upload" class="form-control" name="filename" required/>
                                </div>
                                <div class="text-center">
                                    
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        {{-- <script>
                            $('#featured').on('change', function(){
                            if ($(this).is(':checked')) {
                                $('form').attr('action', '{{ route('paywithpaypal') }}');
                            } else {
                                $('form').attr('action', '{{ route('submit-property.store') }}');
                            }
                        });
                        </script> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection