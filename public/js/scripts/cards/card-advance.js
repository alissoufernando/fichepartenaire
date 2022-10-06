/*=========================================================================================
    File Name: card-advance.js
    Description: Card Advance page content with Apexchart Examples
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

'use strict';

$(window).on('load', function () {
  var $trackBgColor = '#e9ecef';

  var employeesuccessChartOptions1;
  var employeeDangerChartOptions;
  var employeeSuccessChartOptions;
  var employeeSecondaryChartOptions;
  var employeeWarningChartOptions;
  var employeesuccessChartOptions2;

  var employeesuccessChart1;
  var employeeDangerChart;
  var employeeSuccessChart;
  var employeeSecondaryChart;
  var employeeWarningChart;
  var employeesuccessChart2;

  var $employeeChartsuccess1 = document.querySelector('.employee-task-chart-success-1');
  var $employeeChartDanger = document.querySelector('.employee-task-chart-danger');
  var $employeeChartSuccess = document.querySelector('.employee-task-chart-success');
  var $employeeChartSecondary = document.querySelector('.employee-task-chart-secondary');
  var $employeeChartWarning = document.querySelector('.employee-task-chart-warning');
  var $employeeChartsuccess2 = document.querySelector('.employee-task-chart-success-2');

  var statesuccessChartOptions;
  var stateWarningChartOptions;
  var stateSecondaryChartOptions;
  var stateInfoChartOptions;
  var stateDangerChartOptions;

  var statesuccessChart;
  var stateDangerChart;
  var stateInfoChart;
  var stateSecondaryChart;
  var stateWarningChart;

  var $stateChartsuccess = document.querySelector('.state-chart-success');
  var $stateChartWarning = document.querySelector('.state-chart-warning');
  var $stateChartSecondary = document.querySelector('.state-chart-secondary');
  var $stateChartInfo = document.querySelector('.state-chart-info');
  var $stateChartDanger = document.querySelector('.state-chart-danger');
  var userChats = $('.user-chats');

  // init ps if it is not touch device
  if (!$.app.menu.is_touch_device()) {
    // Chat area
    if (userChats.length > 0) {
      var chatsUser = new PerfectScrollbar(userChats[0], {
        wheelPropagation: false
      });
    }
  } else {
    userChats.css('overflow', 'scroll');
  }

  //------------ Employee Task Charts ------------
  //----------------------------------------------

  // Employee success Chart 1
  employeesuccessChartOptions1 = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.success],
    series: [45],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeesuccessChart1 = new ApexCharts($employeeChartsuccess1, employeesuccessChartOptions1);
  employeesuccessChart1.render();

  // Employee Danger Chart
  employeeDangerChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.danger],
    series: [65],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeeDangerChart = new ApexCharts($employeeChartDanger, employeeDangerChartOptions);
  employeeDangerChart.render();

  // Employee Success Chart
  employeeSuccessChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.success],
    series: [60],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeeSuccessChart = new ApexCharts($employeeChartSuccess, employeeSuccessChartOptions);
  employeeSuccessChart.render();

  // Employee Secondary Chart
  employeeSecondaryChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.secondary],
    series: [35],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeeSecondaryChart = new ApexCharts($employeeChartSecondary, employeeSecondaryChartOptions);
  employeeSecondaryChart.render();

  // Employee Warning Chart
  employeeWarningChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.warning],
    series: [65],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeeWarningChart = new ApexCharts($employeeChartWarning, employeeWarningChartOptions);
  employeeWarningChart.render();

  // Employee success Chart 2
  employeesuccessChartOptions2 = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.success],
    series: [80],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  employeesuccessChart2 = new ApexCharts($employeeChartsuccess2, employeesuccessChartOptions2);
  employeesuccessChart2.render();

  //---------------- State Charts ----------------
  //----------------------------------------------

  // State success Chart
  statesuccessChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.success],
    series: [54.4],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  statesuccessChart = new ApexCharts($stateChartsuccess, statesuccessChartOptions);
  statesuccessChart.render();

  // State Warning Chart
  stateWarningChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.warning],
    series: [6.1],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  stateWarningChart = new ApexCharts($stateChartWarning, stateWarningChartOptions);
  stateWarningChart.render();

  // State Secondary Chart 1
  stateSecondaryChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.secondary],
    series: [14.6],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  stateSecondaryChart = new ApexCharts($stateChartSecondary, stateSecondaryChartOptions);
  stateSecondaryChart.render();

  // State Info Chart
  stateInfoChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.info],
    series: [4.2],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  stateInfoChart = new ApexCharts($stateChartInfo, stateInfoChartOptions);
  stateInfoChart.render();

  // State Danger Chart
  stateDangerChartOptions = {
    chart: {
      height: 30,
      width: 30,
      type: 'radialBar'
    },
    grid: {
      show: false,
      padding: {
        left: -15,
        right: -15,
        top: -12,
        bottom: -15
      }
    },
    colors: [window.colors.solid.danger],
    series: [8.4],
    plotOptions: {
      radialBar: {
        hollow: {
          size: '22%'
        },
        track: {
          background: $trackBgColor
        },
        dataLabels: {
          showOn: 'always',
          name: {
            show: false
          },
          value: {
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: 'round'
    }
  };
  stateDangerChart = new ApexCharts($stateChartDanger, stateDangerChartOptions);
  stateDangerChart.render();
});

// Add message to chat - function call on form submit
function enterChat(source) {
  var message = $('.message').val();
  if (/\S/.test(message)) {
    var html = '<div class="chat-content">' + '<p>' + message + '</p>' + '</div>';
    $('.chat:last-child .chat-body').append(html);
    $('.message').val('');
    $('.user-chats').scrollTop($('.user-chats > .chats').height());
  }
}
