<script>
 var ctx = document.getElementById('views_chart');
 var views_chart = new Chart(ctx, {
    type: 'line',
     data: {
        datasets: [
        {
            label: ' {$_VIEWS}',
            data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']}: {$foo['views']},
                       {$doo}: 0,
                 {/foreach}
              {/foreach}
            },
            fill: false,
            backgroundColor: [
                '#559a38',
            ],
            borderColor: [
                '#559a38',
            ],
            borderWidth: 2,
            circular: false,
            drawBorder: false,
            drawOnChartArea:false,
            drawTicks:false,
            offset:false,
            tickLength: 3,
        }, {
             label: ' {$_CLICKS}',
             data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']}: {$foo['clicks']},
                       {$doo}: 0,
                 {/foreach}
              {/foreach}
             },
             fill: false,
             backgroundColor: [
                 '#333',
             ],
             borderColor: [
                 '#333',
             ],
             borderWidth: 2,
             circular: false,
             drawBorder: false,
             drawOnChartArea:false,
             drawTicks:false,
             offset:false,
             tickLength: 3,      
            }, {
             label: ' {$_EARNED}',
             data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']}: {$foo['pub_earn']},
                       {$doo}: 0,
                 {/foreach}
              {/foreach}
             },
             fill: false,
             backgroundColor: [
                 '#f5707a',
             ],
             borderColor: [
                 '#f5707a',
             ],
             borderWidth: 2,
             circular: false,
             drawBorder: false,
             drawOnChartArea:false,
             drawTicks:false,
             offset:false,
             tickLength: 3,      
            }]
    },
    options: {
        scales: {
        xAxes: [{
            type: 'time',
            position: 'bottom',
            time: {
                displayFormats: {
                    'day': 'MM/YY'
                },
                tooltipFormat: 'DD/MM/YY',
                unit: 'day',
            },
            // leave only one label per month
            afterTickToLabelConversion: function (data) {
                var xLabels = data.ticks;
                var oldLabel = "";
                xLabels.forEach(function (labels, i) {
                    if(xLabels[i] == oldLabel){
                        xLabels[i] = "";
                    } else {
                        oldLabel = xLabels[i];
                    }
                });
            }
        }]
    },
        font: {
            size: 11,
            family: 'Roboto',
        },
        responsive:true,
        animation: false,
        layout: {
            padding: 20
        }
    }
});
</script>