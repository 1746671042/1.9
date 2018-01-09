<?php
/* Smarty version 3.1.30, created on 2018-01-04 15:29:44
  from "D:\phpStudy\WWW\php\webs\Application\Admin\View\Admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4dd7e864c232_80074722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2bc3f1186c1dfc43f5ca16fa059c4194fff02ad' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\webs\\Application\\Admin\\View\\Admin.tpl',
      1 => 1515050981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Index.tpl' => 1,
  ),
),false)) {
function content_5a4dd7e864c232_80074722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246555a4dd7e8615f73_63421814', 'title');
?>
 
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173725a4dd7e863eae3_67882123', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73975a4dd7e86496d6_25952131', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_246555a4dd7e8615f73_63421814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    管理员管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_173725a4dd7e863eae3_67882123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    
     <div  id="update" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#update').hide()"></button>
					<h3 id="herojineng" style="color:red;"></h3>
				</div>
				<div class="modal-body">
					<form  class="form-horizontal" id="skillForm">
                                            <input type="hidden" name="id" value=""/>
                                                <div class="control-group">
                                                        <label class="control-label">名称：</label>
                                                        <div class="controls">
                                                            <input type="text" name="name" placeholder="请输入改正名称"/>
                                                        </div>
                                                </div>
                                                <div class="control-group">
                                                        <label class="control-label">密码：</label>
                                                        <div class="controls">
                                                             <input type="password" name="pwd" placeholder="请输入改正密码"/>
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: none;" id="help"></span>
                                                    <button type="button" class="btn blue" id="updates"><i class="icon-ok"></i> 确认</button>
                                            </div>
                                        </form>
				</div>
			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
    
    
     <div class="page-container row-fluid">


		<!-- BEGIN PAGE -->
			
			<!-- BEGIN PAGE CONTAINER-->        

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">
							管理员列表
						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">后台管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">皮肤管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">皮肤列表</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>Editable Table</div>

								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<div class="btn-group">
                                                                            <a href="index.php?class=skin&action=add"
										<button id="sample_editable_1_new" class="btn green" >
										添加 <i class="icon-plus"></i>
										</button>
                                                                             </a>
									</div>
								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>
										<tr>
											<th>id</th>
											<th>名称</th>
											<th>密码</th>
                                                                                        <th>操作</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="hero_list" >
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['pwd'];?>
</td>
                                                                                       
                                                                                        <td style="text-align: center;line-height: 117px;"><a href="javascript:;" ><button  class="updata" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</button></a> | <button id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="color: red;" class="delete">删除</button></td>
										</tr>
                                                                            <?php
}
} else {
?>

                                                                                <tr>
                                                                                    <td>暂无数据</td>
                                                                                </tr>
                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>
 <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_73975a4dd7e86496d6_25952131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
            $(".delete").click(function(){
                var id = $(this).attr("id");
                if(confirm("确定要删除吗！")){
                    $.ajax({
                      type:"post",
                      url:"index.php?m=Admin&a=delete&c=Index",
                      data:{id:id},
                      success:function(data){
                          history.go(0);
                      }
                  });
                }
                  

           })
           
           //修改
           $(".updata").click(function(){
               $("#update").show();
               var id = $(this).attr("id");
                
               $("#update input[name='id']").val(id);
               $("#updates").click(function(){
                var id = $("#update input[name='id']").val();
                var name = $("#update input[name='name']").val();
                var pwd = $("#update input[name='pwd']").val();
                if(pwd=="" ||name==""){
                    alert("数据不完整");
                }else{
                    $.ajax({
                       type:"post",
                       url:"index.php?m=Admin&a=update&c=Index",
                       data:{id:id,name:name,pwd:pwd},
                       success:function(data){
                           console.log(data);
                             history.go(0);
                       }
                   });
                }
                
               })
               
           })
          
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
