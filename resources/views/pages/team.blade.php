@extends('layouts.app', ['activePage' => 'team', 'titlePage' => __('Team')])

@section('content')
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Team</h4>
              <p class="card-category">Here you can manage Team</p>
            </div>
            <div class="card-body table-responsive">
                <!--- Add Form --->
                    <div class="row  justify-content-center">
                    <div id="addTeamSection" class="col-md-10 vsrkAddForms">
                        <div class="close">X</div>
                        <form method="post"  id="add-team-member" action="{{route('storeMedia')}}" enctype="multipart/form-data">
                        <h4 class="card-title mb-4">Add Team Member</h4>
                            @csrf
                            <div class="col-md-4 p-0">
                                <label class="">{{ __('Profile Image') }}</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                        <a href="#pablo" class="fileinput-exists" data-dismiss="fileinput">
                                        <i class="fa fa-times"></i></a>
                                    <div id="vsrkInputImg"> 
                                        <span class="btn btn-raised btn-file">
                                        <input type="file" name="profileImg" />
                                        </span>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="">{{ __('Name') }}</label>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6{{ $errors->has('desgination') ? ' has-danger' : '' }}">
                                    <label class="">{{ __('desgination') }}</label>
                                    <input class="form-control{{ $errors->has('desgination') ? ' is-invalid' : '' }}" name="desgination" id="input-desgination" type="text" placeholder="{{ __('Desgination') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('desgination'))
                                        <span id="desgination-error" class="error text-danger" for="input-desgination">{{ $errors->first('desgination') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="{{ $errors->has('descritption') ? ' has-danger' : '' }}">
                                <label class="">{{ __('descritption') }}</label>
                                <textarea class="form-control{{ $errors->has('descritption') ? ' is-invalid' : '' }}"  rows="5"  name="descritption" id="input-descritption" placeholder="{{ __('descritption') }}" required="true" aria-required="true"></textarea>
                                @if ($errors->has('descritption'))
                                    <span id="name-descritption" class="error text-danger" for="input-descritption">{{ $errors->first('descritption') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-success" name="Submit" id="input-profileImg" type="submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    </div>
                <!---- End Add Form ---->
                    <div class="row">
                    <div data-attr="addTeamSection" class="col-12 text-right addBtn">
                        <button class="btn btn-sm btn-info">Add New Team Member<div class="ripple-container"></div></button>
                    </div>
                        @include('partials.blogType')
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
    </div>
  </div>
@endsection
@push('js')

@endpush