<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/admin\view\erjineirong\erjineirong_add.html";i:1536650056;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加内容</title>
    <link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/custom/css/style.css">
    <style>
        .layui-form-select dl{z-index:2;}
        #thumb_list{padding-top: 8px;}
        #thumb_list img{border:1px solid #DDD;padding: 3px;border-radius: 5px;}
        #thumb_list span{position:relative; display: inline-block;margin-right: 5px;}
        #thumb_list span .delimg{position: absolute;right:3px;top:3px;}
    </style>
</head>
<body style="padding:10px 10px;margin-bottom: 50px;">
<div class="layui-container">
    <form class="layui-form" action="?" method="post">
        <div class="layui-form-item">
            <label class="layui-form-label">所属栏目</label>
            <div class="layui-input-inline">
                <select name="cid" required lay-verify="required">
                    <option value="">请选择所属栏目</option>
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
            <div class="layui-input-block">
                <input type="text" name="title" required lay-verify="required" placeholder="请输入内容标题" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">关键字</label>
            <div class="layui-input-block">
                <input type="text" name="keyword"  placeholder="请输入内容关键字" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">描述</label>
            <div class="layui-input-block">
                <textarea name="desc" placeholder="请输入内容描述" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">摘要</label>
            <div class="layui-input-block">
                <textarea name="remark"  placeholder="请输入内容摘要" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">作者</label>
            <div class="layui-input-inline">
                <input type="text" name="author" value="<?php echo $config['author']; ?>" placeholder="请输入作者" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">浏览次数</label>
            <div class="layui-input-inline">
                <input type="text" name="views" value="0" required lay-verify="required" placeholder="请输入浏览次数" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">添加时间</label>
            <div class="layui-input-inline">
                <input type="text" name="addtime" value="<?php echo date('Y/m/d H:i:s',time())?>" required lay-verify="required" placeholder="请输入添加时间" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否置顶</label>
            <div class="layui-input-inline">
                <input type="checkbox" name="istop" lay-skin="switch" lay-text="置顶|取消" value="1">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">缩略图</label>
            <div class="layui-input-block">
                <input type="text" name="pic"  placeholder="请上传缩略图" autocomplete="off" class="layui-input">
                <button type="button" class="layui-btn" id="uploadimg">
                    <i class="layui-icon">&#xe67c;</i>上传缩略图</button>
                <div id="thumb_list">

                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">内容</label>
            <div class="layui-input-block">
                <div id="content" name="content" type="text/plain" style="height:300px;"></div>
            </div>
        </div>
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">添加</button>

            </div>
        </div>
    </form>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/admin/vendor/neditor/neditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/admin/vendor/neditor/editor_api.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script src="/static/admin/custom/js/admin.js"></script>
<script>
    var ue = UE.getEditor('content',{
        initialFrameWidth:null,
    });
    //Demo
    layui.use(['form','upload'], function(){
        var form = layui.form;
        var upload = layui.upload;
        //监听提交
        form.on('submit(formDemo)', function(data){

        });
        //创建一个上传组件
        upload.render({
            elem: '#uploadimg'
            ,url: '<?php echo url("common/uploadimga"); ?>'
            ,accept: 'file' //允许上传的文件类型
            ,field: "imgfile"
            ,type:"file"
            ,size: 20000048 //最大允许上传的文件大小

            ,done: function(res, index, upload){ //上传后的回调
                layer.close(layer.index,{isOutAnim :true});
                setTimeout(function () {
                    layer.msg(res.msg);
                    if(res.code==1){
                        var pic=$('input[name=pic]').val();
                        if(pic==""){
                            $('input[name=pic]').val(res.img);
                        }else{
                            $('input[name=pic]').val(pic+","+res.img);
                        }

                        var str;
                        str="<span>";
                        str=str+'<img src="/'+res.img+'" alt="" height="80">';
                        str=str+'<button type="button" class="layui-btn layui-btn-danger layui-btn-mini delimg" onclick="delimg(this);" data="'+res.img+'">';
                        str=str+'<i class="layui-icon">&#xe640;</i>';
                        str=str+'</button>';
                        str=str+'</span>';
                        $('#thumb_list').append(str);
                    }else{

                    }

                },500);

            }
            ,before:function () {
                var index = layer.load(0);
            }
            //,……
        })
    });
    $(function(){
       $(window.parent.document).find('#righttitle').text($('title').text());
    });
    //删除栏目图片
    function delimg(obj) {
        var picurl=$(obj).attr('data');
        $.ajax({
            type:"post",
            url:"<?php echo url('common/delimg'); ?>",
            data:{'url':picurl},
            success:function (res){
                var picvalue=$('input[name=pic]').val();
                var str="";
                if(res.code==1 || res.code==2){
                    //栏目图文本框中图片地址处理
                    if(picvalue==picurl){
                        $('input[name=pic]').val('');
                    }else{
                        str=picvalue.replace(picurl+",","");
                        str=str.replace(","+picurl,"");
                        $('input[name=pic]').val(str);
                    }
                    //删除/移除缩略图
                    $(obj).parent().remove();
                    layer.msg(res.msg);
                }
                if(res.code==0){
                    layer.msg(res.msg);
                }
            }
        });
    }
</script>
</body>
</html>