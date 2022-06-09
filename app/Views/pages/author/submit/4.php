<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Step 4. Uploading Supplementary Files</h2>
        <hr>


        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center d-flex justify-content-center">

   <form id="submitForm" method="post" action="<?= base_url(); ?>/author/saveSubmit/4/<?= $article['article_id']; ?>" enctype="multipart/form-data">
      <input type="hidden" name="articleId" value="12536" />
      <p>This optional step allows Supplementary Files to be added to a submission. The files, which can be in any format, might include (a) research instruments, (b) data sets, which comply with the terms of the study's research ethics review, (c) sources that otherwise would be unavailable to readers, (d) figures and tables that cannot be integrated into the text itself, or other materials that add to the contribution of the work.</p>
      <table class="table" >
         
         <tr class="heading" valign="bottom">
            <td >ID</td>
            <td >File Name</td>
            <td >Original file name</td>
            <td  class="nowrap">Date uploaded</td>
            <td  align="right">Action</td>
         </tr>
         
         <?php if (isset($filesinfo)) : ?>
            <?php foreach ($filesinfo as $fileinfo) : ?>
               <tr valign="top">
                  <td><?= $fileinfo['article_supplementary_file_id']; ?></td>
                  <td><?= $fileinfo['file_name']; ?></td>
                  <td><?= $fileinfo['original_file_name']; ?></td>
                  <td><?= $fileinfo['date_uploaded']; ?></td>
                  <td align="right"><a href="<?= base_url(); ?>/download/file/<?= $fileinfo['file_id']; ?>" class="action">Edit</a>&nbsp;|&nbsp;<a href="https://iptek.its.ac.id/index.php/itj/author/deleteSubmitSuppFile/1981?articleId=12541" onclick="return confirm('Are you sure you want to delete this supplementary file?')" class="action">Delete</a></td>
               </tr>
            <?php endforeach; ?>
         <?php else : ?>
            <tr valign="top">
               <td colspan="6" class="nodata">No supplementary files have been added to this submission.</td>
            </tr>
         <?php endif; ?>
      </table>
      <div class="separator"></div>
      <table class="data" width="100%">
         <tr>
            <td width="30%" class="label">
               <label for="uploadSuppFile">
                  Upload supplementary file </label>
            </td>
            <td width="70%" class="value">
               <input type="file" name="uploadSuppFile" id="uploadSuppFile" class="uploadField" /> <input name="submitUploadSuppFile" type="submit" class="button" value="Upload" />
            </td>
         </tr>
      </table>
      <div class="separator"></div>
      <p>
         <input type="submit" value="Save" class="btn btn-primary btn-sm mr-3" />
         <input type="button" value="Continue" class="btn btn-primary btn-sm mr-3" onclick="window.location.href='<?= base_url('/author/submit/5/' . $article['article_id']); ?>'">
         <input type="button" value="Cancel" class="btn btn-primary btn-sm mr-3" onclick="confirmAction('/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" />
      </p>
   </form>
   </div>
        </div>
      </div>

    </div>

<?= $this->endSection(); ?>