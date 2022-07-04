<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="wrapper">
  <div class="section section-hero section-shaped">
    <div class="page-header">
      <h2 class="text-center">My Profile</h2>
      <hr>
      <div class="container shape-container d-flex align-items-center">
        <div class="col px-0">
          <div class="row align-items-center justify-content-left">
            <div class="col-sm">
              <table class="data mb-7" width="100%">
                <tbody>
                  <tr valign="top">
                    <td width="20%" class="label">
                      <span>First Name</span>
                    </td>
                    <td width="80%" class="value">
                      <?php if (isset($user['first_name'])) : ?>
                        <?= $user['first_name'] ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="20%" class="label">
                      <span>Middle Name</span>
                    </td>
                    <td width="80%" class="value">
                      <?php if (isset($user['middle_name'])) : ?>
                        <?= $user['middle_name']; ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="20%" class="label">
                      <span>Last Name</span>
                    </td>
                    <td width="80%" class="value">
                      <?php if (isset($user['last_name'])) : ?>
                        <?= $user['last_name']; ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="20%" class="label">
                      <span>Email</span>
                    </td>
                    <td width="80%" class="value">
                      <?php if (isset($user['email'])) : ?>
                        <?= $user['email']; ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <tr valign="top">
                    <td width="20%" class="label">
                      <span>Last Login</span>
                    </td>
                    <td width="80%" class="value">
                      <?php if (isset($user['last_login'])) : ?>
                        <?= $user['last_login']; ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <?= $this->endSection(); ?>