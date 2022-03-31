/*
<script src="https://cdn.jsdelivr.net/npm/@formulajs/formulajs@3.0.0/lib/browser/formula.min.js"></script>

ca - current age,
ra - retirement age,
le - life expectancy,
ir - inflation rate,
pa - principle amount,
pir - post inflation rate ,
roi - return on interest,
t - time (ornumber of year)
pv - present value
pmt
fv - future value
let ca,ra,le,ir,pa,pir,roi,t,sfv,pv,pmt;
*/


    checkType = (type={}, check={}) =>{
        switch(type){
            case 'lumpsum-sip-calc' :
                lumpsumSipFunction(check)
                break;
            case 'online-retirement-calculator':
                retirementFunction(check)
                break;
            case 'online-sip-calculator':
                sipFunction(true)
                break;
            case 'compound-calculator':
                compoundFunction(true)
                break;
            case 'online-rd-calculator':
                rdCalculatorFunction(true)
                break;
            case 'online-ppf-calculator':
                ppfCalculationFunction(true)
                break;
        }
    }

     fv = (pv,r,n)=>{
        n = parseFloat(n)
        r = parseFloat(r)/100
        pv = parseFloat(pv)
        let f = Math.round(pv*(Math.pow((1+r),n)));
        
        return f;
    }

     ajdI = (r,i) => {
        r = parseFloat(r)/100
        i = parseFloat(i)/100
        
        return (r-i)/(1+i);
        /* (r-i)/(1+i) */
    }
    
    compoundInterset = (p,r,t,n=0) =>{
        p = parseFloat(p)
        r = parseFloat(r)
        t = parseFloat(t)
        ri = r/100 
        return p*ri*t
            console.log(p+'---'+ri+'---'+t)
    }

     lumpsumSipFunction = (check) =>{
        pa = parseFloat($('#sipAmt').val()), roi= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
        let result = lumpsum(pa,roi,t);

        $('#sipInvestedAmt').text('Rs. '+pa.toLocaleString());
        $('#sipEstAmt').text('Rs. '+result.estReturn.toLocaleString());
        $('#sipTotalAmt').text('Rs. '+Math.round(result.fva).toLocaleString());
        pieChart('Invested amount','Est. returns',pa,result.estReturn,check) 
    }

     sipFunction = (check) => {
        pa = parseFloat($('#sipAmt').val()), roi= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
       let result =  sipCalculator(pa,roi,t);

        $('#sipInvestedAmt').text('Rs. '+result.investedAmt.toLocaleString());
        $('#sipEstAmt').text('Rs. '+result.estReturn.toLocaleString());
        $('#sipTotalAmt').text('Rs. '+Math.round(result.totalAmt).toLocaleString());

        pieChart('Invested amount','Est. returns',result.investedAmt,result.estReturn,check) 
    }
     retirementFunction = (check)=>{
        ca = $('#currentage').val()
        ra =$('#retireage').val()
        le = $('#lifetill').val() 
        ir = $('#currentinflation').val()
        pa =$('#currentexpense').val()
        pir = $('#postinflation').val()
        roi = $('#roi').val()
        //console.log(ca+'--'+ra+'--'+le+'--'+ir+'--'+pa+'--'+pir+'--'+roi);
       let result =  retirementCalculator(ca,ra,le,ir,pa,pir,roi);
       
       $('#air').text('Rs. '+result.AIR.toLocaleString());
       $('#corpus').text('Rs. '+Math.round((-result.corpus)).toLocaleString());
       $('#msr').text('Rs. '+Math.round(result.sip).toLocaleString());

    }
    
    compoundFunction = (check)=>{
        pa = parseFloat($('#comAmt').val()), roi= parseFloat($('#comRoi').val()), t= parseFloat($('#comTime').val())
        let result = compoundCalculation(pa,roi,t);
        // console.log(result);    

        $('#investedAmt').text('Rs. '+pa.toLocaleString());
        $('#estAmt').text('Rs. '+Math.round(result.iAmt).toLocaleString());
        $('#TotalAmt').text('Rs. '+Math.round(result.total).toLocaleString());

        pieChart('Invested amount','Est. returns',pa,result.iAmt,check) 
    }
    

    rdCalculatorFunction = (check) =>{
        pa = parseFloat($('#comAmt').val()), roi= parseFloat($('#comRoi').val()), t= parseFloat($('#comTime').val())

        let {estReturn , investedAmt , estInt} = rdCalculator(pa,roi,t);

        $('#investedAmt').text('Rs. '+investedAmt.toLocaleString());
        $('#estAmt').text('Rs. '+Math.round(estInt).toLocaleString());
        $('#TotalAmt').text('Rs. '+Math.round(estReturn).toLocaleString());

        pieChart('Invested amount','Est. returns',investedAmt,estInt,check) 
    }

    ppfCalculationFunction = (check, tenure=1) =>{
        pa = parseFloat($('#comAmt').val()), roi= parseFloat($('#comRoi').val()), t= parseFloat($('#comTime').val())
        let {totalAmt , investedAmt , estReturn} = sipCalculator(pa,roi,t,1,1,tenure)

        $('#investedAmt').text('Rs. '+investedAmt.toLocaleString());
        $('#estAmt').text('Rs. '+Math.round(estReturn).toLocaleString());
        $('#TotalAmt').text('Rs. '+Math.round(totalAmt).toLocaleString());

        pieChart('Invested amount','Est. returns',investedAmt,estReturn,check) 
    }
 ///////// calculations
     retirementCalculator = (c,r,l,i,a,ip,roi)=>{
        let nper = parseFloat(r)-parseFloat(c),
        sfv = fv(a,i,nper),
        tfv = sfv*12,
        lexpec = (parseFloat(l)-parseFloat(r))*12,
        ai =  ajdI(ip,i)/12;
        roi = parseFloat(roi)/1200
         
        ///let p = formulajs.PV(0.0015723270440251575, 25*12, 3689321.660309928, 0, 0)
        let corpus = formulajs.PV(ai, lexpec, sfv, 0, 1)

        //// console.log(tfv+'==='+sfv+'=='+ai+'=='+lexpec+'==='+corpus)

        //// PMT(0.01/12, 30*12, 0, 51838484,0)
        let sip = formulajs.PMT(roi,(nper*12),0,corpus,1);

       return { 'AIR':tfv,corpus,sip }
    }

     lumpsum = (pa, roi, t) =>{
        let fva = fv(pa,roi,t)
        estReturn = Math.round(fva-pa)
        return {fva,estReturn}

    }

     sipCalculator = (sip, roi, year,n=12,t=12,f=1) => {
        //// n,t - only for sip calculation
        /////  
        var totalAmt = 0,
         duration = year*t,
         interest = sip*((roi/n)/100);
         sip *=f
      
        for(var b=1; b <= duration ; b++){
            totalAmt += (sip+interest) + (totalAmt*((roi/n)/100)) 
           // arr.push(FV)
        }
        let investedAmt = Math.round(sip*duration),
        estReturn = Math.round(totalAmt-investedAmt)
        return { totalAmt,investedAmt,estReturn }
    }

    compoundCalculation = (p,r,t,n) =>{
        var iAmt = compoundInterset(p,r,t,n);

        total = iAmt + parseFloat(p)

        return {total,iAmt}

    }

    rdCalculator = (p,r,t) =>{
        r /= 100;
        t *=12;
        estReturn = 0;

        //=5000*(1+0.0825/4)^(4*12/12)
        for(let a = t; a > 0 ; a-- ){
                power = 4*a/12
                
                estReturn += p*Math.pow((1+r/4),power)
        }

        investedAmt = p*t
        estInt = estReturn - investedAmt;
        
        return {estReturn,investedAmt,estInt}
    }

