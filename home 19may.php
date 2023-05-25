<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<style media="screen">
  .count_row{
    margin-bottom: 100px;
  }
  .count_cols{
    height: 160%;
  }
  .dash{
      margin-top: -65px !important;
  }
  .records-type{
    background: #716aca;
color: white;
padding: 7px 20px;
border-radius: 10px;
cursor: context-menu;
  }
  .challenge-detail{
    float: right;
    background: #716aca;
    color: white;
    padding: 6px 20px;
    border-radius: 8px;
    cursor: pointer;
  }
  .colss{
    padding:12px;
  }
  .modal-content{
    border-radius: 20px !important;
  }
  .m-widget14__header{
    padding-left: 16% !important;
  }
  .m-widget2__item, .m-widget2__item--primary{
    cursor:context-menu !important;
  }
  @media only screen and (max-width: 1554px){
    .heading1{
      width: 20%;
    }
  }
  
  @media screen and (max-width: 1024px){
      .dash {
    margin-top: -99px !important;
}
  }
  @media screen and (max-width: 768px){
      .count_cols {
    height: 0%;
}
.row.m-row--full-height {
    height: 82%;
}
  }
  @media screen and (max-width: 375px){
      .dash {
    margin-top: -126px !important;
}
@media screen and (max-width: 320px){
    .dash {
    margin-top: -136px !important;
}
}
  }
</style>


<script>$('title').html('Dashboard | Charity Challenger');</script>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->

</div>
<div class="m-content">
    <div class="row">
    <div class="m-subheader " style="width: 100%;padding: 30px 30px 30px 30px;">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Dashboard
				</h3>
			</div>
			
			<!--<div>-->
			<!--	<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">-->
			<!--		<span class="m-subheader__daterange-label">-->
			<!--			<span class="m-subheader__daterange-title"></span>-->
			<!--			<span class="m-subheader__daterange-date m--font-brand"></span>-->

			<!--		</span>-->
			<!--		<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">-->
			<!--			<i class="la la-angle-down"></i>-->
			<!--		</a>-->
			<!--	</span>-->
			<!--</div>-->
		   </div>
		</div>
	</div>

