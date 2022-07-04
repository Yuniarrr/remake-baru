<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="page-header">
            <h2 class="text-center">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</h2>
            <div class="container align-items-left ">
                <div class="col px-0 mt-6">
                    <div id="content" class="justify-content-left mb-2">
                        <tbody>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">CREATE ISSUE</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInReview">FUTURE ISSUES</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">BACK ISSUES</a></tr>
                        </tbody>
                    </div><!-- content -->
                    <div id="content" class="justify-content-left mb-3">
                        <form method="post" action="<?= base_url(); ?>/editor/updateIssueToc/<?= $issue_id; ?>" onsubmit="return confirm('Save changes to table of contents?')">


                            <h4>Articles&uarr; &darr;</h4>

                            <table width="100%" class="table" id="issueToc-84">

                                <tr class="heading" valign="bottom">
                                    <td width="5%">&nbsp;</td>
                                    <td width="15%">Authors</td>
                                    <td>Title</td>
                                </tr>


                                <?php if (isset($schedule_publications)) : ?>
                                    <?php foreach ($schedule_publications as $schedule_publication) : ?>
                                        <tr id="article-5700" class="data">
                                            <td><a href="<?= base_url(); ?>/editor/moveArticleToc?d=u&amp;id=5700" class="plain">&uarr;</a>&nbsp;<a href="<?= base_url(); ?>/editor/moveArticleToc?d=d&amp;id=5700" class="plain">&darr;</a></td>
                                            <td>
                                                <?php for ($i = 0; $i < count($authors[$schedule_publication['article_id']]); $i++) :  ?>
                                                    <?php if (count($authors[$schedule_publication['article_id']]) == 1) : ?>
                                                        <?= $authors[$schedule_publication['article_id']][$i]['first_name']; ?>
                                                    <?php elseif ($i < count($authors[$schedule_publication['article_id']]) - 1) : ?>
                                                        <?= $authors[$schedule_publication['article_id']][$i]['first_name'] . ', '; ?>
                                                    <?php elseif ($i == count($authors[$schedule_publication['article_id']]) - 1) : ?>
                                                        <?= $authors[$schedule_publication['article_id']][$i]['first_name']; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </td>
                                            <td class="drag"><a href="<?= base_url(); ?>/editor/submissions/<?= $schedule_publication['article_id']; ?>" class="action"><?= $articles[$schedule_publication['article_id']]['title']; ?></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6">No articles in this issue</td>
                                    </tr>
                                <?php endif; ?>
                            </table>

                            <input type="submit" value="Save" class="btn-sm btn-primary" />
                            <?php if (isset($havePublish)) : ?>
                                <input type="submit" value="Unpublish Issue" onclick="confirmAction('<?= base_url(); ?>/editor/publishIssue/790', 'Are you sure you want to publish the new issue?')" class="btn-sm btn-primary" />
                            <?php else : ?>
                                <input type="submit" value="Publish Issue" onclick="confirmAction('<?= base_url(); ?>/editor/publishIssue/790', 'Are you sure you want to publish the new issue?')" class="btn-sm btn-primary" />
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <?= $this->endSection(); ?>