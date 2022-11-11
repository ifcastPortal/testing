
	<div class="ifcast-style-position-righttop ifcast-style-width-small ">
		<?php  $this->load->view('adviews/companiessmall1', $data);	 ?>
	</div>

	<div class="vector-bg">
		<section class="container" style="position: relative;overflow:hidden">
			<div class="row">
				<div class="col-12">
					<div class="ifcast-style-card-1 p-2 mb-3">
						<div class="row px-2">
							<div class="col-9">
								<h6>Search a Enabler</h6>
								<form name="frm_login" id="frm_login" method="post" action=""
									onSubmit="return validateForm();">
									<div class="row p-2">
										<div class="form-group col-md-5 col-sm-12 col-12">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<input type="email" class="form-control" id="username"
													placeholder="Job title here" name="username">
											</div>
											<span class="err" id="err_username"> </span>
										</div>

										<div class="form-group col-md-5 col-sm-6 col-xs-12">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-suitcase" aria-hidden="true"
															id="user_role_icon_<?php echo $row_num; ?>"></i>
														<span class="loader"
															id="user_role_loader_<?php echo $row_num; ?>">
															<i class="fa fa-spinner fa-spin"
																style="font-size:14px; color:green;"></i>
														</span>
													</span>
												</div>

												<select id="user_role_<?php echo $row_num; ?>" name="user_role[]"
													autofocus="autofocus" class="form-control" required>
													<option value="">Select experience </option>
													<option value="<?php echo $row->role_id; ?>">0</option>
													<option value="<?php echo $row->role_id; ?>">1</option>
													<option value="<?php echo $row->role_id; ?>">2</option>
													<option value="<?php echo $row->role_id; ?>">3</option>
													<option value="<?php echo $row->role_id; ?>">4</option>
													<option value="<?php echo $row->role_id; ?>">5</option>
												</select>
											</div>
											<span class="err" id="err_user_role_<?php echo $row_num; ?>"> </span>
										</div>

										<div class="form-group col-md-2 col-sm-2 col-12">
											<div class="input-group">
												<button type="submit" class="btn btn-primary" name="user_login">
													Search
												</button>
											</div>
											<span class="err" id="err_login"> </span>
										</div>
									</div>
								</form>
							</div>


							<div class="col-3">
								<h6>Sort your job</h6>
								<button type="submit" class="btn btn-primary mt-2" name="user_login">Up</button>
								<button type="submit" class="btn btn-primary mt-2" name="user_login">Down</button>
								<button type="submit" class="btn btn-primary mt-2" name="user_login">Hits</button>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
                <div class="col-3" style="height:72vh;overflow-y:scroll;overflow-x:hidden">
                    
                        <div class="">
                                <?php  $this->load->view('adviews/purchasecredits', $data);	 ?>
                            </div>
					<div class="ifcast-style-card-1 mb-3 p-3">
						<div class="row">
							<div class="col-12">
								<h6>Location</h6>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<select id="preffered_location" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location-1 </option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
											</select>
										</div>
										<span class="err" id="err_preffered_1"> </span>
									</div>
								</div>
							</div>

							<div class="col-12">
								<h6>Required Education</h6>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<select id="required_education" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location-1 </option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
											</select>
										</div>
										<span class="err" id="err_required_education"> </span>
									</div>
								</div>
							</div>

							<div class="col-12">
								<h6>Industries</h6>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<select id="preffered_industries" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location-1 </option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
											</select>
										</div>
										<span class="err" id="err_preffered_industries"> </span>
									</div>
								</div>
							</div>



							<div class="col-12">
								<h6>Salary Range</h6>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<select id="preffered_salary" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location-1 </option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
											</select>
										</div>
										<span class="err" id="err_preffered_salary"> </span>
									</div>
								</div>
							</div>

							<div class="col-12">
								<h6>Job Type</h6>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<select id="preffered_jobtype" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location-1 </option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
												<option value="onkar"> Hello</option>
											</select>
										</div>
										<span class="err" id="err_preffered_jobtype"> </span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-9" style="height:72vh;overflow-y:scroll;overflow-x:hidden">
				

					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						

					</div>

					<div class="row">
						<div class="col-12">
							<?php  $this->load->view('adviews/companiesbig2', $data);	 ?>
						</div>
					</div>





					<div class="row">

					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="ifcast-style-card-1  mb-3">
								<div class="row">
									<div class="col-8">
										<h6>Ganesh Shinde</h6>
										<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
										<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
										<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
									</div>
									<div class="col-4">
										<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
										<p class="text-right mt-2">Active jobs: 15<p></p>
									</div>


									<div class="col-12">
										<p class="font-weight-bold  mb-1">I hire for</p>
										<p class="ifcast-style-lineclamp-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<hr size="3">
								<div class="row">
									<div class="col-6">
										<button type="submit" class="btn btn-primary mt-2" name="user_login">
											Follow
										</button>
									</div>
									<div class="col-6 text-right">
										<a href="#" class="btn btn-primary mt-2" name="user_login">
											<i class="fa fa-envelope-o ifcast-style-color-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<?php  $this->load->view('adviews/companiessmall2', $data);	 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="ifcast-style-card-1  mb-3">
									<div class="row">
										<div class="col-8">
											<h6>Ganesh Shinde</h6>
											<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
											<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
											<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
										</div>
										<div class="col-4">
											<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
											<p class="text-right mt-2">Active jobs: 15<p></p>
										</div>


										<div class="col-12">
											<p class="font-weight-bold  mb-1">I hire for</p>
											<p class="ifcast-style-lineclamp-3">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>
									</div>

									<hr size="3">
									<div class="row">
										<div class="col-6">
											<button type="submit" class="btn btn-primary mt-2" name="user_login">
												Follow
											</button>
										</div>
										<div class="col-6 text-right">
											<a href="#" class="btn btn-primary mt-2" name="user_login">
												<i class="fa fa-envelope-o ifcast-style-color-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="ifcast-style-card-1  mb-3">
									<div class="row">
										<div class="col-8">
											<h6>Ganesh Shinde</h6>
											<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
											<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
											<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
										</div>
										<div class="col-4">
											<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
											<p class="text-right mt-2">Active jobs: 15<p></p>
										</div>


										<div class="col-12">
											<p class="font-weight-bold  mb-1">I hire for</p>
											<p class="ifcast-style-lineclamp-3">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>
									</div>

									<hr size="3">
									<div class="row">
										<div class="col-6">
											<button type="submit" class="btn btn-primary mt-2" name="user_login">
												Follow
											</button>
										</div>
										<div class="col-6 text-right">
											<a href="#" class="btn btn-primary mt-2" name="user_login">
												<i class="fa fa-envelope-o ifcast-style-color-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>


							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="ifcast-style-card-1  mb-3">
									<div class="row">
										<div class="col-8">
											<h6>Ganesh Shinde</h6>
											<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
											<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
											<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
										</div>
										<div class="col-4">
											<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
											<p class="text-right mt-2">Active jobs: 15<p></p>
										</div>


										<div class="col-12">
											<p class="font-weight-bold  mb-1">I hire for</p>
											<p class="ifcast-style-lineclamp-3">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>
									</div>

									<hr size="3">
									<div class="row">
										<div class="col-6">
											<button type="submit" class="btn btn-primary mt-2" name="user_login">
												Follow
											</button>
										</div>
										<div class="col-6 text-right">
											<a href="#" class="btn btn-primary mt-2" name="user_login">
												<i class="fa fa-envelope-o ifcast-style-color-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>


							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="ifcast-style-card-1  mb-3">
									<div class="row">
										<div class="col-8">
											<h6>Ganesh Shinde</h6>
											<p class="mb-2"><i class="fa fa-user"></i>&nbsp;Designation</p>
											<p class="mb-2"><i class="fa fa-building"></i>&nbsp;Compnay name</p>
											<p class="mb-2"><i class="fa fa-suitcase"></i>&nbsp;6 years</p>
										</div>
										<div class="col-4">
											<img src="https://dummyimage.com/600x600/458/fff" alt="" class="w-100 d-block">
											<p class="text-right mt-2">Active jobs: 15<p></p>
										</div>


										<div class="col-12">
											<p class="font-weight-bold  mb-1">I hire for</p>
											<p class="ifcast-style-lineclamp-3">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
											</p>
										</div>
									</div>

									<hr size="3">
									<div class="row">
										<div class="col-6">
											<button type="submit" class="btn btn-primary mt-2" name="user_login">
												Follow
											</button>
										</div>
										<div class="col-6 text-right">
											<a href="#" class="btn btn-primary mt-2" name="user_login">
												<i class="fa fa-envelope-o ifcast-style-color-white"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>
	</div>

<script>
	var base_url = "<?php echo base_url(); ?>";

	$(document).ready(function () {
		$('#preffered_location').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#required_education').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_industries').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_salary').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_jobtype').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

	

	});
</script>