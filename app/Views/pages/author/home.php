<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<form action="<?= base_url(); ?>/author/sessions" method="post">

  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Active Submissions</h2>
        <div class="btn btn-group btn-group-toggle d-flex justify-content-cente" data-toggle="buttons">
          <label class="btn btn-secondary active">
            <input type="radio" name="options" value="option1" autocomplete="off">
            <a href="<?= base_url(); ?>/author">Active</a>
          </label>
          <label class="btn btn-secondary">
            <input type="radio" name="options" value="option2" autocomplete="off">
            <a href="<?= base_url(); ?>/author/archives">Archives</a>
          </label>
        </div>

</form>


<div class="container shape-container align-items-center py-lg">
  <div class="col px-0">
    <div class="row align-items-center justify-content-cente">


      <table class="table">

        <tr class="heading" valign="bottom">
          <td><a href="<?= base_url(); ?>/author/index?sort=id&amp;sortDirection=1">ID</a></td>
          <td><span class="disabled">MM-DD</span><br /><a href="<?= base_url(); ?>/author/index?sort=submitDate&amp;sortDirection=1">Submit</a></td>
          <td><a href="<?= base_url(); ?>/author/index?sort=section&amp;sortDirection=1">Sec</a></td>
          <td><a href="<?= base_url(); ?>/author/index?sort=authors&amp;sortDirection=1">Authors</a></td>
          <td><a href="<?= base_url(); ?>/author/index?sort=title&amp;sortDirection=2" style="font-weight:bold">Title</a></td>
          <td align="right"><a href="<?= base_url(); ?>/author/index?sort=status&amp;sortDirection=1">Status</a></td>
        </tr>

        <?php if (isset($articles) && $articles != NULL) : ?>
          <?php foreach ($articles as $article) : ?>
            <tr valign="top">
              <td><?= $article['article_id']; ?></td>
              <td><?= $article['date_created']; ?></td>
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
                <?php if ($article['status'] == "Incomplete") : ?>
                  <a href="<?= base_url(); ?>/author/submit/<?= $article['progress'] . '/' . $article['article_id']; ?>" class="action"><?= (isset($article['title'])) ? $article['title'] : 'No Title' ?></a>
                <?php else : ?>
                  <a href="<?= base_url(); ?>/author/submission/<?= $article['article_id']; ?>" class="action"><?= (isset($article['title'])) ? $article['title'] : 'No Title' ?></a>
                <?php endif; ?>
              </td>
              <?php if ($article['status'] == "Incomplete") : ?>
                <td align="right">
                  <?= $article['status'] ?><br />
                  <a href="<?= base_url(); ?>/author/deleteSubmission/<?= $article['article_id']; ?>" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a>
                </td>
              <?php elseif ($article['status'] == "Waiting Assignment") : ?>
                <td align="right"><?= $article['status'] ?></td>
              <?php elseif ($article['status'] == "In Review") : ?>
                <td align="right"><a href="<?= base_url(); ?>/author/submissionReview/<?= $article['article_id']; ?>" class="action"><?= $article['status'] ?></a></td>
              <?php elseif ($article['status'] == "In Editing") : ?>
                <td align="right"><a href="<?= base_url(); ?>/author/submissionEditing/<?= $article['article_id']; ?>" class="action"><?= $article['status'] ?></a></td>
              <?php else : ?>
                <td align="right"><a href="<?= base_url(); ?>/author/submissionReview/<?= $article['article_id']; ?>" class="action"><?= $article['status'] ?></a></td>
              <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td colspan="6" class="endseparator">&nbsp;</td>
          </tr>
        <?php else : ?>
          <tr valign="top">
            <td colspan="6">No Submission.</td>
          </tr>
          <tr>
            <td colspan="6" class="endseparator">&nbsp;</td>
          </tr>
        <?php endif; ?>
      </table>
      <div class="new_submission">
        <a href="<?= base_url(); ?>/author/submit" class="btn btn-primary">New Submission</a>
        <a>Click here to go to step one of the five-step submission process.</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>
<?= $this->endSection(); ?>