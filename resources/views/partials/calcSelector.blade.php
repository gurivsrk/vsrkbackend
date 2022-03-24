<div class="form-group">
    <label class="">{{ __('Calculator Type') }}</label>
    <select name="calc_type" class="vsrk-select form-control custom-select dynamic-content" aria-required="true">
    <option value="">Please Select One</option>
        <option value="sip-lumpsum-calculator" {{@$calc_type == 'sip-lumpsum-calculator'? 'selected': '' }}>sip lumpsum calculator</option>  
        <option value="sip-lumpsum-active-calculator" {{@$calc_type == 'sip-lumpsum-active-calculator'? 'selected': '' }}>sip lumpsum calculator with active on lumpsum tab</option>  
        <option value="retirement-type-calculator"  {{@$calc_type == 'retirement-type-calculator'? 'selected': '' }}>retirement type calculator</option>  
        <option value="compound-calculator"  {{@$calc_type == 'compound-calculator'? 'selected': '' }}>compound-calculator</option>  
    </select>
</div>