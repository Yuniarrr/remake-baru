<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="page-header">
            <h2 class="text-center">Back Issues</h2>
            <hr>


            <div class="container shape-container d-flex align-items-center">
                <div class="col px-0">
                    <div id="content" class="justify-content-left">
                        <tbody>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/createIssue">CREATE ISSUE</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/futureIssues">FUTURE ISSUES</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/backIssues">BACK ISSUES</a></tr>
                        </tbody>
                    </div><!-- content -->
                    <div id="content" class="justify-content-left">


                        <br />

                        <table width="100%" class="table" id="dragTable">

                            <tr class="heading" valign="bottom">
                                <th scope="col">Issue</th>
                                <th scope="col">Published</th>
                                <th scope="col">Items</th>
                                <th scope="col">Action</th>
                            </tr>
                            <?php if (isset($issues) && $issues != NULL) : ?>
                                <?php foreach ($issues as $issue) : ?>
                                    <tr valign="top" class="data" id="<?= $issue['issue_id']; ?>">
                                        <td class="drag"><a href="<?= base_url(); ?>/editor/issueToc/787" class="action">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</a></td>
                                        <td class="drag"><?= $issue['date_created']; ?></td>
                                        <td class="drag">1</td>
                                        <td align="right"><a href="<?= base_url(); ?>/editor/removeIssue/<?= $issue['issue_id']; ?>" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5">No Issue Publish</td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td colspan="5" class="endseparator">&nbsp;</td>
                            </tr>
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