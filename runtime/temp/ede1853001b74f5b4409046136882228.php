<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"D:\phpStudy\PHPTutorial\WWW\test\public/../application/admin\view\erjineirong\erjineirong_list.html";i:1534475112;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>内容列表</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
</head>
<body style="padding:10px 10px;">

<div class="layui-container">
    <form action="<?php echo url('erjineirong/delall'); ?>" method="post">

        <div>
            <a href="<?php echo url('erjineirong/add'); ?>" class="layui-btn layui-btn-normal ">添加内容</a>


            <table class="layui-table" lay-size="sm">
                <colgroup>
                    <col width="60">
                    <col width="80">
                    <col>
                    <col width="100">
                    <col width="170">
                    <col width="100">
                    <col width="100">
                    <col width="100">
                    <col width="220">
                </colgroup>
                <thead>
                <tr class="layui-form" pid="0" >
                    <th style="text-align: center;"><input type="checkbox" name="" lay-skin="primary" lay-filter="quanxuan"></th>
                    <th style="text-align:center;">ID</th>
                    <th>标题</th>
                    <th>所属分类</th>
                    <th>添加时间</th>
                    <th style="text-align:center;">浏览次数</th>
                    <th style="text-align:center;">缩略图</th>
                    <th style="text-align:center;">是否置顶</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr class="layui-form">
                    <td style="text-align:center;"><input type="checkbox" name="id[]" class="qx" lay-skin="primary" value="<?php echo $vo['id']; ?>"></td>
                    <td style="text-align:center;"><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['title']; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo date("Y/m/d H:i:s",$vo['addtime'] ); ?></td>
                    <td style="text-align:center;"><?php echo $vo['views']; ?></td>
                    <td style="text-align:center;"><?php if($vo['pic'] == 0): ?>无图片<?php else: ?>有 <span class="layui-badge"><?php echo $vo['pic']; ?></span> 张图<?php endif; ?></td>
                    <td style="text-align:center;" class="layui-form"><input type="checkbox" name="istop" lay-filter="istop" lay-skin="switch" lay-text="置顶|取消" value="<?php echo $vo['id']; ?>" <?php echo !empty($vo['istop'])?"checked":""; ?>></td>
                    <td>

                        <a href="<?php echo url('erjineirong/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-warm layui-btn-mini"><i class="layui-icon">&#xe642;</i>编辑</a>
                        <a href="<?php echo url('erjineirong/del',['aid'=>$vo['id']]); ?>" class="layui-btn layui-btn-danger layui-btn-mini del"><i class="layui-icon">&#xe640;</i>删除</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div style="text-align: right;"><?php echo $list->render(); ?></div>
    </form>
</div>


<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    layui.use(['layer','form'], function(){
        var layer = layui.layer;
        var form = layui.form;
        $('.del').on('click',function () {
            var url=$(this).attr('href');
            layer.confirm('确定要删除吗?', {icon: 3, title:'温馨提示'}, function(index){
                //do something
                location.href=url;
                layer.close(index);
            });
            return false;
        });
        //监听栏目
        form.on('select(lanmu)', function(data){
            var cid=data.value;
            location.href="<?php echo url('admin/erjineirong/index'); ?>?cid="+cid;
            console.log(data.elem); //得到select原始DOM对象
            console.log(data.value); //得到被选中的值
            console.log(data.othis); //得到美化后的DOM对象
        });
        form.on('switch(istop)', function(data){

            var istop=data.elem.checked;
            var id=data.value;
            $.ajax({
                'type':'post',
                'url':"<?php echo url('admin/erjineirong/istop'); ?>",
                'data':{'id':id,'istop':istop},
                'datatype':'json',
                success:function (msg) {
                    layer.msg(msg.msg,{time:1000},function () {
                        location.href="<?php echo url('admin/erjineirong/index'); ?>"
                    });
                }
            });
        });
        //全选与取消
        form.on('checkbox(quanxuan)', function(data){
            if(data.elem.checked){
                //全选
                // $('.qx').prop('checked','checked');
                $('.qx').prop('checked',true);
                form.render();
            }else{
                //取消全选
                // $('.qx').removeAttr('checked');
                $('.qx').prop('checked',false);
                form.render();
            }
            console.log(data.elem); //得到checkbox原始DOM对象
            console.log(data.elem.checked); //是否被选中，true或者false
            console.log(data.value); //复选框value值，也可以通过data.elem.value得到
            console.log(data.othis); //得到美化后的DOM对象
        });
        //图片按钮点击事件
        $('.tupian').on('click',function () {
            if($(this).hasClass('layui-btn-disabled')){
                return false;
            }
            var aid=$(this).attr("id");
            layer.open({
                type: 2,
                title:'图片',
                area: ['700px', '450px'],
                fixed: false, //不固定
                maxmin: true,
                content: '<?php echo url("admin/erjineirong/pics"); ?>?aid='+aid
            });
        });
    });
    $(function(){
        $(window.parent.document).find('#righttitle').text($('title').text());
        //点击置顶开关
        $('.istop').on('click',function () {
            alert(1111);
        });
    });

</script>
</body>
</html>