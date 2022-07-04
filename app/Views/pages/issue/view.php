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
                        <div id="issueDescription"></div>
                        <h3 class="mb-4">Table of Contents</h3>

                        <h4 class="tocSectionTitle">Articles</h4>
                        <?php if (isset($articles)) : ?>
                            <?php foreach ($articles as $article) : ?>
                                <table class="table table-borderless" width="100%">
                                    <tr valign="top">
                                        <td class="tocTitle">
                                            <a href="<?= base_url(); ?>/article/view/<?= $article['article_id']; ?>"><?= $article['title']; ?></a>
                                        </td>
                                        <td class="tocGalleys">
                                            <a href="<?= base_url(); ?>/article/view/12892/6732" class="file float-right">PDF</a>
                                        </td>   
                                    </tr>
                                    <?php foreach ($authors[$article['article_id']] as $author) : ?>
                                        <tr>
                                            <td>
                                                <?= $author['first_name']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?= $this->endSection(); ?>