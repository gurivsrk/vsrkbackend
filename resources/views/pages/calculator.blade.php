@extends('layouts.app', ['activePage' => 'calc', 'titlePage' => __('Edit All Calculator')])


@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">All Calculator</h4>
              <p class="card-category"> Here you can manage Calculator pages</p>
            </div>
            <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10">
                  <label>Select Page Or Add Page</label>
                    <select id="select_calc_page" class="form-control">
                        <option value="" hidden>Please Select One Option</option>
                        <option value="add_page">Add Page</option>
                        @if(!empty($options))
                            @foreach($options as $option)
                                <option value="{{$option->id}}">{{$option->page_slug}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            
           
            <div id="calpage">

            </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function(){
        $('#select_calc_page').on('change',function(){
            if($(this).val() != ''){
                var data = $(this).val();
                $.ajax({
                    type:'POST',
                    url : '{{route("staticPages.calci.page")}}',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    data: {id : data},
                    success: function(result){
                        // console.log(result);
                        $('#calpage').html(result);
                        CKEDITOR.replace('ckeditor');
                    }
                })
            }
        });
    });
</script>
@endpush
