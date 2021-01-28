<?php require APPROOT .'/view/include/header'. '.php';?>

	<!--main content start-->
	<?php if($_SESSION['role'] == 1):?>
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-user"></i>
						<div class="count">6.674</div>
						<div class="title">total Users</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-plus"></i>
						<div class="count">7.538</div>
						<div class="title">Deposits</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-minus"></i>
						<div class="count">4.362</div>
						<div class="title">Withdrawals</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-cubes"></i>
						<div class="count">1.426</div>
						<div class="title">Stock</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		</section>
		</section>
		
		   

		  <?php elseif($_SESSION['role'] == 2):?>

		  <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class=""></i>dashboard</h3>
					<ol class="breadcrumb">
						<!-- <li><i class="fa fa-home"></i><a href="index.html">Home</a></li> -->
						<li><?php echo $_SESSION['surname'];?>, Welcome to <?php echo SITENAME;?></li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">

				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-list"></i><a href="index.html">Users</a></li>
						<li><i class="fa fa-bank"></i>Account Summary</li>						  	
					</ol>
				</div>


			  	   <div class="col-lg-12">
                      <div class="table-responsive">
                          <header class="panel-heading">
                              Checking & Savings
                          </header>
                          <table class="table table-hover table-condensed">
                              <thead>
                              <tr>
                              	  <th>Acc number</th>
                                  <th>current balance</th>
                                  <th>availabe balance</th>
                                  <th>last transaction</th>
                              </tr>
                              </thead>
                            <?php foreach($data['all'] as $all):?>
                            	<?php if(($data['user']->id) == ($all->user_id)):?>
                              <tbody>
                              <tr>
                              	  <td><?php echo $all->acc_num;?></td>
                                  <td>&#36;<?php echo number_format($all->current_bal, 2);?></td>
                                  <td>&#36;<?php echo number_format($all->available_bal, 2);?></td>
                                  <td><?php echo $all->dod;?></td>
                              </tr>
                              </tbody>
                          <?php endif;?>
                          	<?php endforeach;?>
                              
                          </table>
                          <td>
	                        <!-- <a href="<?php echo URLROOT;?>/users/transfer/<?php echo $all->depositId;?>"> --><button class="btn btn-primary" type="submit" disabled="disabled" style="margin-top: 10px;">Transfer Funds</button>
  							         </td>
                      </div>
                      <div>Dear <?php echo $data['user']->firstname;?> your account has been restricted due to inactivity!</div>
                  </div>				
				
			</div><!--/.row-->
			</section>
			</section>
		
       <?php endif;?>
			
<?php require APPROOT .'/view/include/footer'. '.php';?>
