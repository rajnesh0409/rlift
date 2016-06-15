 <div id="wrap">
 
  <?php echo $this->element('menu'); ?>
 
<!--PAGE CONTENT -->
        <div id="content">
		
		<div class="inner" style="padding: 40px; padding-top: 15px;">
		
		
		<div class="row">
									    <div class="col-lg-12">
										<h3 class="page-header" style="text-transform: uppercase;">
										
										<?php 
										
										if(isset($driver)) { 
										echo $driver;
										} 
										
										if(isset($customer)) { 
										echo $customer;
										}
										
										?>
										
										 CANCEL RIDES DETAILS</h3>
									   </div>
								       </div>
									   
								   
	<div class="row">
<div class="col-md-8">											   
		
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
	<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );
</script>


<style>
div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
    }
	
th, td {
    text-align: center !important;
   }	
	
</style>

<table id="example" class="display compact" cellspacing="0" width="695px">
        <thead>
            
			
			<tr>
               
				
				<?php 
				if(!isset($driver)) { ?>
				<th>Driver name</th>
                <?php } ?>
                
				<?php 
				if(!isset($customer)) { ?>
				<th>Customer name</th>
                <?php } ?>
				
				<th>Date</th>
                <th>Time</th>
				<th>Reason</th>

            </tr>
        </thead>
       

	   <tbody>
            
		<?php   $i = 1;
			        foreach($rides as $key=>$value) { 
		
			?>
			
			<tr>

				<?php
				if(!isset($driver)) { ?>
				<td><?php echo $value['CancelRide']['dname']; ?></td>
				<?php } ?>

				<?php
				if(!isset($customer)) { ?>
				<td><?php echo $value['CancelRide']['cname']; ?></td>
				<?php } ?>

				<td><?php echo $value['CancelRide']['cancelling_date']; ?></td>
				<td><?php echo $value['CancelRide']['cancelling_time']; ?></td>
				<td><?php echo $value['CancelRide']['reason']; ?></td>

            </tr>
     
			<?php  $i++; }  ?>
			
        </tbody>
		
    </table>
	
	</div>
	
		<div class="col-md-4">
	</div>
	
	</div>
		</div>
	</div>
	</div>
	
	
	
