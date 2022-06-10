<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- End Navbar -->
<div class="wrapper">
  <div class="section section-hero section-shaped">
    <div class="page-header">
      <h2 class="text-center">#<?= $article['article_id']; ?> REVIEW</h2>
      <div class="container align-items-left ">
        <div class="col px-0 mt-6">
          <div id="content" class="justify-content-left mb-3">
            <tbody>
              <tr>
                <a class="mr-3" href="<?= base_url(); ?>/editor/submissions/<?= $article['article_id']; ?>">SUMMARY</a>
              </tr>
              <tr>
                <a class="mr-3" href="<?= base_url(); ?>/editor/submissionReview/<?= $article['article_id']; ?>">REVIEW</a>
              </tr>
              <tr>
                <a class="mr-3" href="<?= base_url(); ?>/editor/submissionEditing/<?= $article['article_id']; ?>">EDITING</a>
              </tr>
              <tr>
                <a class="mr-3" href="<?= base_url(); ?>/editor/submissionHistory/<?= $article['article_id']; ?>">HISTORY</a>
              </tr>
              <tr>
                <a class="mr-3" href="<?= base_url(); ?>/editor/submissionCitations/<?= $article['article_id']; ?>">REFERENCES</a>
              </tr>
            </tbody>
          </div>
          <!-- content -->
        </div>
        <hr>
        <div class="col px-0">
          <div id="submission">
            <h3>Submission</h3>
            <table width="100%" class="data">
              <tr>
                <td width="20%" class="label">Authors</td>
                <td width="80%">
                  <?= $article['first_name']; ?>
                </td>
              </tr>
              <tr>
                <td class="label">Title</td>
                <td>
                  <?= $article['title']; ?>
                </td>
              </tr>
              <tr>
                <td class="label">Section</td>
                <td>Articles</td>
              </tr>
              <tr>
                <td class="label">Editor</td>
                <td>
                  <?php if (isset($assign_editor)) : ?>
                    <?= $assign_editor['username']; ?>
                  <?php else : ?>
                    None assigned
                  <?php endif; ?>
                </td>
              </tr>
              <tr valign="top">
                <td class="label" width="20%">Review Version</td>
                <td width="80%" class="value">
                  <a href="" class="file">
                    <?php if (isset($review_version)) : ?>
                      <a href="<?= base_url(); ?>/editor/downloadFile/<?= $review_version["file_id"]; ?>">
                        <?= $review_version['file_name']; ?>
                      </a>
                    <?php else : ?>
                      None
                    <?php endif; ?>
                </td>
              </tr>
              <tr valign="top">
                <td>&nbsp;</td>
                <td>
                  <form method="post" action="<?= base_url(); ?>/editor/uploadReviewVersion" enctype="multipart/form-data"> Upload a revised Review Version <input type="hidden" name="articleId" value="12536" />
                    <input type="hidden" name="article_id" value="<?= $article['article_id']; ?>" />
                    <div class="input-group mb-3">
                      <div class="input-group-prepend mb-1">
                        <input name="uploadSubmissionFile" type="submit" class="button" value="Upload" />
                        <!-- <span class="input-group-text bg-primary">Upload</span> -->
                      </div>
                      <div class="custom-file  ">
                        <input type="file" class="custom-file-input  mt-1 mb-1" id="inputGroupFile01" name="file_name">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                  </form>
                </td>
              </tr>
              <tr valign="top">
                <td class="label">Supp. files</td>
                <td class="nodata">
                  <?php if (isset($supplementary_files)) : ?>
                    <a href="<?= base_url(); ?>/editor/downloadFile/<?= $supplementary_files['article_supplementary_file_id']; ?>">
                      <?= $supplementary_files['file_name']; ?>
                    </a>
                  <?php else : ?>
                    None
                  <?php endif; ?>
                </td>
              </tr>
            </table>
            <div class="separator"></div>
          </div>
        </div>
        <hr>
        <div class="col px-0">
          <div id="peerReview">
            <table class="data" width="100%">
              <tr id="reviewersHeader" valign="middle">
                <td width="22%">
                  <h3>PeerReview</h3>
                </td>
                <td width="14%">
                  <h4>Round&nbsp;1</h4>
                </td>
                <td width="64%" class="nowrap">
                  <a href="<?= base_url(); ?>/editor/selectReviewer/<?= $article['article_id']; ?>" class="action">Select Reviewer</a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?= base_url(); ?>/editor/submissionRegrets/<?= $article['article_id']; ?>" class="action">View Regrets, Cancels, Previous Rounds</a>
                </td>
              </tr>
            </table>

            <div class="separator"></div>

            <?php if (isset($assign_reviewer)) : ?>
              <table class="data" width="100%">
                <tr class="reviewer">
                  <td class="r1" width="20%">
                    <h4>Reviewer A</h4>
                  </td>
                  <td class="r2" width="34%">
                    <h4>
                      <?= $assign_reviewer['username']; ?>
                    </h4>
                  </td>
                  <td class="r3" width="46%">
                    <a href="<?= base_url(); ?>/editor/clearReview/<?= $article['article_id']; ?>/<?= $assign_reviewer['user_id']; ?>">Clear Reviewer</a>
                  </td>
                </tr>
              </table>
              <table width="100%" class="data">
                <tr valign="top">
                  <td class="label">Review Form</td>
                  <td> None / Free Form Review &nbsp;&nbsp;&nbsp;&nbsp; <a class="action" href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewForm/12536/4596">Select Review Form</a>
                  </td>
                </tr>
                <tr valign="top">
                  <td class="label" width="20%">&nbsp;</td>
                  <td width="80%">
                    <table width="100%" class="info">
                      <tr>
                        <td class="heading" width="25%">Request</td>
                        <td class="heading" width="25%">Underway</td>
                        <td class="heading" width="25%">Due</td>
                        <td class="heading" width="25%">Acknowledge</td>
                      </tr>
                      <tr valign="top">
                        <td>
                          <?php if (isset($assign_reviewer['date_assign_reviewer'])) : ?>
                            <?= $assign_reviewer['date_assign_reviewer']; ?>
                          <?php else : ?>
                            <?php if (isset($review_version)) : ?>
                              <form action="<?= base_url(); ?>/editor/notifyReviewer/<?= $assign_reviewer['user_id']; ?>/<?= $article['article_id']; ?>" method="post">
                                <button>ok</button>
                              </form>
                            <?php else : ?>
                              <button disabled="disabled">ok</button>
                            <?php endif; ?>
                          <?php endif; ?>
                        </td>
                        <td>
                          <?php if (isset($assign_reviewer['date_assign_reviewer'])) : ?>
                            <?= $assign_reviewer['date_assign_reviewer']; ?>
                          <?php else : ?>
                            --
                          <?php endif; ?>
                        </td>
                        <td>
                          <a href="https://iptek.its.ac.id/index.php/itj/editor/setDueDate/12536/4596">DUE DI ISI?</a>
                        </td>
                        <td>
                          <?php if (isset($review_version)) : ?>
                            <button>ok</button>
                          <?php else : ?>
                            <!-- <button disabled="disabled">ok</button> -->
                            <img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail_disabled.gif" width="16" height="14" alt="Mail" />
                          <?php endif; ?>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <?php if (isset($request_reviewer)) : ?>
                  <tr valign="top">
                    <td class="label">Recommendation</td>
                    <td>
                      <?php if (isset($recommendation)) : ?>
                        <!-- INI HARUSNYA DIISI RECOMMENDATION -->
                      <?php else : ?>
                        None
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Review</td>
                    <td>
                      <?php if (isset($comment_from_reviewer)) : ?>
                        <?= $comment_from_reviewer; ?>
                      <?php else : ?>
                        No Comments
                      <?php endif; ?>
                      <!-- <button class="btn btn-sm btn-primary" type="button">OK</button>No Comments -->
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Uploaded files</td>
                    <td>
                      <table width="100%" class="data">
                        <tr valign="top">
                          <td>
                            <?php if (isset($reviewer_version)) : ?>
                              <?= $reviewer_version['file_name']; ?>
                            <?php else : ?>
                              None
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php else : ?>
                        <tr>
                          <td></td>
                          <td colspan="4">Request email cannot be sent until a Review Version is in place. </td>
                        </tr>
                      <?php endif; ?>
                      </table>
                    </td>
                  </tr>
                  <!-- <tr valign="top">
                    <td class="label">Editor To Enter</td>
                    <td>
                      <form method="post" action="" enctype="multipart/form-data"> Upload review <input type="hidden" name="articleId" value="12536" />
                        <input type="hidden" name="reviewId" value="4596" />
                        <div class="input-group mb-3">
                          <div class="input-group-prepend mb-1">
                            <span class="input-group-text bg-primary">Upload</span>
                          </div>
                          <div class="custom-file  ">
                            <input type="file" class="custom-file-input  mt-1 mb-1" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </form>
                    </td>
                  </tr> -->
              </table>
            <?php else : ?>
            <?php endif; ?>


          </div>
        </div>
        <hr>
        <div class="col px-0">
          <div id="editorDecision">
            <h3>Editor Decision</h3>
            <table id="table1" width="100%" class="data">
              <tr valign="top">
                <td class="label" width="20%">Select decision</td>
                <td width="80%" class="value">
                  <form method="post" action="<?= base_url(); ?>/editor/recordDecision">
                    <?php if (isset($review_version)) : ?>
                      <input type="hidden" name="article_id" value="<?= $article['article_id']; ?>" />
                      <select name="decision" size="1" class="selectMenu">
                        <option label="Choose One" value="">Choose One</option>
                        <option label="Accept Submission" value="1">Accept Submission</option>
                        <option label="Revisions Required" value="2">Revisions Required</option>
                        <option label="Resubmit for Review" value="3">Resubmit for Review</option>
                        <option label="Decline Submission" value="4">Decline Submission</option>
                      </select>
                      <input type="submit" onclick="return confirm('Are you sure you wish to record this decision?')" name="submit" value="Record Decision" class="button" />
                    <?php else : ?>
                      <input type="hidden" name="article_id" value="<?= $article['article_id']; ?>" />
                      <select name="decision" size="1" class="selectMenu" disabled="disabled">
                        <option label="Choose One" value="">Choose One</option>
                        <option label="Accept Submission" value="1">Accept Submission</option>
                        <option label="Revisions Required" value="2">Revisions Required</option>
                        <option label="Resubmit for Review" value="3">Resubmit for Review</option>
                        <option label="Decline Submission" value="4">Decline Submission</option>
                      </select>
                      <input type="submit" onclick="return confirm('Are you sure you wish to record this decision?')" name="submit" value="Record Decision" disabled="disabled" class="button" />
                    <?php endif; ?>
                    <!-- &nbsp;&nbsp;Section editor not yet recorded or no review file present. -->
                  </form>
                </td>
              </tr>
              <tr valign="top">
                <td class="label">Decision</td>
                <td class="value">
                  <?php if (isset($decision_editor)) : ?>
                    <?php foreach ($decision_editor as $decision) : ?>
                      <?= $decision['decision'] . "    " . $decision['date_recorded'] . "  |  "; ?>
                    <?php endforeach; ?>
                  <?php else : ?>
                    None
                  <?php endif; ?>
                </td>
              </tr>

              <!-- FORM UNTUK SEND TO COPYEDITING -->
              <form method="post" action="<?= base_url(); ?>/editor/editorReview" enctype="multipart/form-data">
                <input type="hidden" name="article_id" value="<?= $article['article_id']; ?>">
                <!-- FORM UNTUK SEND TO COPYEDITING -->

                <tr valign="top">
                  <td class="label">Notify Author</td>
                  <td class="value">
                    <a href="<?= base_url(); ?>/editor/emailEditorDecisionComment/<?= $article['article_id']; ?>">
                      <button class="btn btn-sm btn-primary" type="button">OK</button>
                    </a> &nbsp;&nbsp;&nbsp;&nbsp; Editor/Author Email Record
                    <!-- <a href="javascript:openComments('https://iptek.its.ac.id/index.php/itj/editor/viewEditorDecisionComments/12536#6056');" class="icon">
                        <img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" />
                      </a>&nbsp;&nbsp;2022-05-29 -->
                    <a onclick="window.open('<?= base_url(); ?>/editor/viewEditorDecisionComments/<?= $article['article_id']; ?>', 'popup', 'width=800, height=600')" href="#" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" /></a>
                    <?php if (isset($editorToAuthor)) : ?>
                      Comments
                    <?php else : ?>
                      No Comments
                    <?php endif; ?>
                  </td>
                </tr>
            </table>
            <!-- <form method="post" action="https://iptek.its.ac.id/index.php/itj/editor/editorReview" enctype="multipart/form-data"> -->
            <input type="hidden" name="articleId" value="12536" />
            <table id="table2" class="data" width="100%">
              <tr valign="top">
                <td width="20%">&nbsp;</td>
                <td width="80%">
                  <?php if (isset($decision_editor)) : ?>
                    <?php if (isset($review_version)) : ?>
                      <?php if (isset($notified)) : ?>
                        <br>
                        <input type="submit" name="setCopyeditFile" value="Send to Copyediting" class="button" />
                      <?php else : ?>
                        <br>
                        <button disabled="disabled">Send to Copyediting</button>
                      <?php endif; ?>
                    <?php else : ?>
                      <button disabled="disabled">Send to Copyediting</button>
                      <p>Before sending a submission to Copyediting, use Notify Author link to inform author of decision and select the version to be sent.</p>
                    <?php endif; ?>
                  <?php else : ?>
                  <?php endif; ?>
                </td>
              </tr>
              <tr valign="top">
                <td width="20%" class="label">Review Version</td>
                <td width="50%" class="value">
                  <?php if (isset($review_version)) : ?>
                    <?php if (isset($notified)) : ?>
                      <input type="radio" name="editorDecisionFile" value="<?= $review_version['article_revision_file_id']; ?>">
                      <a href="/editor/downloadFile/<?= $review_version['file_id'] ?>">
                        <?= $review_version['file_name']; ?>
                      </a>
                    <?php else : ?>
                      <a href="/editor/downloadFile/<?= $review_version['file_id'] ?>">
                        <?= $review_version['file_name']; ?>
                      </a>
                    <?php endif; ?>
                  <?php else : ?>
                    None
                  <?php endif; ?>
                </td>
              </tr>
              <tr valign="top">
                <td width="20%" class="label">Author Version</td>
                <td width="80%" class="nodata">
                  <?php if (isset($author_version)) : ?>
                    <?php if (isset($notified)) : ?>
                      <input type="radio" name="editorDecisionFile" value="<?= $author_version['article_revision_file_id']; ?>">
                      <a href="/editor/downloadFile/<?= $author_version['file_id'] ?>">
                        <?= $author_version['file_name']; ?>
                      </a>
                    <?php else : ?>
                      <a href="/editor/downloadFile/<?= $author_version['file_id'] ?>">
                        <?= $author_version['file_name']; ?>
                      </a>
                    <?php endif; ?>
                  <?php else : ?>
                    None
                  <?php endif; ?>
                </td>
              </tr>
              <tr valign="top">
                <td width="20%" class="label">Editor Version</td>
                <td width="80%" class="nodata">
                  <?php if (isset($editor_version)) : ?>
                    <?php if (isset($notified)) : ?>
                      <input type="radio" name="editorDecisionFile" value="<?= $editor_version['article_revision_file_id']; ?>">
                      <a href="/editor/downloadFile/<?= $editor_version['file_id'] ?>">
                        <?= $editor_version['file_name']; ?>
                      </a>
                    <?php else : ?>
                      <a href="/editor/downloadFile/<?= $editor_version['file_id'] ?>">
                        <?= $editor_version['file_name']; ?>
                      </a>
                    <?php endif; ?>
                  <?php else : ?>
                    None
                  <?php endif; ?>
                </td>
              </tr>
              <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <?php echo session()->getFlashdata('error'); ?>
              <?php endif; ?>
              <tr valign="top">
                <td class="label">&nbsp;</td>
                <form action="<?= base_url(); ?>/editor/uploadEditorVersion" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="article_id" value="<?= $article['article_id']; ?>">
                  <td class="value">
                    <input type="file" name="file_name" class="uploadField" />
                    <input type="submit" name="upload" value="Upload" class="button" />
                  </td>
                </form>
              </tr>
            </table>
            </form>
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