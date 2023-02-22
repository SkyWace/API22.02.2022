


<div class="card flex-fill">
						<div class="card-header">
							<div class="card-actions float-end">
								<div class="dropdown position-relative">
									<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
        </a>

									
								</div>
							</div>
							<h5 class="card-title mb-0">Relevés capteurs</h5>
						</div>
						<div class="card-body">
						<table id="datatables-reponsive" class="table table-striped my-0">
							<thead>
								<tr>
									<th>Nom capteurs</th>
									<th class="d-none d-xl-table-cell">Date du relevé</th>
									<th class="d-none d-xl-table-cell">Température</th>
									<th class="d-none d-xl-table-cell">Humidité</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					</div>
					<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>