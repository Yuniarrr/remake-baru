<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="wrapper">
      <div class="section section-hero section-shaped">
        <div class="page-header">
          <h2 class="text-center">#<?= $article['article_id']; ?> REVIEW</h2>
          <div class="container align-items-left ">
            <div class="col px-0 mt-6">
            
              <!-- content -->
            </div>
            <hr>
            <div class="col px-0">
              <div id="submissionToBeReviewed">
                <h3>Submission To Be Reviewed</h3>
                <table width="100%" class="data">
                  <tr valign="top">
                    <td width="20%" class="label">Title</td>
                    <td width="80%" class="value">
                      <?= $article["title"]; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Journal Section</td>
                    <td class="value">Articles</td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Abstract</td>
                    <td class="value">
                      <?= $article["abstract"]; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Submission Editor</td>
                    <td class="value">
                      <?= $author["first_name"] . " " . $author["last_name"]; ?> <a href="https://iptek.its.ac.id/index.php/itj/user/email?to%5B%5D=Baru%20Nanto%20%3Cbarunanto%40ppi.its.ac.id%3E&amp;redirectUrl=http%3A%2F%2Fiptek.its.ac.id%2Findex.php%2Fitj%2Freviewer%2Fsubmission%2F4596&amp;subject=test&amp;articleId=12536" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
					            <br />
                    </td>
                  </tr>
                  <!-- <tr valign="top">
                    <td class="label">Submission Metadata</td>
                    <td class="value">
                      <a href="https://iptek.its.ac.id/index.php/itj/reviewer/viewMetadata/4592/12517" class="action" target="_new">View Metadata</a>
                    </td>
                  </tr> -->
                </table>
              </div>
              <div class="separator"></div>
              <div id="reviewSchedule">
                <h3>Review Schedule</h3>
                <table width="100%" class="data">
                  <tr valign="top">
                    <td class="label" width="20%">Editor's Request</td>
                    <td class="value" width="80%">
                      <?= $assignment["date_assign_editor"]; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Your Response</td>
                    <td class="value">
                      <?= isset($date_response) ? $date_response : '&mdash;'; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td class="label">Review Submitted</td>
                    <td class="value">
                      <?= isset($date_submit) ? $date_submit : '&mdash;'; ?>
                    </td>
                  </tr>
                  <!-- <tr valign="top">
                    <td class="label">Review Due</td>
                    <td class="value">2022-06-20</td>
                  </tr> -->
                </table>
                <div id="reviewSteps">
                  <h3>Review Steps</h3>
                  <table width="100%" class="data">
                    <tr valign="top">
                      <td width="3%">1.</td>
                      <td width="97%">
                        <span class="instruct">Notify the submission's editor as to whether you will undertake the review.</span>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td>&nbsp;</td>
                      <td>
                        Response&nbsp;&nbsp;&nbsp;&nbsp;

					              <?php if (isset($reviewer_response)) : ?>
					              	<?php if ($reviewer_response[0] == 0) : ?>
					              		Declined
					              	<?php elseif ($reviewer_response[0] == 1) : ?>
					              		Accepted
					              	<?php endif; ?>
					              <?php else : ?>
					              	Will do the review <a href="<?= base_url(); ?>/reviewer/confirmReview/accept/<?= $assignment["assignment_id"]; ?>" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
					              	&nbsp;&nbsp;&nbsp;&nbsp;
					              	Unable to do the review <a href="<?= base_url(); ?>/reviewer/confirmReview/decline/<?= $assignment["assignment_id"]; ?>" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
					              <?php endif; ?>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr valign="top">
                      <td>2.</td>
                      <td>
                        <span class="instruct">Click on file names to download and review (on screen or by printing) the files associated with this submission.</span>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td>&nbsp;</td>
                      <td>
                        <table width="100%" class="data">
                          <tr valign="top">
                            <td width="30%" class="label"> Submission Manuscript </td>
                            <td class="value" width="70%">
                              <?php if (isset($reviewer_response)) : ?>
								              	<?php if ($reviewer_response[0] == 1) : ?>
								              		<a href="" class="file"><?= $file["file_name"]; ?></a>
								              	<?php endif; ?>
								              <?php else : ?>
								              	None
								              <?php endif; ?>
                            </td>
                          </tr>
                          <tr valign="top">
                            <td class="label"> Supplementary File(s) </td>
                            <td class="value">
                              <?php if (isset($reviewer_response)) : ?>
								              	<?php if ($reviewer_response[0] == 1) : ?>
								              		<a href="" class="file"><?= $suppfile["file_name"]; ?></a>
								              	<?php endif; ?>
								              <?php else : ?>
								              	None
								              <?php endif; ?>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr valign="top">
                      <td>3.</td>
                      <td>
                        <span class="instruct">Click on icon to enter (or paste) your review of this submission.</span>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td>&nbsp;</td>
                      <td> Review <a href="#" onclick="window.open('<?= base_url(); ?>/reviewer/viewPeerReviewComments/<?= $article['article_id']; ?>', 'popup', 'width=800, height=600')" class="icon">
                          <img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/comment.gif" width="16" height="14" alt="Comment" />
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr valign="top">
                      <td>4.</td>
                      <td>
                        <span class="instruct">In addition, you can upload files for the editor and/or author to consult.</span>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td>&nbsp;</td>
                      <td>
                        <table class="data" width="100%">
                          <tr valign="top">
                            <td class="label" width="30%"> Uploaded files </td>
                            <td class="nodata">
                              <?php if (isset($fileinfo)) : ?>
								              	<a href="" class="file"><?= $fileinfo["file_name"] ?></a>
								              <?php else : ?>
								              	None
								              <?php endif; ?>
                            </td>
                          </tr>
                        </table>
                        <form method="post" action="<?= base_url(); ?>/reviewer/uploadReviewerVersion" enctype="multipart/form-data">
					              	<input type="hidden" name="reviewId" value="<?= $assignment["assignment_id"]; ?>" />
					              	<?php if (isset($reviewer_response)) : ?>
					              		<?php if ($reviewer_response[0] == 1) : ?>
					              			<input type="file" name="submissionRevisionFile" class="uploadField" />
					              			<input type="submit" name="submit" value="Upload" class="button" />
					              		<?php endif; ?>
					              	<?php else : ?>
					              		<input type="file" name="submissionRevisionFile" disabled="disabled" class="uploadField" />
					              		<input type="submit" name="submit" value="Upload" disabled="disabled" class="button" />
					              	<?php endif; ?>
					              </form>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr valign="top">
                      <td>5.</td>
                      <td>
                        <span class="instruct">Select a recommendation and submit the review to complete the process. You must enter a review or upload a file before selecting a recommendation.</span>
                      </td>
                    </tr>
                    <tr valign="top">
                      <td>&nbsp;</td>
                      <td>
                        <table class="data" width="100%">
                          <tr valign="top">
                            <td class="label" width="30%">Recommendation</td>
                            <td class="value" width="70%">
                              <form id="recommendation" method="post" action="<?= base_url(); ?>/reviewer/recordRecommendation">
                                <input type="hidden" name="reviewId" value="<?= $assignment["assignment_id"]; ?>" />
                                <?php if (isset($reviewer_recommendation)) : ?>
										              <?php
										              switch ($reviewer_recommendation) {
										              	case 1:
										              		echo "Accept Submission";
										              		break;
										              	case 2:
										              		echo "Revision Required";
										              		break;
										              	case 3:
										              		echo "Resubmit for Review";
										              		break;
										              	case 4:
										              		echo "Resubmit Elsewhere";
										              		break;
										              	case 5:
										              		echo "Decline Submission";
										              		break;
										              }
										              ?>
									                <?php elseif (isset($fileinfo)) : ?>
									                	<select name="recommendation" class="selectMenu">
									                		<option label="Choose One" value="" selected="selected">Choose One</option>
									                		<option label="Accept Submission" value="1">Accept Submission</option>
									                		<option label="Revisions Required" value="2">Revisions Required</option>
									                		<option label="Resubmit for Review" value="3">Resubmit for Review</option>
									                		<option label="Resubmit Elsewhere" value="4">Resubmit Elsewhere</option>
									                		<option label="Decline Submission" value="5">Decline Submission</option>
									                		<!-- <option label="See Comments" value="6">See Comments</option> -->

									                	</select>
									                <?php else : ?>
									                	<select name="recommendation" disabled="disabled" class="selectMenu">
									                		<option label="Choose One" value="" selected="selected">Choose One</option>
									                		<option label="Accept Submission" value="1">Accept Submission</option>
									                		<option label="Revisions Required" value="2">Revisions Required</option>
									                		<option label="Resubmit for Review" value="3">Resubmit for Review</option>
									                		<option label="Resubmit Elsewhere" value="4">Resubmit Elsewhere</option>
									                		<option label="Decline Submission" value="5">Decline Submission</option>
									                		<option label="See Comments" value="6">See Comments</option>

									            	</select>
									            <?php endif; ?>
									            &nbsp;&nbsp;&nbsp;&nbsp;
									            <?php if (isset($reviewer_recommendation)) : ?>

									            <?php elseif (isset($fileinfo)) : ?>
									            	<input type="submit" name="submit" onclick="return confirmSubmissionCheck()" class="button" value="Submit Review To Editor" />
									            <?php else : ?>
									            	<input type="submit" name="submit" onclick="return confirmSubmissionCheck()" class="button" value="Submit Review To Editor" disabled="disabled" />
									            <?php endif; ?>
                              </form>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
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