<canvas id="j8s7k3z9w2x1y0a4v8d7n3l5" width="100" height="100" style="transform: translate(45px,-20px) scale(0.8); "></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var k3c9v4m7j5 = document.getElementById('j8s7k3z9w2x1y0a4v8d7n3l5').getContext('2d');

  
    var t7n8w4s6q2 = [<?php foreach ($doanhthusanpham as $key => $row) { 

echo "'" . $row['ten_sanpham'] . "', ";

} ?>];
    var p7f4r9m3k7 = [<?php 
    foreach ($doanhthusanpham as $key => $row) { 
        $a = ($row['sanphambanduoc_sanpham'] * $row['gia_sanpham']) / 1000000000;
     
        echo round($a, 2) . ", "; 
    } 
?>];

    var x2p7f9g3w4l0r1d8 = new Chart(k3c9v4m7j5, {
        type: 'pie', 
        data: {
            labels: t7n8w4s6q2,
            datasets: [{
                label: 'Tỷ Đồng', 
                data: p7f4r9m3k7,
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
            }]
        },
        options: {
            responsive: true, 
            animation: {
                duration: 0, 
            },
            plugins: {
                legend: {
                    display: false, 
                },
                tooltip: {
                    callbacks: {
                        title: function(tooltipItem) {
                            return t7n8w4s6q2[tooltipItem[0].dataIndex]; 
                        }
                    }
                }
            }
        }
    });
</script>
