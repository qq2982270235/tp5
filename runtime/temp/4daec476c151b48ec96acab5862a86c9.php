<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\erji\index.html";i:1534326234;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>栏目列表</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body style="padding:10px 10px;">
<div class="layui-container">
    <form action="<?php echo url('erji/sort'); ?>" method="post">
        <div>
            <a href="<?php echo url('erji/add'); ?>" class="layui-btn layui-btn-normal">添加栏目</a>
            <button type="submit" class="layui-btn layui-btn-danger">更新排序</button>
        </div>
    <table class="layui-table" lay-size="sm">
        <colgroup>
            <col width="80">
            <col>
            <col width="100">
            <col width="100">
            <col width="200">
        </colgroup>
        <thead>
        <tr pid="0">
            <th>ID</th>
            <th>栏目名称</th>
            <th>类型</th>
            <th>排序</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr pid="<?php echo $vo['pid']; ?>"id="<?php echo $vo['id']; ?>">
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['type']; ?></td>
            <td><input type="text" name="<?php echo $vo['id']; ?>" value="<?php echo $vo['sort']; ?>" style="width:50px;"></td>
            <td><a href="<?php echo url('erji/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-warm layui-btn-mini">编辑</a><a href="<?php echo url('erji/del',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini del">删除</a></td>
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
    layui.use('layer', function(){
        var layer = layui.layer;
        $('.del').on('click',function () {
            var url=$(this).attr('href');
            layer.confirm('确定要删除该栏目吗?', {icon: 3, title:'温馨提示'}, function(index){
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