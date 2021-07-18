<script>
 var ctx = document.getElementById('views_chart');
 var views_chart = new Chart(ctx, {
    type: 'line',
     data: {
        datasets: [
        {
            label: ' Views',
            data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']} : {$foo['views']},
                       {$doo} : 0,
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
            drawTicks: false,
            offset: false,
            tickLength: 3,
        }, {
             label: ' Clicks',
             data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']} : {$foo['clicks']},
                       {$doo} : 0,
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
             drawOnChartArea: false,
             drawTicks: false,
             offset: false,
             tickLength: 3,      
            }, {
             label: ' Earned',
             data: {
              {foreach from=$chdates item=doo}
                 {foreach from=$chart item=foo}
                       {$foo['created']} : {$foo['adm_earn']},
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
             drawOnChartArea: false,
             drawTicks: false,
             offset: false,
             tickLength: 3,      
            }]
    },
    options: {
        font: {
            size: 11,
            family: 'Roboto',
        },
        responsive: true,
        animation: false,
        layout: {
            padding: 20
        }
    }
});
</script>