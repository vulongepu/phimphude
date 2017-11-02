<?php

namespace Modules\Film\Http\Controllers\Admin;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Media\Repositories\FileRepository;

class FilmController extends AdminBaseController
{
    public function create(){

        return view('film::admin.create');
    }
}