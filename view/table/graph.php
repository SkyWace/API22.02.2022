<div class="col-12 ">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Area Chart</h5>
									<h6 class="card-subtitle text-muted">Area charts are used to represent quantitative variations.</h6>
								</div>
								<div class="card-body">
									<div class="chart w-100">
										<div id="apexcharts-area"></div>
									</div>
								</div>
							</div>
						</div>


						<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Area chart
			var options = {
				chart: {
					height: 350,
					type: "area",
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					curve: "smooth"
				},
				series: [{
					name: "series1",
					data: [31, 40, 28, 51, 42, 109, 100]
				}, {
					name: "series2",
					data: [11, 32, 45, 32, 34, 52, 41]
				}],
				xaxis: {
					type: "datetime",
					categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00",
						"2018-09-19T06:30:00"
					],
				},
				tooltip: {
					x: {
						format: "dd/MM/yy HH:mm"
					},
				}
			}
			var chart = new ApexCharts(
				document.querySelector("#apexcharts-area"),
				options
			);
			chart.render();
		});
	</script>
