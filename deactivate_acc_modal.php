

    <link href="newmodalwil/animate.css" rel="stylesheet"><!--sele-->
	
                            <div class="modal inmodal" id="myModaldeaacc" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								<form class="form-horizontal form-label-left" novalidate method="post">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Deactivate Account</h4>
                                            
                                        </div>
                                        <div class="modal-body">
								 <table class="" style="width:100%;">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">User Id </th>
                                                <th class="column-title">Full Name </th>
                                                <th class="column-title">User Type</th>  
                                                <th class="column-title">E-mail</th>  
                                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                                </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
								
								<?php
						          include('dbcon.php');
                                  $q = mysql_query("SELECT * FROM account where state = '1' "); 
								  $array = array();
								  while($r = mysql_fetch_array($q)){
								$user_id = $r['user_id'];
								
								 ?>
								<td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                    <td class=" "><?php echo $user_id;?></td>
                                                <td class=" "><?php echo $r['f_name']." ".$r['l_name'];  ?></td>
                                                <td class=" "> <?php echo $r['user_type'];?> </td>
                                                <td class=" "><?php echo $r['e_mail'];?></td>
                                <td class="last ">  <?php echo "<a rel='facebox' href='deacc_account_success.php?ID=".$r['user_id']."' class='btn btn-danger'>Deactivate</a>";?></td>
								  
								 </tr>		
								 <?php } ?>	
								 								 <?php
								 
									 $zas = mysql_query("SELECT * FROM account where state = '0' "); 
										  $X=0;
										  while($z = mysql_fetch_array($zas)){
											$state=$z['state'];
											if($state==0){
											$X++;
											}
											else{
											$X=0;
											}}
											
								  
								 echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." $X account is deactivated .".'</strong>';
								echo '</div>';
								?>
                            </tbody>

                                    </table><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
							
    <script src="newmodalwil/jquery-2.1.1.js"></script><!--sele-->
<!--sele-->
				
	