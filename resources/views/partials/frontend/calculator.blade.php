
@if(!empty($calc_type))

        @if($calc_type == 'sip-lumpsum-active-calculator' || $calc_type == 'sip-lumpsum-calculator')
        <!-- start graph section -->
                    <div id="">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="lumpsum-sip-calc">
                                    <div class="tab">
                                        <span id="sip" class="btn btn-solid">Sip</span>
                                        <span id="lumpsum" class="btn btn-solid active">Lumpsum</span>
                                    </div>
                                    <div id="sip-lumpsum-input" class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Lumpsum Amount</label>
                                            <span class="type-span">₹</span>
                                            <input class="type-input" data-id="lumpsum-sip-calc" id="sipAmt" type="number" maxlength="250" min="{{ @$content->amt_min_input_value??'500'  }}" max="{{ @$content->amt_max_input_value??'100000' }}" value="{{ @$content->amt_default_input_value??'25000'  }}">
                                        </div>
                                        <input class="type-range" type="range" data-id="lumpsum-sip-calc" min="{{ @$content->amt_min_input_value??'500'  }}" max="{{ @$content->amt_max_input_value??'100000' }}" step="500" value="{{ @$content->amt_default_input_value??'25000'  }}" >
                                    </div>
                                    <div class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Expected return rate (p.a)</label>
                                            <input class="type-input" type="number" data-id="lumpsum-sip-calc" maxlength="250" min="{{ @$content->int_min_input_value??'1'  }}" max="{{ @$content->int_max_input_value??'30'  }}" value="{{ @$content->int_default_input_value??'12'  }}">
                                            <span class="type-span">%</span>
                                        </div>
                                        <input class="type-range" type="range" data-id="lumpsum-sip-calc" min="{{ @$content->int_min_input_value??'1'  }}" id="sipRoi" maxlength="250" max="{{ @$content->int_max_input_value??'30'  }}" step="0.1" value="{{ @$content->int_default_input_value??'12'  }}" >
                                    </div>
                                    <div class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Time period</label>
                                            <input class="type-input" type="number" data-id="lumpsum-sip-calc" min="{{ @$content->ten_min_input_value??'1'  }}" max="{{ @$content->ten_max_input_value??'30'  }}" value="{{ @$content->ten_default_input_value??'10'  }}">
                                            <span class="type-span">Yr</span>
                                        </div>
                                        <input class="type-range" type="range" data-id="lumpsum-sip-calc" min="{{ @$content->ten_min_input_value??'1'  }}" id="sipTime" max="{{ @$content->ten_max_input_value??'30'  }}" step="1" value="{{ @$content->ten_default_input_value??'10'  }}" >
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-5">
                                <div class="input-group mt-1">
                                    <div class="get-range-value dynamic-field">
                                        <label>Invested Amount:</label>
                                        <span id="sipInvestedAmt"></span>
                                    </div>
                                </div>
                                <div class="input-group mt-3 dynamic-field">
                                    <div class="get-range-value">
                                        <label>Estimated Return:</label>
                                        <span id="sipEstAmt"></span>
                                    </div>
                                </div>
                                <div class="input-group mt-3 dynamic-field">
                                    <div class="get-range-value">
                                        <label>Total Value:</label>
                                        <span id="sipTotalAmt"></span>
                                    </div>
                                </div>
                                <div class="cta-btn mt-3">
                                    <a href="#" class="btn btn-solid">
                                        Invest Now
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-5 d-flex justify-content-center">
                                <div id="sipChartCanvas" class="position-relative">
                                    <canvas id="sipCalChat" style="width: 349.6px; max-width: 350px; max-height: 350px; display: block; box-sizing: border-box; height: 349.6px;" width="437" height="437"></canvas>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            <!-- end graph section -->
                @push('js')
                    @if($calc_type == 'sip-lumpsum-calculator')
                        <script>
                            $.getScript('/frontend/js/functions.js',()=>{
                                sipFunction(false);
                               $('.tab #sip').click();
                            })
                        </script>
                    @else
                        <script>
                            $.getScript('/frontend/js/functions.js',()=>{
                                lumpsumSipFunction(false);
                            })
                        </script>
                    @endif
                @endpush
          @elseif($calc_type == 'retirement-type-calculator')
                    <!-- start graph section Retirement-->
                            <div id="">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <div class="retirement-calc">
                                            <div class="input-group">
                                                <div class="get-range-value">
                                                    <label>Current age</label>
                                                    <span class="type-span">yrs</span>
                                                    <input class="type-input" data-id="online-retirement-calculator" id="currentage" type="number" maxlength="2"  min="20" max="60" value="25">
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="20" max="60" step="1" value="25">
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Maturity age</label>
                                                    <span class="type-span">yrs</span>
                                                    <input class="type-input" data-id="online-retirement-calculator" id="retireage" type="number" maxlength="2"  min="30" max="80" value="60">
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="30" max="80" step="1" value="60" >
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Life Expectancy</label>
                                                    <span class="type-span">yrs</span>
                                                    <input class="type-input" data-id="online-retirement-calculator" id="lifetill" type="number" maxlength="3"  min="40" max="100" value="85">
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="40" max="100" step="1" value="85" >
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Expected inflation rate (p.a)</label>
                                                    <input class="type-input" type="number" data-id="online-retirement-calculator"  id="currentinflation" maxlength="250" min="1" max="30" value="6">
                                                    <span class="type-span">%</span>
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="1"  maxlength="250" max="30" step="0.1" value="6" >
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Current monthly expenses</label></label>
                                                    <input class="type-input" type="number" data-id="online-retirement-calculator" id="currentexpense" maxlength="10" min="5000" max="1000000" value="40000">
                                                    <span class="type-span">₹</span>
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="5000"   maxlength="10" max="1000000" step="5000" value="25000" >
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Expected inflation rate post retirement (p.a)</label>
                                                    <input class="type-input" type="number" data-id="online-retirement-calculator"  id="postinflation" maxlength="250" min="1" max="30" value="8">
                                                    <span class="type-span">%</span>
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="1"  maxlength="250" max="30" step="0.1" value="8" >
                                            </div>
                                            <div class="input-group mt-4">
                                                <div class="get-range-value">
                                                    <label>Expected return rate(p.a)</label>
                                                    <input class="type-input" type="number" data-id="online-retirement-calculator"  id="roi" maxlength="250" min="1" max="30" value="12">
                                                    <span class="type-span">%</span>
                                                </div>
                                                <input class="type-range" type="range" data-id="online-retirement-calculator" min="1"  maxlength="250" max="30" step="0.1" value="12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 m-4  d-flex justify-content-center">
                                    <div class="input-group mt-1">
                                            <div class="dynamic-field">
                                                <label>Annual Income Required Immediately After Retirement:</label>
                                                <span id="air"></span>
                                            </div>
                                        </div>
                                        <div class="input-group mt-3 dynamic-field">
                                            <div class="dynamic-field">
                                                <label>Total Amount Required at the time of Retirement:</label>
                                                <span id="corpus"></span>
                                            </div>
                                        </div>
                                        <div class=" input-group mt-3 dynamic-field">
                                            <div class="dynamic-field">
                                                <label>Monthly Savings Required To Accumulate The Fund: <br></label>
                                                <span id="msr"></span>
                                            </div>
                                        </div>
                                        <div class="cta-btn mt-3">
                                            <a href="#" class="btn btn-solid">
                                                Invest Now
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                    <!-- end graph section -->
                    @push('js')
                    <script src="https://cdn.jsdelivr.net/npm/@formulajs/formulajs@3.0.0/lib/browser/formula.min.js"></script>
                    <script>
                        $.getScript('/frontend/js/functions.js',()=>{
                            retirementFunction(false);
                        })
                    </script>
                    @endpush
                @elseif($calc_type == "compound-calculator" || $calc_type == "online-rd-calculator" || $calc_type == "online-ppf-calculator")
                  <!-- start graph section -->
                  <div id="">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="compound-calc">
                                    <div id="compound-input" class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Amount</label> 
                                            <span class="type-span">₹</span>
                                            @if($calc_type == "online-ppf-calculator")
                                            <select id="year-selector">
                                                <option value="1">Yearly</option>
                                                <option value="12">Month</option>
                                                <option value="2">Half-yearly</option>
                                                <option value="3">Quaterly</option>
                                            </select>
                                            @endif
                                            <input class="type-input " data-id="{{ $calc_type }}"  type="number" maxlength="250" min="{{ @$content->amt_min_input_value  }}" max="{{ @$content->amt_max_input_value  }}" value="{{ @$content->amt_default_input_value  }}">
                                        </div>
                                        <input class="type-range" id="comAmt" type="range" data-id="{{ $calc_type }}" min="{{ @$content->amt_min_input_value  }}" max="{{ @$content->amt_max_input_value  }}" step="500" value="{{ @$content->amt_default_input_value  }}">
                                    </div>
                                    <div class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Expected return rate (p.a)</label>
                                            <input class="type-input" type="number" id="comRoi" data-id="{{ $calc_type }}" maxlength="250" min="{{ @$content->int_min_input_value  }}" max="{{ @$content->int_max_input_value  }}" value="{{ @$content->int_default_input_value  }}"  {{($calc_type == "online-ppf-calculator")?'disabled':''}}>
                                            <span class="type-span">%</span>
                                        </div>
                                        <input class="type-range" type="range" data-id="{{ $calc_type }}" min="{{ @$content->int_min_input_value  }}"  maxlength="250" max="{{ @$content->int_max_input_value  }}" step="0.1" value="{{ @$content->int_default_input_value  }}" {{($calc_type == "online-ppf-calculator")?'disabled':''}}>
                                    </div>
                                    <div class="input-group mt-5">
                                        <div class="get-range-value">
                                            <label>Time period</label>
                                            <input class="type-input" type="number" id="comTime" data-id="{{ $calc_type }}" min="{{ @$content->ten_min_input_value  }}" max="{{ @$content->ten_max_input_value  }}" value="{{ @$content->ten_default_input_value  }}">
                                            <span class="type-span">Yr</span>
                                        </div>
                                        <input class="type-range" type="range" data-id="{{ $calc_type }}" min="{{ @$content->ten_min_input_value  }}"  max="{{ @$content->ten_max_input_value  }}" step="1" value="{{ @$content->ten_default_input_value  }}" >
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-5">
                                <div class="input-group mt-1">
                                    <div class="get-range-value dynamic-field">
                                        <label>Invested Amount:</label>
                                        <span id="investedAmt"></span>
                                    </div>
                                </div>
                                <div class="input-group mt-3 dynamic-field">
                                    <div class="get-range-value">
                                        <label>Estimated Return:</label>
                                        <span id="estAmt"></span>
                                    </div>
                                </div>
                                <div class="input-group mt-3 dynamic-field">
                                    <div class="get-range-value">
                                        <label>Total Value:</label>
                                        <span id="TotalAmt"></span>
                                    </div>
                                </div>
                                <div class="cta-btn mt-3">
                                    <a href="#" class="btn btn-solid">
                                        Invest Now
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-5  d-flex justify-content-center">
                                <div id="sipChartCanvas" class="position-relative">
                                    <canvas id="sipCalChat" style="width: 349.6px; max-width: 350px; max-height: 350px; display: block; box-sizing: border-box; height: 349.6px;" width="437" height="437"></canvas>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            <!-- end graph section -->
                    @push('js')
                    @if($calc_type == "compound-calculator")
                    <script>
                        $.getScript('/frontend/js/functions.js',()=>{
                         compoundFunction(false);
                        })
                    </script>
                    @elseif($calc_type == "online-ppf-calculator")
                    <script>
                        $.getScript('/frontend/js/functions.js',()=>{
                            ppfCalculationFunction(false);
                        })
                    </script>
                    @else
                    <script>
                        $.getScript('/frontend/js/functions.js',()=>{
                            rdCalculatorFunction(false);
                        })
                    </script>
                    @endif                   
                    @endpush
                @endif

@endif