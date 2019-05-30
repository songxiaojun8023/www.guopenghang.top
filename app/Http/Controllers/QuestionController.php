<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;

class QuestionController extends Controller
{
    //分词搜索
    public function showQuestion(){

        return view('question.showQuestion');
    }

    //显示指定某个问题详情
    public function showOneQuestion(){

        return view('question.showOneQuestion');
    }

    //最新有答案问题列表
    public function moreQuestionAnswer(){

        return  view('question.moreQuestionAnswer');
    }

    //最新有答案问题列表
    public function moreQuestionList(){

        return  view('question.moreQuestionList');
    }

    //发布问题
    public function pushQuestion(){

        return  view('question.pushQuestion');

    }

    //图片识别
    public function PicQuestion(){

        return view('question.picQuestion');
    }

    //图片识别完成，编辑后上传试题
    public function addPicQuestion(){

        return ['code'=>200,'message'=>'ok'];
    }

    //form表单提交 录入试题
    public function pushFormQuestion(){

        return ['code'=>200,'message'=>'ok'];
    }



}
