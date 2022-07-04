

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/favicon.png">
  <title>

  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url(); ?>/assets/styles/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/assets/styles/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?= base_url(); ?>/assets/styles/css/font-awesome.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/assets/styles/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>/assets/styles/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>
              


<body>

	<script type="text/javascript">
		// <!--
		if (self.blur) {
			self.focus();
		}
		// -->
	</script>


	<div id="container">
		<div id="body">
			<div id="main">
				<h2>Editor/Author Correspondence</h2>
				<div id="content">



					<script type="text/javascript">
						// <!--
						// In case this page is the result of a comment submit, reload the parent
						// so that the necessary buttons will be activated.
						window.opener.location.reload();
						// -->
					</script>
					<?php if (isset($comments)) : ?>
						<?php foreach ($comments as $comment) : ?>
							<div id="existingComments" class="mb-3">
								<table class="data" width="70%">
									<div id="comment">
										<tr valign="top">
											<td width="25%">
												<div class="commentRole">For Editor</div>
												<!-- <div class="commentDate">2022-06-06 06:04 PM</div> -->
											</td>
											<td>
												<div style="float: right"><a href="<?= base_url(); ?>/reviewer/deleteComment/<?= $articleID; ?>" onclick="return confirm('Apakah anda yakin menghapusnya?')" class="action">Delete</a></div>
												<div id="6091"></a>
												</div>
												<div class="comments"><?= $comment['reviewer_to_editor']; ?></div>
											</td>
										</tr>
                                        <tr valign="top">
											<td width="25%">
												<div class="commentRole">For Author</div>
											</td>
											<td >
												<div style="float: right"><a href="<?= base_url(); ?>/editor/deleteComment/<?= $articleID; ?>" onclick="return confirm('Apakah anda yakin menghapusnya?')" class="action">Delete</a></div>
												<div id="6091"></a>
												</div>
												<div class="comments"><?= $comment['reviewer_to_author']; ?></div>
											</td>
										</tr>
									</div>
								</table>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
						<div id="existingComments">
							<table class="data" width="100%">
								<tr>
									<td class="nodata">No Comments</td>
								</tr>
							</table>
						</div>
						<br />
						<br />
					<?php endif; ?>


					<form method="post" action="<?= base_url(); ?>/reviewer/PostPeerReviewComment">
						<input type="hidden" name="articleId" value="<?= $articleID; ?>" />

						<div id="new">

							<table class="data" width="70%">
								<tr valign="top">
									<td class="label">
										<label for="comments">
											For Editor
                                        </label>
									</td>
									<td class="value">
                                        <textarea id="comments" name="comments" rows="10" cols="50" class="textArea"></textarea>
                                    </td>
								</tr>
                                <tr valign="top">
									<td class="label">
										<label for="comments">
											For Author
                                        </label>
									</td>
									<td class="value">
                                        <textarea id="comments" name="authorComments" rows="10" cols="50" class="textArea"></textarea>
                                    </td>
								</tr>
							</table>

							<p>
								<input type="submit" name="save" value="Save" class="button defaultButton" />
								<input type="button" value="Close" class="button" onclick="window.close()" />
							</p>

							<p><span class="formRequired">* Denotes required field</span></p>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
</body>

</html>
