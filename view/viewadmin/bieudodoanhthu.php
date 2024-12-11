<div class="filter-container">
  <input type="date" id="startDate2">
  <input type="date" id="endDate2">
  <button id="filterBtn">Lọc</button>
</div>
<canvas id="revenueChart" width="800" height="400"></canvas>

<style>
 .filter-container input[type="date"] {
    padding: 10px;
    font-size: 14px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #fff;
    width: 150px;
    margin: 10px;
    transition: all 0.3s ease;
  }
  #filterBtn {
    padding: 10px 20px;
    font-size: 14px;
    background-color: rgba(75, 192, 192, 1);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  #filterBtn:hover {
    background-color: rgba(75, 192, 192, 0.8);
  }
  .filter-container {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const allData = <?= json_encode(array_map(function($row) {
    return [
      'ngay' => $row['ngay'], 
      'doanhthu' => $row['doanhthu']
    ];
  }, $doanhthutheongay)); ?>;


function getLastFiveDaysWithRevenue() {

  const sortedData = allData.sort((a, b) => new Date(b.ngay) - new Date(a.ngay));
  

  const lastFiveDays = [];
  const seenDates = new Set();
  
  for (let item of sortedData) {
    if (!seenDates.has(item.ngay)) { 
      lastFiveDays.push(item);
      seenDates.add(item.ngay);
    }
    if (lastFiveDays.length === 3) break;
  }

  return lastFiveDays;
}
let defaultData = getLastFiveDaysWithRevenue();
let labels = defaultData.map(item => item.ngay);
let dataValues = defaultData.map(item => item.doanhthu);

const data = {
  labels: labels,
  datasets: [{
    label: 'Doanh thu ( VND )',
    data: dataValues,
    backgroundColor: 'rgba(75, 192, 192, 1)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1
  }]
};
const config = {
  type: 'bar',
  data: data,
  options: {
    indexAxis: 'x',
    responsive: true,
    scales: {
      x: {
        ticks: {
          color: 'white'
        }
      },
      y: {
        ticks: {
          color: 'white'
        }
      }
    },
    plugins: {
      legend: {
        labels: {
          color: 'white'
        }
      }
    }
  }
};

const revenueChart = new Chart(
  document.getElementById('revenueChart'),
  config
);

function filterData() {
  const startDate2 = document.getElementById('startDate2').value;
  const endDate2 = document.getElementById('endDate2').value;

  if (!startDate2 || !endDate2) {
    alert('Vui lòng chọn cả ngày bắt đầu và ngày kết thúc!');
    return;
  }

  const filteredData = allData.filter(item => item.ngay >= startDate2 && item.ngay <= endDate2);

  if (filteredData.length === 0) {
    alert('Không tìm thấy dữ liệu trong khoảng ngày đã chọn!');
    return;
  }
  revenueChart.data.labels = filteredData.map(item => item.ngay);
  revenueChart.data.datasets[0].data = filteredData.map(item => item.doanhthu);
  revenueChart.update();
}
revenueChart.data.labels = defaultData.map(item => item.ngay);
revenueChart.data.datasets[0].data = defaultData.map(item => item.doanhthu);
revenueChart.update();

document.getElementById('filterBtn').addEventListener('click', filterData);
</script>
