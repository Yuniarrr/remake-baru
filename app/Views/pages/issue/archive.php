<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="page-header">
            <h2 class="text-center">Archives</h2>
            <hr>
            <div class="container align-items-left ">
                <div class="col px-0 mt-6">
                    <div id="content" class="justify-content-left mb-3">
                        <div id="issues">
                            <div style="float: left; width: 100%;">
                                <h3 >2022</h3>

                                <?php if (isset($issues)) : ?>
                                    <?php foreach ($issues as $issue) : ?>
                                        <div id="issue" style="clear:left;">
                                            <h4><a href="<?= base_url(); ?>/issue/view/<?= $issue['issue_id']; ?>">Vol <?= $issue['volume']; ?>, No <?= $issue['number']; ?> (<?= $issue['year']; ?>)</a></h4>
                                            <div class="issueDescription"></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>

                                <br />
                            </div>
                            1 - 2 of 2 Items&nbsp;&nbsp;&nbsp;&nbsp;

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <?= $this->endSection(); ?>