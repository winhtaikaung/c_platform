
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
                                                                                      
                                                                                      <a class="btn btn-success" href="<?=  base_url()?>uom/recipe/<?=$row->id?>">
										<i class="icon-zoom-in icon-white"></i>  
                                                                                    Recipe                                           
                                                                                </a>
                                                                                  </td>
                                                                         </tr>
                                                                <?}?>
                                                        </tbody>
					  
