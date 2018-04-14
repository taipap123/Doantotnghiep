<form action="<?php echo base_url()?>index.php/welcome/insert_banner" method="post" enctype="multipart/form-data">
	<div class="modal fade" id="them" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel">Insert Banner</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<form class="form-horizontal">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<label class="control-label col-xs-3" >Title</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" placeholder="Nhập title" name="title">
										</div>
									</div>
									<br>
									<div class="form-group" style="margin-top: 5px">
										<label class="control-label col-xs-3">Image</label>
										<div class="col-xs-9">
											<input type="file" class="form-control" name="hinhanh1">
										</div>   
									</div>									
									<div class="form-group" style="margin-top: 5px">
										<label class="control-label col-xs-3">description</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="description">
										</div>   
									</div>
									<div class="form-group" style="margin-top: 5px">
										<label class="control-label col-xs-3">link</label>
										<div class="col-xs-9">
											<textarea name="link" cols="30" rows ="15" class="form-control"></textarea>
										</div>   
									</div>
									<div class="form-group" style="margin-top: 5px">
										<label class="control-label col-xs-3">position</label>
										<div class="col-xs-9">
											<textarea name="position" cols="30" rows ="15" class="form-control"></textarea>
										</div>   
									</div>
									<div class="form-group" style="margin-top: 5px">
										<label class="control-label col-xs-3">status</label>
										<div class="col-xs-9">
											<textarea name="status" cols="30" rows ="15" class="form-control"></textarea>
										</div>   
									</div>

								</div>

							</div>

						</form>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" >Thoát</button> 
					<input type="submit" class="btn btn-primary" name="them" id="them" value="Thêm">
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Banner</h3>

	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
	<div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-9">
		<div class="widget-header">
			<h5 class="widget-title">Table Banner</h5>

			<div class="widget-toolbar">
				<a href="#" id="collapse-table" data-action="collapse">
					<i class="1 ace-icon fa bigger-125 fa-chevron-up"></i>
				</a>
			</div>

			<div class="widget-toolbar no-border">
				<button class="btn btn-xs btn-light bigger">
					<i class="ace-icon fa fa-arrow-left"></i>
					Prev
				</button>
				<button class="btn btn-xs bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
					<i class="ace-icon fa fa-cog icon-on-right"></i>
					Action
				</button>

				<ul class="dropdown-menu dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
					<li>
						<a href="#" onclick="showAddForm('news/load_data_for_add_row/')">Add row</a>
					</li>

					<li>
						<a href="#modal-crawl" data-toggle="modal">Crawl from url</a>
					</li>

					<li>
						<a href="#">Something else here</a>
					</li>

					<li class="divider"></li>

					<li>
						<a href="#">Separated link</a>
					</li>  
				</ul>
			</div>
		</div>
		<!-- div.table-responsive -->
		<div class="widget-body" style="">
			<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="row"><div class="col-xs-6"><div class="dataTables_length" id="dynamic-table_length"><label>Display <select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records</label></div></div><div class="col-xs-6"><div id="dynamic-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"></label></div></div></div><table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
				<thead>
					<tr role="row"><th class="center sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="
						: activate to sort column ascending">
						<label class="pos-rel">
							<input type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</th><th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending">Banner_id</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending">Title</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending">Description</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="link: activate to sort column ascending">Link</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="position: activate to sort column ascending">position</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="status: activate to sort column ascending">Status</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="image: activate to sort column ascending">Image</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
				</thead>
				<tbody>
					<?php foreach ($banner as $listbanner) { ?>
					<tr role="row" class="odd">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace">
								<span class="lbl"></span>
							</label>
						</td>
						<td><?php echo $listbanner['banner_id'] ?></td>
						<td><?php echo $listbanner['title'] ?></td>
						<td><?php echo $listbanner['descripttion'] ?></td>
						<td><?php echo $listbanner['link'] ?></td>
						<td><?php echo $listbanner['position'] ?></td>
						<td><?php echo $listbanner['status'] ?></td>
						<td><img style="height: 50px; width: 50px" src="<?php echo base_url()?>images/<?php echo $listbanner['image'] ?>"></td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#" data-toggle="modal" data-target="#them">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>
								<a class="green" href="<?php echo base_url()?>index.php/welcome/edit_banner/<?php echo $listbanner['banner_id'] ?>" onclick="showEditForm('23','news/load_data_for_edit_row/')">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="<?php echo base_url() ?>index.php/welcome/delete_banner/<?php echo $listbanner['banner_id'] ?>">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
							</div>

							<div class="hidden-md hidden-lg">
								<div class="inline pos-rel">
									<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
										<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
									</button>

									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
										<li>
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="ace-icon fa fa-search-plus bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#modal-table" class="tooltip-success" data-rel="tooltip" data-toggle="modal" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 10 of 60 entries<span class="select-info"><span class="select-item">1 row selected</span><span class="select-item"></span><span class="select-item"></span></span></div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dynamic-table" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next"><a href="#">Next</a></li></ul></div></div></div></div>
		</div>
		<!-- div.dataTables_borderWrap -->
	</div>
</div>