

<div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> </li>
                <li><a href="pages-custom-product.php">Pages</a> </li>
                <li class="active">User Profile Pages</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>User Profile Page</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <div class="text-center vd_info-parent"> 
					<img style=" width: 250px; height: 250px;" alt="Driver_picture" src="<?php echo $this->webroot ; ?>files/driver/<?php echo $driver['0']['Driver']['driver_photo'] ?>"> </div>
                    <div class="row">
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i>Verified</a> </div>
                     
                    </div>
                   
				    <h2 class="font-semibold mgbt-xs-5" style="font-size: 21px; text-align: center;">
					<?php echo $driver['0']['Driver']['fname'] ?> <?php echo $driver['0']['Driver']['lname'] ?>
					</h2>
					
                  
                   
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Status</td>
                            <td><span class="label label-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>User Rating</td>
                            <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                          </tr>
                          <tr>
                            <td>Driver Since</td>
                            <td><?php echo $driver['0']['Driver']['created'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
                <div class="panel widget light-widget">
                  <div class="panel-body-list">
                    <h3 class="pd-20 mgbt-xs-0"><i class="fa fa-users mgr-10"></i>Friends</h3>
                    <div class="content-grid column-xs-2 column-sm-3 height-xs-auto mgbt-xs-20">
                      <div>
                        <ul class="list-wrapper">
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></span> </a> </li>
                          <li class="warning"> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></span> </a> </li>
                          <li> <a href="#"> <span class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></span> </a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="closing text-center" style=""> <a href="#">See All Friends<i class="fa fa-angle-double-right prepend-icon"></i></a> </div>
                  </div>
                </div>
                <!-- panel widget --> 
              </div>
              <div class="col-sm-9">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
    <li> <a data-toggle="tab" href="#photos-tab"> Photos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls">Mariah</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls">Caraiban</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">User Name:</label>
              <div class="col-xs-7 controls">Mariah</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls">mariah@Vendroid.com</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">City:</label>
              <div class="col-xs-7 controls">Los Angeles</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Country:</label>
              <div class="col-xs-7 controls">United States</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Birthday:</label>
              <div class="col-xs-7 controls">Jan 22, 1984</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Interests:</label>
              <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Website:</label>
              <div class="col-xs-7 controls"><a href="http://Vendroid.venmond.com">Vendroid.venmond.com</a></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls">+1-234-5678</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
        <hr class="pd-10">
        <div class="row">
          <div class="col-sm-7 mgbt-xs-20">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-file-text-o mgr-10 profile-icon"></i> EXPERIENCE</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Owner</a> at <a href="http://www.venmond.com">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">CEO</a> at <a href="http://www.venmond.com">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Web Designer</a> at <a href="http://www.venmond.com">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Sales</a> at <a href="http://www.venmond.com">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> EDUCATION</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>                
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
              </ul>
            </div>            
          </div>
        </div>
        <!-- row -->
        <hr class="pd-10">
        <div class="row">
          <div class="col-sm-7">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-globe mgr-10 profile-icon"></i> ACTIVITY</h3>
            <div class="">
              <div class="content-list">
                <div data-rel="scroll" class="mCustomScrollbar _mCS_6" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_6" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container" style="position:relative; top:0;">
                  <ul class="list-wrapper">
                    <li> <span class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></span> <span class="menu-text"> Someone has give you a surprise <span class="menu-info"><span class="menu-date"> ~ 12 Minutes Ago</span></span> </span>  </li>
                    <li> <span class="menu-icon vd_blue"><i class=" fa fa-user"></i></span> <span class="menu-text"> Change your user profile details <span class="menu-info"><span class="menu-date"> ~ 1 Hour 20 Minutes Ago</span></span> </span> </li>
                    <li> <span class="menu-icon vd_red"><i class=" fa fa-cogs"></i></span> <span class="menu-text"> Your setting is updated <span class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></span> </span></li>
                    <li>  <span class="menu-icon vd_green"><i class=" fa fa-book"></i></span> <span class="menu-text"> Added new article <span class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></span> </span>  </li>
                    <li>  <span class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></span> <span class="menu-text"> Change Profile Pic <span class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></span> </span> </li>
                    <li>  <span class="menu-icon vd_red"><i class=" fa fa-cogs"></i></span> <span class="menu-text"> Your setting is updated <span class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></span> </span>  </li>
                    <li>  <span class="menu-icon vd_green"><i class=" fa fa-book"></i></span> <span class="menu-text"> Added new article <span class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></span> </span> </li>
                    <li>  <span class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></span> <span class="menu-text"> Change Profile Pic <span class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></span> </span>  </li>
                  </ul>
                </div><div class="mCSB_scrollTools" style="position: absolute; display: block; opacity: 0;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px; height: 352px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 352px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                <div class="closing text-center" style=""> <a href="#">See All Activities <i class="fa fa-angle-double-right"></i></a> </div>
              </div>
            </div>
          </div>
          <!-- col-sm-7 --> 
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-flask mgr-10 profile-icon"></i> SKILL</h3>
            <div class="skill-list">
              <div class="skill-name"> Photoshop </div>
              <div class="progress  progress-sm">
                <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">90%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Illustrator </div>
              <div class="progress  progress-sm">
                <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-danger "> <span class="sr-only">20%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> PHP </div>
              <div class="progress  progress-sm">
                <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">50% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Javascript </div>
              <div class="progress  progress-sm">
                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info "> <span class="sr-only">60% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Communication </div>
              <div class="progress  progress-sm">
                <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">95% Complete</span> </div>
              </div>
            </div> 
            <div class="skill-list">
              <div class="skill-name"> Writing </div>
              <div class="progress  progress-sm">
                <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">45% Complete</span> </div>
              </div>
            </div>                                 
          </div>
          <!-- col-sm-7 -->           
        </div>
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
    </div>
    <!-- home-tab -->
    
    <div id="projects-tab" class="tab-pane">
    	<div class="pd-20">
				<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-bolt mgr-10 profile-icon"></i> PROJECTS</h3>        
				<table class="table table-striped table-hover">
							  <thead>
								  <tr>
                                  	  <th>#</th>
									  <th>Logo / Photos</th>                                  
									  <th>Clients</th>
									  <th>Start Date</th>
									  <th>Status</th>
                                      <th>Revenue</th>                                      
                                      <th>Action</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
                                	<td>1</td>
									<td><img height="80" src="img/avatar/avatar.jpg" alt="example image"></td>                    
                                	<td>Zoe Corp </td>                                    
									<td class="center">2010/02/03</td>
									<td class="center">
										<span class="label label-success">Finish</span>
									</td>  
                                    <td class="center"><strong>$ 250</strong></td>
									<td class="menu-action rounded-btn">
                                    	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                           <i class="fa fa-pencil"></i>
                                        </a>
                                    	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                           <i class="fa fa-times"></i>
                                        </a>
                                        
									</td>                                                                           
								</tr>
								<tr>
                                	<td>2</td>
									<td><img height="80" src="img/avatar/avatar-2.jpg" alt="example image"></td>                    
                                	<td>Zoe Corp </td>                                    
									<td class="center">2010/02/03</td>
									<td class="center">
										<span class="label label-success">Finish</span>
									</td>  
                                    <td class="center"><strong>$ 250</strong></td>
									<td class="menu-action rounded-btn">
                                    	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                           <i class="fa fa-pencil"></i>
                                        </a>
                                    	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                           <i class="fa fa-times"></i>
                                        </a>
                                        
									</td>                                                                           
								</tr>
								<tr>
                                	<td>3</td>
									<td><img height="80" src="img/avatar/avatar-3.jpg" alt="example image"></td>                    
                                	<td>Zoe Corp </td>                                    
									<td class="center">2010/02/03</td>
									<td class="center">
										<span class="label label-success">Finish</span>
									</td>  
                                    <td class="center"><strong>$ 250</strong></td>
									<td class="menu-action rounded-btn">
                                    	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                           <i class="fa fa-pencil"></i>
                                        </a>
                                    	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                           <i class="fa fa-times"></i>
                                        </a>
                                        
									</td>                                                                           
								</tr>
								<tr>
                                	<td>4</td>
									<td><img height="80" src="img/avatar/avatar-4.jpg" alt="example image"></td>                    
                                	<td>Zoe Corp </td>                                    
									<td class="center">2010/02/03</td>
									<td class="center">
										<span class="label label-success">Finish</span>
									</td>  
                                    <td class="center"><strong>$ 250</strong></td>
									<td class="menu-action rounded-btn">
                                    	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                           <i class="fa fa-pencil"></i>
                                        </a>
                                    	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                           <i class="fa fa-times"></i>
                                        </a>
                                        
									</td>                                                                           
								</tr>
								<tr>
                                	<td>5</td>
									<td><img height="80" src="img/avatar/avatar-5.jpg" alt="example image"></td>                    
                                	<td>Zoe Corp </td>                                    
									<td class="center">2010/02/03</td>
									<td class="center">
										<span class="label label-success">Finish</span>
									</td>  
                                    <td class="center"><strong>$ 250</strong></td>
									<td class="menu-action rounded-btn">
                                    	<a class="btn menu-icon vd_bg-green" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                           <i class="fa fa-eye"></i>
                                        </a>                                      
                                    	<a class="btn menu-icon vd_bg-yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                           <i class="fa fa-pencil"></i>
                                        </a>
                                    	<a class="btn menu-icon vd_bg-red" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                           <i class="fa fa-times"></i>
                                        </a>
                                        
									</td>                                                                           
								</tr>
                                                                                          
                                                                   
							  </tbody>
						 </table>
                         <div class="">
                         </div>        
        </div>
    </div>
    
    <div id="photos-tab" class="tab-pane">
      <div class="pd-20">
		<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Photo </a> </div>        
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-picture-o mgr-10 profile-icon"></i> PHOTOS</h3>
        <ul id="filters" class="nav nav-pills">
          <li class="active"><a href="#photos-1" data-filter="*">All</a></li>
          <li><a href="#photos-2" data-filter=".filter-1">Photos of You</a></li>
          <li><a href="#photos-3" data-filter=".filter-2">Scenery</a></li>
          <li><a href="#photos-4" data-filter=".filter-3">Vacation</a></li>          
        </ul>
        <br>
                <div class="isotope js-isotope vd_gallery" style="position: relative; height: 3000px;">
                  <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 0px;">                    	 
                  	<a href="img/photos/01.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                    		<img alt="example image" src="img/photos/01.jpg">
                            <div class="bg-cover"></div> 
                    </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Felicious</span> de louis amigos</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/01.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>
                      
                  </div>
                  <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 200px;">                  	
                      <a href="img/photos/03.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/03.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Sola</span> Aprecios</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/03.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                                                     
                  </div>

                  <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 400px;">
                      <a href="img/photos/08.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/08.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Lorem</span> ipsum</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/08.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                    
                  
                  </div>
                  <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 600px;">
                      <a href="img/photos/15.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/15.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Doler</span> sit amet</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/15.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                    
                  
                  </div>
                  <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 800px;">
                      <a href="img/photos/02.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/02.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Gracias</span> mundo</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/02.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                   
                  
                  </div>
                  <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 1000px;">
                       <a href="img/photos/06.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/06.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Solero</span> dorona</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/06.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                  
                  
                  
                  
                  </div>
                  <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 1200px;">
                       <a href="img/photos/08.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/08.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Weinto</span> grametto</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/08.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                  
                  
                  </div>
                  <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 1400px;">
                       <a href="img/photos/04.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/04.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Sara</span> he yaso</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/04.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                    
                  
                  
                  </div>                  
                  <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 1600px;">
                       <a href="img/photos/10.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/10.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Numero</span> uno</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/10.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                    
                  
                  
                  
                  </div>

                  <div class="gallery-item   filter-3" style="position: absolute; left: 0px; top: 1800px;">
                       <a href="img/photos/09.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/09.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Beon</span> dukim</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/09.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                  
                  </div>
                  <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 2000px;">
                       <a href="img/photos/01.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/01.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Gretia</span> de louis amigos</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/01.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                    
                  
                  
                  </div>
                  <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 2200px;">
                       <a href="img/photos/11.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/11.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Title</span> de koko</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/11.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                   
                  
                  </div>
                   <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 2400px;">
                       <a href="img/photos/12.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/12.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                           <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Some</span> random text</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/12.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                      
                   
                   </div>
                   <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 2600px;">
                       <a href="img/photos/13.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/13.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Soleram</span> drago</h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/13.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                     
                   
                   
                   </div>
                   <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 2800px;">
                       <a href="img/photos/14.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]"> 
                                <img alt="example image" src="img/photos/14.jpg">
                                <div class="bg-cover"></div> 
                        </a> 
                         <div class="vd_info">
                              <h3 class="mgbt-xs-15"><span class="font-semibold">Gretia</span> de louis </h3>
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="img/photos/14.jpg" data-rel="prettyPhoto[1]" rel="prettyPhoto[1]"><i class="fa fa-search"></i></a>   
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-thumbs-up"></i></a> 
                              <a class="vd_bg-green vd_white mgr-10 btn vd_round-btn btn-xs" role="button" href="#"><i class="fa fa-comments"></i></a>                                                                      
                         </div>                     
                   
                   
                   </div>

                </div>
                
                <div class="clearfix"></div>       
        
      </div>
      <!-- pd-20 -->       
    </div> <!-- photos tab -->
    <div id="friends-tab" class="tab-pane">
    	<div class="pd-20">
        	<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users mgr-10 profile-icon"></i> FRIENDS</h3>
            <ul class="nav nav-pills">
          <li class="active"><a href="#photos-1" data-toggle="tab">Friends</a></li>
          <li><a href="#photos-2" data-toggle="tab">Pending Request</a></li>
          <li><a href="#photos-3" data-toggle="tab">Blacklisted</a></li>          
        </ul>
        	<div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">	
                       <div>
<ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></span> 
                         </a>
                        <span class="menu-text"> Gabriella Montagna
                            <span class="menu-info">
                                <span class="menu-date">San Diego</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </span>                                
                            </span>
                        </span> 
                     </li>
                    <li class="warning"> 
                    		<a href="#"> 
                    			<span class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></span>  
                            </a>                            
                            <span class="menu-text">  Jonathan Fuzzy
                            	<span class="menu-info">
                                    <span class="menu-date">Seattle</span>                                                                         
                                    <span class="menu-action">
                                        <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                            <i class="fa fa-check"></i>
                                        </span> 
                                        <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                            <i class="fa fa-times"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</span>                            
                            </span> 
                     </li>    
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></span> 
                         </a>    
                        <span class="menu-text">  Sakura Hinata
                            <span class="menu-info">
                                <span class="menu-date">Hawaii</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </span>                                
                            </span>                                                     
                        </span> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></span> 
                         </a>    
                        <span class="menu-text">  Rikudou Sennin
                            <span class="menu-info">
                                <span class="menu-date">Las Vegas</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                                                        
                        </span> 
                    </li> 
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></span>  
                         </a>   
                        <span class="menu-text">  Kim Kardiosun
                            <span class="menu-info">
                                <span class="menu-date">New York</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                                                          
                        </span> 
                     </li>
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></span>
                         </a>    
                        <span class="menu-text">   Brad Pita
                            <span class="menu-info">
                                <span class="menu-date">Seattle</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                             
                        </span> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></span> 
                         </a>   
                        <span class="menu-text">  Celline Dior
                            <span class="menu-info">
                                <span class="menu-date">Los Angeles</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </span>                                
                            </span>                              
                        </span> 
                    </li> 
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></span>
                         </a>    
                        <span class="menu-text">  Goerge Bruno Marz
                            <span class="menu-info">
                                <span class="menu-date">Las Vegas</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </span>                                
                            </span>                              
                        </span> 
                    </li>                                                                                
                    
               </ul>
                       </div>                                                                      
                       </div>
        </div><!-- pd-20 -->   
    </div>  <!-- photos tab -->  
    <div id="groups-tab" class="tab-pane">
    	<div class="pd-20">
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-leaf mgr-10 profile-icon"></i> GROUPS</h3>
        	<div class="row">
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-01.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Groupis Group</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 3467 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-02.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Ztormin Community</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 12597 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->
                
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="img/groups/logo-03.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Book Lovers</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 67 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

    

                
            </div> <!-- row -->
        </div> <!-- pd-20 --> 
    </div>  <!-- groups tab -->   
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
		
<style>
/* CSS crunched with Crunch - http://crunchapp.net/ */
body{background-color:#f0f0f0;font-size:13px;font-family:'Open Sans','arial';line-height:23px;font-weight:400}h1,h2,h3,h4,h5,h6{margin:0 0 10px;font-weight:normal;font-family:'Open Sans','arial';color:inherit;text-rendering:optimizelegibility}img{max-width:100%}.img-left{float:left;margin-right:15px;margin-bottom:10px}.img-right{float:right;margin-left:15px;margin-bottom:10px}a{color:#1fae66}a:hover,a:focus{text-decoration:none;color:#0D9C54;outline:none}small{font-size:11px}.container{position:relative}.col-xs-12:before,.col-sm-12:before,.col-md-12:before,.col-lg-12:before,.col-xs-12:after,.col-sm-12:after,.col-md-12:after,.col-lg-12:after{content:" ";display:table}.col-xs-12:after,.col-sm-12:after,.col-md-12:after,.col-lg-12:after{clear:both}.tooltip{position:absolute}.badge{padding:4px 6px;font-size:9px}.badge.status{padding:0;font-size:7px;min-width:7px}a:hover>.label{opacity:.8;filter:alpha(opacity=80)}::-webkit-input-placeholder{color:#999}:-moz-placeholder{color:#999}::-moz-placeholder{color:#999}:-ms-input-placeholder{color:#999}.breadcrumb{background:none;padding:3px 0px;font-weight:normal;font-size:11px;margin-bottom:0}.breadcrumb>.active{color:#555}.breadcrumb>li+li:before{color:#aaa}input[type="file"],input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"],.uneditable-input,select,textarea{width:100%;border:1px solid #D5D5D5;padding:6px 6px 7px}input:focus,textarea:focus{background-color:#F5F5F5;border-color:#D5D5D5}.input-group-addon{border-color:#D5D5D5}.vd_input-wrapper{color:#666666;border-right:1px solid #F5F5F5;border-bottom:1px solid #F5F5F5;padding:2px;background:#E5E5E5;position:relative;box-shadow:0 1px 2px rgba(0,0,0,0.1) inset}.vd_input-wrapper .menu-icon{width:22px;text-align:center;display:inline-block;margin-left:8px;margin-right:0;color:#B5B5B5;position:absolute;top:5px}.vd_input-wrapper .icon-right{margin-left:0px;margin-right:8px}.vd_input-wrapper input{border:none;background:none;padding-left:38px}.vd_input-wrapper label.error{margin-left:8px}.vd_input-wrapper.no-icon input{padding-left:6px}.vd_input-wrapper.light-theme{border:1px solid #D5D5D5;background:#FFFFFF;box-shadow:none}.vd_input-wrapper.light-theme.focus{background:#F5F5F5}.vd_input-wrapper.focus{background:#E0E0E0}.vd_input-wrapper.focus .menu-icon{color:#888888}label.error{color:#f85d2c}select{padding:5px}.form-horizontal .control-label,.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline,.form-horizontal .control-value{padding-top:4px}.help-inline{color:#999;font-style:italic}.form-actions{padding-top:15px;padding-bottom:15px}.panel-body .form-actions-condensed{margin:40px -25px -25px;padding:10px 25px;background-color:#F5F5F5}.form-actions-condensed{margin:40px 0px 0px;padding:10px 25px;background-color:#F5F5F5}.btn{padding:6px 15px}.btn:focus{outline:0}[role=button]{color:#5E656B}[role=button]:hover{cursor:pointer;color:#111111}.vd_btn{background-color:#DDDDDD;color:#FFFFFF}.vd_btn .caret{border-top-color:#FFFFFF;border-bottom-color:#FFFFFF}.vd_btn:focus{color:#FFFFFF}.vd_btn:hover{background-color:#CCCCCC}.btn-icon{padding-left:8px;padding-right:8px}.btn-lg{padding:11px 19px}.btn-sm{padding:5px 10px}.btn-xs{font-size:11px;padding:4px 8px}.btn.vd_bg-green:hover,.btn.vd_green:hover{background-color:#1b9859 !important;color:#FFF !important}.btn.vd_bg-red:hover,.btn.vd_red:hover{background-color:#f74a13 !important;color:#FFF !important}.btn.vd_bg-blue:hover,.btn.vd_blue:hover{background-color:#1e6189 !important;color:#FFF !important}.btn.vd_bg-yellow:hover,.btn.vd_yellow:hover{background-color:#f79013 !important;color:#FFF !important}.btn.vd_bg-grey:hover,.btn.vd_grey:hover{background-color:#6a6a6a !important;color:#FFF !important}.btn.vd_bg-black:hover,.btn.vd_black:hover{background-color:#040404 !important;color:#FFF !important}.btn.vd_bg-facebook:hover,.btn.vd_facebook:hover{background-color:#3c629a !important;color:#FFF !important}.btn.vd_bg-twitter:hover,.btn.vd_twitter:hover{background-color:#0485b0 !important;color:#FFF !important}.btn.vd_bg-linkedin:hover,.btn.vd_linkedin:hover{background-color:#297dad !important;color:#FFF !important}.btn.vd_bg-googleplus:hover,.btn.vd_googleplus:hover{background-color:#b61600 !important;color:#FFF !important}.vd_btn-bevel.vd_bg-green{-webkit-box-shadow:0 4px 0 #2e8258;box-shadow:0 4px 0 #2e8258}.vd_btn-bevel.vd_bg-yellow{-webkit-box-shadow:0 4px 0 #7f684d;box-shadow:0 4px 0 #7f684d}.vd_btn-bevel.vd_bg-red{-webkit-box-shadow:0 4px 0 #724c3f;box-shadow:0 4px 0 #724c3f}.vd_btn-bevel.vd_bg-blue{-webkit-box-shadow:0 4px 0 #39515f;box-shadow:0 4px 0 #39515f}.vd_round-btn{border-radius:60px;width:60px;height:60px;line-height:56px;font-size:24px;text-align:center;padding:0}.vd_round-btn.btn-xs{width:30px;height:30px;line-height:28px;font-size:13px}.vd_round-btn.btn-sm{width:40px;height:40px;line-height:38px;font-size:16px}.vd_round-btn.btn-lg{width:80px;height:80px;line-height:76px;font-size:36px}.input-group-btn .btn{padding:8px 12px 8px}.modal-content{background:none}.modal-header{border-radius:4px 4px 0 0;border-bottom:none}.modal-body{background:#FFFFFF;padding-bottom:40px}.modal-footer{margin-top:0;border-radius:0 0 4px 4px;border-top:none}.progress{box-shadow:none;background-color:#F0F0F0}.progress .progress-bar{line-height:20px;box-shadow:none}.progress-xs{height:8px}.progress-xs .progress-bar{line-height:8px}.progress-sm{height:15px}.progress-sm .progress-bar{line-height:15px}.progress-lg{height:24px}.progress-lg .progress-bar{line-height:24px}.well{border:none;box-shadow:none}.well-sm{padding-left:15px;padding-right:15px}.tabs .nav-tabs{background-color:#1fae66;border-bottom:none}.tabs .nav-tabs>li{margin:0;position:relative}.tabs .nav-tabs>li>a{margin:0;color:#FFF;border-left:1px solid rgba(255,255,255,0.2) !important;border-right:1px solid rgba(0,0,0,0.15) !important;border-top:none;border-bottom:none;line-height:auto;height:36px;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.tabs .nav-tabs>li>a .menu-icon{margin-right:5px}.tabs .nav-tabs>li>a .menu-active{width:100%;position:absolute;bottom:-8px;left:0;text-align:center;visibility:hidden;font-size:16px}.tabs .nav-tabs>li.active>a,.tabs .nav-tabs>li.active>a:hover,.tabs .nav-tabs>li.active>a:focus{border:none;background:rgba(0,0,0,0.2);color:#FFF}.tabs .nav-tabs>li.active>a .menu-active,.tabs .nav-tabs>li.active>a:hover .menu-active,.tabs .nav-tabs>li.active>a:focus .menu-active{visibility:visible}.tabs .nav-tabs>li:last-child{border-right:1px solid rgba(255,255,255,0.2)}.tabs .nav-tabs>li>a:hover{background-color:rgba(255,255,255,0.15)}.tabs .tab-content{background-color:#FFF;position:relative}.form-wizard .nav>li.active>a,.form-wizard .nav>li.active>a:hover,.form-wizard .nav>li.active>a:focus{background:none;color:#666;border:none}.form-wizard .nav>li.active .menu-icon{background:#1fae66;color:#FFF}.form-wizard .nav>li>a{color:#AAA;padding:15px;text-align:center}.form-wizard .nav>li>a:hover,.form-wizard .nav>li a:focus{background:none}.form-wizard .nav .menu-icon{border-radius:30px;display:block;height:40x;line-height:40px;width:40px;margin:0 auto 5px;overflow:hidden;padding:0;text-align:center;font-size:16px;background:#F5F5F5;color:#AAA}.form-wizard .nav .line{height:1px;width:100%;background:#F5F5F5}.form-wizard .tab-content{margin-top:10px;border-top:1px solid #EEEEEE;padding-top:30px}.form-wizard .wizard .btn{background-color:#f89c2c;color:#fff}.form-wizard .nav-tabs{border-bottom:none}.form-wizard .nav-tabs>li>a:hover{border-color:#EEE}.form-wizard .progress{height:10px}.form-wizard.condensed .nav>li.active>a,.form-wizard.condensed .nav>li.active>a:hover,.form-wizard.condensed .nav>li.active>a:focus{background:#1fae66;color:#FFF}.form-wizard.condensed .nav>li.active .menu-icon{background:#FFF;color:#1fae66}.form-wizard.condensed .nav>li>a{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#E5E5E5}.form-wizard.condensed .progress{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.vd_radio,.vd_checkbox{padding-left:0}.vd_radio label{display:inline-block;cursor:pointer;position:relative;padding-left:25px;margin-right:15px;font-size:13px;margin-bottom:6px;color:#777a80}.vd_radio input[type=radio]{display:none}.vd_radio label:before{content:"";display:inline-block;width:16px;height:16px;margin-right:10px;position:absolute;left:0;top:3px;background-color:#fff;border:1px solid #c2c6cb;border-radius:99px}.vd_radio label:after{font-size:13px;content:"";text-align:center;display:inline-block;width:16px;height:16px;position:absolute;-o-transform:scale(0);-ms-transform:scale(0);-moz-transform:scale(0);-webkit-transform:scale(0);transform:scale(0);border-radius:99px;left:0px;top:3px;background-color:#6f7b8a;border:1px solid #6f7b8a}.vd_radio input[type=radio][disabled]+label{opacity:0.65}.vd_checkbox input[type=radio][disabled]+label:after{background-color:#eceff3}.vd_radio.radio-success label:after{background-color:#1FAE66;border:1px solid #1FAE66}.vd_radio.radio-primary label:after{background-color:#0AA699;border:1px solid #0AA699}.vd_radio.radio-info label:after{background-color:#23709E;border:1px solid #23709E}.vd_radio.radio-warning label:after{background-color:#F89C2C;border:1px solid #F89C2C}.vd_radio.radio-danger label:after{background-color:#F85D2C;border:1px solid #F85D2C}.vd_radio input[type=radio]:checked+label{color:#4d5056}.vd_radio input[type=radio]:checked+label:after{-o-transform:scale(.63);-ms-transform:scale(.63);-moz-transform:scale(.63);-webkit-transform:scale(.63);transform:scale(.63);line-height:18px;-o-transition:-o-transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-ms-transition:-ms-transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-moz-transition:-moz-transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-webkit-transition:-webkit-transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-o-transition:transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-ms-transition:transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-moz-transition:transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);-webkit-transition:transform .1s 0s cubic-bezier(.455, .03, .215, 1.33);transition:transform .1s 0s cubic-bezier(.455, .03, .215, 1.33)}.vd_radio input[type=radio]:checked+label:before{border:1px solid #8e9095}.vd_radio.radio-success input[type=radio]:checked+label:before{border:1px solid #1FAE66}.vd_radio.radio-primary input[type=radio]:checked+label:before{border:1px solid #0AA699}.vd_radio.radio-info input[type=radio]:checked+label:before{border:1px solid #23709E}.vd_radio.radio-warning input[type=radio]:checked+label:before{border:1px solid #F89C2C}.vd_radio.radio-danger input[type=radio]:checked+label:before{border:1px solid #F85D2C}.vd_checkbox label{display:inline-block;cursor:pointer;position:relative;padding-left:25px;margin-right:15px;font-size:13px;margin-bottom:6px;color:#777a80;transition:border 0.2s linear 0s,color 0.2s linear 0s}.vd_star label{display:inline-block;cursor:pointer;position:relative;font-size:18px;transition:border 0.2s linear 0s,color 0.2s linear 0s}.vd_star label:before{font-family:'Entypo';content:"\e61c";display:inline-block;margin-right:10px;position:absolute;left:0px;top:-4px;font-size:18px;color:#97a3b3;transition:border 0.2s linear 0s,color 0.2s linear 0s}.vd_star label{margin-bottom:10px}.vd_star input[type=checkbox]{display:none}.vd_star input[type=checkbox]:checked+label:before{color:#ffd200;content:"\e61b"}.vd_checkbox label:before{content:"";display:inline-block;width:16px;height:16px;margin-right:10px;position:absolute;left:1px;top:3px;background-color:#fff;border:1px solid #c2c6cb;border-radius:3px;transition:border 0.2s linear 0s,color 0.2s linear 0s}.vd_checkbox label::after{display:inline-block;width:16px;height:16px;position:absolute;left:3.8px;top:0px;font-size:11px;transition:border 0.2s linear 0s,color 0.2s linear 0s}table td .vd_checkbox label:before,table th .vd_checkbox label:before{top:-7px}table td .vd_checkbox label::after,table th .vd_checkbox label::after{top:-6px}table td .vd_star label:before,table th .vd_star label:before{top:-8px}.vd_checkbox input[type=checkbox]{display:none}.vd_checkbox label:after{border-radius:3px}.vd_checkbox.vd_checkbox-circle label:after{border-radius:99px}.vd_checkbox.vd_checkbox-circle label:before{border-radius:99px}.vd_checkbox input[type=checkbox]:checked+label::after{font-family:'Entypo';content:"\e677"}.vd_checkbox input[type=checkbox]:checked+label{color:#4d5056}.vd_checkbox input[type=checkbox][disabled]+label{opacity:0.65}.vd_checkbox input[type=checkbox][disabled]+label:before{background-color:#eceff3}.vd_checkbox.checkbox-success input[type=checkbox]:checked+label:before{background-color:#1fae66;border:1px solid #1fae66}.vd_checkbox.checkbox-success input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-primary input[type=checkbox]:checked+label:before{background-color:#0AA699;border:1px solid #0AA699}.vd_checkbox.checkbox-primary input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-info input[type=checkbox]:checked+label:before{background-color:#56A2CF;border:1px solid #56A2CF}.vd_checkbox.checkbox-info input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-warning input[type=checkbox]:checked+label:before{background-color:#F89C2C;border:1px solid #F89C2C}.vd_checkbox.checkbox-warning input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-danger input[type=checkbox]:checked+label:before{background-color:#F85D2C;border:1px solid #F85D2C}.vd_checkbox.checkbox-danger input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-done input[type=checkbox]:checked+label:before{background-color:#1fae66;border:1px solid #1fae66}.vd_checkbox.checkbox-done input[type=checkbox]:checked+label::after{color:#fff}.vd_checkbox.checkbox-done input[type=checkbox]:checked+label{text-decoration:line-through}table td .vd_checkbox label{padding-left:0px}table th .vd_checkbox label{padding-left:0px}.form-horizontal .vd_checkbox,.form-horizontal .vd_radio,.form-horizontal .vd_star{padding-top:4px}table tbody .row-primary td{background-color:#b9d4ec !important}table tbody .row-info td{background-color:#daf1f8 !important}table tbody .row-success td{background-color:#c7e6c7 !important}table tbody .row-warning td{background-color:#fceedb !important}table tbody .row-danger td{background-color:#f4cecd !important}.table .menu-action{padding-top:5px !important;padding-bottom:0 !important}.table .menu-action .menu-icon{background:none;color:#FFF;font-size:12px;padding:2px 6px 3px;margin-right:2px}.table .rounded-btn .menu-icon{border-radius:20px}.table-condensed .menu-action{padding-top:2px !important;padding-bottom:0 !important}.no-head-border>thead>tr>th{border-bottom:none;padding-top:10px;padding-bottom:10px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px 15px}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px 10px}.panel{background:none}.panel .no-title{height:30px}.panel .panel-heading{position:relative;padding:7px 15px}.panel .panel-heading .panel-title .menu-icon{margin-right:5px;width:20px;height:21px;line-height:21px;display:inline-block;text-align:center}.panel .panel-title{color:#fff}.panel .panel-title a:hover,.panel .panel-title a:focus{color:#fff}.panel .panel-body,.panel .panel-body-list{background:#fff;position:relative}.panel .panel-body:before,.panel .panel-body-list:before,.panel .panel-body:after,.panel .panel-body-list:after{content:" ";display:table}.panel .panel-body:after,.panel .panel-body-list:after{clear:both}.panel .panel-body-list .table{margin-bottom:0}.panel .panel-body{padding:15px 25px 25px}.panel-group .panel .panel-heading{padding-top:10px;padding-bottom:10px}.panel-group .panel .panel-heading .panel-title a{display:block}.pagination>li>a,.pagination>li>span{color:#1fae66}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{background-color:#1fae66;border-color:#1fae66}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{background-color:#1fae66}.nav li a{padding:7px 15px}.nav .caret{border-top-color:#1fae66;border-bottom-color:#1fae66}.nav a:hover .caret{border-top-color:#1fae66;border-bottom-color:#1fae66}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{border-color:rgba(0,0,0,0)}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{background-color:#1fae66;color:#fff}.alert-success{background-color:#d7ede2}.alert-info{background-color:#d3e1ea}.alert-warning{background-color:#f8f1de}.alert-danger{background-color:#f6e1db}.alert{padding:18px;border:none}.alert-dismissable{padding-right:35px}.alert-dismissable .close{top:2px;opacity:.5;filter:alpha(opacity=50)}.alert-condensed{padding-top:8px;padding-bottom:8px}.vd_alert-icon{font-size:32px;float:left;margin:-5px 15px 15px 0}.jvectormap-label{position:absolute;display:none;border:solid 1px #CDCDCD;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background:#292929;color:white;font-size:smaller;padding:3px}.jvectormap-zoomin,.jvectormap-zoomout{position:absolute;left:15px;-webkit-border-radius:24px;-moz-border-radius:24px;border-radius:24px;background:#292929;padding:3px;color:white;width:24px;height:24px;cursor:pointer;line-height:16px;text-align:center;font-size:28px}.jvectormap-zoomin{top:10px}.jvectormap-zoomout{top:38px}.dark-widget .flot-x-axis .flot-tick-label,.dark-widget .flot-y-axis .flot-tick-label{color:#FFF}[data-rel^="scroll"]{max-height:400px}.mCSB_container{margin-right:0}.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background:#1fae66;opacity:.7;filter:alpha(opacity=70)}.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar{background:#777}.mCSB_scrollTools .mCSB_draggerRail{background:none}div.tagsinput span.tag{background:#23c473;border-color:#23c473;color:#FFF}div.tagsinput span.tag a{color:#FFF}.ui-autocomplete{max-height:150px;overflow-y:auto;overflow-x:hidden;background:#FFF;border:1px solid #CCC}.ui-autocomplete .ui-autocomplete-category{font-weight:bold;padding:.2em .4em;margin:.8em 0 .2em;line-height:1.5}.ui-autocomplete .ui-autocomplete-category:hover{background:none}.ui-autocomplete li{padding:5px !important;margin:0 !important}.ui-autocomplete li:hover{background-color:#F5F5F5;cursor:pointer}.ui-autocomplete a{color:#666;padding:0 !important;margin:0 !important}.ui-autocomplete .ui-state-focus{background-color:#F5F5F5}.ui-autocomplete .ui-menu-item a{clear:both}.ui-autocomplete .menu-icon{display:block;float:left;text-align:center;font-size:24px;width:40px;height:40px;line-height:40px;margin-right:12px}.ui-autocomplete .menu-text{display:block;margin-left:55px;text-transform:none;padding-right:15px;padding-top:5px;padding-bottom:5px}.ui-autocomplete .menu-info{display:block;font-size:11.4px;font-style:italic;color:#939ba2;text-transform:capitalize}.ui-slider{background:#EEEEEE}.ui-slider .ui-slider-handle{background:#1FAE66;width:24px;height:24px}.ui-slider .ui-slider-handle:hover{cursor:pointer}.ui-slider a{transition:none}.ui-slider .ui-slider-range{background:#39515F}.ui-slider-horizontal{height:0.6em}.ui-slider-horizontal .ui-slider-handle{top:-0.6em}.ui-slider-vertical{width:0.6em}.ui-slider-vertical .ui-slider-handle{left:-0.6em}.ui-slider,.ui-slider .ui-slider-handle,.ui-slider .ui-slider-range{border-radius:30px}.ui-slider-primary .ui-slider-handle{background:#1FAE66}.ui-slider-warning .ui-slider-handle{background:#F89C2C}.ui-slider-info .ui-slider-handle{background:#23709E}.ui-slider-danger .ui-slider-handle{background:#F85D2C }.bootstrap-switch{border:none;border-radius:30px;background:#1FAE66}.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary,.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary{background:none ;margin-left:5px}.bootstrap-switch .bootstrap-switch-label{background:#EEEEEE;border-radius:30px !important;height:30px;margin:5px 2px 5px 6px;width:30px}.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default,.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default{background:none;color:#FFF}.bootstrap-switch-large .bootstrap-switch-label{width:36px;height:36px;margin-left:8px}.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on,.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off,.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label{padding-top:6px}.bootstrap-switch-small .bootstrap-switch-label{width:24px;height:24px;margin-left:3px}.bootstrap-switch-mini .bootstrap-switch-label{width:18px;height:18px;margin-left:5px}.bootstrap-switch.bootstrap-switch-focused{box-shadow:none}.bootstrap-switch-inverse .bootstrap-switch-label{background:#1fae66}.bootstrap-switch-inverse .bootstrap-switch-handle-on.bootstrap-switch-primary{color:#1fae66}.bootstrap-switch-red,.bootstrap-switch-inverse.bootstrap-switch-red .bootstrap-switch-label{background:#F85D2C}.bootstrap-switch-inverse.bootstrap-switch-red .bootstrap-switch-handle-on.bootstrap-switch-primary{color:#F85D2C}.bootstrap-switch-yellow,.bootstrap-switch-inverse.bootstrap-switch-yellow .bootstrap-switch-label{background:#F89C2C}.bootstrap-switch-inverse.bootstrap-switch-yellow .bootstrap-switch-handle-on.bootstrap-switch-primary{color:#F89C2C}.bootstrap-switch-blue,.bootstrap-switch-inverse.bootstrap-switch-blue .bootstrap-switch-label{background:#67B8CB}.bootstrap-switch-inverse.bootstrap-switch-blue .bootstrap-switch-handle-on.bootstrap-switch-primary{color:#67B8CB}.bootstrap-switch.bootstrap-switch-off{background:#CCC}.bootstrap-switch-inverse{background:#39515F}.bootstrap-switch-inverse.bootstrap-switch-off .bootstrap-switch-label{background:#EEEEEE}.ui-datepicker{background:#39515f;z-index:1500 !important;width:280px;padding:0;border-radius:4px;-webkit-box-shadow:0 0 3px 0 rgba(0,0,0,0.2);box-shadow:0 0 3px 0 rgba(0,0,0,0.2)}.ui-datepicker .ui-datepicker-header{background:rgba(0,0,0,0.2);margin:0;padding:10px;font-size:14px}.ui-datepicker .ui-datepicker-title{text-transform:uppercase;letter-spacing:0.5px;color:#1fae66;font-weight:bold}.ui-datepicker .ui-datepicker-title select{color:#39515f}.ui-datepicker .ui-state-hover{background:rgba(0,0,0,0.2)}.ui-datepicker a{color:#1fae66}.ui-datepicker .ui-state-disabled{color:#CCC}.ui-datepicker td span,.ui-datepicker td a{text-align:center;border-radius:4px}.ui-datepicker .ui-state-highlight{background:rgba(0,0,0,0.2)}.ui-datepicker .ui-datepicker-prev{left:8px;background:url(../img/sprites.png) 4px 3px no-repeat}.ui-datepicker .ui-datepicker-next{right:8px;background:url(../img/sprites.png) -20px 3px no-repeat}.ui-datepicker .ui-datepicker-prev,.ui-datepicker .ui-datepicker-next{top:12px;border:2px solid #FFF;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;opacity:.6;filter:alpha(opacity=60);height:20px;width:20px}.ui-datepicker .ui-datepicker-prev:hover,.ui-datepicker .ui-datepicker-next:hover{opacity:1;filter:alpha(opacity=100)}.ui-datepicker .ui-datepicker-calendar{width:260px;margin-left:10px;margin-bottom:10px}.ui-datepicker th{color:#FFFFFF;opacity:.5;filter:alpha(opacity=50);text-transform:uppercase;-webkit-box-shadow:0 -1px 0 rgba(255,255,255,0.3) inset;box-shadow:0 -1px 0 rgba(255,255,255,0.3) inset}.ui-datepicker .ui-corner-all:hover{cursor:pointer}.ui-datepicker .ui-datepicker-buttonpane button{border:none;color:#FFF;background:none}.ui-datepicker .ui-datepicker-buttonpane button:hover{background-color:rgba(0,0,0,0.3)}.ui-datepicker .ui-datepicker-title select{padding:0;margin-bottom:0}[data-datepicker]:hover{cursor:pointer}.daterangepicker select.hourselect,.daterangepicker select.minuteselect,.daterangepicker select.ampmselect{width:60px}.colorpicker .colorpicker_hex input,.colorpicker .colorpicker_field input{padding:0;border:none;width:auto;margin-top:2px;margin-right:2px}.color-input{padding:4px 8px;font-size:20px}.table.dataTable thead th{border-bottom:2px solid #777777}.table.dataTable tr.odd td.sorting_1{background-color:#EFEFEF}.table.dataTable tr.even td.sorting_1{background-color:#F5F5F5}.table.dataTable.no-footer{border-bottom-color:#DDDDDD}.ui-drop-placeholder{border:2px dashed #DADADA;background-color:#FAFAFA}.fc a{transition:none}.fc .fc-border-separate tr.fc-last th,.fc .fc-border-separate tr.fc-last td{border-bottom-width:2px}.fc .fc-day-header{padding:5px;text-transform:uppercase;border-color:#FFFFFF;border-bottom-color:#F0F0F0}.fc .fc-day{border-color:#F0F0F0}.fc .fc-day:hover{background-color:#F5F5F5}.fc .fc-other-month{background-color:#FAFAFA}.fc .fc-state-highlight{background-color:#F8F1DE}.fc .fc-event{background-color:#d3e1ea !important;border-color:#d3e1ea !important;border-top:1px solid #23709e !important;color:#31708F !important}.fc .fc-event .fc-event-title{padding-left:5px;padding-right:5px}.fc .fc-header-title h2{color:#1fae66;font-size:32px;margin:25px 0 10px 15px}.fc .fc-grid .fc-day-number{padding:0 7px}.fc .fc-button{background:none;margin-right:5px;box-shadow:none;text-shadow:none}.fc .fc-button-today{border:none}.fc .fc-button-prev,.fc .fc-button-next{-webkit-border-radius:40px;-moz-border-radius:40px;border-color:#777;color:#777;border-radius:40px;height:26px;line-height:22px;padding-left:0;padding-right:1px;width:26px}.fc .fc-button:hover{background:#777;color:#fff}.fc .fc-state-disabled:hover{background:none;color:#333333}.fc .fc-sun{color:#F85D2C}#fullcalendar .fc-header .fc-header-left .fc-button{margin-top:30px}#fullcalendar .fc-header .fc-header-left .fc-button-prev{margin-left:20px}#fullcalendar .fc-header .fc-header-right .fc-button{border-radius:4px;border:none;color:#1FAE66;position:absolute}#fullcalendar .fc-header .fc-header-right .fc-button:hover{background:#1FAE66;color:#FFFFFF}#fullcalendar .fc-header .fc-header-right .fc-state-disabled{color:#666666}#fullcalendar .fc-header .fc-header-right .fc-state-disabled:hover{color:#666666;background:none}#fullcalendar .fc-header .fc-header-right .fc-state-active{background:#1FAE66;color:#FFFFFF}#fullcalendar .fc-header .fc-header-right .fc-button-today{top:55px;right:15px}#fullcalendar .fc-header .fc-header-right .fc-button-month,#fullcalendar .fc-header .fc-header-right .fc-button-agendaWeek,#fullcalendar .fc-header .fc-header-right .fc-button-agendaDay{top:20px}#fullcalendar .fc-header .fc-header-right .fc-button-month{right:115px}#fullcalendar .fc-header .fc-header-right .fc-button-agendaWeek{right:60px}#fullcalendar .fc-header .fc-header-right .fc-button-agendaDay{right:15px}.jqstooltip{display:block;min-width:40px;padding:4px;min-height:25px!important}.ui-pnotify-icon,.ui-pnotify-icon span{font-size:20px;margin-right:0.25em}.ui-pnotify-closer,.ui-pnotify-sticker{position:absolute;top:4px;font-size:18px}.ui-pnotify-closer{right:8px}.ui-pnotify-sticker{right:28px}.ui-pnotify-title{font-weight:bold;margin-bottom:0.6em}.ui-pnotify .content-image .menu-icon{font-size:36px}.introjs-helperNumberLayer{border:none;line-height:16px;background:#f85d2c}.introjs-tooltip{padding:10px 15px 15px;min-width:250px}.introjs-button{color:#fff !important;background:#1fae66 !important;border-color:#1fae66 !important;text-shadow:none}.introjs-button:hover{background:#1b9859 none !important;border-color:#1b9859 !important;color:#fff !important}.introjs-disabled{background:#b5b5b5 !important;border-color:#b5b5b5 !important}.introjs-disabled:hover{background:#b5b5b5 !important;border-color:#b5b5b5 !important}.cke_top,.cke_bottom{background:#F5F5F5}*[contenteditable="true"]{padding:10px}.cke_editable.cke_editable_inline{cursor:pointer}.cke_editable.cke_editable_inline.cke_focus{background:none repeat scroll 0 0 #eee;box-shadow:0 0 20px 3px #ddd inset, 0 0 1px #000 inset;cursor:text;outline:medium none}.gm-style img{max-width:none}.vd_body{float:left;width:100%;overflow:hidden}.vd_nav-width{width:260px;padding-left:20px;padding-right:20px;position:absolute;top:0;left:0;height:100%}.vd_container{margin-left:245px}.vd_content-wrapper .vd_container{margin-right:245px;margin-left:245px}.nav-left-medium .content .vd_container{margin-left:125px}.nav-right-medium .content .vd_container{margin-right:125px}.nav-left-small .content .vd_container{margin-left:35px}.nav-right-small .content .vd_container{margin-right:35px}.nav-right-hide .content .vd_container,.no-nav-right .content .vd_container{margin-right:0}.nav-right-hide .vd_head-section,.no-nav-right .vd_head-section,.nav-right-hide .vd_content-section,.no-nav-right .vd_content-section,.nav-right-hide .vd_title-section,.no-nav-right .vd_title-section{margin-right:-15px}.nav-left-hide .content .vd_container,.no-nav-left .content .vd_container{margin-left:0}.nav-left-hide .vd_head-section,.no-nav-left .vd_head-section,.nav-left-hide .vd_content-section,.no-nav-left .vd_content-section,.nav-left-hide .vd_title-section,.no-nav-left .vd_title-section{margin-left:-15px}.full-layout .container{width:100%;max-width:100%}.middle-layout .content .container{overflow:hidden}.boxed-layout header .container,.boxed-layout footer .container,.boxed-layout .content .container{box-shadow:0 0 5px 4px rgba(0,0,0,0.1),0 0 5px -4px rgba(0,0,0,0.1)}.boxed-layout header{margin-top:40px}.boxed-layout header .vd_top-menu-wrapper{background:none;box-shadow:none;position:relative}.boxed-layout header .vd_top-menu-wrapper .container{background-color:#242729;-webkit-border-top-left-radius:4px;-webkit-border-top-right-radius:4px;-moz-border-radius-topleft:4px;-moz-border-radius-topright:4px;border-top-left-radius:4px;border-top-right-radius:4px}.boxed-layout footer{margin-bottom:40px}.boxed-layout footer .vd_bottom{background:none;padding-top:0;padding-bottom:0}.boxed-layout footer .vd_bottom .container{background-color:#252525;padding-top:10px;padding-bottom:10px;-webkit-border-top-left-radius:4px;-webkit-border-top-right-radius:4px;-moz-border-radius-topleft:4px;-moz-border-radius-topright:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px}.boxed-layout .content .container{overflow:hidden}.content{position:relative}.vd_content-wrapper{margin-left:-15px;margin-right:-15px;padding-left:15px;padding-right:15px;background-color:#f0f0f0}.vd_head-section,.vd_content-section,.vd_title-section{padding:0 20px}.navbar-align-right .vd_head-section,.navbar-align-right .vd_title-section,.navbar-align-right .vd_content-section{margin-left:-15px;margin-right:0}.vd_head-section{background-color:#f0f0f0;border-bottom:1px solid #F8F8F8}.vd_title-section{background-color:#eaeaea;padding-top:20px;padding-bottom:20px;border-top:1px solid #E5E5E5;border-bottom:1px solid #E5E5E5}.vd_title-section .subtitle{font-size:12px;margin-left:2px;padding-right:180px;color:#666;font-weight:300;letter-spacing:.3px}.vd_title-section h1{margin:0;font-size:28px;color:#555555;font-weight:bold;padding-right:180px}.vd_title-section .no-subtitle .vd_panel-menu{top:-6px}.vd_title-section .no-menu h1,.vd_title-section .no-menu .subtitle{padding-right:0}.vd_content-section{background-color:#f0f0f0;padding:20px;padding-top:25px;border-top:1px solid #F8F8F8}.vd_content-section .row{margin-bottom:20px}.content-style-2 .vd_head-section{border-bottom:1px solid #DDDDDD}.content-style-2 .vd_title-section{background:none;border-top:1px solid #F8F8F8;border-bottom:none}.content-style-2 .vd_title-section .vd_panel-menu .menu{background-color:#FFFFFF}.content-style-2 .vd_content-section{border-top:none}.fullscreen header,.remove-header header{margin-top:-63px}.remove-navbar .vd_head-section .vd_panel-menu .remove-navbar-button,.remove-header .vd_head-section .vd_panel-menu .remove-header-button,.fullscreen .vd_head-section .vd_panel-menu .fullscreen-button{background-color:#666;border-right-color:#EEE;color:#FFF}.vd_nav-width,.vd_container,.expand-menu,.menu,a,header,.vd_mega-menu>ul>li{transition:all .3s ease 0s}.vd_menu>ul>li:hover>a .menu-icon{transition:all ease-in-out .4s .4s}.vd_panel-header{position:relative}.vd_panel-menu{position:absolute;z-index:2;right:0;top:0;margin-right:-10px}.vd_panel-menu .menu{display:block;float:left;width:26px;height:26px;line-height:24px;text-align:center;cursor:pointer;font-size:14px;margin-right:10px;vertical-align:middle;border:1px solid #fff;color:#fff;position:relative}.vd_panel-menu .menu .glyphicon{top:2px}.vd_panel-menu .menu .vd_mega-menu-content{font-size:13px}.vd_panel-menu .menu:hover,.vd_panel-menu .menu.active,.vd_panel-menu .text-menu:hover,.vd_panel-menu .text-menu.active{background-color:#fff;color:#1fae66;cursor:pointer}.vd_panel-menu .text-menu{margin-right:10px;padding:2px 8px}.vd_panel-menu .menu-trigger{display:block}.vd_panel-menu .menu{-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.navbar-tabs-menu .menu a{-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px}.vd_top-nav .vd_panel-menu{top:16px}.vd_top-nav .vd_panel-menu .menu{color:#BABABA;background:rgba(0,0,0,0.6);border-color:rgba(0,0,0,0.1);height:30px;line-height:28px;width:30px}.vd_top-nav .vd_panel-menu .menu:hover{background:rgba(0,0,0,0.5);border-color:rgba(0,0,0,0.1)}.vd_top-nav .vd_panel-menu .menu.active{margin-top:1px;color:#1fae66;background:rgba(0,0,0,0.7);border-color:#000 #333 #333 #000}.panel-menu-style-2 .vd_panel-menu .menu{background:none;border-color:#9DABA4;color:#9DABA4}.panel-menu-style-2 .vd_panel-menu .menu:hover{color:#F5F5F5}.nav-right-hide .vd_top-nav .vd_panel-menu .menu:hover,.nav-left-hide .vd_top-nav .vd_panel-menu .menu:hover{background:rgba(0,0,0,0.5);color:#F5F5F5}.vd_title-section .vd_panel-menu{z-index:3}.vd_head-section .vd_panel-menu{z-index:4}.expand-all .vd_navbar .navbar-menu .vd_panel-menu .menu{-webkit-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.remove-navbar .vd_top-nav .vd_panel-menu .remove-navbar-button,.remove-header .vd_top-nav .vd_panel-menu .remove-header-button,.fullscreen .vd_top-nav .vd_panel-menu .fullscreen-button,.vd_top-nav .vd_panel-menu [data-action^="toggle-navbar-right"],.vd_top-nav .vd_panel-menu [data-action^="toggle-navbar-left"],.nav-left-medium .vd_top-nav .vd_panel-menu [data-action^="nav-left-medium"],.nav-left-small .vd_top-nav .vd_panel-menu [data-action^="nav-left-small"],.nav-right-medium .vd_top-nav .vd_panel-menu [data-action^="nav-right-medium"],.nav-right-small .vd_top-nav .vd_panel-menu [data-action^="nav-right-small"],.submenu .vd_top-nav .vd_panel-menu [data-action^="submenu"]{margin-top:1px;color:#1fae66;background:#0E0E0E;border-color:#000 #333 #333 #000}.nav-right-hide .vd_top-nav .vd_panel-menu [data-action^="toggle-navbar-right"],.nav-left-hide .vd_top-nav .vd_panel-menu [data-action^="toggle-navbar-left"]{background:rgba(0,0,0,0.6);border-color:rgba(0,0,0,0.1);color:#BABABA;margin-top:0}.nav-right-hide .panel-menu-style-2 .vd_panel-menu [data-action^="toggle-navbar-right"],.nav-left-hide .panel-menu-style-2 .vd_panel-menu [data-action^="toggle-navbar-left"]{background:none;border-color:#9DABA4;color:#9DABA4}.vd_mega-menu-wrapper>.vd_mega-menu>.mega-ul>.mega-li>[data-action^="toggle-navbar-right"],.vd_mega-menu-wrapper>.vd_mega-menu>.mega-ul>.mega-li>[data-action^="toggle-navbar-left"]{color:#1fae66}.nav-right-hide .vd_mega-menu-wrapper>.vd_mega-menu>.mega-ul>.mega-li>[data-action^="toggle-navbar-right"],.nav-left-hide .vd_mega-menu-wrapper>.vd_mega-menu>.mega-ul>.mega-li>[data-action^="toggle-navbar-left"]{color:#CCCCCC}.vd_mega-menu-content .title .vd_panel-menu{margin-right:2px}.vd_mega-menu-content .title .vd_panel-menu .menu{border:none;height:22px;line-height:22px;width:22px;margin-right:5px}.vd_head-section .vd_panel-menu .menu{color:#666;border:none;width:30px;height:29px;line-height:29px;border-right:1px solid #DDDDDD;-webkit-box-shadow:1px 0 0 rgba(255,255,255,0.5) inset;box-shadow:1px 0 0 rgba(255,255,255,0.5) inset;margin-right:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.vd_head-section .vd_panel-menu .menu:first-child{border-left:1px solid #DDDDDD}.vd_head-section .vd_panel-menu .menu:hover,.vd_head-section .vd_panel-menu .menu.active{background-color:#666;border-right-color:#EEE;color:#FFF}.vd_title-section .vd_panel-menu{top:7px;right:15px}.vd_title-section .vd_panel-menu>.menu{background-color:#F8F8F8;border:none;height:auto;padding:10px 15px;padding-left:15px;padding-right:15px;width:auto;margin-right:0;color:#666;text-align:left;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.vd_title-section .vd_panel-menu>.menu>.menu-icon{margin-right:10px}.vd_title-section .vd_panel-menu>.menu:hover,.vd_title-section .vd_panel-menu>.menu.active,.vd_title-section .vd_panel-menu>.menu:focus{background-color:#1fae66;border-color:#1fae66;color:#FFF}.vd_navbar .navbar-menu .vd_panel-menu{right:12px;top:12px}.vd_comments .comments-title{margin-bottom:30px}.vd_comments .commentlist{margin-left:0}.vd_comments li{list-style:none;position:relative;margin-bottom:20px}.vd_comments .comment-meta{float:left;margin-right:10px}.vd_comments .comment-author img{border-radius:50px;width:30px}.vd_comments .comment-content{margin-bottom:40px}.vd_comments .comment-author{float:left;font-size:24px;margin-right:25px}.vd_comments .comment-date{font-size:11px;font-style:italic;line-height:26px;margin-bottom:5px}.vd_comments .comment-reply{position:absolute;top:-2px;right:0}.vd_comments .comment-word{border-top:4px solid #E5E5E5;margin-top:20px;padding:10px 20px;font-size:14px;line-height:28px;position:relative}.vd_comments .comment-word:before{-moz-border-color:none;border-color:transparent transparent #E5E5E5;border-image:none;border-style:solid;border-width:10px;content:"";display:block;height:0;opacity:1;width:0;position:absolute;left:90px;top:-21px}.vd_comments ul{margin-left:68px;margin-top:20px;padding-left:0}.content-list .list-wrapper{margin:0;padding:0}.content-list .list-wrapper>li{padding-top:5px;padding-bottom:5px;list-style:none;border-bottom:1px solid #EEE;position:relative;text-align:left}.content-list .list-wrapper>li:before,.content-list .list-wrapper>li:after{content:" ";display:table}.content-list .list-wrapper>li:after{clear:both}.content-list .list-wrapper>li>a{display:block}.content-list .list-wrapper>li:hover{background:#F5F5F5}.content-list .list-wrapper>li.warning{background-color:#fff5de}.content-list .list-wrapper>li:last-child{border-bottom:none}.content-list .wrap-10 li{margin-left:-10px;margin-right:-10px;padding-left:10px;padding-right:10px}.content-list .wrap-15 li{margin-left:-15px;margin-right:-15px;padding-left:15px;padding-right:15px}.content-list .wrap-20 li{margin-left:-20px;margin-right:-20px;padding-left:20px;padding-right:20px}.content-list .wrap-25 li{margin-left:-25px;margin-right:-25px;padding-left:25px;padding-right:25px}.content-list .no-bd-btm li{border-bottom:none}.content-list .menu-icon{display:block;float:left;width:16px;text-align:center;font-size:14px}.content-list .progress{margin-bottom:5px;height:15px;line-height:15px}.content-list .menu-badge{position:absolute;right:10px;top:3px}.content-list .menu-text{display:block;margin-left:26px;text-transform:none;padding-right:15px}.content-list .menu-info{font-size:11.4px;font-style:italic;color:#939ba2;text-transform:capitalize;display:block}.content-list .menu-action{margin-left:10px}.content-list .menu-action .menu-action-icon{text-align:center;display:inline-block;height:22px;width:22px;line-height:20px;margin-left:10px;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px}.content-list .menu-action .menu-action-icon:hover{color:#1fae66;border-color:#1fae66}.content-list ul li.align-right .menu-icon{float:right;margin-right:0;margin-left:12px}.content-list ul li.align-right .menu-text{text-align:right;margin-right:26px;margin-left:0;padding-right:0;padding-left:15px}.content-list ul li.align-right .menu-text .menu-info .menu-action{margin-left:0;margin-right:10px}.content-list ul li.align-right .menu-badge{right:auto;left:0}.content-list .line{border-top:1px solid #EEE;margin-top:5px !important;margin-bottom:5px !important;padding:0 !important}.menu-action-right .menu-text{padding-right:30px}.menu-action-right .menu-action{position:absolute;right:15px;top:10px}.menu-action-right .menu-action .menu-action-icon{display:block;margin-bottom:4px}.menu-rating{display:inline-block}.menu-rating i{margin-right:1px}.menu-action .menu-action-icon:hover{cursor:pointer}.content-image .menu-icon{-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;font-size:28px;width:40px;height:40px;line-height:40px;margin-right:12px}.content-image .menu-icon img{-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}.content-image .menu-text{margin-left:55px}.content-image ul li.align-right .menu-icon{margin-right:0;margin-left:12px}.content-image ul li.align-right .menu-text{margin-right:55px}.content-menu .list-wrapper li{border-bottom:none;padding-top:3px;padding-bottom:3px}.content-large .menu-icon{font-size:24px;width:100px;height:100px;margin-right:15px}.content-large .menu-text{margin-left:115px}.content-large ul li.align-right .menu-icon{margin-right:0;margin-left:12px}.content-large ul li.align-right .menu-text{margin-right:115px}.content-blog-small .list-wrapper>li:hover,.content-blog-large .list-wrapper>li:hover{background:inherit}.content-blog-small .blog-title a,.content-blog-large .blog-title a{color:#5e656b}.content-blog-small .blog-title a:hover,.content-blog-large .blog-title a:hover{opacity:.8;filter:alpha(opacity=80)}.content-blog-small .menu-icon{font-size:32px;width:200px;margin-right:22px}.content-blog-small .menu-text{margin-left:227px}.content-blog-small .list-wrapper>li{padding-top:30px;padding-bottom:30px}.content-blog-small ul li.align-right .menu-icon{margin-right:0;margin-left:27px}.content-blog-small ul li.align-right .menu-text{margin-right:227px}.content-blog-large .menu-icon{font-size:48px;width:300px;margin-right:22px}.content-blog-large .menu-text{margin-left:327px}.content-blog-large .list-wrapper>li{padding-top:30px;padding-bottom:30px}.content-blog-large ul li.align-right .menu-icon{margin-right:0;margin-left:27px}.content-blog-large ul li.align-right .menu-text{margin-right:327px}.content-grid:before,.content-grid:after{content:" ";display:table}.content-grid:after{clear:both}.content-grid .list-wrapper{margin:0;padding:0}.content-grid .list-wrapper>li{float:left;margin-top:10px;margin-bottom:5px;list-style:none;position:relative}.content-grid .list-wrapper>li.warning{background-color:#fff5de}.content-grid .list-wrapper>li:hover{background:#F5F5F5}.content-grid .list-wrapper>li>a{padding:10px;display:block}.content-grid .menu-icon{display:block;text-align:center;width:90%;margin-left:auto;margin-right:auto;font-size:36px}.content-grid .menu-icon img{-webkit-border-radius:100px;-moz-border-radius:100px;border-radius:100px}.content-grid .menu-text{display:block;text-transform:none;text-align:center}.content-grid .menu-text .menu-info{font-size:11.4px;font-style:italic;color:#939ba2;display:block;text-transform:capitalize}.content-grid .menu-text .menu-info .menu-action{display:block}.content-grid .menu-text .menu-info .menu-action .menu-action-icon{text-align:center;font-size:14px;border:1px solid #AAA;display:inline-block;height:22px;width:22px;line-height:18px;margin-left:10px;margin-top:10px;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px}.content-grid .menu-text .menu-info .menu-action .menu-action-icon:first-child{margin-left:0}.content-grid .menu-text .menu-info .menu-action .menu-action-icon:hover{color:#1fae66;border-color:#1fae66;background:#fff}.content-grid .menu-text .progress{margin-bottom:5px;margin-top:5px;height:12px}.content-chat .list-wrapper>.group-heading{padding:2px 10px}.content-chat .list-wrapper>li{margin-left:-20px;margin-right:-20px}.content-chat .list-wrapper>li:hover{background-color:rgba(255,255,255,0.1)}.content-chat .list-wrapper>.group-heading:hover{background-color:inherit}.vd_pricing-table .plan{margin-right:-15px;margin-left:-15px;position:relative;margin-top:20px;box-shadow:11px 0 10px 0 rgba(0,0,0,0.1),-11px 0 10px -15px rgba(0,0,0,0.1)}.vd_pricing-table .main{font-size:72px}.vd_pricing-table .price{padding:50px 10px 35px}.vd_pricing-table .price .suffix{font-size:34px;display:inline-block;margin-left:-18px;position:relative;top:-13px;left:7px;vertical-align:top;font-weight:300}.vd_pricing-table .price .text{font-size:12px;display:inline-block;margin-left:2px;position:relative;left:-37px;bottom:2px;vertical-align:bottom;border-top:2px solid #FFFFFF}.vd_pricing-table .caret-pos{font-size:36px;position:absolute;left:48%;bottom:-12px}.vd_pricing-table .features{padding-top:20px;padding-bottom:20px}.vd_pricing-table .features li{padding:20px 40px}.vd_pricing-table .featured{box-shadow:11px 0 10px -10px rgba(0,0,0,0.1),-11px 0 10px -10px rgba(0,0,0,0.1);z-index:1;margin-top:0}.vd_pricing-table .featured h3{padding-top:26px !important;padding-bottom:30px !important;font-size:28px}.vd_pricing-table .featured .features{padding-bottom:60px}.vd_pricing-table .featured .price{padding-bottom:34px}.vd_back-top{background:none repeat scroll 0 0 #1FAE66;bottom:-30px;color:#FFFFFF;font-size:32px;font-weight:bold;height:43px;opacity:0;padding:5px 0 0;position:fixed;right:0;text-align:center;text-decoration:none;width:48px;z-index:9999}.vd_back-top.visible:hover{opacity:1}.vd_back-top.visible:hover,.vd_back-top.visible:focus{color:#FFFFFF}.vd_back-top.visible{bottom:0;opacity:0.75}.vd_gallery .gallery-item:hover>a .bg-cover{opacity:.8}.vd_gallery .gallery-item:hover>a .bg-cover.light{opacity:.4}.vd_gallery .gallery-item:hover>.vd_info{opacity:1;transform:scale(1)}.vd_gallery .gallery-item{float:left;width:200px;height:200px;background:#FFFFFF;border:2px solid #F0F0F0;overflow:hidden}.vd_gallery .gallery-item>a{position:relative;display:block;width:100%;height:100%}.vd_gallery .gallery-item>a .bg-cover{width:100%;height:100%;position:absolute;top:0;left:0;background:#FFF;opacity:0;transition:all 300ms ease-in-out 0s}.vd_gallery .gallery-item>.vd_info{opacity:0;transform:scale(0);transform-origin:50% 0 0;transition:all 300ms ease-in-out 0s;width:100%;position:absolute;bottom:20px;left:0px;padding:0 40px 0 20px}.vd_gallery .gallery-item>.vd_info h3{font-weight:300}.vd_gallery .gallery-item.width2{width:400px}.vd_gallery .gallery-item.height2{height:400px}.vd_gallery .gallery-item.full-width{width:100%;height:auto;float:none}.isotope:after{content:'';display:block;clear:both}.vd_visitor-counter{display:table;margin:0 auto}.vd_visitor-counter .item-row{display:table-row}.vd_visitor-counter .item{width:72px;text-align:center;font-size:72px;font-weight:700;height:88px;color:#FFF;display:table-cell;vertical-align:middle;border-radius:4px;position:relative;line-height:88px;margin-right:5px;float:left}.vd_visitor-counter .item .line{border:1px solid #FFF;position:absolute;width:72px;top:50%}.vd_visitor-counter .break{margin-right:25px}.vd_visitor-counter .item-border{border:8px solid #FFF;position:absolute;width:72px;top:48%}.vd_timeline{list-style:none outside none;margin:0;padding:0;position:relative}.vd_timeline .tl-item{position:relative}.vd_timeline>.tl-item .tl-label{margin-left:24%;background:none repeat scroll 0 0 #FFFFFF;font-size:13px;line-height:1.4;margin-bottom:15px;position:relative}.vd_timeline>.tl-item-year{height:78px}.vd_timeline>.tl-item-date{height:120px}.vd_timeline>.tl-item-year.tl-separator{height:120px;top:80px}.vd_timeline>.tl-item-date.tl-separator{height:200px;top:50px}.vd_timeline>.tl-item .tl-year{padding:20px 15px;font-size:36px;margin-left:-65px;background:#F0F0F0;font-weight:bold}.vd_timeline>.tl-item .tl-date{background:none repeat scroll 0 0 #F0F0F0;border-radius:50%;box-shadow:0 0 0 6px #AAAAAA;color:#909090;font-weight:bold;height:85px;line-height:82px;margin:0 0 0 -49px;text-align:center;font-size:1.8em;top:0px;width:85px}.vd_timeline>.tl-item .tl-date-2{line-height:24px;padding-top:13px}.vd_timeline>.tl-item .tl-date-3{line-height:20px;padding-top:22px}.vd_timeline>.tl-item .tl-date-end{top:40px}.vd_timeline>.tl-item .tl-date .tl-day{font-size:36px}.vd_timeline>.tl-item .tl-date .tl-month{font-size:18px}.vd_timeline>.tl-item .tl-img{width:55px}.vd_timeline>.tl-item .tl-action{margin-left:-10px}.vd_timeline>.tl-item .tl-icon{background:none repeat scroll 0 0 #FFFFFF;border-radius:50%;box-shadow:0 0 0 6px #FFFFFF;color:#7C8694;font-size:1.3em;font-style:normal;font-variant:normal;font-weight:normal;height:40px;line-height:37px;margin:0 0 0 -27px;text-align:center;text-transform:none;top:19px;width:40px}.vd_timeline>.tl-item .entypo-icon{line-height:40px}.vd_timeline>.tl-item .tl-icon:after{content:"";height:1px;border-top:1px solid #1EAE66;position:absolute;top:20px;width:100px;left:40px}.vd_timeline>.tl-item .tl-icon.primary{background:none repeat scroll 0 0 #111111;box-shadow:0 0 0 6px rgba(255,255,255,0.7);color:#FFFFFF}.vd_timeline>.tl-item .tl-icon.primary:after{border-top-color:#111111}.vd_timeline>.tl-item .tl-icon.success{background:none repeat scroll 0 0 #1eae66;box-shadow:0 0 0 6px rgba(255,255,255,0.7);color:#FFFFFF}.vd_timeline>.tl-item .tl-icon.success:after{border-top-color:#1eae66}.vd_timeline>.tl-item .tl-icon.warning{background:none repeat scroll 0 0 #F89C2C;box-shadow:0 0 0 6px rgba(255,255,255,0.7);color:#FFFFFF}.vd_timeline>.tl-item .tl-icon.warning:after{border-top-color:#F89C2C}.vd_timeline>.tl-item .tl-icon.danger{background:none repeat scroll 0 0 #F85D2C;box-shadow:0 0 0 6px rgba(255,255,255,0.7);color:#FFFFFF}.vd_timeline>.tl-item .tl-icon.danger:after{border-top-color:#F85D2C}.vd_timeline>.tl-item .tl-icon.info{background:none repeat scroll 0 0 #23709E;box-shadow:0 0 0 6px rgba(255,255,255,0.7);color:#FFFFFF}.vd_timeline>.tl-item .tl-icon.info:after{border-top-color:#23709E}.vd_timeline:before,.vd_timeline>li .tl-year,.vd_timeline>li .tl-date,.vd_timeline>li .tl-icon{position:absolute;left:15%}.vd_timeline:before{background:none repeat scroll 0 0 #AAAAAA;bottom:0;content:"";margin-left:-10px;top:0;width:6px}.widget{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;position:relative}.widget:before,.widget:after{content:" ";display:table}.widget:after{clear:both}[data-rel^="sortable"] .widget:hover{cursor:move}.widget .vd_panel-menu{right:15px;top:6px}.widget .vd_panel-menu .menu{border:none;line-height:22px;margin-right:2px;color:#F0F0F0;font-size:12px;height:24px;width:22px}.widget .vd_panel-menu>.entypo-icon{font-size:18px;line-height:26px}.widget .vd_panel-menu>.smaller-font{font-size:14px}.widget .vd_panel-menu>.menu:hover,.widget .vd_panel-menu>.menu.active{background-color:rgba(0,0,0,0.4);color:#FFFFFF}.widget .vd_panel-menu .child-menu{font-size:13px}.light-widget .panel-heading{background:#FFFFFF}.light-widget .panel-heading .panel-title{color:#888888}.light-widget .vd_panel-menu .menu{color:#b5b5b5}.light-widget .bordered{border-bottom:1px solid #EEEEEE}.dark-widget{color:#FFF}.dark-widget .bordered{border-bottom:1px solid #F5F5F5}.light-widget .bordered,.dark-widget .bordered{padding-top:9px;padding-bottom:9px;margin-left:-1px;margin-right:-1px}.panel-bd-left{border-left:3px solid #1fae66}.panel-bd-top{border-top:3px solid #1fae66}.widget .vd_panel-menu .menu .vd_mega-menu-content{margin-top:5px;margin-left:-13px}.widget .vd_panel-menu .menu .vd_mega-menu-content.left-xs,.widget .vd_panel-menu .menu .vd_mega-menu-content.left-sm,.widget .vd_panel-menu .menu .vd_mega-menu-content.left-md,.widget .vd_panel-menu .menu .vd_mega-menu-content.left-lg{margin-left:auto;margin-right:-13px}.vd_menu-search{width:300px;background:#FFF;padding:2px 0 2px 13px;margin-left:3px;font-size:12px;margin-top:18px;position:relative;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}.vd_menu-search .vd_menu-search-text{border:none;color:#444;padding:0}.vd_menu-search .vd_menu-search-category{margin-right:10px;position:relative;display:inline-block}.vd_menu-search .vd_menu-search-category .separator{border-left:1px dotted #333;margin-right:8px;height:16px;margin-bottom:-3px;display:inline-block}.vd_menu-search .vd_menu-search-category .text{margin-right:6px}.vd_menu-search .vd_menu-search-category .vd_mega-menu-content{top:22px;border-top:1px solid #DDD}.vd_menu-search .vd_menu-search-category .vd_mega-menu-content label{font-weight:normal}.vd_menu-search .vd_menu-search-category .vd_mega-menu-content label input{margin-right:10px}.vd_menu-search .vd_menu-search-category .vd_mega-menu-content:before{display:none}.vd_menu-search .vd_menu-search-category:hover{cursor:pointer}.vd_menu-search .vd_menu-search-submit{position:absolute;top:0;right:0;background:#1fae66;color:#FFF;padding:2px 8px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}.vd_menu-search .vd_menu-search-submit:hover{cursor:pointer;background-color:#23c473}.menu-search-style-2 .vd_menu-search{margin-left:18px;margin-top:16px;padding:4px 0 4px 13px}.menu-search-style-2 .vd_menu-search .vd_menu-search-submit{padding:4px 10px;right:-2px}.vd_chat-menu{position:fixed;bottom:0;right:10%;z-index:9;background-color:#39515F;border-top:3px solid #333333}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>.mega-li{height:50px}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>.mega-li>a{color:#FFFFFF}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>.mega-li .mega-link{line-height:24px;margin-top:-4px;border:none}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li.profile{margin-top:0;margin-right:0}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li.profile .mega-name{margin-top:1px}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li.profile:hover{background:rgba(0,0,0,0.4)}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li.one-big-icon{padding-top:10px}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li.one-icon{padding-top:8px}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul>li:last-child{margin-left:0}.vd_chat-menu .vd_mega-menu-wrapper .vd_mega-menu>ul .bordered{border-left:1px solid rgba(0,0,0,0.2);border-right:1px solid rgba(0,0,0,0.2)}.vd_chat-menu .vd_mega-menu-wrapper .chat-area{border-top:1px solid #F5F5F5}.vd_chat-menu .vd_mega-menu-wrapper .chat-area .chat-box input{border:none;padding:10px 65px 10px 10px}.vd_chat-menu .vd_mega-menu-wrapper .chat-area .vd_panel-menu{top:6px;right:8px}.vd_chat-menu .vd_mega-menu-wrapper .chat-area .vd_panel-menu .menu{border:none;color:#666}.vd_status-widget a{display:block;color:#F0F0F0;padding:20px}.vd_status-widget a:hover{color:#FFF;background:rgba(0,0,0,0.1)}.vd_status-widget .menu-icon{display:block;font-size:48px;float:left;line-height:56px}.vd_status-widget .menu-value{margin-left:25px;line-height:56px;font-size:36px}.vd_status-widget .menu-text{padding-top:10px;font-size:16px;letter-spacing:.2px;text-transform:uppercase}.vd_interactive-widget .item-left,.vd_interactive-widget .item-right{padding:15px;border-top:1px solid #EAEAEA}.vd_interactive-widget .item-left{margin-right:-15px;border-right:1px solid #EAEAEA}.vd_interactive-widget .item-right{margin-left:-15px}.vd_textarea-menu .nav-pills>li>a{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;color:#FFFFFF !important;padding:5px 10px 7px !important}.vd_textarea-menu .nav-pills>li>a .menu-icon{margin-right:0 !important}.vd_textarea-menu .nav-pills>li:hover>a,.vd_textarea-menu .nav-pills>li:hover{background:rgba(0,0,0,0.1) !important}.vd_weather-widget .weather-degree{font-size:60px}.vd_weather-widget .weather-icon{position:absolute;top:20px;right:20px}.vd_weather-widget .weather-subinfo{font-size:44px;text-align:center;margin-top:15px;margin-bottom:15px}.vd_weather-widget .weather-subinfo .wind-value{line-height:10px}.vd_weather-widget .weather-subinfo .wind-text{font-size:32px}.vd_testimonial{position:relative}.vd_testimonial .caret-icon{position:absolute;top:-14px;left:144px;color:rgba(0,0,0,0.2);background:url(../img/banner/caret-testimonial.png) no-repeat;display:block;width:31px;height:14px}.vd_testimonial .testimonial-word-wrapper{background:rgba(0,0,0,0.2);padding:25px;color:#FFFFFF;position:relative;border-radius:10px}.vd_testimonial .vd_carousel-control{position:absolute;right:0;top:60px;z-index:10}.vd_testimonial .vd_carousel-control a{color:white;background:rgba(0,0,0,0.3);padding:10px 15px;margin-right:5px;border-radius:30px}.vd_testimonial .vd_carousel-control a:hover{background:rgba(0,0,0,0.5)}.vd_testimonial .testimonial-word{background:url(../img/icons/quote-big.png) no-repeat top left;padding-left:70px;padding-top:10px}.vd_carousel-column{float:left}.vd_section{padding-top:100px;padding-bottom:100px}.vd_news-widget .vd_carousel-control{position:absolute;top:4px;left:0px;z-index:9}.vd_news-widget .vd_carousel-control a{background:rgba(255,255,255,0.2);color:rgba(0,0,0,0.2);padding:8px 15px;font-size:14px}.vd_news-widget .vd_carousel-control a:hover{background:rgba(255,255,255,0.4)}.font-light{font-weight:300}.font-normal{font-weight:400}.font-semibold{font-weight:500}.font-bold{font-weight:700}.font-extrabold{font-weight:900}.font-xs{font-size:12px}.font-sm{font-size:18px}.font-md{font-size:26px}.font-lg{font-size:52px}.profile-icon{font-size:32px}.space-xs{letter-spacing:-0.5px}.space-sm{letter-spacing:0.1px}.space-md{letter-spacing:0.5px}.space-lg{letter-spacing:1px}.lh-sm{line-height:16px}.append-icon{margin-right:7px}.prepend-icon{margin-left:7px}.menu-btn{position:relative;display:inline-block}.rotate-min180{-webkit-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.rotate-0{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}.hidden{display:none}.input-border{border:1px solid #CCCCCC !important}.input-border-btm{border-top:none !important;border-left:none !important;border-right:none !important;border-bottom:1px solid #CCCCCC !important}.vd_li{padding-left:16px}.vd_li li{list-style:none}.radius-10{border-radius:10px}.no-bd{border:none !important}.no-bg{background:none !important}.no-br{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.vd_hidden{display:none}.pd-0{padding:0px !important}.pd-5{padding:5px !important}.pd-10{padding:10px !important}.pd-15{padding:15px !important}.pd-20{padding:20px !important}.pd-25{padding:25px !important}.pdlr-10{padding-left:10px !important;padding-right:10px !important}.pdlr-15{padding-left:15px !important;padding-right:15px !important}.pd-lr-10 li{padding-left:10px !important;padding-right:10px !important}.pd-lr-15 li{padding-left:15px !important;padding-right:15px !important}.pd-lr-20 li{padding-left:20px !important;padding-right:20px !important}.pd-lr-25 li{padding-left:25px !important;padding-right:25px !important}.mgr-10{margin-right:10px !important}.mgr-15{margin-right:15px !important}.mgr-20{margin-right:20px !important}.mgl-10{margin-left:10px !important}.mgl-15{margin-left:15px !important}.mgl-20{margin-left:20px !important}.vd_hover:hover{cursor:pointer}.vd_info-parent{position:relative}.vd_info,.vd_info-menu{position:absolute}.tl{top:20px;left:20px}.tr{top:20px;right:20px}.bl{bottom:20px;left:20px}.br{bottom:20px;right:20px}.vd_info-menu.tl{top:0px;left:0px}.vd_info-menu.tr{top:0px;right:0px}.vd_info-menu.bl{bottom:0px;left:0px}.vd_info-menu.br{bottom:0px;right:0px}.vd_red{color:#f85d2c !important}.vd_green{color:#1fae66 !important}.vd_yellow{color:#f89c2c !important}.vd_blue{color:#23709e !important}.vd_white{color:#fff !important}.vd_black{color:#111 !important}.vd_grey{color:#777 !important}.vd_soft-grey{color:#b5b5b5 !important}.vd_facebook{color:#436eac !important}.vd_twitter{color:#0598c9 !important}.vd_linkedin{color:#2e8cc2 !important}.vd_googleplus{color:#cf1900 !important}.vd_bg-red{background-color:#f85d2c !important}.vd_bg-green{background-color:#1fae66 !important}.vd_bg-yellow{background-color:#f89c2c !important}.vd_bg-blue{background-color:#23709e !important}.vd_bg-white{background-color:#fff !important}.vd_bg-black{background-color:#111 !important}.vd_bg-grey{background-color:#777 !important}.vd_bg-dark-red{background-color:#724c3f !important}.vd_bg-dark-green{background-color:#2e8258 !important}.vd_bg-dark-blue{background-color:#39515f !important}.vd_bg-dark-yellow{background-color:#7f684d !important}.vd_bg-soft-red{background-color:#ff7c62 !important}.vd_bg-soft-green{background-color:#4abc96 !important}.vd_bg-soft-yellow{background-color:#f2be3e !important}.vd_bg-soft-blue{background-color:#67b8cb !important}.vd_bg-soft-grey{background-color:#b5b5b5 !important}.vd_bg-facebook{background-color:#436eac !important}.vd_bg-twitter{background-color:#0598c9 !important}.vd_bg-linkedin{background-color:#2e8cc2 !important}.vd_bg-googleplus{background-color:#cf1900 !important}.bdr-soft-grey{border-right:1px solid #EAEAEA}.bdl-soft-grey{border-left:1px solid #EAEAEA}.vd_bd-red{border-color:#f85d2c !important}.vd_bd-green{border-color:#1fae66 !important}.vd_bd-yellow{border-color:#f89c2c !important}.vd_bd-blue{border-color:#23709e !important}.vd_bd-white{border-color:#fff !important}.vd_bd-black{border-color:#111 !important}.vd_bd-grey{border-color:#777 !important}.vd_bdl-red{border-left-color:#f85d2c !important}.vd_bdl-green{border-left-color:#1fae66 !important}.vd_bdl-yellow{border-left-color:#f89c2c !important}.vd_bdl-blue{border-left-color:#23709e !important}.vd_bdl-white{border-left-color:#fff !important}.vd_bdl-black{border-left-color:#111 !important}.vd_bdl-grey{border-left-color:#777 !important}.vd_bdt-red{border-top-color:#f85d2c !important}.vd_bdt-green{border-top-color:#1fae66 !important}.vd_bdt-yellow{border-top-color:#f89c2c !important}.vd_bdt-blue{border-top-color:#23709e !important}.vd_bdt-white{border-top-color:#fff !important}.vd_bdt-black{border-top-color:#111 !important}.vd_bdt-grey{border-top-color:#777 !important}.vd_bg-black-10{background-color:rgba(0,0,0,0.1) !important}.vd_bg-black-20{background-color:rgba(0,0,0,0.2) !important}.vd_bg-black-30{background-color:rgba(0,0,0,0.3) !important}.vd_bg-black-40{background-color:rgba(0,0,0,0.4) !important}.vd_bg-black-50{background-color:rgba(0,0,0,0.5) !important}.vd_bg-black-60{background-color:rgba(0,0,0,0.6) !important}.vd_bg-black-70{background-color:rgba(0,0,0,0.7) !important}.vd_bg-black-80{background-color:rgba(0,0,0,0.8) !important}.vd_bg-black-90{background-color:rgba(0,0,0,0.9) !important}.vd_bg-white-10{background-color:rgba(255,255,255,0.1) !important}.vd_bg-white-20{background-color:rgba(255,255,255,0.2) !important}.vd_bg-white-30{background-color:rgba(255,255,255,0.3) !important}.vd_bg-white-40{background-color:rgba(255,255,255,0.4) !important}.vd_bg-white-50{background-color:rgba(255,255,255,0.5) !important}.vd_bg-white-60{background-color:rgba(255,255,255,0.6) !important}.vd_bg-white-70{background-color:rgba(255,255,255,0.7) !important}.vd_bg-white-80{background-color:rgba(255,255,255,0.8) !important}.vd_bg-white-90{background-color:rgba(255,255,255,0.9) !important}.background-login{background:#F0F0F0  !important}.background-1{background:url('../img/pattern/pattern1.png')}.background-2{background:url('../img/pattern/pattern2.png')}.background-3{background:url('../img/pattern/pattern3.png')}.background-4{background:url('../img/pattern/pattern4.png')}.background-5{background:url('../img/pattern/pattern5.png')}.background-6{background:url('../img/pattern/pattern6.png')}.background-7{background:url('../img/pattern/pattern7.png')}.background-8{background:url('../img/pattern/pattern8.png')}.left-pos{left:0 !important;right:auto !important}.right-pos{right:0 !important;left:auto !important}.menu-badge{float:right}.width-10{width:10% !important}.width-20{width:20% !important}.width-30{width:30% !important}.width-40{width:40% !important}.width-50{width:50% !important}.width-60{width:60% !important}.width-70{width:70% !important}.width-80{width:80% !important}.width-90{width:90% !important}.width-100{width:100% !important}.table-dragable tr{cursor:move}.table-scrollable{overflow-x:auto;overflow-y:visible;width:100%}.vd_mega-menu-wrapper{width:100%;position:relative;z-index:3}.vd_mega-menu-wrapper .vd_mega-menu{float:left}.vd_mega-menu-wrapper .vd_mega-menu .mega-ul,.vd_mega-menu-wrapper .vd_mega-menu .mega-li{margin:0;padding:0}.vd_mega-menu-wrapper .vd_mega-menu .mega-li{list-style:none}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon,.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.profile{padding:13px 7px 14px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon>.mega-link,.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon>.mega-link{display:block;height:36px;line-height:30px;width:36px;text-align:center;padding:0;margin:0;overflow:hidden;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon{padding:14px 4px 13px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon>.mega-link{font-size:24px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon>.mega-link>.mega-image{margin-left:5px;margin-right:5px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon>.mega-link>.badge{right:-4px;top:5px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon .open-left:before{right:11px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-big-icon .open-right:before{right:auto;left:11px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.profile{margin-left:15px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.profile .mega-image{float:left}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.profile .mega-name{display:block;float:left;margin-left:10px;margin-top:5px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul .mega-image{height:36px;line-height:30px;width:36px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul .mega-image img{-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;vertical-align:top}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon>.mega-link{border:2px solid #EEE}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon>.mega-link .mega-icon{font-size:16px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon .mega-link:hover,.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>li.one-icon .mega-link.open{background-color:#fff !important;color:#1fae66}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li{float:left;position:relative;margin-left:5px;padding:18px 7px 20px;height:63px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a{padding:0;color:#ccc}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a:hover,.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a:focus{background:none}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .btn{padding:6px 15px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .btn-lg{padding:11px 19px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .btn-sm{padding:5px 10px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .btn-xs{font-size:11px;padding:4px 8px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .caret{border-top-color:#FFFFFF;border-bottom-color:#FFFFFF}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .badge{position:absolute;right:4px;top:4px}.vd_mega-menu-wrapper .vd_mega-menu>.mega-ul li.hover-trigger:hover>.hover-target{display:block !important}.vd_mega-menu-wrapper.horizontal-menu{z-index:6}.vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu>.mega-ul>.mega-li{padding:8px 13px;height:42px;margin-top:10px;margin-bottom:10px;border-radius:4px}.vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu>.mega-ul>.mega-li>a{font-size:14px}.vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu>.mega-ul>.mega-li:hover,.vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu>.mega-ul>.mega-li.active{background:rgba(0,0,0,0.4);color:#FFFFFF}.vd_mega-menu-content:before{-moz-border-color:none;border-color:transparent transparent #1fae66;border-image:none;border-style:solid;border-width:5px;content:"";display:block;height:0;opacity:1;width:0;position:absolute;top:-12px}.vd_mega-menu-content{padding-top:5px;padding-bottom:15px;position:absolute;top:100%;display:none;background-color:#FFF;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05);border-top:3px solid #1fae66;z-index:5}.vd_mega-menu-content .line{border-top:1px solid #EEE;margin-top:5px !important;margin-bottom:5px !important;padding:0 !important}.vd_mega-menu-content .closing{margin-bottom:-15px}.vd_mega-menu-content.no-top{border-top:none}.vd_mega-menu-content.no-top:before{border:none}.vd_mega-menu-content .child-menu{position:relative;padding:0;color:#5e656b;letter-spacing:.3px}.vd_mega-menu-content .child-menu a{color:#5e656b}.vd_mega-menu-content .child-menu .title{background:#1fae66;color:#FFF;margin-top:-5px;padding:0 10px 3px}.vd_mega-menu-content .child-menu .title .vd_panel-menu .entypo-icon{font-size:18px;line-height:26px}.vd_mega-menu-content .child-menu .title .vd_panel-menu .smaller-font{font-size:14px}.vd_mega-menu-content .child-menu .content{padding:5px 10px}.closing{font-size:11.4px;background:#F5F5F5 !important;position:relative}.closing a{color:#999 !important;display:block;padding:3px 10px 5px}.closing a:hover{color:#1fae66 !important}.open-top{top:auto;bottom:106%}.open-top:before{display:none !important}.light-top-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .mega-link,.light-top-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .one-icon,.light-top-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .mega-name{border-color:#707e77;color:#707e77}.light-top-menu .vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu>.mega-ul>.mega-li>a{color:#707e77}.light-top-menu .vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu .mega-ul>.mega-li:hover,.light-top-menu .vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu .mega-ul>.mega-li.active{background:#1fae66}.light-top-menu .vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu .mega-ul>.mega-li:hover>a,.light-top-menu .vd_mega-menu-wrapper.horizontal-menu .vd_mega-menu .mega-ul>.mega-li.active>a{color:#FFFFFF}.light-top-menu .vd_menu-search{background:#333333;color:#EEEEEE}.light-top-menu .vd_menu-search .vd_menu-search-text{background:#333333;color:#EEEEEE}.menu-action-icon.vd_green:hover{background:#1fae66 !important;color:#fff !important}.menu-action-icon.vd_red:hover{background:#f85d2c !important;color:#fff !important}.menu-action-icon.vd_yellow:hover{background:#1fae66 !important;color:#fff !important}.menu-action-icon.vd_orange:hover{background:#f85d2c !important;color:#fff !important}.menu-action-icon.vd_blue:hover{background:#1fae66 !important;color:#fff !important}.width-lg-1{width:60px}.width-lg-2{width:180px}.width-lg-3{width:240px}.width-lg-4{width:320px}.width-lg-5{width:480px}.width-lg-6{width:720px}.width-lg-full{width:1130px}.width-md-1{width:60px}.width-md-2{width:180px}.width-md-3{width:240px}.width-md-4{width:320px}.width-md-5{width:480px}.width-md-6{width:720px}.width-md-full{width:1130px}.width-sm-1{width:60px}.width-sm-2{width:180px}.width-sm-3{width:240px}.width-sm-4{width:320px}.width-sm-5{width:480px}.width-sm-6{width:720px}.width-sm-full{width:1130px}.width-xs-1{width:60px}.width-xs-2{width:180px}.width-xs-3{width:240px}.width-xs-4{width:320px}.width-xs-5{width:480px}.width-xs-6{width:720px}.width-xs-full{width:1130px}.height-lg-auto .list-wrapper>li{height:auto}.height-lg-1 .list-wrapper>li{height:60px}.height-lg-2 .list-wrapper>li{height:120px}.height-lg-3 .list-wrapper>li{height:180px}.height-lg-4 .list-wrapper>li{height:240px}.height-lg-5 .list-wrapper>li{height:320px}.height-lg-6 .list-wrapper>li{height:480px}.height-md-auto .list-wrapper>li{height:auto}.height-md-1 .list-wrapper>li{height:60px}.height-md-2 .list-wrapper>li{height:120px}.height-md-3 .list-wrapper>li{height:180px}.height-md-4 .list-wrapper>li{height:240px}.height-md-5 .list-wrapper>li{height:320px}.height-md-6 .list-wrapper>li{height:480px}.height-sm-auto .list-wrapper>li{height:auto}.height-sm-1 .list-wrapper>li{height:60px}.height-sm-2 .list-wrapper>li{height:120px}.height-sm-3 .list-wrapper>li{height:180px}.height-sm-4 .list-wrapper>li{height:240px}.height-sm-5 .list-wrapper>li{height:320px}.height-sm-6 .list-wrapper>li{height:480px}.height-xs-auto .list-wrapper>li{height:auto}.height-xs-1 .list-wrapper>li{height:60px}.height-xs-2 .list-wrapper>li{height:120px}.height-xs-3 .list-wrapper>li{height:180px}.height-xs-4 .list-wrapper>li{height:240px}.height-xs-5 .list-wrapper>li{height:320px}.height-xs-6 .list-wrapper>li{height:480px}.column-lg-1 ul li{width:100%;margin-left:0 !important;margin-right:0 !important}.column-lg-1 ul li:first-child,.column-lg-1 ul li:nth-child(2n+1),.column-lg-1 ul li:nth-child(3n+1),.column-lg-1 ul li:nth-child(4n+1),.column-lg-1 ul li:nth-child(5n+1),.column-lg-1 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-2 ul li{width:47%;margin-left:1% !important;margin-right:1% !important}.column-lg-2 ul li:first-child,.column-lg-2 ul li:nth-child(2n+1),.column-lg-2 ul li:nth-child(3n+1),.column-lg-2 ul li:nth-child(4n+1),.column-lg-2 ul li:nth-child(5n+1),.column-lg-2 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-2 ul li:first-child,.column-lg-2 ul li:nth-child(2n+1){margin-left:2% !important}.column-lg-3 ul li{width:30%;margin-left:1% !important;margin-right:1% !important}.column-lg-3 ul li:first-child,.column-lg-3 ul li:nth-child(2n+1),.column-lg-3 ul li:nth-child(3n+1),.column-lg-3 ul li:nth-child(4n+1),.column-lg-3 ul li:nth-child(5n+1),.column-lg-3 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-3 ul li:first-child,.column-lg-3 ul li:nth-child(3n+1){margin-left:2% !important}.column-lg-4 ul li{width:23%;margin-left:1% !important;margin-right:1% !important}.column-lg-4 ul li:first-child,.column-lg-4 ul li:nth-child(2n+1),.column-lg-4 ul li:nth-child(3n+1),.column-lg-4 ul li:nth-child(4n+1),.column-lg-4 ul li:nth-child(5n+1),.column-lg-4 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-4 ul li:first-child,.column-lg-4 ul li:nth-child(4n+1){margin-left:2% !important}.column-lg-4 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-lg-5 ul li{width:18%;margin-left:1% !important;margin-right:1% !important}.column-lg-5 ul li:first-child,.column-lg-5 ul li:nth-child(2n+1),.column-lg-5 ul li:nth-child(3n+1),.column-lg-5 ul li:nth-child(4n+1),.column-lg-5 ul li:nth-child(5n+1),.column-lg-5 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-5 ul li:first-child,.column-lg-5 ul li:nth-child(5n+1){margin-left:1% !important}.column-lg-5 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-lg-6 ul li{width:15%;margin-left:1% !important;margin-right:1% !important}.column-lg-6 ul li:first-child,.column-lg-6 ul li:nth-child(2n+1),.column-lg-6 ul li:nth-child(3n+1),.column-lg-6 ul li:nth-child(4n+1),.column-lg-6 ul li:nth-child(5n+1),.column-lg-6 ul li:nth-child(6n+1){margin-left:0 !important}.column-lg-6 ul li:first-child,.column-lg-6 ul li:nth-child(6n+1){margin-left:2% !important}.column-lg-6 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-md-1 ul li{width:100%;margin-left:0 !important;margin-right:0 !important}.column-md-1 ul li:first-child,.column-md-1 ul li:nth-child(2n+1),.column-md-1 ul li:nth-child(3n+1),.column-md-1 ul li:nth-child(4n+1),.column-md-1 ul li:nth-child(5n+1),.column-md-1 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-2 ul li{width:47%;margin-left:1% !important;margin-right:1% !important}.column-md-2 ul li:first-child,.column-md-2 ul li:nth-child(2n+1),.column-md-2 ul li:nth-child(3n+1),.column-md-2 ul li:nth-child(4n+1),.column-md-2 ul li:nth-child(5n+1),.column-md-2 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-2 ul li:first-child,.column-md-2 ul li:nth-child(2n+1){margin-left:2% !important}.column-md-3 ul li{width:30%;margin-left:1% !important;margin-right:1% !important}.column-md-3 ul li:first-child,.column-md-3 ul li:nth-child(2n+1),.column-md-3 ul li:nth-child(3n+1),.column-md-3 ul li:nth-child(4n+1),.column-md-3 ul li:nth-child(5n+1),.column-md-3 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-3 ul li:first-child,.column-md-3 ul li:nth-child(3n+1){margin-left:2% !important}.column-md-4 ul li{width:23%;margin-left:1% !important;margin-right:1% !important}.column-md-4 ul li:first-child,.column-md-4 ul li:nth-child(2n+1),.column-md-4 ul li:nth-child(3n+1),.column-md-4 ul li:nth-child(4n+1),.column-md-4 ul li:nth-child(5n+1),.column-md-4 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-4 ul li:first-child,.column-md-4 ul li:nth-child(4n+1){margin-left:2% !important}.column-md-4 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-md-5 ul li{width:18%;margin-left:1% !important;margin-right:1% !important}.column-md-5 ul li:first-child,.column-md-5 ul li:nth-child(2n+1),.column-md-5 ul li:nth-child(3n+1),.column-md-5 ul li:nth-child(4n+1),.column-md-5 ul li:nth-child(5n+1),.column-md-5 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-5 ul li:first-child,.column-md-5 ul li:nth-child(5n+1){margin-left:1% !important}.column-md-5 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-md-6 ul li{width:15%;margin-left:1% !important;margin-right:1% !important}.column-md-6 ul li:first-child,.column-md-6 ul li:nth-child(2n+1),.column-md-6 ul li:nth-child(3n+1),.column-md-6 ul li:nth-child(4n+1),.column-md-6 ul li:nth-child(5n+1),.column-md-6 ul li:nth-child(6n+1){margin-left:0 !important}.column-md-6 ul li:first-child,.column-md-6 ul li:nth-child(6n+1){margin-left:2% !important}.column-md-6 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-sm-1 ul li{width:100%;margin-left:0 !important;margin-right:0 !important}.column-sm-1 ul li:first-child,.column-sm-1 ul li:nth-child(2n+1),.column-sm-1 ul li:nth-child(3n+1),.column-sm-1 ul li:nth-child(4n+1),.column-sm-1 ul li:nth-child(5n+1),.column-sm-1 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-2 ul li{width:47%;margin-left:1% !important;margin-right:1% !important}.column-sm-2 ul li:first-child,.column-sm-2 ul li:nth-child(2n+1),.column-sm-2 ul li:nth-child(3n+1),.column-sm-2 ul li:nth-child(4n+1),.column-sm-2 ul li:nth-child(5n+1),.column-sm-2 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-2 ul li:first-child,.column-sm-2 ul li:nth-child(2n+1){margin-left:2% !important}.column-sm-3 ul li{width:30%;margin-left:1% !important;margin-right:1% !important}.column-sm-3 ul li:first-child,.column-sm-3 ul li:nth-child(2n+1),.column-sm-3 ul li:nth-child(3n+1),.column-sm-3 ul li:nth-child(4n+1),.column-sm-3 ul li:nth-child(5n+1),.column-sm-3 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-3 ul li:first-child,.column-sm-3 ul li:nth-child(3n+1){margin-left:2% !important}.column-sm-4 ul li{width:23%;margin-left:1% !important;margin-right:1% !important}.column-sm-4 ul li:first-child,.column-sm-4 ul li:nth-child(2n+1),.column-sm-4 ul li:nth-child(3n+1),.column-sm-4 ul li:nth-child(4n+1),.column-sm-4 ul li:nth-child(5n+1),.column-sm-4 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-4 ul li:first-child,.column-sm-4 ul li:nth-child(4n+1){margin-left:2% !important}.column-sm-4 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-sm-5 ul li{width:18%;margin-left:1% !important;margin-right:1% !important}.column-sm-5 ul li:first-child,.column-sm-5 ul li:nth-child(2n+1),.column-sm-5 ul li:nth-child(3n+1),.column-sm-5 ul li:nth-child(4n+1),.column-sm-5 ul li:nth-child(5n+1),.column-sm-5 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-5 ul li:first-child,.column-sm-5 ul li:nth-child(5n+1){margin-left:1% !important}.column-sm-5 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-sm-6 ul li{width:15%;margin-left:1% !important;margin-right:1% !important}.column-sm-6 ul li:first-child,.column-sm-6 ul li:nth-child(2n+1),.column-sm-6 ul li:nth-child(3n+1),.column-sm-6 ul li:nth-child(4n+1),.column-sm-6 ul li:nth-child(5n+1),.column-sm-6 ul li:nth-child(6n+1){margin-left:0 !important}.column-sm-6 ul li:first-child,.column-sm-6 ul li:nth-child(6n+1){margin-left:2% !important}.column-sm-6 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-xs-1 ul li{width:100%;margin-left:0 !important;margin-right:0 !important}.column-xs-1 ul li:first-child,.column-xs-1 ul li:nth-child(2n+1),.column-xs-1 ul li:nth-child(3n+1),.column-xs-1 ul li:nth-child(4n+1),.column-xs-1 ul li:nth-child(5n+1),.column-xs-1 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-2 ul li{width:47%;margin-left:1% !important;margin-right:1% !important}.column-xs-2 ul li:first-child,.column-xs-2 ul li:nth-child(2n+1),.column-xs-2 ul li:nth-child(3n+1),.column-xs-2 ul li:nth-child(4n+1),.column-xs-2 ul li:nth-child(5n+1),.column-xs-2 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-2 ul li:first-child,.column-xs-2 ul li:nth-child(2n+1){margin-left:2% !important}.column-xs-3 ul li{width:30%;margin-left:1% !important;margin-right:1% !important}.column-xs-3 ul li:first-child,.column-xs-3 ul li:nth-child(2n+1),.column-xs-3 ul li:nth-child(3n+1),.column-xs-3 ul li:nth-child(4n+1),.column-xs-3 ul li:nth-child(5n+1),.column-xs-3 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-3 ul li:first-child,.column-xs-3 ul li:nth-child(3n+1){margin-left:2% !important}.column-xs-4 ul li{width:23%;margin-left:1% !important;margin-right:1% !important}.column-xs-4 ul li:first-child,.column-xs-4 ul li:nth-child(2n+1),.column-xs-4 ul li:nth-child(3n+1),.column-xs-4 ul li:nth-child(4n+1),.column-xs-4 ul li:nth-child(5n+1),.column-xs-4 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-4 ul li:first-child,.column-xs-4 ul li:nth-child(4n+1){margin-left:2% !important}.column-xs-4 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-xs-5 ul li{width:18%;margin-left:1% !important;margin-right:1% !important}.column-xs-5 ul li:first-child,.column-xs-5 ul li:nth-child(2n+1),.column-xs-5 ul li:nth-child(3n+1),.column-xs-5 ul li:nth-child(4n+1),.column-xs-5 ul li:nth-child(5n+1),.column-xs-5 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-5 ul li:first-child,.column-xs-5 ul li:nth-child(5n+1){margin-left:1% !important}.column-xs-5 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.column-xs-6 ul li{width:15%;margin-left:1% !important;margin-right:1% !important}.column-xs-6 ul li:first-child,.column-xs-6 ul li:nth-child(2n+1),.column-xs-6 ul li:nth-child(3n+1),.column-xs-6 ul li:nth-child(4n+1),.column-xs-6 ul li:nth-child(5n+1),.column-xs-6 ul li:nth-child(6n+1){margin-left:0 !important}.column-xs-6 ul li:first-child,.column-xs-6 ul li:nth-child(6n+1){margin-left:2% !important}.column-xs-6 .menu-text .menu-info .menu-action .menu-action-icon{font-size:10px;height:16px;width:16px;line-height:12px}.left-lg{right:0;left:auto}.left-lg:before{left:auto;right:20px}.right-lg{left:0;right:auto}.right-lg:before{right:auto;left:20px}.center-lg-1{left:-10px;right:auto}.center-lg-1:before{left:30px;right:auto}.center-lg-2{left:-70px;right:auto}.center-lg-2:before{left:90px;right:auto}.center-lg-3{left:-100px;right:auto}.center-lg-3:before{left:120px;right:auto}.center-lg-4{left:-140px;right:auto}.center-lg-4:before{left:160px;right:auto}.center-lg-5{left:-220px;right:auto}.center-lg-5:before{left:240px;right:auto}.center-lg-6{left:-340px;right:auto}.center-lg-6:before{left:360px;right:auto}.center-lg-full{left:-545px;right:auto}.center-lg-full:before{left:565px;right:auto}.left-md{right:0;left:auto}.left-md:before{left:auto;right:20px}.right-md{left:0;right:auto}.right-md:before{right:auto;left:20px}.center-md-1{left:-10px;right:auto}.center-md-1:before{left:30px;right:auto}.center-md-2{left:-70px;right:auto}.center-md-2:before{left:90px;right:auto}.center-md-3{left:-100px;right:auto}.center-md-3:before{left:120px;right:auto}.center-md-4{left:-140px;right:auto}.center-md-4:before{left:160px;right:auto}.center-md-5{left:-220px;right:auto}.center-md-5:before{left:240px;right:auto}.center-md-6{left:-340px;right:auto}.center-md-6:before{left:360px;right:auto}.center-md-full{left:-545px;right:auto}.center-md-full:before{left:565px;right:auto}.left-sm{right:0;left:auto}.left-sm:before{left:auto;right:20px}.right-sm{left:0;right:auto}.right-sm:before{right:auto;left:20px}.center-sm-1{left:-10px;right:auto}.center-sm-1:before{left:30px;right:auto}.center-sm-2{left:-70px;right:auto}.center-sm-2:before{left:90px;right:auto}.center-sm-3{left:-100px;right:auto}.center-sm-3:before{left:120px;right:auto}.center-sm-4{left:-140px;right:auto}.center-sm-4:before{left:160px;right:auto}.center-sm-5{left:-220px;right:auto}.center-sm-5:before{left:240px;right:auto}.center-sm-6{left:-340px;right:auto}.center-sm-6:before{left:360px;right:auto}.center-sm-5{left:-220px;right:auto}.center-sm-5:before{left:240px;right:auto}.center-sm-6{left:-340px;right:auto}.center-sm-6:before{left:360px;right:auto}.center-sm-full{left:-545px;right:auto}.center-sm-full:before{left:565px;right:auto}.left-xs{right:0;left:auto}.left-xs:before{left:auto;right:20px}.right-xs{left:0;right:auto}.right-xs:before{right:auto;left:20px}.center-xs-1{left:-10px;right:auto}.center-xs-1:before{left:30px;right:auto}.center-xs-2{left:-70px;right:auto}.center-xs-2:before{left:90px;right:auto}.center-xs-3{left:-100px;right:auto}.center-xs-3:before{left:120px;right:auto}.center-xs-4{left:-140px;right:auto}.center-xs-4:before{left:160px;right:auto}.center-xs-5{left:-220px;right:auto}.center-xs-5:before{left:240px;right:auto}.center-xs-6{left:-340px;right:auto}.center-xs-6:before{left:360px;right:auto}.center-xs-full{left:-545px;right:auto}.center-xs-full:before{left:565px;right:auto}.width-full{width:1130px}.parent-width-full{position:static !important}.mgbt-lg-0{margin-bottom:0 !important}.mgbt-lg-5{margin-bottom:5px !important}.mgbt-lg-10{margin-bottom:10px !important}.mgbt-lg-15{margin-bottom:15px !important}.mgbt-lg-20{margin-bottom:20px !important}.mgbt-md-0{margin-bottom:0 !important}.mgbt-md-5{margin-bottom:5px !important}.mgbt-md-10{margin-bottom:10px !important}.mgbt-md-15{margin-bottom:15px !important}.mgbt-md-20{margin-bottom:20px !important}.mgbt-sm-0{margin-bottom:0 !important}.mgbt-sm-5{margin-bottom:5px !important}.mgbt-sm-10{margin-bottom:10px !important}.mgbt-sm-15{margin-bottom:15px !important}.mgbt-sm-20{margin-bottom:20px !important}.mgbt-xs-0{margin-bottom:0 !important}.mgbt-xs-5{margin-bottom:5px !important}.mgbt-xs-10{margin-bottom:10px !important}.mgbt-xs-15{margin-bottom:15px !important}.mgbt-xs-20{margin-bottom:20px !important}.mgtp--10{margin-top:-10px !important}.mgtp--5{margin-top:-5px !important}.mgtp-0{margin-top:0px !important}.mgtp-5{margin-top:5px !important}.mgtp-10{margin-top:10px !important}.mgtp-15{margin-top:15px !important}.mgtp-20{margin-top:20px !important}.open-right{top:-8px;left:100%}.open-left{top:-8px;right:100%}.open-right:before,.open-left:before{border:none}header{height:63px;z-index:999}header .vd_top-menu-wrapper{background-color:#242729;width:100%;z-index:999;position:absolute;-webkit-box-shadow:0 -2px 4px rgba(50,50,50,0.75);box-shadow:0 -2px 4px rgba(50,50,50,0.75)}header .vd_top-nav .vd_panel-header .logo{float:left}header .vd_top-nav .vd_panel-header .logo a{margin-top:17px;width:120px;display:inline-block}header .vd_container{height:63px}body.sticky-menu-active header{position:fixed;width:100%;top:0px;left:0px}.vd_navbar{background-color:#1fae66;color:#fff}.vd_navbar,.navbar-tabs-menu{-webkit-box-shadow:-5px 0 5px -5px #999 inset;box-shadow:-5px 0 5px -5px #999 inset}.vd_navbar-right{right:0;left:auto}.vd_navbar-right .vd_menu .menu-active{right:auto;left:-1px;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.nav-left-fixed .vd_navbar-left,.nav-right-fixed .vd_navbar-right{position:fixed;left:auto;right:auto;top:63px;margin-left:-15px}.no-header.nav-left-fixed .vd_navbar-left,.no-header.nav-right-fixed .vd_navbar-right{top:0}.nav-right-fixed .vd_navbar-right{margin-left:0;right:0;left:auto}.navbar-menu{margin-left:-20px;margin-right:-20px;padding-left:20px;padding-right:20px;position:relative;-webkit-box-shadow:0 1px 0 rgba(255,255,255,0.5) inset;box-shadow:0 1px 0 rgba(255,255,255,0.5) inset}.navbar-menu .menu-title{margin-top:40px;margin-bottom:20px}.navbar-spacing{height:300px}.vd_menu{margin-left:-20px;margin-right:-20px;font-size:14px}.vd_menu ul,.vd_menu li{margin:0;padding:0}.vd_menu li{list-style:none;position:relative}.vd_menu a{color:#FFF;display:block;font-weight:300}.vd_menu .menu-icon{font-size:18px;width:24px;height:22px;line-height:20px;float:left;display:block;margin-right:15px;text-align:center;vertical-align:middle}.vd_menu .entypo-icon{line-height:24px}.vd_menu .menu-active{font-size:24px;position:absolute;right:-1px;color:#f0f0f0}.vd_menu>ul>li:last-child{border-bottom:1px solid rgba(255,255,255,0.2)}.vd_menu>ul>li>a{padding:8px 20px;border-top:1px solid rgba(255,255,255,0.2);border-bottom:1px solid rgba(0,0,0,0.15);position:relative}.vd_menu>ul>li:first-child>a{border-top:none}.vd_menu>ul>li>a:hover{background:rgba(255,255,255,0.15)}.vd_menu>ul>li.active>a{background:rgba(0,0,0,0.3);border-top:none;color:#FFF}.vd_menu .line{border-top:1px solid #EEEEEE;margin:12px 20px !important}.vd_menu ul li .child-menu{background:rgba(0,0,0,0.55);border-top:#3A3A3A solid 1px;padding:5px 20px 15px;font-size:12.5px;display:none}.vd_menu ul li .child-menu ul li{margin-left:-20px;margin-right:-20px}.vd_menu ul li .child-menu ul li a{padding:3px 20px 5px}.vd_menu ul li .child-menu ul li a:hover{background:rgba(255,255,255,0.2)}.vd_menu ul li .child-menu ul li .child-menu{background:none;border-top:none}.vd_menu ul li .child-menu ul li .child-menu ul li a{padding-left:40px}.vd_menu ul li .child-menu ul li .child-menu ul li .child-menu{background:none;border-top:none}.vd_menu ul li .child-menu ul li .child-menu ul li .child-menu ul li a{padding-left:60px}.nav-left-medium .vd_navbar-left,.nav-right-medium .vd_navbar-right{width:140px}.nav-left-medium .vd_navbar-left .vd_menu>ul>li>a,.nav-right-medium .vd_navbar-right .vd_menu>ul>li>a{font-size:12px;text-align:center;padding:12px 20px}.nav-left-medium .vd_navbar-left .vd_menu .menu-icon,.nav-right-medium .vd_navbar-right .vd_menu .menu-icon{font-size:36px;margin-right:0;width:100%;height:40px;line-height:38px;float:none}.nav-left-medium .vd_navbar-left .vd_menu .menu-active,.nav-right-medium .vd_navbar-right .vd_menu .menu-active{display:none}.nav-left-small .vd_navbar-left,.nav-right-small .vd_navbar-right{width:50px}.nav-left-small .vd_navbar-left .vd_menu>ul>li>a,.nav-right-small .vd_navbar-right .vd_menu>ul>li>a{padding:10px 5px}.nav-left-small .vd_navbar-left .vd_menu>ul>li>a>.menu-text,.nav-right-small .vd_navbar-right .vd_menu>ul>li>a>.menu-text{display:none}.nav-left-small .vd_navbar-left .vd_menu .menu-icon,.nav-right-small .vd_navbar-right .vd_menu .menu-icon{font-size:18x;margin-right:0;width:100%;height:24px;line-height:22px;float:none}.nav-left-small .vd_navbar-left .vd_menu .menu-active,.nav-right-small .vd_navbar-right .vd_menu .menu-active{display:none}.nav-left-medium .vd_navbar-left .vd_menu>ul>li>a .menu-badge,.nav-right-medium .vd_navbar-right .vd_menu>ul>li>a .menu-badge,.nav-left-small .vd_navbar-left .vd_menu>ul>li>a .menu-badge,.nav-right-small .vd_navbar-right .vd_menu>ul>li>a .menu-badge{float:none;position:absolute;top:4px;right:4px}.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu{position:absolute;left:100%;top:0;z-index:10;width:240px;background:rgba(0,0,0,0.8);border-top:4px solid #000000}.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu a,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu a,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu a,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu a{text-align:left}.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu a:hover,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu a:hover,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu a:hover,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu a:hover{background:#1fae66}.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu .child-menu,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu .child-menu,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu .child-menu,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu .child-menu,.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu .child-menu .child-menu,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu .child-menu .child-menu,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu .child-menu .child-menu,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu .child-menu .child-menu{background:rgba(0,0,0,0.8);border-top:4px solid #000000;top:-9px}.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu .child-menu a,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu .child-menu a,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu .child-menu a,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu .child-menu a,.nav-left-medium .vd_navbar-left .vd_menu ul li .child-menu .child-menu .child-menu a,.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu .child-menu .child-menu a,.nav-left-small .vd_navbar-left .vd_menu ul li .child-menu .child-menu .child-menu a,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu .child-menu .child-menu a{padding-left:20px;padding-right:20px}.nav-left-medium .vd_navbar-left .navbar-menu .vd_panel-menu,.nav-right-medium .vd_navbar-right .navbar-menu .vd_panel-menu,.nav-left-small .vd_navbar-left .navbar-menu .vd_panel-menu,.nav-right-small .vd_navbar-right .navbar-menu .vd_panel-menu{display:none !important}.nav-right-medium .vd_navbar-right .vd_menu ul li .child-menu,.nav-right-small .vd_navbar-right .vd_menu ul li .child-menu{left:auto;right:100%}.vd_navbar-left{margin-left:0}.vd_navbar-right{margin-right:0}.nav-left-hide .vd_navbar-left{margin-left:-260px}.nav-left-hide.nav-left-medium .vd_navbar-left{margin-left:-140px}.nav-left-hide.nav-left-small .vd_navbar-left{margin-left:-50px}.nav-right-hide .vd_navbar-right{margin-right:-260px}.nav-right-hide.nav-right-medium .vd_navbar-right{margin-right:-140px}.nav-right-hide.nav-right-small .vd_navbar-right{margin-right:-50px}.nav-left-hide.nav-left-fixed .vd_navbar-left{margin-left:-275px}.nav-left-hide.nav-left-fixed.nav-left-medium .vd_navbar-left{margin-left:-155px}.nav-left-hide.nav-left-fixed.nav-left-small .vd_navbar-left{margin-left:-65px}.nav-right-hide.nav-right-fixed .vd_navbar-right{margin-left:-275px}.nav-right-hide.nav-right-fixed.nav-right-medium .vd_navbar-right{margin-left:-155px}.nav-right-hide.nav-right-fixed.nav-right-small .vd_navbar-right{margin-left:-65px}.nav-left-medium .vd_navbar-left .hide-nav-medium,.nav-right-medium .vd_navbar-right .hide-nav-medium{display:none}.nav-left-small .vd_navbar-left .hide-nav-small,.nav-right-small .vd_navbar-right .hide-nav-small{display:none}.navbar-tabs-menu{margin-left:-20px;margin-right:-20px;padding-top:5px;padding-bottom:5px;height:60px;background-color:#393d41}.navbar-tabs-menu .menu,.navbar-tabs-menu .expand-menu{position:relative;height:50px;line-height:50px;display:block;text-align:center;vertical-align:middle}.navbar-tabs-menu .expand-menu{display:block;color:#fff}.navbar-tabs-menu .expand-menu:hover{color:#fff;cursor:pointer}.navbar-tabs-menu .mega-icon{font-size:16px}.navbar-tabs-menu .badge{position:absolute;top:4px;right:4px}.navbar-tabs-menu .expand-menu{display:none}.navbar-tabs-menu .expand-menu .menu-icon{font-size:28px}.navbar-tabs-menu .expand-menu .menu-icon-right{display:none}.navbar-tabs-menu .nav-tabs{border:none;font-size:24px}.navbar-tabs-menu .nav-tabs li.active{z-index:2}.navbar-tabs-menu .nav-tabs li.active a{background-color:#1fae66;border-color:#1fae66;color:#fff}.navbar-tabs-menu .nav-tabs li a{padding:8px 15px 12px;margin-right:0px;margin-left:6px}.nav-left-medium .vd_navbar-left .navbar-tabs-menu .expand-menu,.nav-right-medium .vd_navbar-right .navbar-tabs-menu .expand-menu,.nav-left-small .vd_navbar-left .navbar-tabs-menu .expand-menu,.nav-right-small .vd_navbar-right .navbar-tabs-menu .expand-menu{display:block}.nav-left-medium .vd_navbar-left .navbar-tabs-menu .menu-container,.nav-right-medium .vd_navbar-right .navbar-tabs-menu .menu-container,.nav-left-small .vd_navbar-left .navbar-tabs-menu .menu-container,.nav-right-small .vd_navbar-right .navbar-tabs-menu .menu-container{height:61px;width:260px;padding-top:5px;padding-bottom:5px;position:absolute;top:0;background-color:#393d41;display:none;border-bottom:1px solid #dcdcdc;z-index:998}.nav-left-medium .vd_navbar-left .navbar-tabs-menu .menu-container,.nav-right-medium .vd_navbar-right .navbar-tabs-menu .menu-container{left:140px}.nav-right-medium .vd_navbar-right .navbar-tabs-menu .menu-icon-right,.nav-right-small .vd_navbar-right .nav-tabs-menu .menu-icon-right{display:block}.nav-right-medium .vd_navbar-right .navbar-tabs-menu .menu-icon-left,.nav-right-small .vd_navbar-right .nav-tabs-menu .menu-icon-left{display:none}.nav-right-medium .vd_navbar-right .navbar-tabs-menu .menu-container{left:auto;right:140px}.nav-left-small .vd_navbar-left .navbar-tabs-menu .menu-container,.nav-right-small .vd_navbar-right .navbar-tabs-menu .menu-container{left:50px}.nav-left-small .vd_navbar-left .navbar-tabs-menu .expand-menu .menu-icon,.nav-right-small .vd_navbar-right .navbar-tabs-menu .expand-menu .menu-icon{font-size:18px}.nav-right-small .vd_navbar-right .navbar-tabs-menu .menu-container{left:auto;right:50px}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container,.nav-left-small .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container,.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container{display:block;left:auto}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .expand-menu,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .expand-menu,.nav-left-small .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .expand-menu,.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .expand-menu{display:none}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-name,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-name,.nav-left-small .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-name,.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-name{display:none}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container{width:140px}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile{margin-left:24px}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-image,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-image{width:80px;height:80px;border:2px solid #EEEEEE;-webkit-border-radius:80px;-moz-border-radius:80px;border-radius:80px}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-image img,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile .mega-image img{-webkit-border-radius:80px;-moz-border-radius:80px;border-radius:80px}.nav-left-medium .vd_navbar-left.vd_navbar-tabs-profile .navbar-menu .vd_menu,.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-menu .vd_menu{margin-top:40px}.nav-right-medium .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container{right:0}.nav-left-small .vd_navbar-left.vd_navbar-tabs-profile .menu-container,.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .menu-container{width:50px}.nav-left-small .vd_navbar-left.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile,.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu .profile{margin-left:0px}.nav-right-small .vd_navbar-right.vd_navbar-tabs-profile .navbar-tabs-menu .menu-container{right:0}.vd_navbar-style-2 .navbar-menu{-webkit-box-shadow:none;box-shadow:none}.vd_navbar-style-2 .vd_menu>ul>li>a{border:none;border-left-color:#f85d2c}.vd_navbar-style-2 .vd_menu>ul>li>a:hover{border-left:4px solid #f85d2c}.vd_navbar-style-2 .vd_menu>ul>li:last-child{border-bottom:none}.navbar-search-wrapper{padding:10px 15px 0}.navbar-search-wrapper .navbar-search{padding-left:10px;padding-right:10px}.navbar-search-wrapper .navbar-search .search-config{border-left:1px solid #333333;margin-top:3px;position:relative}.vd_navbar-email .vd_menu>ul>li>a{padding:6px 20px}.vd_navbar-bottom-widget{position:absolute;bottom:0;width:260px}.vd_navbar-bottom-widget>ul>li{border-top:1px solid rgba(0,0,0,0.15);border-bottom:none !important}.vd_navbar-bottom-widget>ul>li>a{border-top:1px solid rgba(255,255,255,0.2) !important;border-bottom:none}.nav-left-medium .vd_navbar-left .vd_navbar-bottom-widget,.nav-right-medium .vd_navbar-right .vd_navbar-bottom-widget{width:140px}.nav-left-small .vd_navbar-left .vd_navbar-bottom-widget,.nav-right-small .vd_navbar-right .vd_navbar-bottom-widget{width:50px}.navbar-tabs-menu .vd_mega-menu-wrapper{margin-top:-5px}.navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li{height:60px;padding:13px 7px 10px;margin-left:12px}.navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a{color:#fff;border:none;line-height:36px}.navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a .mega-name{margin-top:0;line-height:16px}.navbar-tabs-menu .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li .mega-ul .mega-li a{color:#5e656b}footer .vd_bottom{background-color:#252525;color:#f5f5f5;padding-top:10px;padding-bottom:10px}#login-page{background:none}#login-page .vd_content-section{background:none}.login-layout .vd_login-page{width:380px;margin:0 auto 60px}.login-layout .vd_register-page{width:600px;margin:0 auto 60px}.login-layout .vd_register-page .heading{margin-top:30px}.login-layout .heading{text-align:center;margin:60px 0 20px}.login-layout .logo{margin-bottom:5px;text-shadow:1px -1px 0 #fff}.login-layout .panel{border-radius:0;box-shadow:none;border:none;border-bottom:1px solid #FFFFFF}.login-layout .panel-body{padding:20px 30px;background:none;border-bottom:1px solid #DDDDDD}.login-layout .login-icon{font-size:68px;width:120px;height:120px;line-height:114px;display:block;margin:20px auto 30px;border-radius:60px;border:1px solid #FFFFFF;background-color:#D5D5D5;text-align:center;color:#FFFFFF}.login-layout .login-icon.entypo-icon{line-height:126px}.login-layout footer .vd_bottom{background:none}.vd_custom-product .form-group{border-bottom:1px solid #EEEEEE;margin-left:-25px;margin-right:-25px;padding:10px}.vd_custom-product .content-list .menu-icon{font-size:60px;width:115px;height:auto;padding-top:10px;padding-bottom:10px}.vd_custom-product .content-list .menu-text{margin-left:130px;padding-bottom:10px}.vd_summary-panel .row:hover{background-color:#F5F5F5}.vd_summary-panel .total-row{margin-top:20px;padding-top:10px;padding-bottom:10px;background:#F5F5F5}.vd_summary-panel .total-row .total-title{font-weight:bold}.vd_summary-panel .product-title{font-weight:300}.front-layout header .vd_top-nav .vd_panel-header .logo a{width:150px;margin-top:15px}.front-layout .vd_mega-menu-wrapper .vd_mega-menu>.mega-ul>.mega-li>a{color:#FFF}.front-layout .deploy-word{line-height:34px}#front-1-banner{background:url(../img/banner/cloud.png) no-repeat center bottom}#front-1-banner .word-header h1{text-shadow:3px 3px rgba(0,0,0,0.3);font-size:46px;margin-top:38px;margin-bottom:5px}#front-1-banner .vd_content{height:470px}#front-1-banner .icon-banner{position:absolute}#front-1-banner .icon-1{top:222px;left:232px}#front-1-banner .icon-2{top:170px;left:412px}#front-1-banner .icon-3{top:203px;left:765px}#front-1-banner .icon-4{top:230px;left:512px}#front-1-banner .word-1{top:215px;left:96px}#front-1-banner .word-2{top:152px;left:512px}#front-1-banner .word-3{top:178px;left:870px}.example-icon .append-icon:hover{font-size:32px;background:rgba(0,0,0,0.8);color:#FFF;padding:10px;position:absolute;z-index:4;text-align:center;width:55px}
</style>		
	





	
	

		