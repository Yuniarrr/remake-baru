<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>







<script type="text/javascript">
	// <!--
	function sortSearch(heading, direction) {
		var submitForm = document.getElementById('submit');
		submitForm.sort.value = heading;
		submitForm.sortDirection.value = direction;
		submitForm.submit();
	}
	// -->
</script>

<div class="wrapper">
	<div class="section section-hero section-shaped">
		<div class="page-header">
			<h2 class="text-center">ARCHIVES</h2>
			<hr>


			<div class="container shape-container d-flex align-items-center">
				<div class="col px-0">


					<div class="row align-items-center justify-content-left">
						<div id="content" class="justify-content-left mb-3">
							<tbody>
								<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">UNASSIGNED</a></tr>
								<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInReview">IN REVIEW</a></tr>
								<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">IN EDITING</a></tr>
								<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsArchives">ARCHIVES</a></tr>
							</tbody>
						</div><!-- content -->
						<div class="col-sm">

							<div id="submissions">
								<table width="100%" class="table">

									<tr class="heading" valign="bottom">
										<td><a href="javascript:sortSearch('id','1')" style="font-weight:bold">ID</a></td>
										<td><span class="disabled"></span><a href="javascript:sortSearch('submitDate','1')">Submitted</a></td>
										<td><a href="javascript:sortSearch('section','1')">Sec</a></td>
										<td><a href="javascript:sortSearch('authors','1')">Authors</a></td>
										<td><a href="javascript:sortSearch('title','1')">Title</a></td>
										<td align="right"><a href="javascript:sortSearch('status','1')">Status</a></td>
									</tr>

									<tr valign="top">
										<td>12515</td>
										<td>2022-03-10</td>
										<td>ART</td>
										<td>Niani, Siahaan</td>
										<td><a href="/editor/submissionEditing/12515" class="action">Flexural And Shear Behaviour Of Reinforced Concrete Slab...</a></td>
										<td align="right">
											Vol 1, No 1 (2022)
										</td>
									</tr>

									<tr valign="top">
										<td>12892</td>
										<td>2022-05-10</td>
										<td>ART</td>
										<td>Last</td>
										<td><a href="/editor/submissionEditing/12892" class="action">Pemberitahuan</a></td>
										<td align="right">
											Vol 1, No 2 (2022)
										</td>
									</tr>


									<tr valign="top">
										<td>13087</td>
										<td>2022-06-02</td>
										<td>ART</td>
										<td>Niani</td>
										<td><a href="/editor/submissionEditing/13087" class="action">as</a></td>
										<td align="right">
											Vol 1, No 2 (2022)
										</td>
									</tr>


									<tr valign="top">
										<td>13098</td>
										<td>2022-06-02</td>
										<td>ART</td>
										<td>Niani</td>
										<td><a href="/editor/submissionEditing/13098" class="action">feed</a></td>
										<td align="right">
											Archived&nbsp;&nbsp;<a href="/editor/deleteSubmission/13098" onclick="return confirm('Are you sure you want to permanently delete this submission?')" class="action">Delete</a>
										</td>
									</tr>

									<tr>
										<td colspan="4" align="left">1 - 4 of 4 Items</td>
										<td colspan="2" align="right"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<?= $this->endSection(); ?>