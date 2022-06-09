<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Active Submissions</h2>
        


        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center d-flex justify-content-cente">


              <table class="table table-striped">
                <thead>
                  <tr class="text-black">
                    <th scope="col">id</th>
                    <th scope="col">MM-DD ASSIGNED</th>
                    <th scope="col">SEC</th>
                    
                    <th scope="col">TITLE</th>
                    <th scope="col">DUE</th>
                    <th scope="col">REVIEW ROUND</th>
                  </tr>
                  <?php if(isset($articles)) : ?>
                    <?php foreach($articles as $article) : ?>	
                      <tr valign="top">
                        <td><?= $article["article_id"]; ?></td>
                        <td><?= $article['date_assign_reviewer']; ?></td>
                        <td>ART</td>
                        <td><a href="<?= base_url(); ?>/reviewer/submission/<?= $article["assignment_id"]; ?>" class="action"><?= $article["title"]; ?></a></td>
                        <td class="nowrap">DUE?</td>
                        <td><?= $article['round']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <tr>
                      <td colspan="6">No Submission</td>
                    </tr>
                  <?php endif; ?>
                </thead>
                
              </table>

            
              
                
            </div>
          </div>
        </div>
      </div>

    </div>
      <br>
      <br>
      <br>
      <?= $this->endSection(); ?>