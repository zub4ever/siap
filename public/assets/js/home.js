/* ========================================================================

Home Js

=========================================================================
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function ($) {
    if ($('#bar_chart').length) {
        var ctx = document.getElementById("bar_chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: 'Profit Months',
                    data: [12, 19, 3, 17, 15, 24, 7],
                    backgroundColor: "#d5c0f2",
                    borderColor: "transparent",
                    borderWidth: 0
                }, {
                    label: 'Loss Month',
                    data: [15, 29, 5, 5, 20, 3, 10],
                    backgroundColor: "#5c2b87",
                    borderColor: "transparent",
                    borderWidth: 0
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },

                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: 14,
                            fontColor: '#71748d',
                        }
                    }]
                }
            }


        });
    }
    if ($("#recent-sale-chart").length) {
        var chart_id = $("#recent-sale-chart").get(0).getContext("2d");
        var recentSales = new Chart(chart_id, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    data: [160, 105, 225, 140, 180, 61, 120, 60, 90],
                    backgroundColor: [
                        '#b9e8f9'
                    ],
                    borderWidth: 2,
                    borderColor: "#04C4DC",
                    fill: 'origin',
                    label: "purchases"
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'transparent',
                            zeroLineColor: '#eeeeee'
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: true,
                            autoSkip: false,
                            maxRotation: 0,
                            stepSize: 100,
                            min: 0,
                            max: 300
                        },
                        gridLines: {
                            drawBorder: false
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
                elements: {
                    line: {
                        tension: .35
                    },
                    point: {
                        radius: 0
                    }
                }
            }
        });
    }
    if ($("#current-sale-chart").length) {
        var chart_id = $("#current-sale-chart").get(0).getContext("2d");
        var recentSales = new Chart(chart_id, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    data: [160, 105, 130, 130, 250, 100, 120, 60, 90],
                    backgroundColor: [
                        '#d5c0f2'
                    ],
                    borderWidth: 2,
                    borderColor: "#7B52AB",
                    fill: 'origin',
                    label: "purchases"
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'transparent',
                            zeroLineColor: '#eeeeee'
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: true,
                            autoSkip: false,
                            maxRotation: 0,
                            stepSize: 100,
                            min: 0,
                            max: 300
                        },
                        gridLines: {
                            drawBorder: false
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
                elements: {
                    line: {
                        tension: .35
                    },
                    point: {
                        radius: 0
                    }
                }
            }
        });
    }
    if ($("#current-year-chart").length) {
        var chart_id = $("#current-year-chart").get(0).getContext("2d");
        var recentSales = new Chart(chart_id, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    data: [120, 105, 130, 90, 150, 100, 80, 60, 90],
                    backgroundColor: [
                        '#f5e5cd'
                    ],
                    borderWidth: 2,
                    borderColor: "#F5D41E",
                    fill: 'origin',
                    label: "purchases"
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'transparent',
                            zeroLineColor: '#eeeeee'
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: true,
                            autoSkip: false,
                            maxRotation: 0,
                            stepSize: 100,
                            min: 0,
                            max: 300
                        },
                        gridLines: {
                            drawBorder: false
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true
                },
                elements: {
                    line: {
                        tension: .35
                    },
                    point: {
                        radius: 0
                    }
                }
            }
        });
    }
    if ($('#radar_chart').length) {
        var ctx = document.getElementById("radar_chart");
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ["Data 1", "Data 2", "Data 3", "Data 4"],
                datasets: [{
                    label: 'Main Data',
                    backgroundColor: "rgba(151, 104, 209,0.5)",
                    borderColor: "rgba(151, 104, 209,0.7)",
                    data: [12, 19, 3, 17],
                    borderWidth: 2
                }, {
                    label: 'Basic Data',
                    backgroundColor: "rgba(123, 82, 171,0.5)",
                    borderColor: "rgba(123, 82, 171,0.7)",
                    data: [20, 29, 5, 5, 20, 3, 10],
                    borderWidth: 2
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
            }

        });
    }
    if ($('#c3chart_pie').length) {
        var chart = c3.generate({
            bindto: "#c3chart_pie",
            data: {
                columns: [
                    ['PrevMonth', 30],
                    ['CurrentMonth', 50]
                ],
                type: 'pie',

                colors: {
                    PrevMonth: '#7B52AB',
                    CurrentMonth: '#553285'
                }
            },
            pie: {
                label: {
                    format: function(value, ratio, id) {
                        return d3.format('$')(value);
                    }
                }
            }
        });
    }
    if ($('#dataTable').length) {
        $('#dataTable').DataTable();
    }
});
/*======== End Doucument Ready Function =========*/