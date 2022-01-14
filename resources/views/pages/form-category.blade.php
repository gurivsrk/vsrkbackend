@extends('layouts.app', ['activePage' => 'form-category', 'titlePage' => __('Categories & Tags')])


@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Categoies & Tags</h4>
              <p class="card-category"> Here you can manage Form Categories</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                       <form class="p-4" method="post" action="{{ (empty($cateUpdate))?route('cateTag.store'):route('cateTag.update',$cateUpdate->id)}}">
                       @if(!empty($cateUpdate))
                        @method('put')
                       @endif
                       <h4 class="card-title mb-4">Add Category/Tag</h4>
                            @csrf
                                <div class="{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="">{{ __('Name') }}</label>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', @$cateUpdate->name) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <label class="">{{ __('Type') }}</label>
                                   <select name="type" class="form-control custom-select" aria-required="true" required>
                                        <option hidden value="">Please Select One</option>
                                        <option value="category" {{(@$cateUpdate->type === "category")?"selected" : " "}}>Category</option>
                                        <option value="tag"  {{(@$cateUpdate->type === "tag")?"selected" : " "}}>Tag</option>
                                   </select>
                                </div>
                                @if ($errors->has('type'))
                                        <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                                    @endif
                                <div class="">
                                    <label class="">{{ __('Parent') }}</label>
                                   <select name="parent_id" class="form-control custom-select">
                                        <option hidden value="">Please Select One</option>
                                        @if(!empty($cateUpdate))
                                          <option value="">Remove Parent</option>
                                        @endif
                                        @foreach($category as $key=>$cate)
                                          <option value="{{ @$cate->id }}" {{(@$cateUpdate->parent_id === @$cate->id )?"selected" : " "}}>{{ @$cate->name }}</option>
                                        @endforeach
                                   </select>
                                </div>
                                <label class="mt-4">Category for ?</label>
                                <div class="form-check form-check-radio {{ $errors->has('cateFor') ? ' has-danger' : '' }}">
                                
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="for" id="cateFor1" value="Form" {{(@$cateUpdate->for ==='Form' )?"checked" : " "}}  aria-required="true" required>
                                      For Forms
                                      <span class="circle">
                                          <span class="check"></span>
                                      </span>
                                  </label>
                              </div>
                              <div class="form-check form-check-radio {{ $errors->has('cateFor') ? ' has-danger' : '' }}">
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="radio" name="for" id="cateFor2" value="other"  {{(@$cateUpdate->for ==='other' )?"checked" : " "}} aria-required="true" required>
                                      For Blog or Other
                                      <span class="circle">
                                          <span class="check"></span>
                                      </span>
                                  </label>
                              </div>
                              @if ($errors->has('for'))
                                        <span id="for-error" class="error text-danger" for="input-for">{{ $errors->first('for') }}</span>
                                    @endif
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                   <input type="submit" name="submit" value="Submit" class="btn btn-info">
                                </div>
                       </form>
                    </div>
                    <div class="col-md-8">
                    <div class="table-responsive">
                <table class="table table-sort">
                  <thead >
                        <tr>
                          <th> Sno.</th>
                          <th>Name</th>
                          <th> Type </th>
                          <th> Parent </th>
                          <th> For </th>
                          <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                  <tbody>
                    @foreach($category as $key=>$cate)
                      <tr>
                          <td>{{++$key}}</td>
                          <td>{{ @$cate->name}}  </td>
                          <td>{{ @$cate->type }} </td>
                          <td> {{ (!empty($cate->parent->name))?$cate->parent->name:"-"; }} </td>
                          <td> {{ @$cate->for }} </td>
                          <td class="td-actions text-center">
                          <a rel="tooltip" class="btn btn-success btn-link" href="{{route('cateTag.edit',$cate->id)}}"> <i class="material-icons">edit</i> </a>
                          <form action="{{ route('cateTag.destroy',$cate->id) }}" method="POST" onsubmit="return confirm('Are you sure ?');" style="display: inline-block;">
                              @method('delete') 
                              @csrf
                              <button class="btn btn-danger btn-link"> <i class="material-icons">delete</i> </button>
                          </form>
                          </td>
                      </tr>
                   
                    @endforeach
                    </tbody>
                </table>
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
