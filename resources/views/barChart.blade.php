<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.esm.js" integrity="sha512-GcgSXXC1w+y4KiVQPh7bmrenlNB1V6UOayKIegTWLajWwrtdj9OVX4z7zXH/6RkbukMhH9lOq+t1UMyHYTlBeg==" crossorigin="anonymous" ></script>
    <title>Barchart</title>
</head>
<body>
    
    <div style="height: 400px; width: 900px;  margin: auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        (function(){
            var datas= <?php echo json_encode($datas); ?>;
            var barCanvas = $("#barChart");
            var barChart = new  Chart(barCanvas, {
                type: 'bar',
                data: {
                    labels: ['Desecion','Cancelación','Reirovolun','TraladoFic','TrasladoCen','Aplazamiento'],
                    datasets:[
                        {
                        label: 'Incremento de novedades',
                        data:datas,
                        backgroundColor: ['red','orange','green','blue','indigo','grey','purple']
                        }
                    ]
                },

                options:{
                    scales:{
                        yAxes:[{
                          ticks: {
                            beginAtZero:true
                          }
                      }]  
                    }
                }
            })
        })
    </script>
    
</body>
</html>