<div class="row">
  <div class="col-xl-12">
  								<!--begin:: Widgets/Quick Stats-->
  								<div class="row m-row--full-height count_row">
  									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 count_cols">
  										<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand ">
  											<div class="m-portlet__body">
                          <h2 style="padding-bottom:20px;">General </h2>
  												<div class=" justify-content-between d-flex">
  													<div class="text-center float-left" >
  													    <h3>
  													            $ <?=(isset($paidAmount) && !empty($paidAmount)?$paidAmount:'0')?>
  													    </h3>
                         <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">Total <br> Donation</p>	
  													</div>
                            <div class=" text-center float-left">
                          <h3>    <?=(isset($challenges_for_aprroval) && !empty($challenges_for_aprroval)?$challenges_for_aprroval:'0')?></h3>
                          <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">Fundraisers <br>For Approval</p>
  													</div>
                            <div class="text-center float-left">
                           <h3>   <?=(isset($orgs) && !empty($orgs)?$orgs:'0')?></h3>
                           <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Total <br> Organizations</p>
  													</div>
  													<!-- <div class="m-widget26__chart" style="height: auto; width: 100%; padding-top: 27px;">
  														<canvas id="m_chart_quick_stats_1"></canvas>
  													</div> -->
  												</div>
  											</div>
  										</div> 
  										<div class="m--space-30"></div>
  									</div>
  									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 count_cols">
  										<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
  											<div class="m-portlet__body">
                          <h2 style="padding-bottom:20px;">Fundraisers</h2>
  												<div class="justify-content-between d-flex">
  													<div class="float-left text-center">
                             <h3> <?=(isset($count_all_challenges) && !empty($count_all_challenges)?$count_all_challenges:'0')?></h3>
                             <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Total <br> Fundraisers</p> 
  													</div>
                            <div class="float-left text-center">
                             <h3> <?=(isset($challenges_has_aprroved) && !empty($challenges_has_aprroved)?$challenges_has_aprroved:'0')?></h3>
  													<p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Active <br> Fundraisers</p>
  													</div>
                            <div class="float-left text-center">
  							 <h3> <?=(isset($participants_count) && !empty($participants_count)?$participants_count:'0')?></h3>
                             <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Fundraiser's <br> Participants</p>
  													
  													
  													
  													</div>
  													<!-- <div class="m-widget26__chart" style="height: auto; width: 100%; padding-top: 27px;">
  														<canvas id="m_chart_quick_stats_3"></canvas>
  													</div> -->
  												</div>
  											</div>
  										</div>

  									</div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 count_cols d-none">
  										<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
  											<div class="m-portlet__body">
                          <h2 style="padding-bottom:20px;">Participants</h2>
  												<div class="justify-content-between d-none">
  													<div class=" float-left text-center">
                             <h3> <?php // =(isset($participants_count) && !empty($participants_count)?$participants_count:'0')?></h3>
                             <p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Total <br> Participants</p>
  													
  													</div>
                            <div class="float-left text-center d-none">
                             <h3> <?php // =(isset($active_participants) && !empty($active_participants)?$active_participants:'0')?></h3>
  														<p style=" font-family: 'Poppins';    font-weight: 400; color: #afb2c1;">	Active <br> Participants</p>
  													</div>
  												</div>
  											</div>
  										</div>
  										<div class="m--space-10"></div>

  									</div>
  								</div>
  								<!--end:: Widgets/Quick Stats-->
  							</div>
              </div>

              <!--Challenges detail!-->
              <div class="row dash"  >
                <div class="col-xl-12">
								<!--begin:: Widgets/New Users-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Fundraisers
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
														All Fundraisers
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
														Approvals
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget4_tab1_content">
												<!--begin::Widget 14-->
												<div class="m-widget4">
													<!--begin::Widget 14 Item-->
                             <?php foreach ($get_all_challenges as $row): ?>
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
                              

                                <img src="<?php echo BASE_URL.'uploads/create_new_challengev2/'.$row->image ?>" style="height:60px;" alt="">

                            
                             														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
													<?php echo $row->challenge_title; ?>

															</span>
															<br>
															<span class="m-widget4__sub">
															</span>
														</div>
														<div class="m-widget4__ext">
														
														</div>
													</div>
                          <?php endforeach; ?>
													<!--end::Widget 14 Item-->
												</div>
												<!--end::Widget 14-->
											</div>

											<div class="tab-pane" id="m_widget4_tab2_content">
												<!--begin::Widget 14-->
												<div class="m-widget4">
													<!--begin::Widget 14 Item-->
                          <?php foreach ($get_all_appproved_challenges as $row): ?>
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
                         
                                <img src="<?php echo BASE_URL.'uploads/create_new_challengev2/'.$row->image ?>" style="height:60px;" alt="">
                         
                            </div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
													<?php echo $row->challenge_title; ?>
															</span>
															<br>
															<span class="m-widget4__sub">
															</span>
														</div>
														<div class="m-widget4__ext">
														
														</div>
													</div>
                        <?php endforeach; ?>
													<!--end::Widget 14 Item-->
												</div>
												<!--end::Widget 14-->
											</div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/New Users-->
							</div>

              <div class="col-xl-6 d-none">
                <!--begin:: Widgets/Daily Sales-->
                <div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title" style="width:100%;">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text heading1">
													Bar Chart
												</h3>
                        <div class="records" style="float:right; margin-top:24px;">
                          <span class="records-type weekly_record">Weekly</span>
                          <span class="records-type monthly_record">Monthly</span>
                          <span class="records-type yearly_record">Yearly</span>
                        </div>
											</div>
										</div>
									</div>
									<div class="m-portlet__body m-portlet__body_chart">
										<div id="morris_charts1" style="height:500px;"></div>
									</div>
								</div>
                <!--end:: Widgets/Daily Sales-->
              </div>

              </div>

              <!-- Challenges detail !-->

            <div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">
										<!--begin:: Widgets/Stats2-1 -->
										<div class="m-widget1">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Fundraisers
														</h3>
														<span class="m-widget1__desc">
															<!-- Average Weekly Donations -->
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
														    <?=(isset($count_all_challenges) && !empty($count_all_challenges)?$count_all_challenges:'0')?>
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Participants
														</h3>
														<span class="m-widget1__desc">
														    <!-- Average	Weekly Participants -->
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
														     <?=(isset($participants_count) && !empty($participants_count)?$participants_count:'0')?>
														    <!--<#?=(isset($count_all_challenges) && !empty($count_all_challenges)?$count_all_challenges:'0')?>-->
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Donors
														</h3>
														<span class="m-widget1__desc">
															<!-- Average	Weekly Donors -->
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
                              <?=(isset($count_total_donars)&& !empty($count_total_donars)?$count_total_donars:'0')?>
														</span>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Stats2-1 -->
									</div>
									<div class="col-xl-8">
										<div class="m-widget14">
											<div class="m-widget14__header">
												<h3 class="m-widget14__title">
													<!--Donations Amount-->
												</h3>
												<span class="m-widget14__desc">
													Yearly Donation overall Statistics
												</span>
											</div>
											<div class="row  align-items-center">
												<div class="col">
													<div id="m_chart_profit_shares" class="m-widget14__chart" style="height: 160px">
														<div class="m-widget14__stat">
														    <?=(isset($sum_pledge)&& !empty($sum_pledge) ?$sum_pledge:'0')?>
														    														</div>
													</div>
												</div>
												<div class="col">
													<div class="m-widget14__legends">
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-accent "></span>
															<span class="m-widget14__legend-text ">
																Total Pledged
															</span>
																<span class="m--font-accent font-weight-bold">
															= $<?=(isset($sum_pledge)&& !empty($sum_pledge) ?$sum_pledge:'0')?>
														<span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-warning"></span>
															<span class="m-widget14__legend-text">
																Donation Received
															</span>
																<span class="font-weight-bold" style="color:#ffc107;">
															= $<?=(isset($sum_donation)&& !empty($sum_donation)?$sum_donation:'0')?>
														</span>
														</div>
														<!--<div class="m-widget14__legend">-->
														<!--	<span class="m-widget14__legend-bullet m--bg-brand "></span>-->
														<!--	<span class="m-widget14__legend-text">-->
														<!--		Donation pending-->
														<!--	</span>-->
														<!--		<span class="m--font-brand font-weight-bold">-->
														<!--	= $<#?php if(($sum_pledge-$sum_donation) > 0 ){ echo $sum_pledge-$sum_donation; } else { echo '0'; } ?>-->
														<!--</span>-->
														<!--</div>-->
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Profit Share-->
									</div>

								</div>
							</div>
						</div>
						<!--End::Section-->
