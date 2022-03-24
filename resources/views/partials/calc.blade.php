<div id="career-section" class="page-field-section">
    <div class="row">
    <div class="col-md-12">
        <h2 class="card-title mb-5">Page Content</h2>
        <form method="post" action="{{route('staticPages.calc.update','calculator')}}">
        @csrf
        @method('put')
        <input name="check_calc" type="hidden" value="{{@$data['meta']->id}}">
        <div class="form-group">
            <label class="">{{ __('Page Heading') }}</label>
            <input class="form-control{{ $errors->has('page_title') ? ' is-invalid' : '' }}" name="page_title" id="input-name" type="text" placeholder="{{ __('Page Title') }}" value="{{ old('page_title', @$data['table']->page_title) }}" required="true" aria-required="true"/>
            @if ($errors->has('page_title'))
                <span id="page_title-error" class="error text-danger" for="input-page_title">{{ $errors->first('page_title') }}</span>
            @endif
        </div>
       @include('partials.calcSelector',['calc_type'=>@$data['table']->calc_type])
       {{-- <div class="form-group">
            <label class="position-relative">{{ __('Calculator') }}</label>
            <textarea class="form-control{{ $errors->has('calculator') ? ' is-invalid' : '' }} "  rows="5"  name="calculator" id="input-Calculator" required="true" aria-required="true">{{old('calculator',@$data['table']->calculator)}}</textarea>
            @if ($errors->has('calculator'))
                <span id="calculator-error" class="error text-danger" for="input-calculator">{{ $errors->first('calculator') }}</span>
            @endif
        </div>--}}
        <div class="form-group">
            <label class="position-relative">{{ __('Page Content') }}</label>
            <textarea id="ckeditor" class="form-control{{ $errors->has('page_content') ? ' is-invalid' : '' }} ckeditor"  rows="5"  name="page_content" id="input-page_content" required="true" aria-required="true">{{old('page_content',@$data['table']->page_content)}}</textarea>
            @if ($errors->has('page_content'))
                <span id="page_content-error" class="error text-danger" for="input-page_content">{{ $errors->first('page_content') }}</span>
            @endif
        </div>
        @include('partials.seoFields',compact('data'))
        <div class="form-group">
            <input name="submit" type="submit" class="btn btn-success" value="SUBMIT">
        </div>
        </form>
    </div>
    </div>
</div>