<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/test/public/../application/admin/view/category/index.html";i:1533539732;}*/ ?>
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
    <form action="<?php echo url('category/sort'); ?>" method="post">

        <div>
            <a href="<?php echo url('category/add'); ?>" class="layui-btn layui-btn-normal">添加栏目</a>
            <button type="submit"	class="layui-btn layui-btn-danger">更新排序</button>
        </div>
    <table class="layui-table" lay-size="sm">
        <colgroup>
            <col width="200">
            <col width="200">
            <col>
            <col width="100">
            <col width="100">
            <col width="150">
        </colgroup>
        <thead>
        <tr pid="0" >
            <th>伸缩</th>
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
            <td>
                <button class="layui-btn layui-btn-sm shensuo" type="button" >
                    <i class="layui-icon">+</i>
                </button>
            </td>
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['name']; ?></td>
            <td><?php echo $vo['type']; ?></td>
            <td><input type="text" name="<?php echo $vo['id']; ?>" value="<?php echo $vo['sort']; ?>" style="width: 70px; height: 25px;" class="layui-input"></td>
            <td><a href="<?php echo url('category/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-warm layui-btn-mini">编辑</a><a href="<?php echo url('category/del',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini del">删除</a></td>
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
       //栏目伸缩
        //1.隐藏非顶级栏目
        $('tr[pid!=0]').hide();
        //2.子栏目展开
        $('.shensuo').on('click',function () {
            //获取按钮状态
            var flag=$(this).find('i').text();
            var index=$(this).parents("tr").attr('id');
            if(flag=="+"){
                //改变按钮状态
                $(this).find('i').text("-");
                //展开子栏目录
                $('tr[pid='+index+']').fadeIn('slow');
            }else{
                $(this).find('i').text("+");
                //收起子栏目
                //$('tr[pid='+index+']').fadeOut('slow');
                hidecate(index);
            }

        });
    });
    //隐藏子栏目 pid 父级分类id,递归隐藏子栏目
    function hidecate(pid) {
        $('tr[pid='+pid+']').each(function () {
            hidecate($(this).attr('id'));
        })
        $('tr[pid='+pid+']').fadeOut('slow');
        $('tr[pid='+pid+']').find('.shensuo').find('i').text("+");

    }
</script>
</body>
</html>