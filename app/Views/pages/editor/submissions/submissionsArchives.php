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
					<div i class="justify-content-left mb-3">
						<tbody>
							<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">UNASSIGNED</a></tr>
							<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInReview">IN REVIEW</a></tr>
							<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">IN EDITING</a></tr>
							<tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsArchives">ARCHIVES</a></tr>
						</tbody>
					</div><!-- content -->

					<div class="row align-items-center justify-content-left">

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

									<?php if (isset($articles) && $articles != NULL ) : ?>
										<?php foreach ($articles as $article) : ?>
											<tr valign="top">
												<td><?= $article['article_id']; ?></td>
												<td><?= $article['date_submit']; ?></td>
												<td>ART</td>
												<td>
													<?php for ($i = 0; $i < count($authors[$article['article_id']]); $i++) :  ?>
														<?php if (count($authors[$article['article_id']]) == 1) : ?>
															<?= $authors[$article['article_id']][$i]['first_name']; ?>
														<?php elseif ($i < count($authors[$article['article_id']]) - 1) : ?>
															<?= $authors[$article['article_id']][$i]['first_name'] . ', '; ?>
														<?php elseif ($i == count($authors[$article['article_id']]) - 1) : ?>
															<?= $authors[$article['article_id']][$i]['first_name']; ?>
														<?php endif; ?>
													<?php endfor; ?>
												</td>
												<td>
													<a href="<?= base_url(); ?>/editor/submissionEditing/<?= $article['article_id']; ?>" class="action"><?= $article['title']; ?></a>
												</td>
												<td align="right">
													Vol <?= $issue[$article['article_id']]['volume']; ?>, No <?= $issue[$article['article_id']]['number']; ?> (<?= $issue[$article['article_id']]['year']; ?>)
												</td>
											</tr>
											<tr>
												<td colspan="6" class="endseparator">&nbsp;</td>
											</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan="6">No Issue and No Article</td>
										</tr>
										<tr>
											<td colspan="6" class="endseparator">&nbsp;</td>
										</tr>
									<?php endif; ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<?= $this->endSection(); ?>