<div class="col-xs-12">
	<h3 class="header smaller lighter blue">Users</h3>

	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
	<div class="widget-box widget-color-blue ui-sortable-handle" id="widget-box-9">
		<div class="widget-header">
			<h5 class="widget-title">Table users</h5>
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
						<a href="#" onclick="showAddForm('user/load_data_for_add_row/')">Add row</a>
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
					</th><th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending">ID</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Username</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="password: activate to sort column ascending">password</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="status: activate to sort column ascending">status</th>
					<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
				</thead>
				<tbody>
					<tr role="row" class="odd">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace">
								<span class="lbl"></span>
							</label>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								
									
									<a data-toggle="modal" data-target="#myModal" >
							<div class="icon-blue">
								<i class="ace-icon fa fa-search-plus bigger-130"></i>
							</div>

							
						</a>
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Modal Header</h4>
								      </div>
								      <div class="modal-body">
								        <p>Some text in the modal.</p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>

								  </div>
								</div>
								<a class="green" href="#" onclick="showEditForm('2','user/load_data_for_edit_row/')">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#" onclick="deleteRow('2','user/del_row/')">
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
					</tr><tr role="row" class="even">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace">
								<span class="lbl"></span>
							</label>
						</td>

						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="#" onclick="showEditForm('3','user/load_data_for_edit_row/')">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#" onclick="deleteRow('3','user/del_row/')">
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
					</tr><tr role="row" class="odd">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace">
								<span class="lbl"></span>
							</label>
						</td>

						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="#" onclick="showEditForm('4','user/load_data_for_edit_row/')">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#" onclick="deleteRow('4','user/del_row/')">
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
					</tr><tr role="row" class="even">
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace">
								<span class="lbl"></span>
							</label>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="#" onclick="showEditForm('13','user/load_data_for_edit_row/')">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#" onclick="deleteRow('13','user/del_row/')">
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
					</tbody>
				</table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dynamic-table" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next"><a href="#">Next</a></li></ul></div></div></div></div>
			</div>
			<!-- div.dataTables_borderWrap -->
		</div>
	</div>