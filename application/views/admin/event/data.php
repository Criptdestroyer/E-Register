<div class="card mb-3">
					<div class="card-header">
                    <a href="<?php echo site_url('admin/event/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Title</th>
										<th>Location</th>
										<th>Time</th>
                                        <th>Description</th>
										<th>Photo</th>
										
									</tr>
								</thead>
								<tbody>
                                <?php foreach ($events as $product): ?>
                                <tr>
									
                                    <td >
                                        <?php echo $product->title ?>
                                    </td>
                                    <td >
                                        <?php echo $product->details ?>
                                    </td>
                                    <td>
                                        <?php echo $product->updated_at ?>
                                    </td>
                                    <td class="small">
											<?php echo substr($product->description, 0, 120) ?>...
									</td>
                                    
                                    <td>
										<img src="<?php echo base_url('upload/event/'.$product->photo) ?>" width="64" />
                                    </td>
                                    
                                    <td >
                                    
                                </tr>
                                <?php endforeach;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
