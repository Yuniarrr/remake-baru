<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class DownloadFile extends BaseController
{
    public function index($article_id)
    {
        return view('pages/editor/home');
    }
}