//////// pie charts
     pieChart = (head1,head2,val1,val2,check) => {

            var xValues = [head1, head2];
            var yValues = [val1, val2];
            var barColors = [ "#3cafdc", "#00729f" ];
            
            if(check == true){

                var chart = Chart.getChart("sipCalChat");
                chart.destroy();
                chart = new Chart("sipCalChat", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        borderColor:'rgba(0,0,0,0)',
                        data: yValues
                        }]
                    }           
                });
            } 
            else{
                var chart = new Chart("sipCalChat", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        backgroundColor: barColors,
                        borderColor:'rgba(0,0,0,0)',
                        data: yValues
                        }]
                    }           
                });
            }
            
    }
 
    $(document).ready(function(){
        
        $(document).on('input change','.type-range',function(){
            const minVal = $(this).attr('min');
            const maxVal = $(this).attr('max');
            const bgVal = ($(this).val()-minVal)*100/(maxVal-minVal);
            const type = ($(this).data('id')) != undefined ? $(this).data('id') : 'online-sip-calculator';  
            $(this).css({'background-size': bgVal+'% 100%'})
            $(this).siblings().children('.type-input').val($(this).val())
            checkType(type, true)

        });

        $('.type-input').on('blur',function(){
            var mminVal = $(this).attr('min'); 
            var mmaxVal =$(this).attr('max');
            var mVal = $(this).val();
            const type = ($(this).data('id')) != undefined ? $(this).data('id') : 'online-sip-calculator';  
            if(parseInt(mVal) > parseInt(mmaxVal)){
                $(this).val(mmaxVal);
            }
            var bgVal = (mVal-mminVal)*100/(mmaxVal-mminVal);
            $(this).parent().siblings('.type-range').val(mVal).css({'background-size': bgVal+'% 100%'})
            checkType(type, true)

        });

    });

const yearSeletor = document.getElementById('year-selector')
        yearSeletor.addEventListener("change",function(){
            const nexts  = this.nextElementSibling
            const nextRange = document.getElementById("comAmt")
            if(this.value != 1){
                nextRange.value = nexts.value = 10000
            }
            else{
                nexts.value = nextRange.value = 100000
            }
            let min = nextRange.getAttribute('min')
            let max =nextRange.getAttribute('max')
            
            let bgVal = ( nextRange.value - min )*100/(max-min);
        
            nextRange.style.backgroundSize = bgVal+"% 100%"

            ppfCalculationFunction(true,this.value)
        });