<!--Begin::Section-->
						<div class="row mb-5">
							<div class="col-xl-4">
								<!--begin:: Packages-->
								<div class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text m--font-light">
													Overall Donations
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<!--begin::Widget 29-->
									
									
											<div class="m-widget29">
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">
													Yearly info
													
												</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>
															Received
														</span>
														<span class="m--font-accent">
															$<?=(isset($sum_yearly_donation)&& !empty($sum_yearly_donation)?$sum_yearly_donation:'0')?>
														</span>
													</div>
													<div class="m-widget_content-item">
														<span>
															Pledged
														</span>
														<span class="m--font-brand">
															$<?=(isset($sum_yearly_pledge)&& !empty($sum_yearly_pledge)?$sum_yearly_pledge:'0')?>
														</span>
													</div>
													
													<!--<div class="m-widget_content-item">-->
													<!--	<span>-->
													<!--		Remaining-->
													<!--	</span>-->
													<!--	<span class="m--font-brand">-->
													<!--		$<#?php if(($sum_yearly_pledge-$sum_yearly_donation) >= 0 ){ echo $sum_yearly_pledge-$sum_yearly_donation; } else { echo '0'; } ?>-->
													<!--	</span>-->
													<!--</div>-->
												
												</div>
											</div>
									
									
									
									
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">
													Monthly info
												</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>
															Received
														</span>
														<span class="m--font-accent">
															$<?=(isset($sum_monthly_donation)&& !empty($sum_monthly_donation)?$sum_monthly_donation:'0')?>
														</span>
													</div>
													<div class="m-widget_content-item">
														<span>
															Pledged
														</span>
														<span class="m--font-brand">
															$<?=(isset($sum_monthly_pledge) && !empty($sum_monthly_pledge) ? $sum_monthly_pledge:'0')?>
														</span>
													</div>
													
													<!--	<div class="m-widget_content-item">-->
													<!--	<span>-->
													<!--		Remaining-->
													<!--	</span>-->
													<!--	<span class="m--font-brand">-->
													<!--	$<#?php if(($sum_monthly_pledge-$sum_monthly_donation) >= 0 ){ echo $sum_monthly_pledge-$sum_monthly_donation; } else { echo '0'; } ?>-->
													<!--	</span>-->
													<!--</div>-->
													
												</div>
											</div>
											<div class="m-widget_content">
												<h3 class="m-widget_content-title">
												Daily info
												</h3>
												<div class="m-widget_content-items">
													<div class="m-widget_content-item">
														<span>
															Received
														</span>
														<span class="m--font-accent">
															$<?=(isset($sum_daliy_donation) && !empty($sum_daliy_donation) ? $sum_daliy_donation:'0')?>
														</span>
													</div>
													<div class="m-widget_content-item">
														<span>
															Pledged
														</span>
														<span class="m--font-brand">
															$<?=(isset($sum_daliy_pledge)&& !empty($sum_daliy_pledge)? $sum_daliy_pledge:'0')?>
														</span>
													</div>
													
													<!--	<div class="m-widget_content-item">-->
													<!--	<span>-->
													<!--		Remaining-->
													<!--	</span>-->
													<!--	<span class="m--font-brand">-->
													<!--	$<#?php if(($sum_daliy_donation-$sum_daliy_pledge) >= 0 ){ echo $sum_daliy_donation-$sum_daliy_pledge; } else { echo '0'; } ?>-->
													<!--	</span>-->
													<!--</div>-->
													
												</div>
											</div>
										</div>
										<!--end::Widget 29-->
									</div>
								</div>
								<!--end:: Packages-->
							</div>


							<div class="col-xl-8">
								<!--begin:: Widgets/Tasks -->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Active Fundraisers
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget2_tab1_content">
												<div class="m-widget2">
                          <?php foreach ($get_all_appproved_challenges as $row): ?>
													<div class="m-widget2__item m-widget2__item--primary">
														<div class="m-widget2__checkbox">
														</div>
														<div class="m-widget2__desc">
															<span class="m-widget2__text">
																<?=(isset($row->challenge_title) && !empty($row->challenge_title)? $row->challenge_title:'')?>
															</span>
									<?php 
									      $this->db->select('*');
    									  $this->db->from('customers');
    									  $this->db->where('c_id', $row->user_id );
    									  $query = $this->db->get();
    									  foreach($query->result_array() as $value){
    									  
    									?>
                                          <span class="challenge-detail" user_id="<?=(isset($value['c_id']) && !empty($value['c_id'])?$value['c_id']:'')?>" c_id="<?=(isset($row->id) && !empty($row->id)? $row->id:'')?>" >
                                            Detail
                                          </span>
															<br>
															<span class="m-widget2__user-name">
																<p class="m-widget2__link">
                                  <?=(isset($value['name']) && !empty($value['name'])?$value['name']:'')?>
																</p>
															</span>
															<?php } ?> 
														</div>
													</div>
                          <?php endforeach; ?>
												</div>
											</div>
											<div class="tab-pane" id="m_widget2_tab2_content"></div>
											<div class="tab-pane" id="m_widget2_tab3_content"></div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/Tasks -->
							</div>
						</div>
						<!--End::Section-->

