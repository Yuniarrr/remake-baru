<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="wrapper">
      <div class="section section-hero section-shaped">
        <div class="page-header">
          <h2 class="text-center">Select Reviewer</h2>
          <hr>
          <div class="container shape-container d-flex align-items-center ">
            <div class="col px-0">
              <div class="row align-items-center justify-content-center">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-black">
                      <th scope="col">Name</th>
                      <th scope="col">Action</th>
                    </tr>
                    <?php foreach($reviewer as $r) : ?>
                      <tr valign="top">
                        <td>
                          <?= $r['username']; ?>
                        </td>
                        <td>
                          <?php if(isset($assign_reviewer['reviewer_id'])) : ?>
                            Assigned
                          <?php else : ?>
                            <a href="../../editor/selectReviewer/<?= $article_id; ?>/<?= $r['user_id']; ?>">Assign</a>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </thead>
                </table>
              </div>
              <div class="note">
                <h5>Note</h5>
                <br>
                <p>Name links to reviewer's profile. Ratings is out of 5 (Excellent). Weeks refers to average period of time to complete a review. Latest is date of most recently accepted review. Active is how many reviews are currently being considered or underway.</p>
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