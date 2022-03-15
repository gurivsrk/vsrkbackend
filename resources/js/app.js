require('./bootstrap');

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


const pieChart = (head1,head2,val1,val2,check) => {

        var xValues = [head1, head2];
        var yValues = [val1, val2];
        var barColors = [ "#3cafdc", "#00729f" ];
        
        if(check == true){

            const chart = Chart.getChart("sipCalChat");
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