<!--Begin::Section-->
						<div class="row d-none" style="margin-bottom: 10%;">
							<div class="col-xl-6 col-lg-12">
								<!--Begin::Portlet-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Challanges
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
											<!--Begin::Timeline 2 -->
											<div class="m-timeline-2">
												<?php foreach($get_recent_challenges->result_array() as $row){ ?>
                                                <div class="m-timeline-2__items  m--padding-top-20 m--padding-bottom-25">
                                                    <div class="m-timeline-2__item">
                                                        <!-- <span class="m-timeline-2__item-time">
                                                            12:45
                                                        </span> -->
                                                        <div class="m-timeline-2__item-cricle">
                                                            <i class="fa fa-genderless m--font-danger"></i>
                                                        </div>
                                                        <div class="m-timeline-2__item-text  m--padding-top-5 m--padding-bottom-5">
                                                            <span><?php echo $row['name']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
											</div>
											<!--End::Timeline 2 -->
										</div>
									</div>
								</div>
								<!--End::Portlet-->
							</div>
							<div class="col-xl-6 col-lg-12">
								<!--Begin::Portlet-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Notifications
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget2_tab1_content">
												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
												    <?php foreach($get_recent_notifications->result_array() as $row){ ?>
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
	                                                            <!--<?php echo(date("h:i",$row['date_time'])); ?>-->
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	<?php echo $row['title']; ?>
																</span>
																<br>
																<?php $this->db->select('*');
																      $this->db->from('customers');
																      $this->db->where('c_id', $row['by_user'] );
																      $query = $this->db->get();
																      foreach($query->result_array() as $myrow){
																          ?>
																          <span class="m-timeline-3__item-user-name">
            																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
            																		By <?php echo $myrow['name'];?>
            																	</a>
            																</span>
																          <?php
																      }
																    ?>
																
															</div>
														</div>
													</div>
													 <?php } ?>
												</div>
												<!--End::Timeline 3 -->
											</div>
											<div class="tab-pane" id="m_widget2_tab2_content">
												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-focus">
																09:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Bob
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time m--font-warning">
																10:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	There are many variations of passages of Lorem Ipsum available.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Sean
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-primary">
																11:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time m--font-success">
																12:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time m--font-warning">
																14:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Latin words, combined with a handful of model sentence structures.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Derrick
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-info">
																15:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Iman
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-danger">
																17:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem Ipsum is therefore always free from repetition, injected humour.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Aziko
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>
												<!--End::Timeline 3 -->
											</div>
										</div>
									</div>
								</div>
								<!--End::Portlet-->
							</div>
						</div>
						<!--End::Section-->
					</div>
</div>


<div class="modal fade" id="details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">
          <div class="container">
            <h2 style="text-align:center;">Challenge Detail</h2>
            <div class="items">
            <div class="row" style="margin-top:5%;">
              <div class="col-lg-6 colss">
                Challenge Name:
             </div>
             <div class="col-lg-6 challenge_name colss">

             </div>

             <div class="col-lg-6 colss">
               Target Amount:
            </div>
            <div class="col-lg-6 target_amount colss">

            </div>

            <div class="col-lg-6 colss">
              Paid Amount:
           </div>
           <div class="col-lg-6 paid_amount colss">

           </div>

           <div class="col-lg-6 colss">
             Pledge Amount:
          </div>
          <div class="col-lg-6 pledge_amount colss">

          </div>

          <div class="col-lg-6 colss">
            Start Date:
         </div>
         <div class="col-lg-6 start_date colss">

         </div>

         <div class="col-lg-6 colss">
           End Date:
        </div>
        <div class="col-lg-6 end_date colss">

        </div>
            </div>
          <div class="row" style="margin-top:10%;">
            <h4 style="text-align:center; margin-bottom:5%;">Challenge Administrator</h4>
            <div class="col-6 colss">
              Admin Name:
            </div>
            <div class="col-6 admin_name colss">

            </div>
            <div class="col-6 colss">
              Admin Email:
            </div>
            <div class="col-6 admin_email colss">

            </div>
          </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

var a, r;
$('document').ready(function(){
  var paids= '<?php echo $whole_datas; ?>';
  var string = JSON.stringify(paids);
    var paid = string.replace (/"/g,'');
    // alert(paid)
  //New chart...
  new Morris.Bar({
      element: "morris_charts1",
      data: paids,
      xkey: "y",
      ykeys: ["a", "b"],
      labels: ["Paid Amount", "Pledge Amount"]
  });
  //New chart...
  var e = $("#m_chart_daily_sale");
  if (0 != e.length) {
      var t = {
          labels: date,
           //labels: ["Labelf 1", "Label 2","Label 3","Label 4","Label 5","Label 6","Label 7","Label 8","Label 9","Label 10","Label 11","Label 12","Label 13","Label 14","Label 15","Label 16"],

          datasets: [{
              backgroundColor: mApp.getColor("success"),
              data: pledge,
          }]
      };
      new Chart(e, {
          type: "bar",
          data: t,
          options: {
              title: {
                  display: !1
              },
              tooltips: {
                  intersect: !1,
                  mode: "nearest",
                  xPadding: 10,
                  yPadding: 10,
                  caretPadding: 10
              },
              legend: {
                  display: !1
              },
              responsive: !0,
              maintainAspectRatio: !1,
              barRadius: 4,
              scales: {
                  xAxes: [{
                      display: !1,
                      gridLines: !1,
                      stacked: !0
                  }],
                  yAxes: [{
                      display: !1,
                      stacked: !0,
                      gridLines: !1
                  }]
              },
              layout: {
                  padding: {
                      left: 0,
                      right: 0,
                      top: 0,
                      bottom: 0
                  }
              }
          }
      })
  }

  //Round Chart.....

      if (0 != $("#m_chart_profit_shares").length) {
        var paid=<?=$sum_donation?>;
        var pledge=<?=$sum_pledge?>;
        var pending=(pledge-paid) ? pledge-paid : 0;
          var e = new Chartist.Pie("#m_chart_profit_shares", {
              series: [
            //       {
            //       value: pending,
            //       className: "custom",
            //       meta: {
            //           color: mApp.getColor("brand")
            //       }
            //   },
            {
                  value: pledge,
                  className: "custom",
                  meta: {
                      color: mApp.getColor("accent")
                  }
              }, {
                  value: paid,
                  className: "custom",
                  meta: {
                      color: mApp.getColor("warning")
                  }
              }],
              labels: [1, 2, 3]
          }, {
              donut: !0,
              donutWidth: 17,
              showLabel: !1
          });
          e.on("draw", function(e) {
              if ("slice" === e.type) {
                  var t = e.element._node.getTotalLength();
                  e.element.attr({
                      "stroke-dasharray": t + "px " + t + "px"
                  });
                  var a = {
                      "stroke-dashoffset": {
                          id: "anim" + e.index,
                          dur: 1e3,
                          from: -t + "px",
                          to: "0px",
                          easing: Chartist.Svg.Easing.easeOutQuint,
                          fill: "freeze",
                          stroke: e.meta.color
                      }
                  };
                  0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"), e.element.attr({
                      "stroke-dashoffset": -t + "px",
                      stroke: e.meta.color
                  }), e.element.animate(a, !1)
              }
          }), e.on("created", function() {
              window.__anim21278907124 && (clearTimeout(window.__anim21278907124), window.__anim21278907124 = null), window.__anim21278907124 = setTimeout(e.update.bind(e), 15e3)
          })
      }



  $('.weekly_record').on('click',function(){
    $('.m-portlet__body_chart').html('');
    // alert('success')
    $.ajax({
      type: 'POST',
      url: "<?=ADMIN_BASE_URL.'dashboard/weekly_record'?>",
      data: '',
      // async: false,
      success: function(response) {
          $('.m-portlet__body_chart').html(response);
      }
    });
  });

  $('.monthly_record').on('click',function(){
    $('.m-portlet__body_chart').html('');
    // alert('success')
    $.ajax({
      type: 'POST',
      url: "<?=ADMIN_BASE_URL.'dashboard/monthly_record'?>",
      data: '',
      // async: false,
      success: function(response) {
          $('.m-portlet__body_chart').html(response);
      }
    });
  });

  $('.yearly_record').on('click',function(){
    $('.m-portlet__body_chart').html('');
    // alert('success')
    $.ajax({
      type: 'POST',
      url: "<?=ADMIN_BASE_URL.'dashboard/yearly_record'?>",
      data: '',
      // async: false,
      success: function(response) {
          $('.m-portlet__body_chart').html(response);
      }
    });
  });

    //Challengee details....
  $('.challenge-detail').on('click',function(){
        var user_id = $(this).attr('user_id');
        var c_id = $(this).attr('c_id');

        $.ajax({
          type: 'POST',
          url: "<?=ADMIN_BASE_URL.'dashboard/get_challenge_record'?>",
          data: {'user_id':user_id,'c_id':c_id},
          // async: false,
          success: function(result) {
            //   var res=response.data;
            //   var result=res.challenge_record;
            //   var challenge_name=result.name;
            //   var target_amount=result.target_amount;
            //   var paid=result.paid;
            //   var pledge=result.pledge;
            //   var username=result.user_name;
            //   var email=result.email;
            //   var start=result.start_date;
            //   var end=result.end_date;

            //   // alert(pledge)
              $('.challenge_name').text(result.Challenge_Name);
              $('.target_amount').text(result.Target_Amount);
              $('.paid_amount').text(result.Paid_Amount);
              $('.pledge_amount').text(result.Pledge_Amount);
              $('.admin_name').text(result.UserName);
              $('.admin_email').text(result.Email);
              $('.start_date').text(result.Start_Date);
              $('.end_date').text(result.End_Date);
              
              $('#details').modal('show');

          }
        });
  });

});
</script>
