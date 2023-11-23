@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-start">
                    <a class="btn btn-primary" href="{{ route('page.index', 'clients') }}">
                        <i class="nc-icon nc-plus"></i>
                        <p>{{ __('Back') }}</p>
                    </a>
                </div>
                <div class="row d-flex justify-content-center">
                    <h4 class="card-title">CREATE NEW CLIENT</h4>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form class="col-md-12" action="{{ route('add.client') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-inbetween">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('First Name') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" class="form-control"
                                                            placeholder="First Name" required>
                                                    </div>
                                                    @if ($errors->has('first_name'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Contact') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="number" name="contact" class="form-control"
                                                            placeholder="Contact" required>
                                                    </div>
                                                    @if ($errors->has('contact'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('contact') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Gender') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select id="gender" name="gender"
                                                            class="form-select form-control"
                                                            aria-label="Default select example" required>
                                                            <option value="male">
                                                                Male</option>
                                                            <option value="female">
                                                                Female</option>
                                                        </select>

                                                    </div>
                                                    @if ($errors->has('gender'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Street No') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="street_no" class="form-control"
                                                            placeholder="Street No" required>
                                                    </div>
                                                    @if ($errors->has('street_no'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('street_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('City') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="city" class="form-control"
                                                            placeholder="City" required>
                                                    </div>
                                                    @if ($errors->has('city'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Last Name') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" class="form-control"
                                                            placeholder="Last Name" required>
                                                    </div>
                                                    @if ($errors->has('last_name'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Email Address') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="email_address" class="form-control"
                                                            placeholder="Email Address" required>
                                                    </div>
                                                    @if ($errors->has('email_address'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('email_address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Date of Birth') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="row d-flex justify-content-inbetween">
                                                            <div class="col-md-3">
                                                                {!! Form::selectYear('year', date('Y') - 3, date('Y') - 40, null, [
                                                                    'class' => 'selectbody fl form-control',
                                                                ]) !!}
                                                            </div>
                                                            <div class="col-md-4">{!! Form::selectMonth('month', null, ['class' => 'selectbody fl form-control']) !!}
                                                            </div>
                                                            <div class="col-md-2">{!! Form::selectRange('day', 1, 31, null, ['class' => 'selectbody fl form-control']) !!}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('dob'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('dob') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Street Address') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="street_address" class="form-control"
                                                            placeholder="Street Address" required>
                                                    </div>
                                                    @if ($errors->has('street_address'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('street_address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-md-3 col-form-label">{{ __('Active/Inactive') }}</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        
                                                        <input type="checkbox" role="switch" name="is_active" class="form-check-input form-control"
                                                            >
                                                        {{-- <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="is_active" checked />
                                                          </div> --}}
                                                    </div>
                                                    @if ($errors->has('is_active'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('is_active') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-12 text-center">
                                            <button type="submit"
                                                class="btn btn-info btn-round">{{ __('Save Changes') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
