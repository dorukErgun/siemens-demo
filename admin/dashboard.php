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
                                <a href="dangers.php">
                                <div class="ui two buttons">
                                    <div class="ui red button">More Info</div>
                                </div>
                                </a>
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
                                        Mountain charts shows requests and days relationship.
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
                                        Pie chart shows the requests, permission requests and danger indications distributions.
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
                                        Chart shows the numbers of requests in a diffrent way.
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
                                    ?>
                                    <?php while($row = mysqli_fetch_assoc($result_for_permissions)){ ?>
                                        <div class="event">
                                            <div class="label">
                                                <i class="user icon"></i>
                                            </div>
                                            <div class="content">
                                                <div class="summary">
                                                    <a class="user"><?php echo $row['fname']; echo " "; echo $row['lname'] ?> </a> has a permission request.
                                                    <div class="date"> <?php echo $row['dte']; ?> </div>
                                                </div>
                                                <div class="meta">
                                                    <a href="permissionrequests.php" class="like">
                                                        <i class="angle right icon"></i> Go to permission requests
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php
                                        //Reading requests db.
                                        $query_for_requests = "SELECT * FROM requests";
                                        $result_for_requests = mysqli_query($db, $query_for_requests);
                                        $total_for_requests = mysqli_num_rows($result_for_requests);
                                        //$row_for_requests = mysqli_fetch_assoc($result_for_requests);
                                    ?>
                                    <?php while($row = mysqli_fetch_assoc($result_for_requests)){ ?>
                                        <div class="event">
                                            <div class="label">
                                                <i class="user icon"></i>
                                            </div>
                                            <div class="content">
                                                <div class="summary">
                                                    <a class="user"><?php echo $row['fname']; echo " "; echo $row['lname'] ?> </a> has a request.
                                                    <div class="date"> <?php echo $row['dte']; ?> </div>
                                                </div>
                                                <div class="meta">
                                                    <a href="requests.php" class="like">
                                                        <i class="angle right icon"></i> Go to requests
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php
                                        //Reading requests db.
                                        $query_for_dangers = "SELECT * FROM dangers";
                                        $result_for_dangers = mysqli_query($db, $query_for_dangers);
                                        $total_for_dangers = mysqli_num_rows($result_for_dangers);
                                        //$row_for_dangers = mysqli_fetch_assoc($result_for_dangers);
                                    ?>
                                    <?php while($row = mysqli_fetch_assoc($result_for_dangers)){ ?>
                                        <div class="event">
                                            <div class="label">
                                                <i class="user icon"></i>
                                            </div>
                                            <div class="content">
                                                <div class="summary">
                                                    <a class="user"><?php echo $row['fname']; echo " "; echo $row['lname'] ?> </a> indicated a danger!
                                                    <div class="date"> <?php echo $row['dte']; ?> </div>
                                                </div>
                                                <div class="meta">
                                                    <a href="dangers.php" class="like">
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

        <?php include("../components/footer.php") ?>      
        <script src="../scripts/sidebar.js" ></script>
        <script>
        Highcharts.chart('container', {
            chart: {
                type: 'pyramid'
            },
            title: {
                text: 'Sales pyramid',
                x: -50
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b> ({point.y:,.0f})',
                        softConnector: true
                    },
                    center: ['40%', '50%'],
                    width: '80%'
                }
            },
            legend: {
                enabled: false
            },
            series: [{
                name: 'Sent data',
                data: [
                    ['Requests',      <?php echo($total_for_requests);?>],
                    ['Permission Requests',            <?php echo($total_for_permissions);?>],
                    ['Dangers', <?php echo($total_for_dangers);?>],
                ]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        plotOptions: {
                            series: {
                                dataLabels: {
                                    inside: true
                                },
                                center: ['50%', '50%'],
                                width: '100%'
                            }
                        }
                    }
                }]
            }
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
                text: 'Distribution of requests, <?php echo date('Y-m-d'); ?>'
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
            text: 'Requests chart, <?php echo date('Y-m-d'); ?>'
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
                        name: "Requests",
                        y: <?php echo($total_for_requests);?>,
                        drilldown: "Request"
                    },
                    {
                        name: "Dangers",
                        y: <?php echo($total_for_dangers);?>,
                        drilldown: "Firefox"
                    },
                    {
                        name: "Permission Requests",
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