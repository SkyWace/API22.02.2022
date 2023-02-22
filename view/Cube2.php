<main class="content">
                <div class="container-fluid p-0">

                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3>Dashboard</h3>
                        </div>

                        <div class="col-auto ms-auto text-end mt-n1">

                            <div class="dropdown me-2 d-inline-block">
                                <a class="btn btn-light bg-white shadow-sm dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">
        <i class="align-middle mt-n1" data-feather="calendar"></i> Today
      </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>

                            <button class="btn btn-primary shadow-sm">
      <i class="align-middle" data-feather="filter">&nbsp;</i>
    </button>
                            <button class="btn btn-primary shadow-sm">
      <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
    </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card illustration flex-fill">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="illustration-text p-3 m-1">
                                                <h4 class="illustration-text">Welcome Back</h4>
                                                <p class="mb-0">AppStack Dashboard</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card flex-fill">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h3 class="mb-2">2%</h3>
                                            <p class="mb-2">Humidité</p>
                                            <div class="mb-0">
                                                <span class="badge badge-soft-success me-2"> +5.35% </span>
                                                <span class="text-muted">depuis la dernière lecture</span>
                                            </div>
                                        </div>
                                        <div class="d-inline-block ms-3">
                                            <div class="stat">
                                                <i class="align-middle text-success" data-feather="droplet"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="card flex-fill">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h3 class="mb-2">10°</h3>
                                            <p class="mb-2">Température</p>
                                            <div class="mb-0">
                                                <span class="badge badge-soft-danger me-2"> -4.25% </span>
                                                <span class="text-muted">depuis la dernière lecture</span>
                                            </div>
                                        </div>
                                        <div class="d-inline-block ms-3">
                                            <div class="stat">
                                                <i class="align-middle text-danger" data-feather="thermometer"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <?php require 'table/graph.php' ;?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <?php require 'table/FirstTable.php' ;?>
                        </div>
                    </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-0">
                                &copy; 2022 - <a href="index.html" class="text-muted">AppStack</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Last year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .325,
                        categoryPercentage: .5
                    }, {
                        label: "This year",
                        backgroundColor: window.theme["primary-light"],
                        borderColor: window.theme["primary-light"],
                        hoverBackgroundColor: window.theme["primary-light"],
                        hoverBorderColor: window.theme["primary-light"],
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                        barPercentage: .325,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    cornerRadius: 15,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                stepSize: 20
                            },
                            stacked: true,
                        }],
                        xAxes: [{
                            gridLines: {
                                color: "transparent"
                            },
                            stacked: true,
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $("#datetimepicker-dashboard").datetimepicker({
                inline: true,
                sideBySide: false,
                format: "L"
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Direct", "Affiliate", "E-mail", "Other"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderWidth: 5,
                        borderColor: window.theme.white
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    cutoutPercentage: 70,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $("#datatables-dashboard-projects").DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script>

</body>

</html>
