<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class ViewMetadata extends BaseController
{
    public function index($article_id)
    {
      $data = [
        'article' => $this->articlesModel->joinArticleAuthorFiles($article_id)->first(),
      ];
      return view('pages/editor/viewMetadata', $data);
    }
}
