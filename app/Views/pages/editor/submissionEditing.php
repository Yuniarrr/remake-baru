<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="wrapper">
      <div class="section section-hero section-shaped">
        <div class="page-header">
          <h2 class="text-center">#<?= $article['article_id']; ?> EDITING</h2>
          <div class="container align-items-left ">
            <div class="col px-0 mt-6">
              <div id="submission">
                <h3>Submission</h3>
                <table width="100%" class="data">
                  <tr>
                    <td width="20%" class="label">Authors</td>
                    <td width="80%"> 
                      <?php if (isset($article['first_name'])) : ?>
					            	<?= $article['first_name']; ?>
					            <?php elseif (isset($article['first_name']) && $article['middle_name']) : ?>
					            	<?= $article['first_name'] . " " . $article['middle_name']; ?>
					            <?php elseif (isset($article['first_name']) && $article['middle_name'] && $article['last_name']) : ?>
					            	<?= $article['first_name'] . " " . $article['first_name'] . " " . $article['last_name']; ?>
					            <?php endif; ?>
					            <a href="<?= base_url(); ?>/user/email?redirectUrl=http%3A%2F%2Fiptek.its.ac.id%2Findex.php%2Fitj%2Feditor%2FsubmissionEditing%2F12687&amp;to%5B%5D=%22Cyntia%20dfdsd%20Niani%22%20%3Ccyntian%40ppi.its.ac.id%3E&amp;subject=xczxzcxcz&amp;articleId=12687" class="icon"><img src="https://iptek.its.ac.id/lib/pkp/templates/images/icons/mail.gif" width="16" height="14" alt="Mail" /></a>
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
                      <?php if (isset($editor_name)) : ?>
					            	<?= $editor_name['username']; ?>
					            <?php else : ?>
					            	None Assigned
					            <?php endif; ?>
                    </td>
                  </tr>
                </table>

                <!-- LANJUTIN SINI -->

              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <?= $this->endSection(); ?>