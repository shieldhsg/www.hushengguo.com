<!DOCTYPE html>
<html lang="en">
<head>
    <title>伊春市童趣教育</title>
    <meta name="keywords" content="XXXX"/>
    <meta name="description" content="XXXX"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="<?php echo $this->params['staticUrl'] ?>css/base.css" />
    <link rel="stylesheet" href="<?php echo $this->params['staticUrl'] ?>css/img.css" />
</head>
<body>
    <div class="LineDingtong_bar"><div class="LineDingtong_Qu"><span style=" color:#000"></span></div></div>
    <div id="loading"></div>
    <div class="wraper">
		<div class="index-header">
			<div class="content">
                    <h1 class="logo"><a title="XXXX" href="http://www.baidu.com"><img id="logo" src="<?php echo $this->params['staticUrl'] ?>images/logo.png" alt=""></a></h1>
                    <ul class="nav">
                        <li><a href="/">首页</a></li>
                        <li><a href="/morning-news.html">每日早报</a></li>
                        <li><a href="/consulting.html">童声童趣</a></li>
                        <li><a href="/activity.html">童趣活动</a></li>
                        <li><a href="/join.html">加入童趣</a></li>
                        <li><a href="/contact.html">联系我们</a></li>
                    </ul>
				<div class="clear"></div>
				<dl class="upper">
                    <div id="img">
                        <div id="list" style="left: -599px;">
                            <?php
                                foreach ($banners as $k=>$v){
                                    if($k==0){
                                        echo '<img src="'.$v['path'].'"  />';
                                    }
                                    echo '<img src="'.$v['path'].'"/>';
                                    if($k==count($banners)-1){
                                        echo '<img src="'.$v['path'].'"  />';
                                    }
                                    echo '</a>';
                                }
                            ?>
                        </div>
                        <div id="buttons">
                            <?php
                            foreach ($banners as $k=>$v){
                                if($k==0){
                                    echo '<span index='.($k+1).' class="on"></span>';
                                }else{
                                    echo '<span index='.($k+1).'></span>';
                                }
                            }
                            ?>
                        </div>



                        <a href="javascript:;" id="prev" class="arrow">&lt;</a>
                        <a href="javascript:;" id="next" class="arrow">&gt;</a>
                    </div>
					<dd>
                        <?php
                            $num = 0;
                            foreach ($indexArticles as $k=>$v){
                                if($num >= 3){
                                    break;
                                }
                                echo '<div class="text">';
                                echo '<a  href="article/'.$v['id'].'.html';
                                echo '" >';
                                echo "<h3>{$v['title']}</h3>";
                                echo '</a>';
                                echo '<p><a  href="article/'.$v['id'].'.html';
                                echo '" >';
                                echo $v['summary'].'</a></p>';
                                echo '</div>';
                                $num++;
                            }
                        ?>
					</dd>
				</dl>
			</div>
		</div>
    </div>



    <div class="main-content">
        <div class="list-">
          <ul class="column-nav-index">
              <li class="cur"><h3 class="list-title">关于我们</h3></li>
              <li><h3 class="list-title">每日早报</h3></li>
              <li><h3 class="list-title">童声童趣</h3></li>
              <li><h3 class="list-title">儿童活动</h3></li>
          </ul>
        </div>
        <div class="column-tab-index">
            <ul class="column-tab-list-index" style="display: block">
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                                for($i =0;$i<$indexPerNum*1;$i++){
                                    if($i==0){
                                        if($aboutArticles[$i]['id']){
                                            echo '<li><h4><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                        }else{
                                            echo '<li><h4><a href="javascript:void(0)" >';
                                        }

                                    }else{
                                        echo '<li><p><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                    }
                                    echo "{$aboutArticles[$i]['title']}";
                                    if($i==0){
                                        echo '</a></h4></li>';
                                    }else{
                                        echo '</a></p></li>';
                                    }

                                }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*1;$i<$indexPerNum*2;$i++){
                                if($i==$indexPerNum*1){
                                    if($aboutArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                }
                                echo "{$aboutArticles[$i]['title']}";
                                if($i==$indexPerNum*1){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*2;$i<$indexPerNum*3;$i++){
                                if($i==$indexPerNum*2){
                                    if($aboutArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                }
                                echo "{$aboutArticles[$i]['title']}";
                                if($i==$indexPerNum*2){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*3;$i<$indexPerNum*4;$i++){
                                if($i==$indexPerNum*3){
                                    if($aboutArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$aboutArticles[$i]['id'].'.html" >';
                                }
                                echo "{$aboutArticles[$i]['title']}";
                                if($i==$indexPerNum*3){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
            </ul>
            <ul class="column-tab-list-index" style="display: none">
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =0;$i<$indexPerNum*1;$i++){
                                if($i==0){
                                    if($morningArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                }
                                echo "{$morningArticles[$i]['title']}";
                                if($i==$indexPerNum*0){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }

                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*1;$i<$indexPerNum*2;$i++){
                                if($i==$indexPerNum*1){
                                    if($morningArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                }
                                echo "{$morningArticles[$i]['title']}";
                                if($i==$indexPerNum){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*2;$i<$indexPerNum*3;$i++){
                                if($i==$indexPerNum*2){
                                    if($morningArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$morningArticles[$i]['id'].'" >';
                                }
                                echo "{$morningArticles[$i]['title']}";
                                if($i==$indexPerNum*2){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*3;$i<$indexPerNum*4;$i++){
                                if($i==$indexPerNum*3){
                                    if($morningArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$morningArticles[$i]['id'].'.html" >';
                                }
                                echo "{$morningArticles[$i]['title']}";
                                if($i==$indexPerNum*3){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>

            </ul>
            <ul class="column-tab-list-index" style="display: none">
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =0;$i<$indexPerNum*1;$i++){
                                if($i==0){
                                    if($tongquArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                }
                                echo "{$tongquArticles[$i]['title']}";
                                if($i==$indexPerNum*0){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }

                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*1;$i<$indexPerNum*2;$i++){
                                if($i==$indexPerNum*1){
                                    if($tongquArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                }
                                echo "{$tongquArticles[$i]['title']}";
                                if($i==$indexPerNum*1){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*2;$i<$indexPerNum*3;$i++){
                                if($i==$indexPerNum*2){
                                    if($tongquArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                }
                                echo "{$tongquArticles[$i]['title']}";
                                if($i==$indexPerNum*2){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*3;$i<$indexPerNum*4;$i++){
                                if($i==$indexPerNum*3){
                                    if($tongquArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$tongquArticles[$i]['id'].'.html" >';
                                }
                                echo "{$tongquArticles[$i]['title']}";
                                if($i==$indexPerNum*3){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
            </ul>
            <ul class="column-tab-list-index" style="display: none">
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =0;$i<$indexPerNum*1;$i++){
                                if($i==0){
                                    if($activityArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                }
                                echo "{$activityArticles[$i]['title']}";
                                if($i==0){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }

                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*1;$i<$indexPerNum*2;$i++){
                                if($i==$indexPerNum*1){
                                    if($activityArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                }
                                echo "{$activityArticles[$i]['title']}";
                                if($i==$indexPerNum*1){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*2;$i<$indexPerNum*3;$i++){
                                if($i==$indexPerNum*2){
                                    if($activityArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                }
                                echo "{$activityArticles[$i]['title']}";
                                if($i==$indexPerNum*2){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
                <div class="list">
                    <dl class="describe">
                        <dd>
                            <?php
                            for($i =$indexPerNum*3;$i<$indexPerNum*4;$i++){
                                if($i==$indexPerNum*3){
                                    if($activityArticles[$i]['id']){
                                        echo '<li><h4><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                    }else{
                                        echo '<li><h4><a href="javascript:void(0)" >';
                                    }
                                }else{
                                    echo '<li><p><a href="article/'.$activityArticles[$i]['id'].'.html" >';
                                }
                                echo "{$activityArticles[$i]['title']}";
                                if($i==$indexPerNum*3){
                                    echo '</a></h4></li>';
                                }else{
                                    echo '</a></p></li>';
                                }
                            }
                            ?>
                        </dd>
                    </dl>
                </div>
            </ul>
        </div>
    </div>


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
                <dd>黑ICP备18003536</dd>
            </dl>
        </div>

    </div></div>
    <script src="<?php echo $this->params['staticUrl'] ?>js/jquery-1.7.min.js<?php echo Yii::$app->params['version'] ?>"></script>
    <script src="<?php echo $this->params['staticUrl'] ?>js/img.js<?php echo Yii::$app->params['version'] ?>"></script>
    <script src="<?php echo $this->params['staticUrl'] ?>js/global.js<?php echo Yii::$app->params['version'] ?>"></script>
</body>
</html>