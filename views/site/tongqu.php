
<div class="content modular-detailed">
    <div class="guide"><i class="icon hot"></i>您现在的位置： <a title="首页" href="/">首页</a> → 童声童趣</div>
    <div class="left column-right-colu">
        <div class="column-tab">
            <ul id="actives" class="column-tab-list" style="display: block;">
                <?php
                $count = 0;
                foreach ($article as $k=>$v){
                    echo '<li><span>'.$v['pub_time'].'</span><a href="article/'.$v['id'].'.html">';
                    echo ++$count;
                    echo '. ';
                    echo $v['title'];
                    echo '</a></li>';
                }
                ?>
            </ul>
            <div value="actives">
                <?php
                echo \yii\widgets\LinkPager::widget([
                    'pagination'=>$pagination,//分页类
                    'nextPageLabel' => false,
                    'prevPageLabel' => false,
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
