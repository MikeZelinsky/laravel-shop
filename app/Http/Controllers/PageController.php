<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('NewMiddle');
    }

    public function index($id = null,$param = null)
    {
        echo $id;
        echo $param;

    }
    public function getArticles()
    {

    }

    public function getArticle($id)
    {
        echo "Ответ: ".$id;
    }

    public function show()
    {
        return view('main');
    }


}
