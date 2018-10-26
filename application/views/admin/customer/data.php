<div class="card mb-3">
					<div class="card-header">
                    <a href="<?php echo site_url('admin/customers/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Name</th>
										<th>Email</th>
										<th>No Hp</th>
                                        <th>Jumlah Tiket</th>
										<th>Price</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status</th>
										
									</tr>
								</thead>
								<tbody>
									<?php foreach ($customers as $product): ?>
                                <tr>
                                    <td >
                                        <?php echo $product->name ?>
                                    </td>
                                    <td >
                                        <?php echo $product->email ?>
                                    </td>
                                    <td>
                                        <?php echo $product->no_hp ?>
                                    </td>
                                    <td>
                                        <?php echo $product->jumlah_ticket ?>
                                    </td>
                                    <td>
                                        <?php echo $product->payment ?>
                                    </td>
                                    <td>
                                    <img src="<?php echo base_url('upload/product/'.$product->bukti_pembayaran) ?>" width="64" />
                                    </td>
                                    <td>
                                        <?php echo $product->status ?>
                                    </td>
                                    
                                </tr>
                                <?php endforeach;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
