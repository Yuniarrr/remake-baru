<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class issueToc extends BaseController
{
  public function index($issue_id)
  {
    $data['issue_id'] = $issue_id;
    $data['all_issues'] = $this->issuesModel->findAll();
    $data['issue'] = $this->issuesModel->find($issue_id);

    if ($schedule_publications = $this->schedulePublicationsModel->where('issue_id', $issue_id)->findAll()) {
      $data['schedule_publications'] = $schedule_publications;
      foreach ($schedule_publications as $schedule_publication) {
        $data['articles'][$schedule_publication['article_id']] = $this->articlesModel->find($schedule_publication['article_id']);
        // $data['issues'][$schedule_publication['article_id']] = $this->issuesModel->find($schedule_publication['issue_id']);
        $data['authors'][$schedule_publication['article_id']] = $this->articleAuthorsModel->where('article_id', $schedule_publication['article_id'])->findAll();
      }
    }

    if ($havePublish = $this->issuesModel->where('issue_id', $issue_id)->first()) {
      if ($havePublish['status'] == 1) {
        $data['havePublish'] = $this->articlesModel->where('issue_id', $havePublish['issue_id'])->findAll();
      }
    }

    // dd($data);

    return view('pages/editor/issueToc', $data);
  }
}
