	<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>
				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>

				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>

				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->

		<ul class="nav nav-list">
			<li class="">
				<a href="user">
					<i class="menu-icon fa fa-user-plus"></i>
					<span class="menu-text"> User </span>
				</a>
				<b class="arrow"></b>
			</li>
			<li class="" style="height: 55px">
				<a href="<?php echo base_url()?>index.php/xuly_ad/tkpk">
					<i class="menu-icon fa fa-list-alt"></i>
					<span class="menu-text">Trưởng Khoa, Trưởng bộ môn </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="<?php echo base_url()?>index.php/xuly_ad/giangvien">
					<i class="menu-icon fa fa-pencil-square-o"></i>
					<span class="menu-text">Giảng Viên </span>
				</a>
				<b class="arrow"></b>
			</li>
				
			<li class="">
				<a href="<?php base_url() ?>index.php/welcome/product" class="dropdown-toggle">
					<i class="menu-icon fa fa-desktop"></i>
					<span class="menu-text">Hội đồng</span>
									</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url() ?>index.php/xuly_ad/thongbao">
					<i class="menu-icon fa fa-desktop"></i>
					<span class="menu-text"> thông báo tin tức</span>
				</a>
				<b class="arrow"></b>
			</li>
		</ul><!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>