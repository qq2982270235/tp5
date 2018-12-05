<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\PHPTutorial\WWW\cintong\public/../application/admin\view\file\file_index.html";i:1533890263;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件管理</title>
	<link rel="stylesheet" href="/static/admin/vendor/layui/css/layui.css">
	<script src="/static/admin/vendor/iconfont/iconfont.js"></script>
	<style>
		.fileicon i{font-size:1.8em;color:#FFE88C;-webkit-text-stroke: 1px #F1C95F;}
		.layui-table[lay-size="lg"] td, .layui-table[lay-size="lg"] th {
			padding: 15px 10px;
		}
		.filelink{color:#20A53A;}
		.filelink:hover{
			color:#333;
		}
		.cz{display:none;}
		tr:hover .cz{display: block;}
		/*@font-face {*/
		/*font-family: 'iconfont';*/
		/*src: url('/static/admin/vendor/iconfont/iconfont.eot');*/
		/*src: url('/static/admin/vendor/iconfont/iconfont.eot?#iefix') format('embedded-opentype'),*/
		/*url('/static/admin/vendor/iconfont/iconfont.woff') format('woff'),*/
		/*url('/static/admin/vendor/iconfont/iconfont.ttf') format('truetype'),*/
		/*url('/static/admin/vendor/iconfont/iconfont.svg#iconfont') format('svg');*/
		/*}*/
		/*.my-icon{*/
		/*font-family:"iconfont" !important;*/
		/*font-size:16px;font-style:normal;*/
		/*-webkit-font-smoothing: antialiased;*/
		/*-webkit-text-stroke-width: 0.2px;*/
		/*-moz-osx-font-smoothing: grayscale;*/
		/*}*/
		.my-icon {
			width: 1em; height: 1em;
			vertical-align: -0.15em;
			fill: currentColor;
			overflow: hidden;
			font-size:30px;
		}
	</style>
</head>
<body style="padding:15px;">
<div class="head-top">
	<a href="?currdir=<?php echo iconv('GB18030','UTF-8',$curdir); ?>\.." class="layui-btn layui-btn-sm layui-btn-primary">
		<i class="layui-icon">上级目录</i>
	</a>
	<button class="layui-btn layui-btn-sm layui-btn-primary" id="reload">
	  <i class="layui-icon">&#x1002;</i>
	</button>
	<button class="layui-btn layui-btn-sm layui-btn-danger">当前路径：<?php echo iconv('GB2312','UTF-8',$curdir); ?></button>
	<span class="layui-btn layui-btn-sm layui-btn-success" style="float:right;">共<?php echo $num['dir']; ?>个目录，<?php echo $num['file']; ?>个文件</span>
</div>
<div class="file-list">
	<table class="layui-table" lay-size="lg" lay-skin="line">
	  <thead>
		<tr>
		  <th>文件名</th>
		  <th>文件大小</th>
			<th>缩略图</th>
		  <th>创建时间</th>
		  <th>最后修改时间</th>
		  <th style="text-align:right;width:300px;">操作</th>
		</tr>
	  </thead>
	  <tbody>
	  <?php if(is_array($dirs) || $dirs instanceof \think\Collection || $dirs instanceof \think\Paginator): $i = 0; $__LIST__ = $dirs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<tr>
			<td class="fileicon">
				<svg class="my-icon" aria-hidden="true">
					<use xlink:href="<?php echo $v['icon']; ?>"></use>
				</svg>
				<a href="<?php echo !empty($v['flag'])?'?currdir='.$v['currdir']:'javascript:;'; ?>"><?php echo $v['name']; ?></a>
			</td>
		  <td><?php echo !empty($v['flag'])?"目录":size_format($v['size'],2); ?></td>
			<?php $p=urlencode($v['currdir']);?>
			<td><?php echo getpics($p,40); ?></td>
		  <td><?php echo date("Y-m-d",$v['ctime']); ?></td>
		  <td><?php echo date("Y-m-d",$v['mtime']); ?></td>
		  <td>
			<span class="cz">
				<a class="filelink" href="javascript:;" onclick="DeleteFile('<?php echo urlencode($v['currdir']); ?>')">删除</a> |
					<?php if($v['flag'] == '0'): ?>
				<a class="filelink" href="<?php echo url('file/edit'); ?>?file=<?php echo urlencode($v['currdir']); ?>">编辑</a> |
					<?php endif; ?>
				<a class="filelink" href="javascript:;" onclick="ReName('<?php echo urlencode($v['currdir']); ?>','<?php echo basename($v['currdir']); ?>')">重命名</a>
					<?php if($v['flag'] == '0'): ?>
				|<a class="filelink" href="<?php echo url('file/download'); ?>?currdir=<?php echo urlencode($v['currdir']); ?>">下载</a>
					<?php endif; ?>
			</span>
		  </td>
		</tr>
	  <?php endforeach; endif; else: echo "" ;endif; ?>
	  </tbody>
	</table>
	<div id="page">
	</div>
</div>
<script src="/static/admin/vendor/js/jquery.js"></script>
<script src="/static/admin/vendor/layui/layui.js"></script>
<script>
    layui.use(['laypage','layer'], function(){
        var laypage = layui.laypage;
        var layer = layui.layer;
        //执行一个laypage实例
        laypage.render({
                elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
                ,count:<?php echo $page['count']; ?> //数据总数，从服务端得到
            ,limit:<?php echo $page['limit']; ?>
    ,curr:<?php echo $page['curr']; ?>
    ,layout:['prev', 'page', 'next','skip']
            ,jump: function(obj, first){
            //obj包含了当前分页的所有参数，比如：
            console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
            console.log(obj.limit); //得到每页显示的条数
            //首次不执行
            if(!first){
                //do something
            <?php $path=iconv('GB2312','UTF-8',$curdir.DIRECTORY_SEPARATOR);?>
                location.href="?&currdir=<?php echo urlencode($path); ?>&page="+obj.curr;
            }
        }
    });
    });
    //文件删除
    //file 要删除文件的绝对路径
    function DeleteFile(file) {
        layer.confirm('确认要删除该文件（目录）吗?', {icon: 3, title:'温馨提示'}, function(index){
            //do something
            $.ajax({
                type:'post',
                url:"<?php echo url('file/del'); ?>",
                data:{'file':file},
                success:function (data) {
                    layer.msg(data.msg,{time:1000},function () {
                        location.reload();
                    });
                }
            });
            layer.close(index);
        });

    }
    //重命名
    //file 要重命名文件/目录的绝对路径
    function ReName(file,filename) {
        layer.prompt({
            value:filename,
            title: '请输入新的文件名',
        },function(value, index, elem){
            $.ajax({
                type:"post",
                url:"<?php echo url('file/renames'); ?>",
                data:{'file':file,'filename':value},
                success:function (data) {
                    layer.msg(data.msg,{time:1000},function () {
                        if(data.code==1){
                            location.reload();
                        }
                    });
                }
            });
            layer.close(index);
        });
    }
    $(function(){
        $(window.parent.document).find('#righttitle').text($('title').text());
        $('#reload').on('click',function(){
            location.reload();
        })
    })
</script>
</body>
</html>
