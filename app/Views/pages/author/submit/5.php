<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Step 5. Confirming the Submission</h2>
        <hr>


        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center d-flex justify-content-cente">


               <p>To submit your manuscript to Information Technology Journal click Finish Submission. The submission's principal contact will receive an acknowledgement by email and will be able to view the submission's progress through the editorial process by logging in to the journal web site. Thank you for your interest in publishing with Information Technology Journal.</p>
               <form method="post" action="<?= base_url(); ?>/author/saveSubmit/5/<?= $article['article_id']; ?>">
                  <input type="hidden" name="articleId" value="12536" />
                  <h3>File Summary</h3>
                  <table class="table" width="100%">
                  
                  <tr class="heading" valign="bottom">
                     <td >ID</td>
                     <td >Original file name</td>
                     <td >Type</td>
                     <td  class="nowrap">File Size</td>
                     <td  class="nowrap">Date uploaded</td>
                  </tr>
                  
                  <?php if(isset($main_file)) : ?>
                     <tr valign="top">
                        <td><?= $main_file['article_submission_file_id']; ?></td>
                        <td><a class="file" href=""><?= $main_file['file_name']; ?></a></td>
                        <td>Submission Main File</td>
                        <td><?= $main_file['file_size']; ?>KB</td>
                        <td><?= $main_file['date_uploaded']; ?></td>
                     </tr>
                  <?php endif; ?>

                  <?php if(isset($support_file)) : ?>
                     <?php foreach($support_file as $supplementary_file) ?>
                     <tr valign="top">
                        <td><?= $supplementary_file['article_supplementary_file_id']; ?></td>
                        <td><a class="file" href=""><?= $supplementary_file['file_name']; ?></a></td>
                        <td>Submission Supplementary File</td>
                        <td><?= $supplementary_file['file_size']; ?>KB</td>
                        <td><?= $supplementary_file['date_uploaded']; ?></td>
                     </tr>
                  <?php endif; ?>

                  <?php if(!isset($main_file) && !isset($support_file)) : ?>
                     <tr valign="top">
                        <td colspan="5" class="nodata">No files have been attached to this submission.</td>
                     </tr>
                  <?php endif; ?>
                  </table>
                  
                  <div class="separator"></div>
                  <p><input type="submit" value="Finish Submission" class="btn btn-primary btn-sm mr-3" /> <input type="button" value="Cancel" class="btn btn-primary btn-sm mr-3" onclick="confirmAction('/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" /></p>
               </form>
               </div>
        </div>
      </div>

    </div>

<?= $this->endSection(); ?>