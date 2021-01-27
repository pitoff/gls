<?php require APPROOT .'/view/include/header'. '.php';?>      
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row" style="margin-top: 20px;">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-list"></i><a href="index.html">Users</a></li>
						<li><i class="fa fa-bank"></i>Account Summary</li>						  	
					</ol>
				</div>
			  </div>

		  	<div class = "container">
			  	<div class="row">
			  	   <div class="col-lg-12">
                      <section class="table-responsive">
                          <header class="panel-heading">
                              Checking & Savings
                          </header>
                          <table class="table table-hover">
                              <thead>
                              <tr>
                              	  <th>Acc number</th>
                                  <th>current balance</th>
                                  <th>availabe balance</th>
                              </tr>
                              </thead>
                            <?php foreach($data['all'] as $all):?>
                            	<?php if(($data['user']->id) == ($all->user_id)):?>
                              <tbody>
                              <tr>
                              	  <td><?php echo $all->acc_num;?></td>
                                  <td>&#36;<?php echo number_format($all->current_bal, 2);?></td>
                                  <td>&#36;<?php echo number_format($all->available_bal, 2);?></td>
                              </tr>
                              </tbody>
                          <?php endif;?>
                          	<?php endforeach;?>
                              
                          </table>
                          <td>
	                        <!-- <a href="<?php echo URLROOT;?>/users/transfer/<?php echo $all->depositId;?>"> --><button class="btn btn-primary" type="submit" disabled="disabled" style="margin-top: 10px;">Transfer Funds</button>
  							         </td>
                      </section>
                      <div>Dear <?php echo $data['user']->firstname;?> your account has been restricted due to inactivity!</div>
                  </div>
			  </div>
		  </div>
		</section>
</section>


<?php require APPROOT .'/view/include/footer'. '.php';?>
