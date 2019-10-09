var orderChartsTitle = '<span class="charts-title order" onclick="onloadOrderChart(1)">今日</span>';
orderChartsTitle += '<span class="charts-title order black" onclick="onloadOrderChart(2)">昨日</span>';
orderChartsTitle += '<span class="charts-title order black" onclick="onloadOrderChart(3)">本周</span>';
orderChartsTitle += '<span class="charts-title order black" onclick="onloadOrderChart(4)">本月</span>';

$(function() {
    onloadOrderChart(1);
    var salesStatistical = [ [ '00:00', 10 ], [ '01:00', 20 ], [ '02:00', 30 ],
                                  [ '03:00', 40 ], [ '04:00', 50 ], [ '05:00', 60 ], [ '06:00', 70 ],
                                  [ '07:00', 80 ], [ '08:00', 90 ], [ '09:00', 100 ],
                                  [ '10:00', 110 ], [ '11:00', 120 ], [ '12:00', 130 ] ];

    chart = new Highcharts.Chart({
        chart : {
            type : 'column',
            renderTo : 'orderCharts'
        },
        title : {
            text : orderChartsTitle,
            align : "left",
            useHTML : true
        },
        lang : {
            printChart : "打印",
            downloadPNG : "导出PNG格式图片",
            downloadJPEG : "导出JPEG格式图片",
            downloadPDF : "导出PDF格式图片",
            downloadSVG : "导出SVG格式图片"
        },
        xAxis : {
            type : 'category',
            labels : {
                rotation : -45,
                style : {
                    fontSize : '13px',
                    fontFamily : 'Verdana, sans-serif'
                }
            }
        },
        yAxis : {
            min : 0,
            title : {
                text : '订单统计'
            }
        },
        legend : {
            enabled : false
        },
        credits : {
            enabled : false,// 默认值，如果想去掉版权信息，设置为false即可
            text : "PLATFORM_NAME", // 显示的文字
            href : '#', // 链接地址
        },
        series : [ {
            name : '订单统计',
            data : salesStatistical,
            dataLabels : {
                enabled : false,
                color : '#FFFFFF',
                align : 'right',
                format : '{point.y:.1f}', // one decimal
                y : 0, // 10 pixels down from the top
                style : {
                    fontSize : '12px',
                    fontFamily : 'Verdana, sans-serif'
                }
            }
        } ]
    });
});


function onloadOrderChart(e) {
    $("#orderCharts .order").addClass('black');
    $("#orderCharts .order").eq(e-1).removeClass('black');
    $.ajax({
        type : "post",
        url : "/",
        data : {'date':e},
        success : function(data) {
            
          salesStatistical = [ [ '00:00', 10 ], [ '01:00', 20 ], [ '02:00', 30 ],
                                 [ '03:00', 40 ], [ '04:00', 50 ], [ '05:00', 60 ], [ '06:00', 70 ],
                                  [ '07:00', 80 ], [ '08:00', 90 ], [ '09:00', 100 ],
                                  [ '10:00', 110 ], [ '11:00', 120 ], [ '12:00', 130 ] ];
            //salesStatistical = data;
            var series = chart.series;
            while (series.length > 0) {
                series[0].remove(false);
            }
            chart.addSeries({
                name : "订单数量",
                data : salesStatistical
            }, false);
            chart.redraw();
        }
    });
}

