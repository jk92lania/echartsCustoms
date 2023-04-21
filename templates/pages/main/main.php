<?php
// include_once '../../include/common.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/echartsCustoms/templates/include/common.php';
?>
<!-- echarts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js"></script>

<link rel="stylesheet" href="/echartsCustoms/assets/css/pages/main/layout.css">

</head>
<body>
    <div class="wrap base_layout">
        <header>
            <nav>

            </nav>
        </header>
        <aside class="leftSNB">

        </aside>
        <aside class="rightSNB">

        </aside>
        <main>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box">
                <?php include_once $_SERVER['DOCUMENT_ROOT'].'/echartsCustoms/templates/include/charts/conductBookUseCount.php'; ?>
            </div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </main>
        
    </div>
    
    
</body>
</html>