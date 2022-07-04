

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
                        <div id="content">

                            <div id="topBar">
                            </div>

                            <div id="articleTitle">
                                <h3><?= $article['title']; ?></h3>
                            </div>
                            <div id="authorString">
                                <em>
                                    <?php for ($index = 0; $index < count($authors); $index++) : ?>
                                        <?= $authors[$index]['first_name'] . ' ' . $authors[$index]['last_name']; ?>
                                        <?php if ($index < count($authors) - 2) : ?>
                                            ,
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </em>
                            </div>
                            <br />
                            <div id="articleAbstract">
                                <h4>Abstract</h4>
                                <br />
                                <div><?= $article['abstract']; ?></div>
                                <br />
                            </div>

                            <div id="articleSubject">
                                <h4>Keywords</h4>
                                <br />
                                <div><?= $article['keyword']; ?></div>
                                <br />
                            </div>


                            <div id="articleFullText">
                                <h4>Full Text:</h4>
                                <?php if (isset($file)) : ?>
                                    <a href="<?= base_url(); ?>/downloadFile/<?= $file['file_id']; ?>" class="file" target="_parent">PDF</a>
                                <?php endif; ?>
                            </div>

                            <div id="articleCitations">
                                <h4>References</h4>
                                <br />
                                <div>
                                    <p><?= $article['reference']; ?></p>
                                </div>
                                <br />
                            </div>

                        </div><!-- content -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?= $this->endSection(); ?>
