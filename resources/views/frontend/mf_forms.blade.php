@extends('layouts.frontend.frontend', ['activeClass' => 'MF Forms','pageType'=>'mf_forms'])
@section('frontend_content')
   <!-- start page title area-->
   <section id="md-desk" class="page-title-area bg-white">
            <div class="container">
                <div class="page-title-content">
                    <h1>MF Forms</h1>
                    <ul>
                        <li class="item"><a href="{{route('frontend.index')}}">Home</a></li>
                        <li class="item"><a href="javascript:void(0)">MF Forms</a></li>
                    </ul>
                </div>
            </div>
            <div class="shape">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <span class="shape3"></span>
                <span class="shape4"></span>
            </div>
               <!--start md desk section-->
        <div class="about-section ptb-50 text-justify">
            <div class="container pt-100">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-sm-12 pb-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>AMC Name</label>
                                        <select id="select_dynamic_input" class="vsrk-select form-control"> 
                                            <option value="">Please Select One</option>
                                            @foreach($form_cate as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                    <label>Form Name</label>
                                    <select id="dynamic_forms_output" class="vsrk-select form-control">
                                            <option value="">Please Select One</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="form_details"></div>
                </div>
            </div>
            </div>
        </section>
        
        <!-- end page title area -->
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /****select2****/

.select2-container {
    width: 100% !important;
}
.select2-container .select2-selection--single {
    height: 40px;
    font-size: 20px;
    padding: 5px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 40px !important;
}
</style>

@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" ></script>
    <script>
        /// initialize select2 
        $(document).ready(function(){
            let logo;

            const enableSelect2 = () => {
                $('.vsrk-select').select2({
                    placeholder: 'Select an option',
                })
            }

            enableSelect2();
           
            $('#select_dynamic_input').on('change',function(){
               let id = $(this).val()
               $.ajax({
                    type:'POST',
                    url : '{{route("frontend.mf_forms")}}',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    data: {id},
                    success: function(result){
                        $('#dynamic_forms_output').html('').append($('<option></option>').attr("value","").text('Select one'))
                        for(opt of result){
                            logo = opt['category_name']['logo']
                            $('#dynamic_forms_output').append($('<option></option>').attr({"value":opt['id']+','+opt['form_name']+','+opt['form_link']}).text(opt['form_name']))
                        }
                        enableSelect2();
                    }
                })
            })

            $('#dynamic_forms_output').on('change',function(){
                let raw = $(this).val(), 
                raw_data = raw.split(','),
                id = raw_data[0],
                name = raw_data[1],
                link = raw_data[2]
              
                let data = '<image src="'+logo+'" width="225" class="image-responsive" alt="">'
                    data +=  '<div class="mt-3">'
                    data +=  '<h5 id="file_name" class="mt-2">File Name: '+ name +'</h5>'
                    if(link != null && link != "null"){
                        data +=  '<h6 id="file_link" class="mt-2">File link: <a href="'+ link +'">View Kim</a></h6>'
                    }
                    data +=  '<a href="/MF-Forms/'+id+'/download"><button id="download_form" data-id='+id+' class="btn btn-solid mt-2">Download Now</button></a>'
                    data += '</div>'
                   $('#form_details').html(data)
            })

            
        })         


    </script>
    
    


@endpush

@endsection