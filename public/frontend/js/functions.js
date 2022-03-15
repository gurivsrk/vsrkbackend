

    const checkType = (type={}, check={}) =>{
        switch(type){
            case 'lumpsum' :
                retirement(check)
                break;
            case 'retirement':
                retirementFunction(check)
                break;
            case 'sip':
                sipFunction(true)
                break;
        }
    }

    const sipFunction = (check) => {
        s = parseFloat($('#sipAmt').val()), r= parseFloat($('#sipRoi').val()), t= parseFloat($('#sipTime').val())
        sipCalculator(s,r,t,check)
    }

    const sipCalculator = (sip, roi, year,check) => {
        var totalAmt = 0, arr = [],
         months = year*12,
         addprevious = sip*((roi/12)/100);
        
        for(var b=1; b <= months ; b++){
            totalAmt = totalAmt  +  (sip+addprevious) + (totalAmt*((roi/12)/100)) 
           // arr.push(FV)
        }

        var investedAmt = Math.round(sip*months),
        estReturn = Math.round(totalAmt-investedAmt)
        $('#sipInvestedAmt').text('Rs. '+investedAmt.toLocaleString());
        $('#sipEstAmt').text('Rs. '+estReturn.toLocaleString());
        $('#sipTotalAmt').text('Rs. '+Math.round(totalAmt).toLocaleString());

        pieChart('Invested amount','Est. returns',investedAmt,estReturn,check) 
    }

    const retirementFunction = ()=>{
        console.log('retirement');
    }

    const fv = (pv,r,n)=>{
        
    }

    const pieChart = (head1,head2,val1,val2,check) => {

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
        const type = ($(this).data('id')) != undefined ? $(this).data('id') : 'sip';  
        $(this).css({'background-size': bgVal+'% 100%'})
        $(this).siblings().children('.type-input').val($(this).val())
        checkType(type, true)

    });

    $('.type-input').on('blur',function(){
        var mminVal = $(this).attr('min'); 
        var mmaxVal =$(this).attr('max');
        var mVal = $(this).val();
        const type = ($(this).data('id')) != undefined ? $(this).data('id') : 'sip';  
        if(parseInt(mVal) > parseInt(mmaxVal)){
            $(this).val(mmaxVal);
        }
        var bgVal = (mVal-mminVal)*100/(mmaxVal-mminVal);
        $(this).parent().siblings('.type-range').val(mVal).css({'background-size': bgVal+'% 100%'})
        checkType(type, true)

    });

});
