
<div class="charts">
    <div id="useCount"  style="width: 600px;height:400px;"></div>

    <script>
        let chartUseCount = echarts.init(document.getElementById('useCount'));

        let optionUseCount = {
            title: {
            text: 'ECharts Getting Started Example'
            },
            tooltip: {},
            legend: {
            data: ['sales']
            },
            xAxis: {
            data: ['Shirts', 'Cardigans', 'Chiffons', 'Pants', 'Heels', 'Socks']
            },
            yAxis: {},
            series: [
                {
                    name: 'sales',
                    type: 'bar',
                    data: [5, 20, 36, 10, 10, 20]
                }
            ]
        }

        chartUseCount.setOption(optionUseCount);
    </script>
</div>