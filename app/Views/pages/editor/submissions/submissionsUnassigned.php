<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="page-header">
                <h2 class="text-center">UNASSIGNED </h2>
                <hr>


                <div class="container align-items-left ">
                    <div class="col px-0">
                        <div id="content" class="justify-content-left mb-3">
                            <tbody>
                                <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">UNASSIGNED</a></tr>
                                <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInReview">IN REVIEW</a></tr>
                                <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">IN EDITING</a></tr>
                                <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsArchives">ARCHIVES</a></tr>
                            </tbody>
                        </div><!-- content -->
                        <div class="row align-items-center justify-content-center">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-black">
                                        <th scope="col">id</th>
                                        <th scope="col">MM-DD ASSIGNED</th>
                                        <th scope="col">SEC</th>
                                        <th scope="col">AUTHOR</th>
                                        <th scope="col">TITLE</th>
                                    </tr>
                                    <?php foreach($article as $a) : ?>
		                                <tr>
		                                	<td><?= $a['article_id']; ?></td>
		                                	<td><?= $a['date_created']; ?></td>
		                                	<td></td>
		                                	<td><?= $a['first_name']; ?></td>
		                                	<td>
		                                		<a href="<?= base_url(); ?>/editor/submissions/<?= $a['article_id']; ?>"><?= $a['title']; ?></a>
		                                	</td>
		                                </tr>
	                                <?php endforeach; ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <?= $this->endSection(); ?>