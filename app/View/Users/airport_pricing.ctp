 
 <div id="wrap">
 
  <?php echo $this->element('menu'); ?>
 
<!--PAGE CONTENT -->
        <div id="content">
           
							<div class="inner" style="padding: 40px; padding-top: 15px;">
										<div class="row">
									    <div class="col-lg-12">
										<h3 class="page-header">ADD PRICING FOR AIRPORT</h3>
									   </div>
								       </div>
									   
										
		<div class="smart-wrap">
		
    	<div class="smart-forms smart-container wrap-3" style="float:left;box-shadow: 0 0px 0px rgba(0,0,0,0.65);    margin-top: -14px;
         margin-left: -20px;">
        
        	
            
             <?php echo $this->Form->create('Users'); ?>
            	<div class="form-body" style="width: 42%;">
 
             <div class="section">
                        <label class="field select prepend-icon">
                            <select id="cab_type" name="cab_type" required>
                                <option selected="selected" disabled value="">Select cab type</option>
                               <?php foreach($vehtype as $key=>$value) { ?>
								<option value="<?= $value ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                            <i class="arrow double"></i>
                            <span class="field-icon"><i class="fa fa-taxi"></i></span>   
                            <b class="tooltip tip-right-top"><em> please choose cab type </em></b>        							
                        </label>  
                    </div><!-- end section --> 
					
					  <div class="section">
                        <label class="field select prepend-icon">
                            <select id="city" name="city" required>
                                <option selected="selected" disabled value="">choose city</option>
                               <?php foreach($cities as $key=>$value) { ?>
								<option value="<?= $value['City']['city_name'] ?>" <?php  if($value['City']['city_name'] == 'Bangalore') { echo "selected"; } ?>><?= $value['City']['city_name'] ?></option>
                                <?php } ?>
                            </select>
                            <i class="arrow double"></i>
                            <span class="field-icon"><i class="fa fa-map-marker"></i></span>   
                            <b class="tooltip tip-right-top"><em> please choose city </em></b>        							
                        </label>  
                    </div><!-- end section --> 
                    
					 
					    <div class="section">
                        <div class="smart-widget sm-left sml-50">
                            <label class="field">
                                <input name="cost" id="cost" class="gui-input" placeholder="Enter airport charges" type="text" required>
                            </label>
                            <label for="sm3" class="button"> <i class="fa fa-inr"></i> </label>
                        </div><!-- end .smart-widget section --> 
                    </div><!-- end section -->  
					
                  
                   <div class="section">
                    <button type="submit" class="button btn-primary">ADD PRICE</button>
                    </div><!-- end section -->   

                    				
                    
                </div><!-- end .form-body section -->
              
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
													

							</div>      
                    
                  </div>  
        <!-- END PAGE CONTENT -->
 </div>  
             