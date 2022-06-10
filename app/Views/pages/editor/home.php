<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
  <div class="section section-hero section-shaped">
    <div class="page-header">
      <h2 class="text-center">EDITOR HOME </h2>
      <hr>

      <div class="container shape-container d-flex align-items-center py-lg">
        <div class="col px-0">

          <div class="row align-items-center justify-content-left">

            <div class="col-sm">
              <div id="articleSubmissions">
                <h3>Submissions</h3>

                <ul class="plain">
                  <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">Unassigned</a> (<?= $submissionUnAssigned; ?>)</li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsInReview">In Review</a> (<?= $submissionInReview; ?>)</li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">In Editing</a> (<?= $submissionInEditing; ?>)</li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsArchives">Archives</a></li>

                </ul>
              </div>
            </div>
            <div class="col-sm">
              <div id="issues">
                <h3>Issues</h3>

                <ul class="plain">
                  <li>&#187; <a href="<?= base_url(); ?>/editor/createIssue">Create Issue</a></li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/notifyUsers">Notify Users</a></li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/futureIssues">Future Issues</a></li>
                  <li>&#187; <a href="<?= base_url(); ?>/editor/backIssues">Back Issues</a></li>

                </ul>
              </div>
            </div>
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