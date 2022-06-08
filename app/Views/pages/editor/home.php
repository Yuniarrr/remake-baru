<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
  <a href="<?= base_url(); ?>/index">Home</a> &gt;
  <a href="<?= base_url(); ?>/user" class="hierarchyLink">User</a> &gt;
  <a href="<?= base_url(); ?>/editor" class="current">Editor</a>
</div>

<h2>Editor Home</h2>

<div id="content">
  <div id="articleSubmissions">
    <h3>Submissions</h3>

    <ul class="plain">
      <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsUnassigned">Unassigned</a> (<?= $submissionUnAssigned; ?>)</li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsInReview">In Review</a> (<?= $submissionInReview; ?>)</li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsInEditing">In Editing</a> (<?= $submissionInEditing; ?>)</li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/submissions/submissionsArchives">Archives</a></li>
    </ul>
  </div>

  <div class="separator">&nbsp;</div>
  &nbsp;<br />

  <script type="text/javascript">
    //<!--
    function sortSearch(heading, direction) {
      var submitForm = document.getElementById('submit');
      submitForm.sort.value = heading;
      submitForm.sortDirection.value = direction;
      submitForm.submit();
    }
    // -->
  </script>

  <form method="post" id="submit" action="<?= base_url(); ?>/editor/index/search">
    <input type="hidden" name="sort" value="id" />
    <input type="hidden" name="sortDirection" value="ASC" />
    <select name="searchField" size="1" class="selectMenu">
      <option label="Title" value="3">Title</option>
      <option label="Submission ID" value="8">Submission ID</option>
      <option label="Author" value="1">Author</option>
      <option label="Editor" value="2">Editor</option>
      <option label="Reviewer" value="4">Reviewer</option>
      <option label="Copyeditor" value="5">Copyeditor</option>
      <option label="Layout Editor" value="6">Layout Editor</option>
      <option label="Proofreader" value="7">Proofreader</option>

    </select>
    <select name="searchMatch" size="1" class="selectMenu">
      <option value="contains">contains</option>
      <option value="is">is</option>
      <option value="startsWith">starts with</option>
    </select>
    <input type="text" size="15" name="search" class="textField" value="" />
    <br />
    <select name="dateSearchField" size="1" class="selectMenu">
      <option label="Submitted" value="4">Submitted</option>
      <option label="Copyedited" value="5">Copyedited</option>
      <option label="Layout edited" value="6">Layout edited</option>
      <option label="Proofread" value="7">Proofread</option>

    </select>
    between
    <select name="dateFromMonth" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="January" value="01">January</option>
      <option label="February" value="02">February</option>
      <option label="March" value="03">March</option>
      <option label="April" value="04">April</option>
      <option label="May" value="05">May</option>
      <option label="June" value="06">June</option>
      <option label="July" value="07">July</option>
      <option label="August" value="08">August</option>
      <option label="September" value="09">September</option>
      <option label="October" value="10">October</option>
      <option label="November" value="11">November</option>
      <option label="December" value="12">December</option>
    </select>
    <select name="dateFromDay" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="01" value="1">01</option>
      <option label="02" value="2">02</option>
      <option label="03" value="3">03</option>
      <option label="04" value="4">04</option>
      <option label="05" value="5">05</option>
      <option label="06" value="6">06</option>
      <option label="07" value="7">07</option>
      <option label="08" value="8">08</option>
      <option label="09" value="9">09</option>
      <option label="10" value="10">10</option>
      <option label="11" value="11">11</option>
      <option label="12" value="12">12</option>
      <option label="13" value="13">13</option>
      <option label="14" value="14">14</option>
      <option label="15" value="15">15</option>
      <option label="16" value="16">16</option>
      <option label="17" value="17">17</option>
      <option label="18" value="18">18</option>
      <option label="19" value="19">19</option>
      <option label="20" value="20">20</option>
      <option label="21" value="21">21</option>
      <option label="22" value="22">22</option>
      <option label="23" value="23">23</option>
      <option label="24" value="24">24</option>
      <option label="25" value="25">25</option>
      <option label="26" value="26">26</option>
      <option label="27" value="27">27</option>
      <option label="28" value="28">28</option>
      <option label="29" value="29">29</option>
      <option label="30" value="30">30</option>
      <option label="31" value="31">31</option>
    </select>
    <select name="dateFromYear" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="2017" value="2017">2017</option>
      <option label="2018" value="2018">2018</option>
      <option label="2019" value="2019">2019</option>
      <option label="2020" value="2020">2020</option>
      <option label="2021" value="2021">2021</option>
      <option label="2022" value="2022">2022</option>
      <option label="2023" value="2023">2023</option>
    </select>
    and
    <select name="dateToMonth" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="January" value="01">January</option>
      <option label="February" value="02">February</option>
      <option label="March" value="03">March</option>
      <option label="April" value="04">April</option>
      <option label="May" value="05">May</option>
      <option label="June" value="06">June</option>
      <option label="July" value="07">July</option>
      <option label="August" value="08">August</option>
      <option label="September" value="09">September</option>
      <option label="October" value="10">October</option>
      <option label="November" value="11">November</option>
      <option label="December" value="12">December</option>
    </select>
    <select name="dateToDay" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="01" value="1">01</option>
      <option label="02" value="2">02</option>
      <option label="03" value="3">03</option>
      <option label="04" value="4">04</option>
      <option label="05" value="5">05</option>
      <option label="06" value="6">06</option>
      <option label="07" value="7">07</option>
      <option label="08" value="8">08</option>
      <option label="09" value="9">09</option>
      <option label="10" value="10">10</option>
      <option label="11" value="11">11</option>
      <option label="12" value="12">12</option>
      <option label="13" value="13">13</option>
      <option label="14" value="14">14</option>
      <option label="15" value="15">15</option>
      <option label="16" value="16">16</option>
      <option label="17" value="17">17</option>
      <option label="18" value="18">18</option>
      <option label="19" value="19">19</option>
      <option label="20" value="20">20</option>
      <option label="21" value="21">21</option>
      <option label="22" value="22">22</option>
      <option label="23" value="23">23</option>
      <option label="24" value="24">24</option>
      <option label="25" value="25">25</option>
      <option label="26" value="26">26</option>
      <option label="27" value="27">27</option>
      <option label="28" value="28">28</option>
      <option label="29" value="29">29</option>
      <option label="30" value="30">30</option>
      <option label="31" value="31">31</option>
    </select>
    <select name="dateToYear" class="selectMenu">
      <option label="" value="" selected="selected"></option>
      <option label="2017" value="2017">2017</option>
      <option label="2018" value="2018">2018</option>
      <option label="2019" value="2019">2019</option>
      <option label="2020" value="2020">2020</option>
      <option label="2021" value="2021">2021</option>
      <option label="2022" value="2022">2022</option>
      <option label="2023" value="2023">2023</option>
    </select>
    <input type="hidden" name="dateToHour" value="23" />
    <input type="hidden" name="dateToMinute" value="59" />
    <input type="hidden" name="dateToSecond" value="59" />
    <br />
    <input type="submit" value="Search" class="button" />
  </form>
  &nbsp;


  <div class="separator">&nbsp;</div>

  <div id="issues">
    <h3>Issues</h3>

    <ul class="plain">
      <li>&#187; <a href="<?= base_url(); ?>/editor/createIssue">Create Issue</a></li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/notifyUsers">Notify Users</a></li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/futureIssues">Future Issues</a></li>
      <li>&#187; <a href="<?= base_url(); ?>/editor/backIssues">Back Issues</a></li>

    </ul>
  </div>
</div><!-- content -->
<?= $this->endSection(); ?>