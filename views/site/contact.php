

    <style type="text/css"> #mapContainer {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}</style>


     <!--[if IE]>
    <style type="text/css"> #mapContainer {width: 100%;height: 800px;overflow: hidden;margin:0;font-family:"微软雅黑";}</style>
     <![endif]-->




<div class="content modular-detailed">
    <div class="guide"><i class="icon hot"></i>您现在的位置： <a title="首页" href="/">首页</a> → 联系我们</div>
    <div class="map">
        <h3>童趣大本营地址</h3>
    <div id="mapContainer"></div>
    </div>

    <script type='text/javascript'>
        var map = new BMap.Map("mapContainer");
        var point = new BMap.Point(128.902185, 47.726365);
        map.centerAndZoom(point, 15);
        map.addControl(new BMap.NavigationControl());
        var marker = new BMap.Marker(point);        // 创建标注
        map.addOverlay(marker);
        marker.setAnimation(BMAP_ANIMATION_BOUNCE);
        var opts = {
            position : point,    // 指定文本标注所在的地理位置
            offset   : new BMap.Size(30, -30)    //设置文本偏移量
        }
        var label = new BMap.Label("伊春市童趣教育", opts);  // 创建文本标注对象
        label.setStyle({
            color : "red",
            fontSize : "12px",
            height : "20px",
            lineHeight : "20px",
            fontFamily:"微软雅黑"
        });
        map.addOverlay(label);
    </script>
</div>

