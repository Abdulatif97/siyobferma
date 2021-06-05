$(window).on("load", function () {


  var gainedlineChartoptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      },
    },
    colors: [$primary],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [{
      name: 'Subscribers',
      data: [28, 40, 36, 52, 38, 60, 55]
    }],

    xaxis: {
      labels: {
        show: false,
      },
      axisBorder: {
        show: false,
      }
    },
    yaxis: [{
      y: 0,
      offsetX: 0,
      offsetY: 0,
      padding: { left: 0, right: 0 },
    }],
    tooltip: {
      x: { show: false }
    },
  }

  var gainedlineChart = new ApexCharts(
    document.querySelector("#line-area-chart-1"),
    gainedlineChartoptions
  );

  gainedlineChart.render();



  // Line Area Chart - 2
  // ----------------------------------

  var revenuelineChartoptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      },
    },
    colors: [$success],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [{
      name: 'Revenue',
      data: [350, 275, 400, 300, 350, 300, 450]
    }],

    xaxis: {
      labels: {
        show: false,
      },
      axisBorder: {
        show: false,
      }
    },
    yaxis: [{
      y: 0,
      offsetX: 0,
      offsetY: 0,
      padding: { left: 0, right: 0 },
    }],
    tooltip: {
      x: { show: false }
    },
  }

  var revenuelineChart = new ApexCharts(
    document.querySelector("#line-area-chart-2"),
    revenuelineChartoptions
  );

  revenuelineChart.render();


  // Line Area Chart - 3
  // ----------------------------------

  var saleslineChartoptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      },
    },
    colors: [$danger],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [{
      name: 'Sales',
      data: [10, 15, 7, 12, 3, 16]
    }],

    xaxis: {
      labels: {
        show: false,
      },
      axisBorder: {
        show: false,
      }
    },
    yaxis: [{
      y: 0,
      offsetX: 0,
      offsetY: 0,
      padding: { left: 0, right: 0 },
    }],
    tooltip: {
      x: { show: false }
    },
  }

  var saleslineChart = new ApexCharts(
    document.querySelector("#line-area-chart-3"),
    saleslineChartoptions
  );

  saleslineChart.render();

  // Line Area Chart - 4
  // ----------------------------------

  var orderlineChartoptions = {
    chart: {
      height: 100,
      type: 'area',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0
        }
      },
    },
    colors: [$warning],
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'smooth',
      width: 2.5
    },
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0.9,
        opacityFrom: 0.7,
        opacityTo: 0.5,
        stops: [0, 80, 100]
      }
    },
    series: [{
      name: 'Orders',
      data: [10, 15, 8, 15, 7, 12, 8]
    }],

    xaxis: {
      labels: {
        show: false,
      },
      axisBorder: {
        show: false,
      }
    },
    yaxis: [{
      y: 0,
      offsetX: 0,
      offsetY: 0,
      padding: { left: 0, right: 0 },
    }],
    tooltip: {
      x: { show: false }
    },
  }

  var orderlineChart = new ApexCharts(
    document.querySelector("#line-area-chart-4"),
    orderlineChartoptions
  );

  orderlineChart.render();

  // revenue-chart Chart
  // -----------------------------

  var revenueChartoptions = {
    chart: {
      height: 270,
      toolbar: { show: false },
      type: 'line',
    },
    stroke: {
      curve: 'smooth',
      dashArray: [0, 8],
      width: [4, 2],
    },
    grid: {
      borderColor: $label_color,
    },
    legend: {
      show: false,
    },
    colors: [$danger_light, $strok_color],

    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        inverseColors: false,
        gradientToColors: [$primary, $strok_color],
        shadeIntensity: 1,
        type: 'horizontal',
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100]
      },
    },
    markers: {
      size: 0,
      hover: {
        size: 5
      }
    },
    xaxis: {
      labels: {
        style: {
          colors: $strok_color,
        }
      },
      axisTicks: {
        show: false,
      },
      categories: ['01', '05', '09', '13', '17', '21', '26', '31'],
      axisBorder: {
        show: false,
      },
      tickPlacement: 'on',
    },
    yaxis: {
      tickAmount: 5,
      labels: {
        style: {
          color: $strok_color,
        },
        formatter: function (val) {
          return val > 999 ? (val / 1000).toFixed(1) + 'k' : val;
        }
      }
    },
    tooltip: {
      x: { show: false }
    },
    series: [{
      name: "Bu oy",
      data: [45000, 47000, 44800, 47500, 45500, 48000, 46500, 48600]
    },
    {
      name: "O'tgan oy",
      data: [46000, 48000, 45500, 46600, 44500, 46500, 45000, 47000]
    }
    ],

  }

  var revenueChart = new ApexCharts(
    document.querySelector("#revenue-chart"),
    revenueChartoptions
  );

  revenueChart.render();

  var goalChart = new ApexCharts(
    document.querySelector("#goal-overview-chart"),
    goalChartoptions
  );

  goalChart.render();
  var clientChartoptions = {
    chart: {
      stacked: true,
      type: 'bar',
      toolbar: { show: false },
      height: 300,
    },
    plotOptions: {
      bar: {
        columnWidth: '10%'
      }
    },
    colors: [$primary, $danger],
    series: [{
      name: 'Foydalangan',
      data: [175, 125, 225, 175, 160, 189, 206, 134, 159, 216, 148, 123]
    }, {
      name: 'Foydalanmagan',
      data: [-144, -155, -141, -167, -122, -143, -158, -107, -126, -131, -140, -137]
    }],
    grid: {
      borderColor: $label_color,
      padding: {
        left: 0,
        right: 0
      }
    },
    legend: {
      show: true,
      position: 'top',
      horizontalAlign: 'left',
      offsetX: 0,
      fontSize: '14px',
      markers: {
        radius: 50,
        width: 10,
        height: 10,
      }
    },
    dataLabels: {
      enabled: false
    },
    xaxis: {
      labels: {
        style: {
          colors: $strok_color,
        }
      },
      axisTicks: {
        show: false,
      },
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      axisBorder: {
        show: false,
      },
    },
    yaxis: {
      tickAmount: 5,
      labels: {
        style: {
          color: $strok_color,
        }
      }
    },
    tooltip: {
      x: { show: false }
    },
  }

  var clientChart = new ApexCharts(
    document.querySelector("#client-retention-chart"),
    clientChartoptions
  );

  clientChart.render();

  });
