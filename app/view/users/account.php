<style type="text/css">
  .detailstyle{
  font-weight: bold;
}
</style>
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
        

          
			  	   <div class="col-lg-8 col-lg-offset-2">
                      <div class="table-responsive">
                          <header class="panel-heading">
                              Checking & Savings
                          </header>
                          <!-- <table class="table table-hover table-condensed">
                              <thead>
                              <tr>
                              	  <th>Acc number</th>
                                  <th>current balance</th>
                                  <th>availabe balance</th>
                                  <th>last transaction</th>
                              </tr>
                              </thead> -->
                            <?php foreach($data['all'] as $all):?>
                            	<?php if(($data['user']->id) == ($all->user_id)):?>
                              <!-- <tbody> -->
                              <!-- <tr>
                              	  <td><?php echo $all->acc_num;?></td>
                                  <td>&#36;<?php echo number_format($all->current_bal, 2);?></td>
                                  <td>&#36;<?php echo number_format($all->available_bal, 2);?></td>
                                  <td><?php echo $all->dod;?></td>
                              </tr>
                              </tbody> -->
                              <div style="padding-top: 5px; padding-left: 5px;">
                              <p><span class="detailstyle">Account Number: <?php echo $all->acc_num;?></span></p>
                              <p><span class="detailstyle">Current Balance: &#36;<?php echo number_format($all->current_bal, 2);?></span></p>
                              <p><span class="detailstyle">Available Balance: &#36;<?php echo number_format($all->available_bal, 2);?></span></p>
                              <p><span class="detailstyle">Last transaction: <?php echo $all->dod;?></span></p>
                              </div>
                          <?php endif;?>
                          	<?php endforeach;?>
                              
                          <!-- </table> -->
                          <p>
	                        <!-- <a href="<?php echo URLROOT;?>/users/transfer/<?php echo $all->depositId;?>"> --><button class="btn btn-primary" type="submit" disabled="disabled" style="margin-top: 10px;">Transfer Funds</button>
  							         </p>
                      </div>
                      <div>Dear <?php echo $data['user']->firstname;?> your account has been restricted due to inactivity!</div>
                  </div>
                </div>
		</section>
</section>


<?php require APPROOT .'/view/include/footer'. '.php';?>
