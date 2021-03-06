
<div class="form-group">
    <label class="">{{ __('Calculator Type') }}</label>
    <select name="calc_type" id="select_calculator_type" class="vsrk-select form-control select_calc_page custom-select dynamic-content" aria-required="true">
    <option value="">Please Select One</option>
        <option value="sip-lumpsum-calculator" data-id="{{ @$calc_type->page }}" {{@$calc_type == 'sip-lumpsum-calculator'? 'selected': '' }}>sip lumpsum calculator</option>  
        <option value="sip-lumpsum-active-calculator" data-id="{{ @$calc_type->page }}" {{@$calc_type == 'sip-lumpsum-active-calculator'? 'selected': '' }}>sip lumpsum calculator with active on lumpsum tab</option>  
        <option value="retirement-type-calculator" data-id="{{ @$calc_type->page }}"  {{@$calc_type == 'retirement-type-calculator'? 'selected': '' }}>retirement type calculator</option>  
        <option value="compound-calculator" data-id="{{ @$calc_type->page }}"  {{@$calc_type == 'compound-calculator'? 'selected': '' }}>compound-calculator</option>  
        <option value="online-rd-calculator"  data-id="{{ @$calc_type->page }}" {{@$calc_type == 'online-rd-calculator'? 'selected': '' }}>RD calculator</option>  
        <option value="online-ppf-calculator"  data-id="{{ @$calc_type->page }}" {{@$calc_type == 'online-ppf-calculator'? 'selected': '' }}>PPF calculator</option>  
    </select>
</div>

@if(@$calc_type == 'retirement-type-calculator' || empty($calc_type))
@else
<div id="input-typ-data-fields" >
<div class="row mt-4 mb-4 justify-content-space-evenly">
    <div class="form-group col-md-12">
        <label class="">{{ __('Amount Field') }}</label>
    </div> 
    <div class="form-group ">
        <label class="">{{ __('Max value for input') }}</label>
        <input class="form-control" name="amt_max_input_value" id="input-name" type="text" placeholder="{{ __('max_input_value') }}" value="{{ old('amt_max_input_value', @$data['table']->amt_max_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Min value for input') }}</label>
        <input class="form-control" name="amt_min_input_value" id="input-name" type="text" placeholder="{{ __('min_input_value') }}" value="{{ old('amt_min_input_value', @$data['table']->amt_min_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Default value for input') }}</label>
        <input class="form-control" name="amt_default_input_value" id="input-name" type="text" placeholder="{{ __('default_input_value') }}" value="{{ old('amt_default_input_value', @$data['table']->amt_default_input_value) }}" required="true" aria-required="true"/>
    </div>
</div>
<div class="row mt-4 mb-4 justify-content-space-evenly">
    <div class="form-group col-md-12">
        <label class="">{{ __('Interest Field') }}</label>
    </div> 
    <div class="form-group ">
        <label class="">{{ __('Max value for input') }}</label>
        <input class="form-control" name="int_max_input_value" id="input-name" type="text" placeholder="{{ __('max_input_value') }}" value="{{ old('int_max_input_value', @$data['table']->int_max_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Min value for input') }}</label>
        <input class="form-control" name="int_min_input_value" id="input-name" type="text" placeholder="{{ __('min_input_value') }}" value="{{ old('int_min_input_value', @$data['table']->int_min_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Default value for input') }}</label>
        <input class="form-control" name="int_default_input_value" id="input-name" type="text" placeholder="{{ __('default_input_value') }}" value="{{ old('int_default_input_value', @$data['table']->int_default_input_value) }}" required="true" aria-required="true"/>
    </div>
</div>
<div class="row mt-4 mb-4  justify-content-space-evenly">
    <div class="form-group col-md-12">
        <label class="">{{ __('Tenure Field') }}</label>
    </div> 
    <div class="form-group ">
        <label class="">{{ __('Max value for input') }}</label>
        <input class="form-control" name="ten_max_input_value" id="input-name" type="text" placeholder="{{ __('max_input_value') }}" value="{{ old('ten_max_input_value', @$data['table']->ten_max_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Min value for input') }}</label>
        <input class="form-control" name="ten_min_input_value" id="input-name" type="text" placeholder="{{ __('min_input_value') }}" value="{{ old('ten_min_input_value', @$data['table']->ten_min_input_value) }}" required="true" aria-required="true"/>
    </div>
    <div class="form-group ">
        <label class="">{{ __('Default value for input') }}</label>
        <input class="form-control" name="ten_default_input_value" id="input-name" type="text" placeholder="{{ __('default_input_value') }}" value="{{ old('ten_default_input_value', @$data['table']->ten_default_input_value) }}" required="true" aria-required="true"/>
    </div>
</div>
</div>


<script>
    $(document).ready(function(){
        changeInp = function(){
            console.log('dass') 
             $('#select_calculator_type').on('change',function(){
                 console.log($(this).val())
                if($(this).val() == "retirement-type-calculator"){
                    $('#input-typ-data-fields').slideUp();
                }
                else{
                    $('#input-typ-data-fields').slideDown();
                }
            })
        }
    })
</script>
@endif