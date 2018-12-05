<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/test/public/../application/admin/view/banner/banner_list.html";i:1533722950;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>轮播图列表</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body style="padding:10px 10px;">
<form action="" class="layui-form">
<div class="layui-container">
    <table class="layui-table" lay-size="sm">
        <colgroup>
            <col width="200">
            <col>
            <col width="300">
            <col width="100">
            <col width="100">
            <col width="150">
        </colgroup>
        <thead>
        <tr>
            <th>ID</th>
            <th>图片</th>
            <th>标题</th>
            <th>是否显示</th>
            <th>排序</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($pics) || $pics instanceof \think\Collection || $pics instanceof \think\Paginator): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><img src="/<?php echo $vo['pic']; ?>" height="50" alt=""></td>
            <td><?php echo $vo['title']; ?></td>
            <td><input type="checkbox" name="isshow" lay-skin="switch" value="<?php echo $vo['id']; ?>" lay-filter="isshow" lay-text="显示|隐藏" <?php echo !empty($vo['isshow'])?"checked":""; ?>></td>
            <td><input type="text" name="sort" value="<?php echo $vo['sort']; ?>" required lay-verify="required" placeholder="请输入排序" autocomplete="off" class="layui-input sort" data="<?php echo $vo['id']; ?>"></td>
            <td><a href="<?php echo url('banner/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-warm layui-btn-mini">编辑</a><a href="<?php echo url('banner/del',['id'=>$vo['id'],'pic'=>urlencode($vo['pic'])]); ?>" class="layui-btn layui-btn-danger layui-btn-mini del">删除</a></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</form>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    layui.use(['layer','form'], function(){
        var layer = layui.layer;
        var form = layui.form;
        //隐藏与显示
        form.on('switch(isshow)', function(data){
            var value;
            value=data.elem.checked?1:0;
            $.ajax({
                type:"post",
                url:"<?php echo url('admin/banner/setajax'); ?>",
                data:{'act':'show','v':value,'id':data.value},
                success:function (msg) {
                    if(msg==1){
                        layer.msg("操作成功",{time:1000},function () {
                            location.reload();
                        })
                    }
                }
            })
        });
        //排序
        $('.sort').change(function () {
            var id=$(this).attr('data');
            var value=$(this).val();
            $.ajax({
                type:"post",
                url:"<?php echo url('admin/banner/setajax'); ?>",
                data:{'act':'sort','v':value,'id':id},
                success:function (msg) {
                    if(msg==1){
                        layer.msg("操作成功",{time:1000},function () {
                            location.reload();
                        })
                    }
                }
            })
        })
        $('.del').on('click',function () {
            var url=$(this).attr('href');
            layer.confirm('确定要删除该管理员吗?', {icon: 3, title:'温馨提示'}, function(index){
                //do something
                location.href=url;
                layer.close(index);
            });
            return false;
        })
    });
    $(function(){
       $(window.parent.document).find('#righttitle').text($('title').text());
    });
</script>
</body>
</html>