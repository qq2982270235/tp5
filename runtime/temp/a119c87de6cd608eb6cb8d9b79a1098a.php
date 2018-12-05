<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/admin\view\article\article_pic.html";i:1534399691;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图片</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
</head>
<body style="padding:0 10px;">
<table class="layui-table">
    <colgroup>
        <col width="60">
        <col>
        <col width="100">
        <col width="60">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>ID</th>
        <th>缩略图</th>
        <th>排序</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($pics) || $pics instanceof \think\Collection || $pics instanceof \think\Paginator): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><?php echo $vo['id']; ?></td>
        <td><img src="/<?php echo $vo['pic']; ?>" alt=""></td>
        <td><input type="text" name="sort" value="<?php echo $vo['sort']; ?>" id="<?php echo $vo['id']; ?>" onchange="changesort(this)" required  lay-verify="required" class="layui-input"></td>
        <td><a href="<?php echo url('admin/article/delpic',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-mini layui-btn-danger">删除</a></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script>
    function changesort(obj) {
        var id=$(obj).attr('id');
        var sortval=$(obj).val( );
        layui.use('layer',function () {
            var layer = layui.layer;
            $.ajax({
                'type':'post',
                'url':"<?php echo url('admin/article/picsort'); ?>",
                'data':{'id':id,'sort':sortval},
                success:function(msg){
                    layer.msg(msg.msg,{time:1000},function () {
                        if(msg.code==1){
                            window.location.reload();
                        }
                    });
                }
            })
        })
    }
</script>
</body>
</html>