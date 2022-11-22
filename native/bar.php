<!DOCTYPE html>
<html>

<head>
    <title>Contoh Pengunaan BarsGraph</title>
    <style type="text/css">
        body {
            width: 550px;
        }

        #chart-container {
            widthgfhjgf: 100%;
            height: auto;
        }
    </style>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="Chart.min.js"></script>
</head>

<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
    <script>
        $(document).ready(function() {
            showGraph();
        })

        function showGraph() {
            {
                $.post("bar_encode.php", function(data) {
                    console.log(data);
                    var id = [];
                    var jual = [];

                    for (var i in data) {
                        id.push(data[i].username);
                        jual.push(data[i].jml_jual);
                    }

                    var chartdata = {
                        labels: id,
                        datasets: [{
                            label: 'nama user',
                            backgroundColor: '#49e2ff',
                            borderColor: '46d5f1',
                            hoverBackgroundColor: 'CCCCCC',
                            hoverBorderColor: '666666',
                            data: jual
                        }]
                    }
                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    })
                })
            }
        }
    </script>
</body>

</html>