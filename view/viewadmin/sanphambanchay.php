
    
    <style>
        #efficiencyChart{
            transform: translate(0,35px);
        }
    </style>
    <canvas id="efficiencyChart" width="400" height="200"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('efficiencyChart').getContext('2d');
        var efficiencyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($top5sp as $key => $row) { echo "'" .  mb_strimwidth($row['ten_sanpham'], 0, 15, '...') . "', "; } ?>],
                datasets: [
                    {
                        label: 'Độ hiệu quả (%)', 
                        data: [<?php foreach ($top5sp as $key => $row) { 
                            $a = ($row['sanphambanduoc_sanpham'] / ($row['soluongtrongkho_sanpham']+$row['sanphambanduoc_sanpham'])) * 100;
                            echo round($a, 2) . ", "; 
                        } ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)', 
                            'rgba(54, 162, 235, 1)', 
                            'rgba(255, 206, 86, 1)', 
                            'rgba(75, 192, 192, 1)', 
                            'rgba(153, 102, 255, 1)'  
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)', 
                            'rgba(54, 162, 235, 1)', 
                            'rgba(255, 206, 86, 1)', 
                            'rgba(75, 192, 192, 1)', 
                            'rgba(153, 102, 255, 1)' 
                        ],
                        borderWidth: 1 
                    },
                    {
                        label: 'Doanh thu từ sp (trăm triệu đồng)', 
                        data: [<?php foreach ($top5sp as $key => $row) { 
                        echo ($row['sanphambanduoc_sanpham'] * $row['gia_sanpham']) / 100000000 . ", ";

                        } ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)', 
                            'rgba(54, 162, 235, 0.5)', 
                            'rgba(255, 206, 86, 0.5)', 
                            'rgba(75, 192, 192, 0.5)', 
                            'rgba(153, 102, 255, 0.5)'  
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)', 
                            'rgba(54, 162, 235, 1)', 
                            'rgba(255, 206, 86, 1)', 
                            'rgba(75, 192, 192, 1)', 
                            'rgba(153, 102, 255, 1)'  
                        ],
                        borderWidth: 1 
                    }
                ]
            },
            options: {
                indexAxis: 'y', 
                responsive: true, 
                scales: {
                    x: {
                        beginAtZero: true, 
                        ticks: {
                            stepSize: 10, 
                            color: 'white', 
                        }
                    },
                    y: {
                        beginAtZero: true, 
                        ticks: {
                            color: 'white', 
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: 'white' 
                        }
                    },
                    tooltip: {
                        callbacks: {
                            title: function(tooltipItem) {
                             
                                var fullNames = <?php echo json_encode(array_map(function($row) { return $row['ten_sanpham']; }, $top5sp)); ?>;
                                var index = tooltipItem[0].dataIndex; 
                                return fullNames[index];  
                            }
                        }
                    }
                }

            }
        });
    </script>


