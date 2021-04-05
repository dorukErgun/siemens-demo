<?php include ("security.php"); ?>
<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("../components/metadata.php") ?>
        <title>Dashboard</title>
    </head>

    <body>
      
        <?php include("../components/sidebar.php") ?>
        <?php include("../components/menu.php") ?>

        <div class="pusher">
            <div class="main-content">
            <?php
                //Reading permisson requests db.
                $query_for_permissions = "SELECT * FROM permission_requests";
                $result_for_permissions = mysqli_query($db, $query_for_permissions);
                $total_for_permissions = mysqli_num_rows($result_for_permissions);
                $row_for_permissions = mysqli_fetch_assoc($result_for_permissions);

                //Reading requests db.
                $query_for_requests = "SELECT * FROM requests";
                $result_for_requests = mysqli_query($db, $query_for_requests);
                $total_for_requests = mysqli_num_rows($result_for_requests);
                //$row_for_requests = mysqli_fetch_assoc($result_for_requests);

                //Reading requests db.
                $query_for_dangers = "SELECT * FROM dangers";
                $result_for_dangers = mysqli_query($db, $query_for_dangers);
                $total_for_dangers = mysqli_num_rows($result_for_dangers);
                $row_for_dangers = mysqli_fetch_assoc($result_for_dangers);
            ?>

                <div class="ui grid stackable padded">

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <div class="ui right floated header green"><i class="comment alternate outline icon"></i></div>
                                <div class="header">
                                    <div class="ui header green"><?php echo($total_for_requests);?></div>
                                </div>
                                <div class="meta">Requests</div>
                                <div class="description">Active requests</div>
                            </div>
                            <div class="extra content">
                                <a href="requests.php">
                                    <div class="ui two buttons">
                                        <div class="ui green button">More Info</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <div class="ui right floated header teal"><i class="calendar check outline icon"></i></div>
                                <div class="header">
                                    <div class="ui teal header"><?php echo($total_for_permissions);?></div>
                                </div>
                                <div class="meta">Permission Requests</div>
                                <div class="description">Active permisson requests</div>
                            </div>
                            <div class="extra content">
                                <a href="permissionrequests.php">
                                    <div class="ui two buttons">
                                        <div class="ui teal button">More Info</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <div class="ui right floated header red"><i class="icon exclamation"></i></div>
                                <div class="header">
                                    <div class="ui red header"><?php echo($total_for_dangers);?></div>
                                </div>
                                <div class="meta">Possible Dangers</div>
                                <div class="description">Possible dangers around factory</div>
                            </div>
                            <div class="extra content">
                                <div class="ui two buttons">
                                    <div class="ui red button">More Info</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="ui grid stackable padded">

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <figure class="highcharts-figure">
                                    <div id="container"></div>
                                    <p class="highcharts-description">
                                        Demonstrating a basic area chart, also known as a mountain chart.
                                        Area charts are similar to line charts, but commonly used to visualize
                                        volumes.
                                    </p>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <figure class="highcharts-figure">
                                    <div id="container1"></div>
                                    <p class="highcharts-description">
                                        Pie charts are very popular for showing a compact overview of a
                                        composition or comparison. While they can be harder to read than
                                        column charts, they remain a popular choice for small datasets.
                                    </p>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="five wide computer eight wide tablet sixteen wide mobile column">
                        <div class="ui fluid card">
                            <div class="content">
                                <figure class="highcharts-figure">
                                    <div id="container2"></div>
                                    <p class="highcharts-description">
                                        Chart showing browser market shares. Clicking on individual columns
                                        brings up more detailed data. This chart makes use of the drilldown
                                        feature in Highcharts to easily switch between datasets.
                                    </p>
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="ui grid stackable padded">
                    <div class="column">
                        <div class="ui fluid card">
                            <div class="content">
                                <div class="ui feed">
                                    <?php
                                        //Reading permisson requests db.
                                        $query_for_permissions = "SELECT * FROM permission_requests";
                                        $result_for_permissions = mysqli_query($db, $query_for_permissions);
                                        $total_for_permissions = mysqli_num_rows($result_for_permissions);
                                        //$row_for_permissions = mysqli_fetch_assoc($result_for_permissions);

                                        //Reading requests db.
                                        $query_for_requests = "SELECT * FROM requests";
                                        $result_for_requests = mysqli_query($db, $query_for_requests);
                                        $total_for_requests = mysqli_num_rows($result_for_requests);
                                        //$row_for_requests = mysqli_fetch_assoc($result_for_requests);

                                        //Reading requests db.
                                        $query_for_dangers = "SELECT * FROM dangers";
                                        $result_for_dangers = mysqli_query($db, $query_for_dangers);
                                        $total_for_dangers = mysqli_num_rows($result_for_dangers);
                                        //$row_for_dangers = mysqli_fetch_assoc($result_for_dangers);
                                    ?>
                                    <?php while($row = mysqli_fetch_assoc($result_for_requests)){ ?>
                                    <div class="event">
                                        <div class="label">
                                            <i class="user icon"></i>
                                        </div>
                                        <div class="content">
                                            <div class="summary">
                                                <a class="user">
                                                <?php echo $row['fname']; echo " "; echo $row['lname'] ?>
                                                </a> has a request
                                                <div class="date">
                                                Empty.
                                                </div>
                                            </div>
                                            <div class="meta">
                                                <a class="like">
                                                <i class="angle right icon"></i> Go to requests
                                                </a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="event">
                                            <div class="label">
                                            <img src="/images/avatar/small/helen.jpg">
                                            </div>
                                            <div class="content">
                                            <div class="summary">
                                                <a><?php echo $row['fname']; echo " "; echo $row['lname']; ?></a> indicated <a>a danger!</a>
                                                <div class="date">
                                                empty
                                                </div>
                                            </div>
                                            <div class="meta">
                                                <a class="like">
                                                <i class="angle right icon"></i> Go to dangers
                                                </a>
                                            </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <?php include("../components/footer.php") ?>      
        <script src="../scripts/sidebar.js" ></script>
        <script>
        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            accessibility: {
                description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
            },
            title: {
                text: 'Requests and Days'
            },
            subtitle: {
                text: 'Sources: <a href="https://thebulletin.org/2006/july/global-nuclear-stockpiles-1945-2006">' +
                    'thebulletin.org</a> &amp; <a href="https://www.armscontrol.org/factsheets/Nuclearweaponswhohaswhat">' +
                    'armscontrol.org</a>'
            },
            xAxis: {
                allowDecimals: false,
                labels: {
                    formatter: function () {
                        return this.value; // clean, unformatted number for year
                    }
                },
                accessibility: {
                    rangeDescription: 'Range: 2020 to 2021.'
                }
            },
            yAxis: {
                title: {
                    text: 'Request numbers'
                },
                labels: {
                    formatter: function () {
                        return this.value / 1000 + 'k';
                    }
                }
            },
            tooltip: {
                pointFormat: '{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
            },
            plotOptions: {
                area: {
                    pointStart: 2020,
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'USA',
                data: [null, null, null, null, null, null, null, null, null, null,
                    5, 25, 50, 120, 150, 200, 426, 660, 869, 1060,
                    1605, 2471, 3322, 4238, 5221, 6129, 7089, 8339, 9399, 10538,
                    11643, 13092, 14478, 15915, 17385, 19055, 21205, 23044, 25393, 27935,
                    30062, 32049, 33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000,
                    37000, 35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                    21000, 20000, 19000, 18000, 18000, 17000, 16000, 15537, 14162, 12787,
                    12600, 11400, 5500, 4512, 4502, 4502, 4500, 4500
                ]
            }, {
                name: 'USSR/Russia',
                data: [
                    <?php 
                        //Reading requests db.
                        $query_for_requests = "SELECT * FROM requests";
                        $result_for_requests = mysqli_query($db, $query_for_requests);
                        $total_for_requests = mysqli_num_rows($result_for_requests);
                        $row_for_requests = mysqli_fetch_assoc($result_for_requests); 

                        while($row = mysqli_fetch_assoc($result_for_requests)){
                            echo $row['id'];
                            echo ",";
                        }
                    ?>
                ]
            }]
        });
    </script>

    <script>
        Highcharts.chart('container1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Requests',
                    color: 'green',
                    y: <?php echo($total_for_requests);?>,
                    selected: true
                }, {
                    name: 'Permission Requests',
                    color: '#24CBE5',
                    y: <?php echo($total_for_permissions);?>
                }, {
                    name: 'Possible Dangers',
                    color: 'red',
                    y: <?php echo($total_for_dangers);?>
                }]
            }]
        });
    </script>

    <script>
        Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Browser market shares. January, 2018'
        },
        subtitle: {
            text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: [
                    {
                        name: "Chrome",
                        y: <?php echo($total_for_requests);?>,
                        drilldown: "Chrome"
                    },
                    {
                        name: "Firefox",
                        y: <?php echo($total_for_dangers);?>,
                        drilldown: "Firefox"
                    },
                    {
                        name: "Internet Explorer",
                        y: <?php echo($total_for_permissions);?>,
                        drilldown: "Internet Explorer"
                    },
                ]
            }
        ],
        drilldown: {
            series: [
                {
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                        [
                            "v65.0",
                            0.1
                        ],
                        [
                            "v64.0",
                            1.3
                        ],
                        [
                            "v63.0",
                            53.02
                        ],
                        [
                            "v62.0",
                            1.4
                        ],
                        [
                            "v61.0",
                            0.88
                        ],
                        [
                            "v60.0",
                            0.56
                        ],
                        [
                            "v59.0",
                            0.45
                        ],
                        [
                            "v58.0",
                            0.49
                        ],
                        [
                            "v57.0",
                            0.32
                        ],
                        [
                            "v56.0",
                            0.29
                        ],
                        [
                            "v55.0",
                            0.79
                        ],
                        [
                            "v54.0",
                            0.18
                        ],
                        [
                            "v51.0",
                            0.13
                        ],
                        [
                            "v49.0",
                            2.16
                        ],
                        [
                            "v48.0",
                            0.13
                        ],
                        [
                            "v47.0",
                            0.11
                        ],
                        [
                            "v43.0",
                            0.17
                        ],
                        [
                            "v29.0",
                            0.26
                        ]
                    ]
                },
                {
                    name: "Firefox",
                    id: "Firefox",
                    data: [
                        [
                            "v58.0",
                            1.02
                        ],
                        [
                            "v57.0",
                            7.36
                        ],
                        [
                            "v56.0",
                            0.35
                        ],
                        [
                            "v55.0",
                            0.11
                        ],
                        [
                            "v54.0",
                            0.1
                        ],
                        [
                            "v52.0",
                            0.95
                        ],
                        [
                            "v51.0",
                            0.15
                        ],
                        [
                            "v50.0",
                            0.1
                        ],
                        [
                            "v48.0",
                            0.31
                        ],
                        [
                            "v47.0",
                            0.12
                        ]
                    ]
                },
                {
                    name: "Internet Explorer",
                    id: "Internet Explorer",
                    data: [
                        [
                            "v11.0",
                            6.2
                        ],
                        [
                            "v10.0",
                            0.29
                        ],
                        [
                            "v9.0",
                            0.27
                        ],
                        [
                            "v8.0",
                            0.47
                        ]
                    ]
                },
                {
                    name: "Safari",
                    id: "Safari",
                    data: [
                        [
                            "v11.0",
                            3.39
                        ],
                        [
                            "v10.1",
                            0.96
                        ],
                        [
                            "v10.0",
                            0.36
                        ],
                        [
                            "v9.1",
                            0.54
                        ],
                        [
                            "v9.0",
                            0.13
                        ],
                        [
                            "v5.1",
                            0.2
                        ]
                    ]
                },
                {
                    name: "Edge",
                    id: "Edge",
                    data: [
                        [
                            "v16",
                            2.6
                        ],
                        [
                            "v15",
                            0.92
                        ],
                        [
                            "v14",
                            0.4
                        ],
                        [
                            "v13",
                            0.1
                        ]
                    ]
                },
                {
                    name: "Opera",
                    id: "Opera",
                    data: [
                        [
                            "v50.0",
                            0.96
                        ],
                        [
                            "v49.0",
                            0.82
                        ],
                        [
                            "v12.1",
                            0.14
                        ]
                    ]
                }
            ]
        }
    });
    </script>

    </body>
</html>