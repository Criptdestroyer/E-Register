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
										<th>Action</th>
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
                                        <?php echo $product->bukti_pembayaran ?>
                                    </td>
                                    <td>
                                        <?php echo $product->status ?>
                                    </td>
                                    <td >
                                            <a href="<?php echo site_url('admin/customers/edit/'//.$customers->customer_id
                                            ) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/customers/delete/'//.$customers->customer_id
                                            )?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
                                </tr>
                                <?php endforeach;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
