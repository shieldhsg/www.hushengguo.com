<?php $this->beginPage() ?>
<?php
$wxImage = \app\helpers\TMSHelper::getWXImage();
$wxImage = $wxImage['path'];
?>

<head>
    <title><?php echo $this->params['title'] ?></title>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=FcYER8TqGGb8GQFn8wibGPK9" ></script>
    <link rel="stylesheet" href="<?php echo $this->params['staticUrl'] ?>css/base.css"
</head>

<body>

<!-- 顶通 -->
<div class="LineDingtong_bar"><div class="LineDingtong_Qu"><span style=" color:#000"></span></div></div>
<!-- /顶通 -->
<div id="loading"></div>
<div class="wraper">
    <div class="header">
        <div class="content">
            <<?php echo $this->params['h'] ?> class="logo"><a title="伊春市童趣教育" href="http://www.tongqujiaoyu.com"><img id="logo" src="<?php echo $this->params['staticUrl'] ?>images/logo.png" alt=""></a></<?php echo $this->params['h'] ?>>

            <ul class="nav">
                <li><a href="/">首页</a></li>
                <li><a href="/morning-news.html">每日早报</a></li>
                <li><a href="/tongqu.html">童声童趣</a></li>
                <li><a href="/activity.html">童趣活动</a></li>
                <li><a href="/join.html">加入童趣</a></li>
                <li><a href="/contact.html">联系我们</a></li>
            </ul>
        </div>
    </div>
    <?= $content ?>

<!--底通开始-->
<div class="footer">
    <div class="content">
        <dl class="footer-list">
            <div class="dt icon">微信公众号</div>
            <dd class="ewm">
                <span>扫一扫关注</span>
                <div>
                    <img id="wximage" src="<?php echo $wxImage ?>" alt="关于童趣微信公众号">
                    <b>伊春市童趣教育</b>
                </div>
            </dd>
        </dl>
        <dl class="footer-list">
            <div class="dt icon">联系我们</div>
            <?php
            echo \app\components\ContactWidget::widget();
            ?>
        </dl>
        <dl class="footer-list">
            <div class="dt icon">备案信息</div>
            <dd>伊春市童趣教育 版权所有</dd>
            <dd>黑ICP-XXXXX号</dd>
        </dl>
    </div>

</div></div>
</div>
<script src="<?php echo Yii::$app->params['staticUrl'] ?>js/jquery-1.7.min.js"></script>
<script src="<?php echo Yii::$app->params['staticUrl'] ?>js/global.js"></script>
</body>
