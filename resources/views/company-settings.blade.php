<?php $page = 'company-settings'; ?>
@extends('layout.mainlayout')
@section('content')
            <div class="page-wrapper">
				<div class="content settings-content">
					<div class="page-header settings-pg-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Settings</h4>
								<h6>Manage your settings on portal</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i class="ti ti-refresh"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i class="ti ti-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-xl-12">
							 <div class="settings-wrapper d-flex">
								<div class="settings-sidebar" id="sidebar2">
                                    <div class="sidebar-inner slimscroll">
                                        <div id="sidebar-menu5" class="sidebar-menu">
                                            <h4 class="fw-bold fs-18 mb-2 pb-2">Settings</h4>
                                            <ul>
                                                <li class="submenu-open">
                                                    <ul>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);">
                                                                <i class="ti ti-settings fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">General Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li><a href="{{url('general-settings')}}">Profile</a></li>
                                                                <li><a href="{{url('security-settings')}}">Security</a></li>
                                                                <li><a href="{{url('notification')}}">Notifications</a></li>
                                                                <li><a href="{{url('connected-apps')}}">Connected Apps</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);" class="active subdrop">
                                                                <i class="ti ti-world fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">Website Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li><a href="{{url('system-settings')}}">System Settings</a></li>
                                                                <li><a href="{{url('company-settings')}}" class="active">Company Settings </a></li>
                                                                <li><a href="{{url('localization-settings')}}">Localization</a></li>
                                                                <li><a href="{{url('prefixes')}}">Prefixes</a></li>
                                                                <li><a href="{{url('preference')}}">Preference</a></li>
                                                                <li><a href="{{url('appearance')}}">Appearance</a></li>
                                                                <li><a href="{{url('social-authentication')}}">Social Authentication</a></li>
                                                                <li><a href="{{url('language-settings')}}">Language</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);">
                                                                <i class="ti ti-device-mobile fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">App Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li><a href="{{url('invoice-settings')}}">Invoice Settings</a></li>
                                                                <li><a href="{{url('invoice-templates')}}">Invoice Templates</a></li>
                                                                <li><a href="{{url('printer-settings')}}">Printer </a></li>
                                                                <li><a href="{{url('pos-settings')}}">POS</a></li>
                                                                <li><a href="{{url('signatures')}}">Signatures</a></li>
                                                                <li><a href="{{url('custom-fields')}}">Custom Fields</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);">
                                                                <i class="ti ti-device-desktop fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">System Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
                                                                    <ul>
                                                                        <li><a href="{{url('email-settings')}}">Email Settings</a></li>
                                                                        <li><a href="{{url('email-templates')}}">Email Templates</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
                                                                    <ul>
                                                                        <li><a href="{{url('sms-settings')}}">SMS Settings</a></li>
                                                                        <li><a href="{{url('sms-templates')}}">SMS Templates</a></li>
                                                                    </ul>
                                                                </li>
                                                                
                                                                <li><a href="{{url('otp-settings')}}">OTP</a></li>
                                                                <li><a href="{{url('gdpr-settings')}}">GDPR Cookies</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);">
                                                                <i class="ti ti-settings-dollar fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">Financial Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li><a href="{{url('payment-gateway-settings')}}">Payment Gateway</a></li>
                                                                <li><a href="{{url('bank-settings-grid')}}">Bank Accounts </a></li>
                                                                <li><a href="{{url('tax-rates')}}">Tax Rates</a></li>
                                                                <li><a href="{{url('currency-settings')}}">Currencies</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu">
                                                            <a href="javascript:void(0);">
                                                                <i class="ti ti-settings-2 fs-18"></i>
                                                                <span class="fs-14 fw-medium ms-2">Other Settings</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul>
                                                                <li><a href="{{url('storage-settings')}}">Storage</a></li>
                                                                <li><a href="{{url('ban-ip-address')}}">Ban IP Address </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>								
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								<div class="card flex-fill mb-0">
									<div class="card-header">
										<h4 class="fs-18 fw-bold">Company Settings</h4>
									</div>
									<div class="card-body">
										<form action="{{url('company-settings')}}">
											<div class="border-bottom mb-3">
												<div class="card-title-head">
													<h6 class="fs-16 fw-bold mb-2">
														<span class="fs-16 me-2"><i class="ti ti-building"></i></span> 
														Company Information
													</h6>
												</div>
												<div class="row">
													<div class="col-xl-4 col-lg-6 col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Company Name  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Company Email Address  <span class="text-danger">*</span>
															</label>
															<input type="email" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Phone Number <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Fax <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Website <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<div class="card-title-head">
													<h6 class="fs-16 fw-bold mb-2">
														<span class="fs-16 me-2"><i class="ti ti-photo"></i></span> 
														Company Images
													</h6>
												</div>
												<div class="row align-items-center gy-3">
													<div class="col-xl-9">
														<div class="row gy-3 align-items-center">
															<div class="col-lg-4">
																<div class="logo-info">
																	<h6 class="fw-medium">Company Icon</h6>
																	<p>Upload Icon of your Company</p>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="profile-pic-upload mb-0 justify-content-lg-end">
																	<div class="new-employee-field">
																		<div class="mb-0">
																			<div class="image-upload mb-0">
																				<input type="file">
																				<div class="image-uploads">
																					<h4><i class="ti ti-upload me-1"></i>Upload Image</h4>
																				</div>
																			</div>
																			<span class="mt-1">Recommended size is 450px x 450px. Max size 5mb.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3">
														<div class="new-logo ms-xl-auto">
															<a href="#">
																<img src="{{URL::asset('build/img/logo-small.png')}}" alt="Logo">
																<span><i class="ti ti-x"></i></span>
															</a>
														</div>
													</div>
													<div class="col-xl-9">
														<div class="row gy-3 align-items-center">
															<div class="col-lg-4">
																<div class="logo-info">
																	<h6 class="fw-medium">Favicon</h6>
																	<p>Upload Favicon of your Company</p>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="profile-pic-upload mb-0 justify-content-lg-end">
																	<div class="new-employee-field">
																		<div class="mb-0">
																			<div class="image-upload mb-0">
																				<input type="file">
																				<div class="image-uploads">
																					<h4><i class="ti ti-upload me-1"></i>Upload Image</h4>
																				</div>
																			</div>
																			<span class="mt-1">Recommended size is 450px x 450px. Max size 5mb.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3">
														<div class="new-logo ms-xl-auto">
															<a href="#">
																<img src="{{URL::asset('build/img/logo-small.png')}}" alt="Logo">
																<span><i class="ti ti-x"></i></span>
															</a>
														</div>
													</div>
													<div class="col-xl-9">
														<div class="row gy-3 align-items-center">
															<div class="col-lg-4">
																<div class="logo-info">
																	<h6 class="fw-medium">Company Logo</h6>
																	<p>Upload Logo of your Company</p>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="profile-pic-upload mb-0 justify-content-lg-end">
																	<div class="new-employee-field">
																		<div class="mb-0">
																			<div class="image-upload mb-0">
																				<input type="file">
																				<div class="image-uploads">
																					<h4><i class="ti ti-upload me-1"></i>Upload Image</h4>
																				</div>
																			</div>
																			<span class="mt-1">Recommended size is 450px x 450px. Max size 5mb.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
													</div>
													<div class="col-xl-3">
														<div class="new-logo ms-xl-auto">
															<a href="#">
																<img src="{{URL::asset('build/img/products/company-logo.svg')}}" alt="Logo">
																<span><i class="ti ti-x"></i></span>
															</a>
														</div>
													</div>
													<div class="col-xl-9">
														<div class="row gy-3 align-items-center">
															<div class="col-lg-4">
																<div class="logo-info">
																	<h6 class="fw-medium">Company Dark Logo</h6>
																	<p>Upload Logo of your Company</p>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="profile-pic-upload mb-0 justify-content-lg-end">
																	<div class="new-employee-field">
																		<div class="mb-0">
																			<div class="image-upload mb-0">
																				<input type="file">
																				<div class="image-uploads">
																					<h4><i class="ti ti-upload me-1"></i>Upload Image</h4>
																				</div>
																			</div>
																			<span class="mt-1">Recommended size is 450px x 450px. Max size 5mb.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
													</div>
													<div class="col-xl-3">
														<div class="new-logo ms-xl-auto">
															<a href="#" class="bg-secondary">
																<img src="{{URL::asset('build/img/products/white-logo.svg')}}" alt="Logo">
																<span><i class="ti ti-x"></i></span>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="company-address">
												<div class="card-title-head">
													<h6 class="fs-16 fw-bold mb-2">
														<span class="fs-16 me-2"><i class="ti ti-map-pin"></i></span> 
														Address Information
													</h6>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="mb-3">
															<label class="form-label">
																Address <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label class="form-label">
																Country <span class="text-danger">*</span>
															</label>
															<select class="select">
																<option>Select</option>
																<option>USA</option>
																<option>India</option>
																<option>French</option>
																<option>Australia</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label class="form-label">
																State <span class="text-danger">*</span>
															</label>
															<select class="select">
																<option>Select</option>
																<option>Alaska</option>
																<option>Mexico</option>
																<option>Tasmania</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label class="form-label">
																City <span class="text-danger">*</span>
															</label>
															<select class="select">
																<option>Select</option>
																<option>Anchorage</option>
																<option>Tijuana</option>
																<option>Hobart</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label class="form-label">
																Postal Code <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="text-end settings-bottom-btn mt-0">
												<button type="button" class="btn btn-secondary me-2">Cancel</button>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
					<p class="mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
					<p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
				</div>
			</div>
@endsection
