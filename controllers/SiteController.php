<?php

namespace app\controllers;

use app\helpers\CMSHelper;
use app\helpers\TMSHelper;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;


class SiteController extends Controller
{
    private $pageInfo = '首页';

    private $headNum = 3;

    private $indexPerNum = 5;

    private $informationPerNum = 8;



    /**
     * 准备参数
     */
    private function prepareParams()
    {
        $staticUrl = Yii::$app->params['staticUrl'];
        $wxImage = '';
        $this->view->params['wxImage'] = $wxImage;
        $this->view->params['staticUrl'] = $staticUrl;
        $this->view->params['pstatId'] = Yii::$app->params['pstatId'];
    }

    public  function init(){
        parent::init();
        $this->view->params['h'] = 'h1';
        $this->prepareParams();
    }

    public function mulitWarp($str, $length = 70, $append = true)
    {
        $str = trim($str);
        $strlength = strlen($str);
        if ($length >= $strlength)
        {
            return $str; //截取长度等于或大于等于本字符串的长度，返回字符串本身
        }
        elseif ($length < 0) //如果截取长度为负数
        {
            $length = $strlength + $length;//那么截取长度就等于字符串长度减去截取长度
            if($length < 0)
            {
                $length = $strlength;//如果截取长度的绝对值大于字符串本身长度，则截取长度取字符串本身的长度
            }
        }
        if (function_exists('mb_substr'))
        {
            $newstr = mb_substr($str,0 , $length, 'utf-8');
        }
        elseif (function_exists('iconv_substr'))
        {
            $newstr = iconv_substr($str,0 , $length, 'utf-8');
        }
        else
        {
            $newstr = substr($str,0 , $length);
        }
        if ($append && $str != $newstr)
        {
            $newstr .= '...';
        }
        return $newstr;
    }

    public function actionIndex()
    {
        //首页文章列表
        $articleList = TMSHelper::getArticleList();
        //首页banner信息
        $banners = TMSHelper::getBanners();
        //首页文章
        $indexArticles = TMSHelper::getArticleList(TMSHelper::INDEX);
        //每日早报
        $morningArticles = TMSHelper::getArticleList(TMSHelper::MORNING_NEWS);
        //童声童趣
        $tongquArticles = TMSHelper::getArticleList(TMSHelper::TONGQU);
        //童趣活动
        $activityArticles = TMSHelper::getArticleList(TMSHelper::ACTIVITY);
        //关于我们
        $aboutArticles = TMSHelper::getArticleList(TMSHelper::ABOUT);
        //获取碎片，微信公众号
        $wxImage = TMSHelper::getWXImage();
        foreach($articleList as $k=>&$v){
            $v['summary'] = $this->mulitWarp($v['summary']);
        }
        //整合返回数组
        $renderArray = [
            'indexPerNum'=>$this->indexPerNum,
            'headNum'=>$this->headNum,
            'banners'=>$banners,
            'wxImage'=>$wxImage['path'],
            'indexArticles'=>$indexArticles,
            'morningArticles'=>$morningArticles,
            'tongquArticles'=>$tongquArticles,
            'aboutArticles'=>$aboutArticles,
            'activityArticles'=>$activityArticles
        ];
        return $this->renderPartial('index',$renderArray);
    }

    public function actionMorningNews()
    {
        $this->view->params['h'] = 'h2';
        $this->view->params['title'] = '每日早报';
        $article = TMSHelper::getArticleList(TMSHelper::MORNING_NEWS);
        $pagination = new Pagination(['totalCount'=>count($article),'pageSize'=>$this->informationPerNum]);
        $article = array_slice($article,$pagination->offset,$pagination->limit);
        return $this->render('morning-news',['article'=>$article,'pagination'=>$pagination]);
    }

    public function actionTongqu()
    {
        $this->view->params['h'] = 'h2';
        $this->view->params['title'] = '童声童趣';
        $article = TMSHelper::getArticleList(TMSHelper::TONGQU);
        $pagination = new Pagination(['totalCount'=>count($article),'pageSize'=>$this->informationPerNum]);
        $article = array_slice($article,$pagination->offset,$pagination->limit);
        return $this->render('tongqu',['article'=>$article,'pagination'=>$pagination]);
    }


    public function actionActivity()
    {
        $this->view->params['h'] = 'h2';
        $this->view->params['title'] = '儿童活动';
        $article = TMSHelper::getArticleList(TMSHelper::ACTIVITY);
        $pagination = new Pagination(['totalCount'=>count($article),'pageSize'=>$this->informationPerNum]);
        $article = array_slice($article,$pagination->offset,$pagination->limit);
        return $this->render('activity',['article'=>$article,'pagination'=>$pagination]);
    }

    public function actionJoin()
    {
        $this->view->params['h'] = 'h2';
        $this->view->params['title'] = '加入我们';
        $article = TMSHelper::getArticleList(TMSHelper::JOIN);
        $detail = TMSHelper::getArticleDetail($article[0]['id']);
        return $this->render('join',['detail'=>$detail]);
    }

    public function actionContactUs()
    {
        $this->view->params['title'] = '联系我们';
        return $this->render('contact');
    }

    public function actionArticle(){
        $this->view->params['title'] = '文章阅读';
        $articleId = Yii::$app->request->get('id');
        $content = TMSHelper::getArticleDetail($articleId);
        $this->pageInfo = '文章阅读';
        $this->view->params['h'] = 'h2';
        return $this->render('article',['content'=>$content->content,'title'=>$content->title]);
    }

    public function actionDownload(){
        TMSHelper::download(35);

    }
}
