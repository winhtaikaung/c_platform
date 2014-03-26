
							  <thead>
								  <tr>
									  <th>Username</th>
									  <th>Date registered</th>
                                                                          <th>Date registered</th>
									                                           
								  </tr>
							  </thead>   
							  <tbody >
                                                                <?foreach($output as $row){?>
                                                               <tr >

                                                                                 <td ><?=$row->uom_name ?></td>
                                                                                 <td ><?=$row->remark?></td>
                                                                                  <td>
                                                                                      <a class="btn btn-success" href="<?=  base_url()?>">
										<i class="icon-zoom-in icon-white"></i>  
                                                                                    View                                            
                                                                                </a>
                                                                                      <a class="btn btn-info" href="<?=  base_url()?>">
										<i class="icon-zoom-in icon-white"></i>  
                                                                                    Edit                                            
                                                                                </a>
                                                                                      <a class="btn btn-danger" href="<?=  base_url()?>">
										<i class="icon-zoom-in icon-white"></i>  
                                                                                    Delete                                            
                                                                                </a>
                                                                                  </td>
                                                                         </tr>
                                                                <?}?>
                                                        </tbody>
					  