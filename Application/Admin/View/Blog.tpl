

{extends file='Index.tpl'}
{block name=title}
    博文管理
{/block} 
 
{block name=content}   
    
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
                                            <div class="control-group">
                                                        <label class="control-label">昵称：</label>
                                                        <div class="controls">
                                                             <input type="text" name="nickname" placeholder="请输入改正昵称"/>
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
											<th>标题</th>
											<th>作者</th>
                                                                                        <th>点击量</th>
                                                                                        <th>添加时间</th>
                                                                                        <th>状态</th>
                                                                                        <th>操作</th>
										</tr>
									</thead>
									<tbody>
                                                                            {foreach from=$blog item=v}
										<tr class="hero_list" >
											<td style="text-align: center;line-height: 117px;">{$v.id}</td>
											<td style="text-align: center;line-height: 117px;">{$v.title}</td>
											<td style="text-align: center;line-height: 117px;">{$v.u_name}</td>
                                                                                        <td style="text-align: center;line-height: 117px;">{$v.click}</td>
                                                                                        <td style="text-align: center;line-height: 117px;">{$v.data}</td>
                                                                                         <td style="text-align: center;line-height: 117px;">{if $v.status==1}开启{else}关闭{/if}</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><a href="javascript:;" ><button  class="off" id="{$v.id}" status="{$v.status}">{if $v.status ==1}关闭博文{else}开启博文{/if}</button></a> 
										</tr>
                                                                            {foreachelse}
                                                                                <tr>
                                                                                    <td>暂无数据</td>
                                                                                </tr>
                                                                            {/foreach}
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
 {/block}
 
 
 {block name=js}
     
     <script>
         {literal}
            
           
           //修改
           $(".off").click(function(){

                var id = $(this).attr("id");
                var status = $(this).attr("status");

                    $.ajax({
                       type:"post",
                       url:"index.php?m=Admin&a=blogUpdate&c=Index",
                       data:{id:id,status:status},
                       success:function(data){
                               alert("修改成功");
                               history.go(0);
                       }
                   });
               })
               
          {/literal}
     </script>
 
 {/block}
