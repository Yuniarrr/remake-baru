<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="page-header">
            <h2 class="text-center">EDITOR HOME </h2>
            <hr>


            <div class="container shape-container d-flex align-items-center">
                <div class="col px-0">
                    <div id="content" class="justify-content-left mb-4">
                        <tbody>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/createIssue">CREATE ISSUE</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/futureIssues">FUTURE ISSUES</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/backIssues">BACK ISSUES</a></tr>
                        </tbody>
                    </div><!-- content -->
                    <div id="content" class="justify-content-left">

                        <table class="table">

                            <tr class="heading" valign="bottom">
                                <th scope="col">ISSUE</th>
                                <th scope="col">ITEMS</th>
                                <th scope="col">ACTION</th>
                            </tr>

                            <?php if (isset($issues) && $issues != NULL) : ?>
                                <?php foreach ($issues as $issue) : ?>
                                    <tr valign="top">
                                        <td><a href="<?= base_url(); ?>/editor/issueToc/<?= $issue['issue_id']; ?>" class="action">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</a></td>
                                        <td><?= count($article[$issue['issue_id']]); ?></td>
                                        <td align="right"><a href="<?= base_url(); ?>/editor/removeIssue/<?= $issue['issue_id']; ?>" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5" class="endseparator">&nbsp;</td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td colspan="3">No Issue</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="endseparator">&nbsp;</td>
                                </tr>
                            <?php endif; ?>

                        </table>




                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <?= $this->endSection(); ?>