<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Step 2. Uploading the Submission</h2>
        <hr>

        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center d-flex justify-content-cente">



               <form method="post" action="<?= base_url(); ?>/author/saveSubmit/2<?= '/' . $article['article_id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="articleId" value="12536" />
                  <div id="uploadInstructions">
                     <p>To upload a manuscript to this journal, complete the following steps.</p>
                     <ol>
                        <li>On this page, click Browse (or Choose File) which opens a Choose File window for locating the file on the hard drive of your computer.</li>
                        <li>Locate the file you wish to submit and highlight it.</li>
                        <li>Click Open on the Choose File window, which places the name of the file on this page.</li>
                        <li>Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</li>
                        <li>Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>
                     </ol>
                  </div>
                  <p>Encountering difficulties? Contact <a href="mailto:"></a> for assistance.</p>
                  <div class="separator"></div>
                  <?php if(isset($fileinfo)): ?>
                  <!-- Ketika sudah upload -->
                  <div id="submissionFile">
                     <h3>Submission File</h3>
                     <table>
                        <tr>
                          <td>Nama File : </td>
                          <td><a href="<?= base_url('') . '/donwload/author/' . $article['article_id']; ?>"><?= $fileinfo['file_name']; ?></a></td>
                        </tr>
                        <tr>
                          <td>Nama Asli : </td>
                          <td><?= $fileinfo['original_file_name']; ?></td>
                        </tr>
                        <tr>
                          <td>Ukuran : </td>
                          <td><?= $fileinfo['file_size'] ?></td>
                        </tr>
                        <tr>
                          <td>Date Uploaded :</td>
                          <td><?= $fileinfo['date_uploaded'] ?></td>
                        </tr>
                      </table>
                  </div>
                  <!-- Ketika sudah upload -->
                  <div id="addSubmissionFile">
                     <table class="data" width="100%">
                        <tr>
                           <td width="30%" class="label">
                              <label for="submissionFile" >Replace submission file</label>
                           </td>
                           <td width="70%" class="value">
                              <input type="file" class="uploadField" name="submissionFile" id="submissionFile" /> <input name="uploadSubmissionFile" type="submit" class="button" value="Upload" />
                           </td>
                        </tr>
                     </table>
                  </div>
                  <?php else: ?>
                  <div id="submissionFile">
                  <h3>Submission File</h3>
                  <table class="data" width="100%">
                  <tr valign="top">
                     <td colspan="2" class="nodata">No submission file uploaded.</td>
                  </tr>
                  </table>
                  </div>
                  <div class="separator"></div>
                  <div id="addSubmissionFile">
                  <table class="data" width="100%">
                  <tr>
                     <td width="30%" class="label">
                                 
                  <label for="submissionFile" >
                     Upload submission file </label>

                           </td>
                     <td width="70%" class="value">
                        <input type="file" class="uploadField" name="submissionFile" id="submissionFile" /> <input name="uploadSubmissionFile" type="submit" class="button" value="Upload" />
                           </td>

                           
                  </tr>
                  </table>
                  </div>
                  <?php endif; ?>
                  <div class="separator"></div>
                  </form>
                  <p><input type="submit" value="Save and continue" class="btn btn-primary btn-sm mr-3" onclick="window.location.href='<?= base_url('/author/submit/3/' . $article['article_id']); ?>'" /> <input type="button" value="Cancel" class="btn btn-primary btn-sm mr-3" onclick="if (confirm('You can complete this submission at a later date by selecting Active Submissions from the Author home.')) window.location.href='<?= base_url('/author'); ?>';" /></p>
               
            
                  </div>
          </div>
        </div>
      </div>
            <?php
               if(isset($_GET['error'])) {
                  echo "
                  <script>alert('We only received PDF File!');</script>
                  ";
               }
            ?>
<?= $this->endSection(); ?>