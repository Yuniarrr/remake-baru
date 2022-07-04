<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="wrapper">
    <div class="section section-hero section-shaped">
        <div class="page-header">
            <h2 class="text-center">EDITOR HOME </h2>
            <hr>


            <div class="container shape-container d-flex align-items-center">
                <div class="col px-0">
                    <div id="content" class="justify-content-left">
                        <tbody>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/createIssue">CREATE ISSUE</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/futureIssues">FUTURE ISSUES</a></tr>
                            <tr><a class="mr-3" href="<?= base_url(); ?>/editor/backIssues">BACK ISSUES</a></tr>
                        </tbody>
                    </div><!-- content -->
                    <div id="content" class="justify-content-left">


                        <br />

                        <form action="#">
                            Issue: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?= base_url(); ?>/editor/issueToc/ISSUE_ID'.replace('ISSUE_ID', this.options[this.selectedIndex].value)" size="1">
                                <?php if (isset($issue)) : ?>
                                    <option label="------    Future Issues    ------" value="-100">------ Future Issues ------</option>
                                    <?php foreach ($issue as $is) : ?>
                                        <option label="Vol <?= $is['volume']; ?>, No <?= $is['number']; ?> (<?= $is['year']; ?>)" value="<?= $is['issue_id']; ?>">Vol <?= $is['volume']; ?>, No <?= $is['number']; ?> (<?= $is['year']; ?>)</option>
                                    <?php endforeach; ?>
                                    <option label="------    Current Issue    ------" value="-101">------ Current Issue ------</option>
                                    <option label="------    Back Issues    ------" value="-102">------ Back Issues ------</option>
                                <?php else : ?>
                                    <option label="------    Future Issues    ------" value="-100">------ Future Issues ------</option>
                                    <option label="------    Current Issue    ------" value="-101">------ Current Issue ------</option>
                                    <option label="------    Back Issues    ------" value="-102">------ Back Issues ------</option>
                                <?php endif; ?>
                            </select>
                        </form>
                        <hr>

                        <form id="issue" method="post" action="<?= base_url(); ?>/editor/saveIssue" enctype="multipart/form-data">

                            <div class="separator"></div>
                            <div id="identification">
                                <h2>Identification</h2>

                                <table width="100%" class="data">
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="volume">
                                                Volume </label>
                                        </td>
                                        <td width="80%" class="value"><input type="text" name="volume" id="volume" value="1" size="5" maxlength="5" class="textField" /></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="number">
                                                Number </label>
                                        </td>
                                        <td class="value"><input type="text" name="number" id="number" value="1" size="5" maxlength="5" class="textField" /></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="year">
                                                Year </label>
                                        </td>
                                        <td class="value"><input type="text" name="year" id="year" value="2022" size="5" maxlength="4" class="textField" /></td>
                                    </tr>

                                    <tr valign="top">
                                        <td class="label">
                                            <label for="title">
                                                Title </label>
                                        </td>
                                        <td class="value"><input type="text" name="title" id="title" value="" size="40" maxlength="120" class="textField" /></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="description">
                                                Description </label>
                                        </td>
                                        <td class="value"><textarea name="description" id="description" cols="40" rows="5" class="textArea"></textarea></td>
                                    </tr>
                                </table>
                            </div>

                            <p><input type="submit" value="Save" class="btn-sm btn-primary" /> <input type="button" value="Cancel" onclick="document.location.href='<?= base_url(); ?>/editor/index'" class="btn-sm btn-primary" /></p>

                        </form>




                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <?= $this->endSection(); ?>