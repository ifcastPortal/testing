<?php
//echo "<pre>==>"; print_r($jobpreference); exit;
if(!empty($jobpreference))
{
	$y=0;
	foreach($jobpreference as $details_row)
	{ 
		if($y++ > 0)
			echo '<hr size="3">';
	?>
	<input type="hidden" name="prevJob_id" value="<?php echo $details_row->prevJobId; ?>">
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="companyName_<?php echo $row_num; ?>" placeholder="Company Name" name="companyName[]" type="text">
					</div>
					<span class="err" id="err_companyName_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="designation_<?php echo $row_num; ?>" name="designation[]" autofocus="autofocus" class="form-control" required>
							<option value=""> Designation </option>
							<option value="TechSupport">Account Manager</option>
 <option value="TechSupport">Account Services Executive</option>
 <option value="TechSupport">Accountant</option>
 <option value="TechSupport">Accounts Assistant/ Book Keeper</option>
 <option value="TechSupport">Accounts Head/ GM - Accounts</option>
 <option value="TechSupport">Actuary</option>
 <option value="TechSupport">Admin - Executive</option>
 <option value="TechSupport">Admin - Head/ Manager</option>
 <option value="TechSupport">Advertising - Executive</option>
 <option value="TechSupport">Advertising - Manager</option>
 <option value="TechSupport">Advisory</option>
 <option value="TechSupport">Air Hostess/ Steward/ Cabin Crew</option>
 <option value="TechSupport">Alliances Manager</option>
 <option value="TechSupport">Anaesthetist</option>
 <option value="TechSupport">Analytical Chemistry Scientist</option>
 <option value="TechSupport">Appraisals - Head/ Mgr</option>
 <option value="TechSupport">Architect</option>
 <option value="TechSupport">Area Manager</option>
 <option value="TechSupport">Asset Operations</option>
 <option value="TechSupport">Attendant</option>
 <option value="TechSupport">Audit</option>
 <option value="TechSupport">AV Executive</option>
 <option value="TechSupport">Aviation Engineer</option>
 <option value="TechSupport">Ayurvedic Doctor</option>
 <option value="TechSupport">Banquet Manager</option>
 <option value="TechSupport">Banquet Sales</option>
 <option value="TechSupport">Bartender</option>
 <option value="TechSupport">Basic Research Scientist</option>
 <option value="TechSupport">Bio-chemist</option>
 <option value="TechSupport">Bio-Technology Research Scientist</option>
 <option value="TechSupport">Branch Head</option>
 <option value="TechSupport">Brand Manager/ Product Manager</option>
 <option value="TechSupport">Business Analyst</option>
 <option value="TechSupport">Business Center Manager</option>
 <option value="TechSupport">Business Editor</option>
 <option value="TechSupport">Business Writer</option>
 <option value="TechSupport">Business/ Strategic Planning - Manager</option>
 <option value="TechSupport">Cameraman</option>
 <option value="TechSupport">Cash Management Operations</option>
 <option value="TechSupport">Cash Officer/ Manager</option>
 <option value="TechSupport">Cashier</option>
 <option value="TechSupport">CEO/MD/ Country Manager</option>
 <option value="TechSupport">Chartered Accountant/ CPA</option>
 <option value="TechSupport">Chef/ Kitchen Manager</option>
 <option value="TechSupport">Chemical Engineer</option>
 <option value="TechSupport">Chemical Research Scientist</option>
 <option value="TechSupport">Chemist</option>
 <option value="TechSupport">Chief Chef</option>
 <option value="TechSupport">Chief Engineer</option>
 <option value="TechSupport">Chief/ Deputy Chief of Bureau</option>
 <option value="TechSupport">Choreographer</option>
 <option value="TechSupport">Civil Engineer</option>
 <option value="TechSupport">Claims Adjuster</option>
 <option value="TechSupport">Clerks</option>
 <option value="TechSupport">Clearing Officer/ Head</option>
 <option value="TechSupport">Clinical Research Scientist</option>
 <option value="TechSupport">Club Floor Manager</option>
 <option value="TechSupport">Collections</option>
 <option value="TechSupport">Commercial - Manager</option>
 <option value="TechSupport">Company Secretary</option>
 <option value="TechSupport">Compliance & Control</option>
 <option value="TechSupport">Computer Operator/ Data Entry</option>
 <option value="TechSupport">Concierge</option>
 <option value="TechSupport">Configuration Mgr/ Release Manager</option>
 <option value="TechSupport">Construction Suptd/ Inspector</option>
 <option value="TechSupport">Consultant</option>
 <option value="TechSupport">Consumer Banking Asset Operations</option>
 <option value="TechSupport">Consumer Banking Branch Head</option>
 <option value="TechSupport">Consumer Banking Credit Analyst</option>
 <option value="TechSupport">Consumer Banking Credit Head</option>
 <option value="TechSupport">Consumer Banking Customer Service</option>
 <option value="TechSupport">Consumer Banking Head</option>
 <option value="TechSupport">Consumer Banking Region Head</option>
 <option value="TechSupport">Consumer Branch Banking Operations</option>
 <option value="TechSupport">Copy Writer</option>
 <option value="TechSupport">Copy/ Sub Editor</option>
 <option value="TechSupport">Corp Communications - Head</option>
 <option value="TechSupport">Corp Communications - Manager/ Executive</option>
 <option value="TechSupport">Corporate Banking Branch Head</option>
 <option value="TechSupport">Corporate Banking Credit Analyst</option>
 <option value="TechSupport">Corporate Banking Credit Control Manager</option>
 <option value="TechSupport">Corporate Banking Credit Head</option>
 <option value="TechSupport">Corporate Banking Customer Support Manager</option>
 <option value="TechSupport">Corporate Banking Head</option>
 <option value="TechSupport">Corporate Banking Region Head</option>
 <option value="TechSupport">Correspondent/ Reporter</option>
 <option value="TechSupport">Cost Accountant</option>
 <option value="TechSupport">Country Network Coordinator</option>
 <option value="TechSupport">Creative Director</option>
 <option value="TechSupport">Credit Control & Collections</option>
 <option value="TechSupport">Customer Care Executive</option>
 <option value="TechSupport">Customer Service Executive (Voice)</option>
 <option value="TechSupport">Customer Service Executive (Web)</option>
 <option value="TechSupport">Customer Service/ Tech Support</option>
 <option value="TechSupport">Customer Support Engineer/ Technician</option>
 <option value="TechSupport">Data Management/ Statistics</option>
 <option value="TechSupport">Database Administrator (DBA)</option>
 <option value="TechSupport">Database Architect/ Designer</option>
 <option value="TechSupport">Datawarehousing Consultants</option>
 <option value="TechSupport">Depository Participant</option>
 <option value="TechSupport">Derivatives Analyst</option>
 <option value="TechSupport">Design Manager/ Engineer</option>
 <option value="TechSupport">Despatch Incharge</option>
 <option value="TechSupport">Dietician</option>
 <option value="TechSupport">Direct Marketing - Executive</option>
 <option value="TechSupport">Direct Marketing - Manager</option>
 <option value="TechSupport">Director on Board</option>
 <option value="TechSupport">Director/ Practice Head (PR)</option>
 <option value="TechSupport">Distribution - Head</option>
 <option value="TechSupport">Doctor</option>
 <option value="TechSupport">Documentation & VISA</option>
 <option value="TechSupport">Documentation/ Medical Writing</option>
 <option value="TechSupport">Documentation/ Shipment Management</option>
 <option value="TechSupport">Domestic Travel</option>
 <option value="TechSupport">Drug Regulatory Doctor</option>
 <option value="TechSupport">ECG/ CGA Technician</option>
 <option value="TechSupport">Editor/ Managing Editor</option>
 <option value="TechSupport">EDP Analyst</option>
 <option value="TechSupport">Electrical Engineer</option>
 <option value="TechSupport">Electronics/ Instrumentation Engineer</option>
 <option value="TechSupport">Entrepreneur</option>
 <option value="TechSupport">Environmental Engineer</option>
 <option value="TechSupport">ERP, CRM - Functional Consultant</option>
 <option value="TechSupport">ERP, CRM - Technical Consultant</option>
 <option value="TechSupport">ERP/ CRM - Support Engineer</option>
 <option value="TechSupport">Events/ Promotions Manager</option>
 <option value="TechSupport">Express Centre - Executive</option>
 <option value="TechSupport">Express Centre - Head/ Manager</option>
 <option value="TechSupport">External Auditor</option>
 <option value="TechSupport">External Consultant</option>
 <option value="TechSupport">F&B Manager</option>
 <option value="TechSupport">Fashion Designer</option>
 <option value="TechSupport">Features Editor</option>
 <option value="TechSupport">Features Writer</option>
 <option value="TechSupport">Finance Assistant</option>
 <option value="TechSupport">Finance Head/ GM - Finance</option>
 <option value="TechSupport">Finance Manager</option>
 <option value="TechSupport">Financial Analyst</option>
 <option value="TechSupport">Financial Controller</option>
 <option value="TechSupport">Financial Planning, Budgeting - Manager</option>
 <option value="TechSupport">Fitness Trainer</option>
 <option value="TechSupport">Fixed Income - Head/ Mgr (Treasury)</option>
 <option value="TechSupport">Fleet Supervisor</option>
 <option value="TechSupport">Foreign Exchange Officer</option>
 <option value="TechSupport">Foreman</option>
 <option value="TechSupport">FOREX - Head/ Mgr (Treasury)</option>
 <option value="TechSupport">FOREX Dealer</option>
 <option value="TechSupport">Franchisee Coordinator</option>
 <option value="TechSupport">Freelancer</option>
 <option value="TechSupport">Fresher</option>
 <option value="TechSupport">Front Desk</option>
 <option value="TechSupport">Front Office</option>
 <option value="TechSupport">Front Office Manager</option>
 <option value="TechSupport">GM</option>
 <option value="TechSupport">GM - Risks</option>
 <option value="TechSupport">GM - Treasury</option>
 <option value="TechSupport">GM/ DGM</option>
 <option value="TechSupport">Goods Manufacturing Practices (GMP)</option>
 <option value="TechSupport">Graphic Designer/ Animator</option>
 <option value="TechSupport">Ground Staff</option>
 <option value="TechSupport">Group Account Mgr/ Account Director</option>
 <option value="TechSupport">Group Head - Creative</option>
 <option value="TechSupport">GSM Engineer</option>
 <option value="TechSupport">Guest Relations Executive</option>
 <option value="TechSupport">Guest Relations Manager</option>
 <option value="TechSupport">H/W Installation/ Maintenance Engg</option>
 <option value="TechSupport">Hardware Design Engineer</option>
 <option value="TechSupport">Hardware Design Technical Leader</option>
 <option value="TechSupport">Head/ Manager - BPO</option>
 <option value="TechSupport">Health Club Manager</option>
 <option value="TechSupport">Hearing Aid Technician</option>
 <option value="TechSupport">Hedge Fund Analyst/Trader</option>
 <option value="TechSupport">Hostess/ Host</option>
 <option value="TechSupport">House Keeping</option>
 <option value="TechSupport">House Keeping - Head/ Manager</option>
 <option value="TechSupport">House Keeping Executive</option>
 <option value="TechSupport">HR Executive</option>
 <option value="TechSupport">ICWA</option>
 <option value="TechSupport">Industrial Engineering</option>
 <option value="TechSupport">Industrial Relations Manager</option>
 <option value="TechSupport">Information Systems (MIS) - Manager</option>
 <option value="TechSupport">Instructional Designer</option>
 <option value="TechSupport">Interior Designer</option>
 <option value="TechSupport">Internal Auditor</option>
 <option value="TechSupport">International Business Dev Mgr</option>
 <option value="TechSupport">International Travel</option>
 <option value="TechSupport">Internet Banking</option>
 <option value="TechSupport">Inventory Control Manager/ Materials Manager</option>
 <option value="TechSupport">Investment Advisor</option>
 <option value="TechSupport">IT/ Networking (EDP) - Manager</option>
 <option value="TechSupport">Journalist</option>
 <option value="TechSupport">Lab Staff</option>
 <option value="TechSupport">Lab Technician</option>
 <option value="TechSupport">Laundry Manager</option>
 <option value="TechSupport">Law Officer</option>
 <option value="TechSupport">Lawyer/ Attorney</option>
 <option value="TechSupport">Legal - Head</option>
 <option value="TechSupport">Legal Advisor</option>
 <option value="TechSupport">Legal Assistant/ Apprentice</option>
 <option value="TechSupport">Legal Consultant/ Solicitor</option>
 <option value="TechSupport">Legal Services - Manager</option>
 <option value="TechSupport">Liaison</option>
 <option value="TechSupport">Librarian</option>
 <option value="TechSupport">Lobby/ Duty Manager</option>
 <option value="TechSupport">Logistics - Co-ordinator</option>
 <option value="TechSupport">Logistics - Head/ Mgr</option>
 <option value="TechSupport">Loyalty Program</option>
 <option value="TechSupport">M & A Advisor</option>
 <option value="TechSupport">Maintenance</option>
 <option value="TechSupport">Maintenance Engineer</option>
 <option value="TechSupport">Maintenance Technician</option>
 <option value="TechSupport">Market Research - Executive</option>
 <option value="TechSupport">Market Research - Field Executive</option>
 <option value="TechSupport">Market Research - Field Supervisor/ Field</option>
 <option value="TechSupport">Market Research - Manager</option>
 <option value="TechSupport">Market Research Exec - Qualitative</option>
 <option value="TechSupport">Market Research Exec - Quantitative</option>
 <option value="TechSupport">Market Research Manager</option>
 <option value="TechSupport">Market Risk - Head/ Mgr</option>
 <option value="TechSupport">Marketing Manager</option>
 <option value="TechSupport">Masseur</option>
 <option value="TechSupport">Materials - Head/ GM</option>
 <option value="TechSupport">Mechanical Engineer</option>
 <option value="TechSupport">Media Buying - Manager/ Executive</option>
 <option value="TechSupport">Media Planning - Manager/ Executive</option>
 <option value="TechSupport">Media Relations & Research - Manager</option>
 <option value="TechSupport">Medical Officer</option>
 <option value="TechSupport">Medical Representative</option>
 <option value="TechSupport">Medical Transcription Executive</option>
 <option value="TechSupport">Merchandiser</option>
 <option value="TechSupport">Microbiologist</option>
 <option value="TechSupport">Migrations/ Transitions</option>
 <option value="TechSupport">Mines Engineer</option>
 <option value="TechSupport">Model</option>
 <option value="TechSupport">Money Market Dealer</option>
 <option value="TechSupport">Mutual Fund Analyst</option>
 <option value="TechSupport">Nephrologist</option>
 <option value="TechSupport">Network Administrator</option>
 <option value="TechSupport">Network Installation & Administration Engineer</option>
 <option value="TechSupport">Network Planning - Chief Engineer</option>
 <option value="TechSupport">Network Planning - Engineer</option>
 <option value="TechSupport">News Editor</option>
 <option value="TechSupport">Nurse</option>
 <option value="TechSupport">Nutritionist</option>
 <option value="TechSupport">O&M Engineer</option>
 <option value="TechSupport">Occupational Therapist</option>
 <option value="TechSupport">Office Assistant</option>
 <option value="TechSupport">Operation Theater Technician</option>
 <option value="TechSupport">Operations - Manager</option>
 <option value="TechSupport">Ophthalmologist</option>
 <option value="TechSupport">Optometrist</option>
 <option value="TechSupport">Orthopaedist</option>
 <option value="TechSupport">Other Advertising/ PR/ MR</option>
 <option value="TechSupport">Other Banking</option>
 <option value="TechSupport">Other Customer Service/ Call Center</option>
 <option value="TechSupport">Other Distribution/Delivery</option>
 <option value="TechSupport">Other Export/ Import</option>
 <option value="TechSupport">Other Financial Services</option>
 <option value="TechSupport">Other Health Care/ Hospitals</option>
 <option value="TechSupport">Other Hotels/ Restaurants</option>
 <option value="TechSupport">Other Legal/ Law</option>
 <option value="TechSupport">Other Marketing</option>
 <option value="TechSupport">Other Media/ Journalism</option>
 <option value="TechSupport">Other Pharma</option>
 <option value="TechSupport">Other Purchase/ Supply Chain</option>
 <option value="TechSupport">Other Retail Chains/Shops</option>
 <option value="TechSupport">Other Telecom/ISP</option>
 <option value="TechSupport">Other Travel/ Airlines</option>
 <option value="TechSupport">Outside Service Providers</option>
 <option value="TechSupport">Paint Shop</option>
 <option value="TechSupport">Painter</option>
 <option value="TechSupport">Pathologist</option>
 <option value="TechSupport">Payroll/ Compensation - Head/ Mgr</option>
 <option value="TechSupport">Perfusionist</option>
 <option value="TechSupport">Personal Assistant to CEO</option>
 <option value="TechSupport">Pharmaceutical Research Scientist</option>
 <option value="TechSupport">Pharmacist</option>
 <option value="TechSupport">Phone Banking</option>
 <option value="TechSupport">Photographer</option>
 <option value="TechSupport">Physician</option>
 <option value="TechSupport">Physiotherapist</option>
 <option value="TechSupport">Pilot</option>
 <option value="TechSupport">Plant Head/ Factory Manager</option>
 <option value="TechSupport">POD Assistant</option>
 <option value="TechSupport">POD Incharge</option>
 <option value="TechSupport">Policy Administration</option>
 <option value="TechSupport">Political Editor</option>
 <option value="TechSupport">Political Writer</option>
 <option value="TechSupport">Portfolio Manager</option>
 <option value="TechSupport">Postdoc Position/Fellowship</option>
 <option value="TechSupport">Practical Training/Internship</option>
 <option value="TechSupport">Press Shop</option>
 <option value="TechSupport">Principal/ Senior Correspondent</option>
 <option value="TechSupport">Printing Technologist/ Manager</option>
 <option value="TechSupport">Private Banker</option>
 <option value="TechSupport">Private Practitioner/ Lawyer</option>
 <option value="TechSupport">Process Manager/ Engineer</option>
 <option value="TechSupport">Producer/ Production Manager</option>
 <option value="TechSupport">Product Manager</option>
 <option value="TechSupport">Production Manager/ Engineer</option>
 <option value="TechSupport">Program Manager</option>
 <option value="TechSupport">Project Finance - Head/ Mgr</option>
 <option value="TechSupport">Project Finance Advisor</option>
 <option value="TechSupport">Project Leader/ Project Manager</option>
 <option value="TechSupport">Property Management</option>
 <option value="TechSupport">Psychiatrist</option>
 <option value="TechSupport">Psychologist</option>
 <option value="TechSupport">Public Relations - Executive</option>
 <option value="TechSupport">Public Relations - Manager</option>
 <option value="TechSupport">Purchase - Head</option>
 <option value="TechSupport">Purchase Manager</option>
 <option value="TechSupport">Purchase Officer/ Co-ordinator/ Executive</option>
 <option value="TechSupport">Quality Assurance - Manager</option>
 <option value="TechSupport">Quality Assurance Executive</option>
 <option value="TechSupport">Quality Assurance/ Control</option>
 <option value="TechSupport">R & D - Head/ Manager</option>
 <option value="TechSupport">Radiographer</option>
 <option value="TechSupport">Radiologist</option>
 <option value="TechSupport">Ratings Analyst</option>
 <option value="TechSupport">Real Estate Assessor</option>
 <option value="TechSupport">Real Estate Broker</option>
 <option value="TechSupport">Receptionist/ Front Office Executive</option>
 <option value="TechSupport">Recruitment - Head/ Mgr</option>
 <option value="TechSupport">Regional Manager</option>
 <option value="TechSupport">Regional Mgr/ Manager(Operations)</option>
 <option value="TechSupport">Relationship Mgr/ Account Servicing</option>
 <option value="TechSupport">Research Assistant</option>
 <option value="TechSupport">Research Scientist</option>
 <option value="TechSupport">Reservation Manager</option>
 <option value="TechSupport">Resident Editor</option>
 <option value="TechSupport">Restaurant Manager</option>
 <option value="TechSupport">Retail Store Manager</option>
 <option value="TechSupport">RF Installation & Administration Engineer</option>
 <option value="TechSupport">RF Planning - Chief Engineer</option>
 <option value="TechSupport">RF Planning Engineer</option>
 <option value="TechSupport">Risk Manager</option>
 <option value="TechSupport">Room Service Manager</option>
 <option value="TechSupport">S/W Installation/ Maintenance Engg</option>
 <option value="TechSupport">Safety Officer/ Engineer</option>
 <option value="TechSupport">Sales Exec/ Sales Representative</option>
 <option value="TechSupport">SBU Head /Profit Centre Head</option>
 <option value="TechSupport">Script Writer</option>
 <option value="TechSupport">Secretary</option>
 <option value="TechSupport">Security Analyst</option>
 <option value="TechSupport">Security Manager/ Officer</option>
 <option value="TechSupport">Security Officer</option>
 <option value="TechSupport">Service Manager/ Engineer</option>
 <option value="TechSupport">Shares Services Executive</option>
 <option value="TechSupport">Shift Engineer/ Supervisor</option>
 <option value="TechSupport">Shift Manager</option>
 <option value="TechSupport">Shift Supervisor</option>
 <option value="TechSupport">Shift Supervisor</option>
 <option value="TechSupport">Software Engineer/ Programmer</option>
 <option value="TechSupport">Software Test Engineer</option>
 <option value="TechSupport">Spares Manager/ Engineer</option>
 <option value="TechSupport">Specialist - Medicine</option>
 <option value="TechSupport">Steward/ Waiter</option>
 <option value="TechSupport">Stock Broker</option>
 <option value="TechSupport">Store Keeper/ Warehouse Assistant</option>
 <option value="TechSupport">Supply Chain - Head</option>
 <option value="TechSupport">Surgeon</option>
 <option value="TechSupport">Switching - Chief Engineer</option>
 <option value="TechSupport">Switching - Engineer</option>
 <option value="TechSupport">System Administrator</option>
 <option value="TechSupport">System Analyst/ Tech Architect</option>
 <option value="TechSupport">System Engineer</option>
 <option value="TechSupport">System Integrator</option>
 <option value="TechSupport">System Security - Chief Engineer</option>
 <option value="TechSupport">System Security - Engineer</option>
 <option value="TechSupport">Taxation - Manager</option>
 <option value="TechSupport">Teacher/ Professor</option>
 <option value="TechSupport">Team Leader</option>
 <option value="TechSupport">Team Leader/ Technical Leader</option>
 <option value="TechSupport">Tech/ Engg - Manager</option>
 <option value="TechSupport">Technical - Manager</option>
 <option value="TechSupport">Technical Support Engineer</option>
 <option value="TechSupport">Technical Support Executive</option>
 <option value="TechSupport">Technical Writer</option>
 <option value="TechSupport">Technician</option>
 <option value="TechSupport">Technology Transfer Engineer</option>
 <option value="TechSupport">Telesales/ Telemarketing Executive</option>
 <option value="TechSupport">Tool Room</option>
 <option value="TechSupport">Trade Finance/ Cash Mgmt Services - Head/ Mgr</option>
 <option value="TechSupport">Trading</option>
 <option value="TechSupport">Trading Advisor</option>
 <option value="TechSupport">Traffic Clerk</option>
 <option value="TechSupport">Traffic Clerk</option>
 <option value="TechSupport">Trainee</option>
 <option value="TechSupport">Trainee/ Management Trainee</option>
 <option value="TechSupport">Trainer/ Faculty</option>
 <option value="TechSupport">Training & Development - Head/ Mgr</option>
 <option value="TechSupport">Training Manager</option>
 <option value="TechSupport">Training Managers/ Trainers</option>
 <option value="TechSupport">Transactions Processing Executive</option>
 <option value="TechSupport">Transit Centre (Air) - Executive</option>
 <option value="TechSupport">Transit Centre (Air) - Head/ Manager</option>
 <option value="TechSupport">Transit Centre (Rail) - Executive</option>
 <option value="TechSupport">Transit Centre (Rail) - Head/ Manager</option>
 <option value="TechSupport">Transit Centre (Road) - Executive</option>
 <option value="TechSupport">Transit Centre (Road) - Head/ Manager</option>
 <option value="TechSupport">Transportation/ Shipping Supervisor</option>
 <option value="TechSupport">Travel Agent/ Tour Operator</option>
 <option value="TechSupport">Treasury Manager</option>
 <option value="TechSupport">Treasury Marketing Fixed Income</option>
 <option value="TechSupport">Treasury Marketing FOREX</option>
 <option value="TechSupport">TV Anchor</option>
 <option value="TechSupport">Typist</option>
 <option value="TechSupport">Underwriter</option>
 <option value="TechSupport">Vendor Development Manager</option>
 <option value="TechSupport">Vendor Development Manager</option>
 <option value="TechSupport">Visualiser</option>
 <option value="TechSupport">VP - Client Servicing (Advertising)</option>
 <option value="TechSupport">VP - Client/ Servicing (MR)</option>
 <option value="TechSupport">VP - Creative/ Creative Director</option>
 <option value="TechSupport">VP - Finance/ CFO</option>
 <option value="TechSupport">VP - Media Buying</option>
 <option value="TechSupport">VP - Media Planning & Strategy</option>
 <option value="TechSupport">VP - Operations/ COO</option>
 <option value="TechSupport">VP/ GM - Administration</option>
 <option value="TechSupport">VP/ GM - Commercial</option>
 <option value="TechSupport">VP/ GM - Engg/ Production</option>
 <option value="TechSupport">VP/ GM - HR</option>
 <option value="TechSupport">VP/ GM - Quality</option>
 <option value="TechSupport">VP/ GM R&D (Pharma)</option>
 <option value="TechSupport">VP/ GM/ Head - Marketing</option>
 <option value="TechSupport">VP/ Head - Customer Service</option>
 <option value="TechSupport">VP/ Head - Technology (Telecom/ ISP)</option>
 <option value="TechSupport">Web Designer</option>
 <option value="TechSupport">Web Master/ Web Site Manager</option>
 <option value="TechSupport">Weld Shop</option>
 <option value="TechSupport">Work Flow Analyst</option>
 <option value="TechSupport">Work Flow Analyst</option>
 <option value="Devloper"> Developer </option>
											  <option value="Designer"> Designer </option>
											  <option value="SEO"> SEO </option>
											  <option value="TechSupport"> Tech-Support </option>
						</select>
					</div>
					<span class="err" id="err_designation_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="location_<?php echo $row_num; ?>" placeholder="Company Address" name="location[]" type="text">						
					</div>
					<span class="err" id="err_location_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
							<option value=""> Work-Full/Part </option>
							<?php 
								$rols = array("Full"=>"Full", "Part"=>"Part");
								foreach($rols as $key=>$val)
								{	?>
									<option value="<?php echo $key; ?>" <?php //echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
						<?php	}
							?>
						</select>
					</div>
					<span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="fromDate_<?php echo $row_num; ?>" placeholder="From Date (dd/mm/yyyy)" name="fromDate[]" type="text">						
					</div>
					<span class="err" id="err_fromDate_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="toDate_0" placeholder="To Date (dd/mm/yyyy)" name="toDate[]" type="text">						
					</div>
					<span class="err" id="err_toDate_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
		</div>

		<div class="row"> 
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
							<option value=""> Work-Full/Part </option>
							<?php 
								$rols = array("Full"=>"Full", "Part"=>"Part");
								foreach($rols as $key=>$val)
								{	?>
									<option value="<?php echo $key; ?>" <?php echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
						<?php	}
							?>
						</select>
					</div>
					<span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
				</div>
				<div class="col-md-6 col-sm-6">
				 <div class="btn-group" style="float:right; padding-right:15px;">
					<a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
						<i class="fa fa-plus"></i>Remove
					</a>
				 </div>
				</div>
			</div>
		</div>
<?php
	} // foreach
}
else
{ 
$hr = $display = "";
 if($row_num > 0) { 
	$hr ='<hr size="3">';
	$display ='display:none';
 } 

?>
<div class="col-md-9" id="rowNum_<?php echo $row_num; ?>" style="<?php echo $display; ?>;">
<?php  
	echo $hr;
?>	

		<br>

		

<div class="row">

	<?php	if($row_num > 0) {  ?>

	
		<div class="col-md-12" style="text-align: right;">
			<div class="btn-group" style="text-align: right;background:#cd3539;color:white;height:30px;width:30px;">
			   <a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
				   <i class="fa fa-times"></i>
			   </a>
			</div>
		   </div>
	
	
<?php } ?>

	<div class="col-md-6">
		<div class="form-group">
			
			<select id="designation_0" name="designation[]" autofocus="autofocus" class="form-control" required>
				<option value=""> Designation </option>


				<option value="TechSupport">Account Manager</option>
<option value="TechSupport">Account Services Executive</option>
<option value="TechSupport">Accountant</option>
<option value="TechSupport">Accounts Assistant/ Book Keeper</option>
<option value="TechSupport">Accounts Head/ GM - Accounts</option>
<option value="TechSupport">Actuary</option>
<option value="TechSupport">Admin - Executive</option>
<option value="TechSupport">Admin - Head/ Manager</option>
<option value="TechSupport">Advertising - Executive</option>
<option value="TechSupport">Advertising - Manager</option>
<option value="TechSupport">Advisory</option>
<option value="TechSupport">Air Hostess/ Steward/ Cabin Crew</option>
<option value="TechSupport">Alliances Manager</option>
<option value="TechSupport">Anaesthetist</option>
<option value="TechSupport">Analytical Chemistry Scientist</option>
<option value="TechSupport">Appraisals - Head/ Mgr</option>
<option value="TechSupport">Architect</option>
<option value="TechSupport">Area Manager</option>
<option value="TechSupport">Asset Operations</option>
<option value="TechSupport">Attendant</option>
<option value="TechSupport">Audit</option>
<option value="TechSupport">AV Executive</option>
<option value="TechSupport">Aviation Engineer</option>
<option value="TechSupport">Ayurvedic Doctor</option>
<option value="TechSupport">Banquet Manager</option>
<option value="TechSupport">Banquet Sales</option>
<option value="TechSupport">Bartender</option>
<option value="TechSupport">Basic Research Scientist</option>
<option value="TechSupport">Bio-chemist</option>
<option value="TechSupport">Bio-Technology Research Scientist</option>
<option value="TechSupport">Branch Head</option>
<option value="TechSupport">Brand Manager/ Product Manager</option>
<option value="TechSupport">Business Analyst</option>
<option value="TechSupport">Business Center Manager</option>
<option value="TechSupport">Business Editor</option>
<option value="TechSupport">Business Writer</option>
<option value="TechSupport">Business/ Strategic Planning - Manager</option>
<option value="TechSupport">Cameraman</option>
<option value="TechSupport">Cash Management Operations</option>
<option value="TechSupport">Cash Officer/ Manager</option>
<option value="TechSupport">Cashier</option>
<option value="TechSupport">CEO/MD/ Country Manager</option>
<option value="TechSupport">Chartered Accountant/ CPA</option>
<option value="TechSupport">Chef/ Kitchen Manager</option>
<option value="TechSupport">Chemical Engineer</option>
<option value="TechSupport">Chemical Research Scientist</option>
<option value="TechSupport">Chemist</option>
<option value="TechSupport">Chief Chef</option>
<option value="TechSupport">Chief Engineer</option>
<option value="TechSupport">Chief/ Deputy Chief of Bureau</option>
<option value="TechSupport">Choreographer</option>
<option value="TechSupport">Civil Engineer</option>
<option value="TechSupport">Claims Adjuster</option>
<option value="TechSupport">Clerks</option>
<option value="TechSupport">Clearing Officer/ Head</option>
<option value="TechSupport">Clinical Research Scientist</option>
<option value="TechSupport">Club Floor Manager</option>
<option value="TechSupport">Collections</option>
<option value="TechSupport">Commercial - Manager</option>
<option value="TechSupport">Company Secretary</option>
<option value="TechSupport">Compliance & Control</option>
<option value="TechSupport">Computer Operator/ Data Entry</option>
<option value="TechSupport">Concierge</option>
<option value="TechSupport">Configuration Mgr/ Release Manager</option>
<option value="TechSupport">Construction Suptd/ Inspector</option>
<option value="TechSupport">Consultant</option>
<option value="TechSupport">Consumer Banking Asset Operations</option>
<option value="TechSupport">Consumer Banking Branch Head</option>
<option value="TechSupport">Consumer Banking Credit Analyst</option>
<option value="TechSupport">Consumer Banking Credit Head</option>
<option value="TechSupport">Consumer Banking Customer Service</option>
<option value="TechSupport">Consumer Banking Head</option>
<option value="TechSupport">Consumer Banking Region Head</option>
<option value="TechSupport">Consumer Branch Banking Operations</option>
<option value="TechSupport">Copy Writer</option>
<option value="TechSupport">Copy/ Sub Editor</option>
<option value="TechSupport">Corp Communications - Head</option>
<option value="TechSupport">Corp Communications - Manager/ Executive</option>
<option value="TechSupport">Corporate Banking Branch Head</option>
<option value="TechSupport">Corporate Banking Credit Analyst</option>
<option value="TechSupport">Corporate Banking Credit Control Manager</option>
<option value="TechSupport">Corporate Banking Credit Head</option>
<option value="TechSupport">Corporate Banking Customer Support Manager</option>
<option value="TechSupport">Corporate Banking Head</option>
<option value="TechSupport">Corporate Banking Region Head</option>
<option value="TechSupport">Correspondent/ Reporter</option>
<option value="TechSupport">Cost Accountant</option>
<option value="TechSupport">Country Network Coordinator</option>
<option value="TechSupport">Creative Director</option>
<option value="TechSupport">Credit Control & Collections</option>
<option value="TechSupport">Customer Care Executive</option>
<option value="TechSupport">Customer Service Executive (Voice)</option>
<option value="TechSupport">Customer Service Executive (Web)</option>
<option value="TechSupport">Customer Service/ Tech Support</option>
<option value="TechSupport">Customer Support Engineer/ Technician</option>
<option value="TechSupport">Data Management/ Statistics</option>
<option value="TechSupport">Database Administrator (DBA)</option>
<option value="TechSupport">Database Architect/ Designer</option>
<option value="TechSupport">Datawarehousing Consultants</option>
<option value="TechSupport">Depository Participant</option>
<option value="TechSupport">Derivatives Analyst</option>
<option value="TechSupport">Design Manager/ Engineer</option>
<option value="TechSupport">Despatch Incharge</option>
<option value="TechSupport">Dietician</option>
<option value="TechSupport">Direct Marketing - Executive</option>
<option value="TechSupport">Direct Marketing - Manager</option>
<option value="TechSupport">Director on Board</option>
<option value="TechSupport">Director/ Practice Head (PR)</option>
<option value="TechSupport">Distribution - Head</option>
<option value="TechSupport">Doctor</option>
<option value="TechSupport">Documentation & VISA</option>
<option value="TechSupport">Documentation/ Medical Writing</option>
<option value="TechSupport">Documentation/ Shipment Management</option>
<option value="TechSupport">Domestic Travel</option>
<option value="TechSupport">Drug Regulatory Doctor</option>
<option value="TechSupport">ECG/ CGA Technician</option>
<option value="TechSupport">Editor/ Managing Editor</option>
<option value="TechSupport">EDP Analyst</option>
<option value="TechSupport">Electrical Engineer</option>
<option value="TechSupport">Electronics/ Instrumentation Engineer</option>
<option value="TechSupport">Entrepreneur</option>
<option value="TechSupport">Environmental Engineer</option>
<option value="TechSupport">ERP, CRM - Functional Consultant</option>
<option value="TechSupport">ERP, CRM - Technical Consultant</option>
<option value="TechSupport">ERP/ CRM - Support Engineer</option>
<option value="TechSupport">Events/ Promotions Manager</option>
<option value="TechSupport">Express Centre - Executive</option>
<option value="TechSupport">Express Centre - Head/ Manager</option>
<option value="TechSupport">External Auditor</option>
<option value="TechSupport">External Consultant</option>
<option value="TechSupport">F&B Manager</option>
<option value="TechSupport">Fashion Designer</option>
<option value="TechSupport">Features Editor</option>
<option value="TechSupport">Features Writer</option>
<option value="TechSupport">Finance Assistant</option>
<option value="TechSupport">Finance Head/ GM - Finance</option>
<option value="TechSupport">Finance Manager</option>
<option value="TechSupport">Financial Analyst</option>
<option value="TechSupport">Financial Controller</option>
<option value="TechSupport">Financial Planning, Budgeting - Manager</option>
<option value="TechSupport">Fitness Trainer</option>
<option value="TechSupport">Fixed Income - Head/ Mgr (Treasury)</option>
<option value="TechSupport">Fleet Supervisor</option>
<option value="TechSupport">Foreign Exchange Officer</option>
<option value="TechSupport">Foreman</option>
<option value="TechSupport">FOREX - Head/ Mgr (Treasury)</option>
<option value="TechSupport">FOREX Dealer</option>
<option value="TechSupport">Franchisee Coordinator</option>
<option value="TechSupport">Freelancer</option>
<option value="TechSupport">Fresher</option>
<option value="TechSupport">Front Desk</option>
<option value="TechSupport">Front Office</option>
<option value="TechSupport">Front Office Manager</option>
<option value="TechSupport">GM</option>
<option value="TechSupport">GM - Risks</option>
<option value="TechSupport">GM - Treasury</option>
<option value="TechSupport">GM/ DGM</option>
<option value="TechSupport">Goods Manufacturing Practices (GMP)</option>
<option value="TechSupport">Graphic Designer/ Animator</option>
<option value="TechSupport">Ground Staff</option>
<option value="TechSupport">Group Account Mgr/ Account Director</option>
<option value="TechSupport">Group Head - Creative</option>
<option value="TechSupport">GSM Engineer</option>
<option value="TechSupport">Guest Relations Executive</option>
<option value="TechSupport">Guest Relations Manager</option>
<option value="TechSupport">H/W Installation/ Maintenance Engg</option>
<option value="TechSupport">Hardware Design Engineer</option>
<option value="TechSupport">Hardware Design Technical Leader</option>
<option value="TechSupport">Head/ Manager - BPO</option>
<option value="TechSupport">Health Club Manager</option>
<option value="TechSupport">Hearing Aid Technician</option>
<option value="TechSupport">Hedge Fund Analyst/Trader</option>
<option value="TechSupport">Hostess/ Host</option>
<option value="TechSupport">House Keeping</option>
<option value="TechSupport">House Keeping - Head/ Manager</option>
<option value="TechSupport">House Keeping Executive</option>
<option value="TechSupport">HR Executive</option>
<option value="TechSupport">ICWA</option>
<option value="TechSupport">Industrial Engineering</option>
<option value="TechSupport">Industrial Relations Manager</option>
<option value="TechSupport">Information Systems (MIS) - Manager</option>
<option value="TechSupport">Instructional Designer</option>
<option value="TechSupport">Interior Designer</option>
<option value="TechSupport">Internal Auditor</option>
<option value="TechSupport">International Business Dev Mgr</option>
<option value="TechSupport">International Travel</option>
<option value="TechSupport">Internet Banking</option>
<option value="TechSupport">Inventory Control Manager/ Materials Manager</option>
<option value="TechSupport">Investment Advisor</option>
<option value="TechSupport">IT/ Networking (EDP) - Manager</option>
<option value="TechSupport">Journalist</option>
<option value="TechSupport">Lab Staff</option>
<option value="TechSupport">Lab Technician</option>
<option value="TechSupport">Laundry Manager</option>
<option value="TechSupport">Law Officer</option>
<option value="TechSupport">Lawyer/ Attorney</option>
<option value="TechSupport">Legal - Head</option>
<option value="TechSupport">Legal Advisor</option>
<option value="TechSupport">Legal Assistant/ Apprentice</option>
<option value="TechSupport">Legal Consultant/ Solicitor</option>
<option value="TechSupport">Legal Services - Manager</option>
<option value="TechSupport">Liaison</option>
<option value="TechSupport">Librarian</option>
<option value="TechSupport">Lobby/ Duty Manager</option>
<option value="TechSupport">Logistics - Co-ordinator</option>
<option value="TechSupport">Logistics - Head/ Mgr</option>
<option value="TechSupport">Loyalty Program</option>
<option value="TechSupport">M & A Advisor</option>
<option value="TechSupport">Maintenance</option>
<option value="TechSupport">Maintenance Engineer</option>
<option value="TechSupport">Maintenance Technician</option>
<option value="TechSupport">Market Research - Executive</option>
<option value="TechSupport">Market Research - Field Executive</option>
<option value="TechSupport">Market Research - Field Supervisor/ Field</option>
<option value="TechSupport">Market Research - Manager</option>
<option value="TechSupport">Market Research Exec - Qualitative</option>
<option value="TechSupport">Market Research Exec - Quantitative</option>
<option value="TechSupport">Market Research Manager</option>
<option value="TechSupport">Market Risk - Head/ Mgr</option>
<option value="TechSupport">Marketing Manager</option>
<option value="TechSupport">Masseur</option>
<option value="TechSupport">Materials - Head/ GM</option>
<option value="TechSupport">Mechanical Engineer</option>
<option value="TechSupport">Media Buying - Manager/ Executive</option>
<option value="TechSupport">Media Planning - Manager/ Executive</option>
<option value="TechSupport">Media Relations & Research - Manager</option>
<option value="TechSupport">Medical Officer</option>
<option value="TechSupport">Medical Representative</option>
<option value="TechSupport">Medical Transcription Executive</option>
<option value="TechSupport">Merchandiser</option>
<option value="TechSupport">Microbiologist</option>
<option value="TechSupport">Migrations/ Transitions</option>
<option value="TechSupport">Mines Engineer</option>
<option value="TechSupport">Model</option>
<option value="TechSupport">Money Market Dealer</option>
<option value="TechSupport">Mutual Fund Analyst</option>
<option value="TechSupport">Nephrologist</option>
<option value="TechSupport">Network Administrator</option>
<option value="TechSupport">Network Installation & Administration Engineer</option>
<option value="TechSupport">Network Planning - Chief Engineer</option>
<option value="TechSupport">Network Planning - Engineer</option>
<option value="TechSupport">News Editor</option>
<option value="TechSupport">Nurse</option>
<option value="TechSupport">Nutritionist</option>
<option value="TechSupport">O&M Engineer</option>
<option value="TechSupport">Occupational Therapist</option>
<option value="TechSupport">Office Assistant</option>
<option value="TechSupport">Operation Theater Technician</option>
<option value="TechSupport">Operations - Manager</option>
<option value="TechSupport">Ophthalmologist</option>
<option value="TechSupport">Optometrist</option>
<option value="TechSupport">Orthopaedist</option>
<option value="TechSupport">Other Advertising/ PR/ MR</option>
<option value="TechSupport">Other Banking</option>
<option value="TechSupport">Other Customer Service/ Call Center</option>
<option value="TechSupport">Other Distribution/Delivery</option>
<option value="TechSupport">Other Export/ Import</option>
<option value="TechSupport">Other Financial Services</option>
<option value="TechSupport">Other Health Care/ Hospitals</option>
<option value="TechSupport">Other Hotels/ Restaurants</option>
<option value="TechSupport">Other Legal/ Law</option>
<option value="TechSupport">Other Marketing</option>
<option value="TechSupport">Other Media/ Journalism</option>
<option value="TechSupport">Other Pharma</option>
<option value="TechSupport">Other Purchase/ Supply Chain</option>
<option value="TechSupport">Other Retail Chains/Shops</option>
<option value="TechSupport">Other Telecom/ISP</option>
<option value="TechSupport">Other Travel/ Airlines</option>
<option value="TechSupport">Outside Service Providers</option>
<option value="TechSupport">Paint Shop</option>
<option value="TechSupport">Painter</option>
<option value="TechSupport">Pathologist</option>
<option value="TechSupport">Payroll/ Compensation - Head/ Mgr</option>
<option value="TechSupport">Perfusionist</option>
<option value="TechSupport">Personal Assistant to CEO</option>
<option value="TechSupport">Pharmaceutical Research Scientist</option>
<option value="TechSupport">Pharmacist</option>
<option value="TechSupport">Phone Banking</option>
<option value="TechSupport">Photographer</option>
<option value="TechSupport">Physician</option>
<option value="TechSupport">Physiotherapist</option>
<option value="TechSupport">Pilot</option>
<option value="TechSupport">Plant Head/ Factory Manager</option>
<option value="TechSupport">POD Assistant</option>
<option value="TechSupport">POD Incharge</option>
<option value="TechSupport">Policy Administration</option>
<option value="TechSupport">Political Editor</option>
<option value="TechSupport">Political Writer</option>
<option value="TechSupport">Portfolio Manager</option>
<option value="TechSupport">Postdoc Position/Fellowship</option>
<option value="TechSupport">Practical Training/Internship</option>
<option value="TechSupport">Press Shop</option>
<option value="TechSupport">Principal/ Senior Correspondent</option>
<option value="TechSupport">Printing Technologist/ Manager</option>
<option value="TechSupport">Private Banker</option>
<option value="TechSupport">Private Practitioner/ Lawyer</option>
<option value="TechSupport">Process Manager/ Engineer</option>
<option value="TechSupport">Producer/ Production Manager</option>
<option value="TechSupport">Product Manager</option>
<option value="TechSupport">Production Manager/ Engineer</option>
<option value="TechSupport">Program Manager</option>
<option value="TechSupport">Project Finance - Head/ Mgr</option>
<option value="TechSupport">Project Finance Advisor</option>
<option value="TechSupport">Project Leader/ Project Manager</option>
<option value="TechSupport">Property Management</option>
<option value="TechSupport">Psychiatrist</option>
<option value="TechSupport">Psychologist</option>
<option value="TechSupport">Public Relations - Executive</option>
<option value="TechSupport">Public Relations - Manager</option>
<option value="TechSupport">Purchase - Head</option>
<option value="TechSupport">Purchase Manager</option>
<option value="TechSupport">Purchase Officer/ Co-ordinator/ Executive</option>
<option value="TechSupport">Quality Assurance - Manager</option>
<option value="TechSupport">Quality Assurance Executive</option>
<option value="TechSupport">Quality Assurance/ Control</option>
<option value="TechSupport">R & D - Head/ Manager</option>
<option value="TechSupport">Radiographer</option>
<option value="TechSupport">Radiologist</option>
<option value="TechSupport">Ratings Analyst</option>
<option value="TechSupport">Real Estate Assessor</option>
<option value="TechSupport">Real Estate Broker</option>
<option value="TechSupport">Receptionist/ Front Office Executive</option>
<option value="TechSupport">Recruitment - Head/ Mgr</option>
<option value="TechSupport">Regional Manager</option>
<option value="TechSupport">Regional Mgr/ Manager(Operations)</option>
<option value="TechSupport">Relationship Mgr/ Account Servicing</option>
<option value="TechSupport">Research Assistant</option>
<option value="TechSupport">Research Scientist</option>
<option value="TechSupport">Reservation Manager</option>
<option value="TechSupport">Resident Editor</option>
<option value="TechSupport">Restaurant Manager</option>
<option value="TechSupport">Retail Store Manager</option>
<option value="TechSupport">RF Installation & Administration Engineer</option>
<option value="TechSupport">RF Planning - Chief Engineer</option>
<option value="TechSupport">RF Planning Engineer</option>
<option value="TechSupport">Risk Manager</option>
<option value="TechSupport">Room Service Manager</option>
<option value="TechSupport">S/W Installation/ Maintenance Engg</option>
<option value="TechSupport">Safety Officer/ Engineer</option>
<option value="TechSupport">Sales Exec/ Sales Representative</option>
<option value="TechSupport">SBU Head /Profit Centre Head</option>
<option value="TechSupport">Script Writer</option>
<option value="TechSupport">Secretary</option>
<option value="TechSupport">Security Analyst</option>
<option value="TechSupport">Security Manager/ Officer</option>
<option value="TechSupport">Security Officer</option>
<option value="TechSupport">Service Manager/ Engineer</option>
<option value="TechSupport">Shares Services Executive</option>
<option value="TechSupport">Shift Engineer/ Supervisor</option>
<option value="TechSupport">Shift Manager</option>
<option value="TechSupport">Shift Supervisor</option>
<option value="TechSupport">Shift Supervisor</option>
<option value="TechSupport">Software Engineer/ Programmer</option>
<option value="TechSupport">Software Test Engineer</option>
<option value="TechSupport">Spares Manager/ Engineer</option>
<option value="TechSupport">Specialist - Medicine</option>
<option value="TechSupport">Steward/ Waiter</option>
<option value="TechSupport">Stock Broker</option>
<option value="TechSupport">Store Keeper/ Warehouse Assistant</option>
<option value="TechSupport">Supply Chain - Head</option>
<option value="TechSupport">Surgeon</option>
<option value="TechSupport">Switching - Chief Engineer</option>
<option value="TechSupport">Switching - Engineer</option>
<option value="TechSupport">System Administrator</option>
<option value="TechSupport">System Analyst/ Tech Architect</option>
<option value="TechSupport">System Engineer</option>
<option value="TechSupport">System Integrator</option>
<option value="TechSupport">System Security - Chief Engineer</option>
<option value="TechSupport">System Security - Engineer</option>
<option value="TechSupport">Taxation - Manager</option>
<option value="TechSupport">Teacher/ Professor</option>
<option value="TechSupport">Team Leader</option>
<option value="TechSupport">Team Leader/ Technical Leader</option>
<option value="TechSupport">Tech/ Engg - Manager</option>
<option value="TechSupport">Technical - Manager</option>
<option value="TechSupport">Technical Support Engineer</option>
<option value="TechSupport">Technical Support Executive</option>
<option value="TechSupport">Technical Writer</option>
<option value="TechSupport">Technician</option>
<option value="TechSupport">Technology Transfer Engineer</option>
<option value="TechSupport">Telesales/ Telemarketing Executive</option>
<option value="TechSupport">Tool Room</option>
<option value="TechSupport">Trade Finance/ Cash Mgmt Services - Head/ Mgr</option>
<option value="TechSupport">Trading</option>
<option value="TechSupport">Trading Advisor</option>
<option value="TechSupport">Traffic Clerk</option>
<option value="TechSupport">Traffic Clerk</option>
<option value="TechSupport">Trainee</option>
<option value="TechSupport">Trainee/ Management Trainee</option>
<option value="TechSupport">Trainer/ Faculty</option>
<option value="TechSupport">Training & Development - Head/ Mgr</option>
<option value="TechSupport">Training Manager</option>
<option value="TechSupport">Training Managers/ Trainers</option>
<option value="TechSupport">Transactions Processing Executive</option>
<option value="TechSupport">Transit Centre (Air) - Executive</option>
<option value="TechSupport">Transit Centre (Air) - Head/ Manager</option>
<option value="TechSupport">Transit Centre (Rail) - Executive</option>
<option value="TechSupport">Transit Centre (Rail) - Head/ Manager</option>
<option value="TechSupport">Transit Centre (Road) - Executive</option>
<option value="TechSupport">Transit Centre (Road) - Head/ Manager</option>
<option value="TechSupport">Transportation/ Shipping Supervisor</option>
<option value="TechSupport">Travel Agent/ Tour Operator</option>
<option value="TechSupport">Treasury Manager</option>
<option value="TechSupport">Treasury Marketing Fixed Income</option>
<option value="TechSupport">Treasury Marketing FOREX</option>
<option value="TechSupport">TV Anchor</option>
<option value="TechSupport">Typist</option>
<option value="TechSupport">Underwriter</option>
<option value="TechSupport">Vendor Development Manager</option>
<option value="TechSupport">Vendor Development Manager</option>
<option value="TechSupport">Visualiser</option>
<option value="TechSupport">VP - Client Servicing (Advertising)</option>
<option value="TechSupport">VP - Client/ Servicing (MR)</option>
<option value="TechSupport">VP - Creative/ Creative Director</option>
<option value="TechSupport">VP - Finance/ CFO</option>
<option value="TechSupport">VP - Media Buying</option>
<option value="TechSupport">VP - Media Planning & Strategy</option>
<option value="TechSupport">VP - Operations/ COO</option>
<option value="TechSupport">VP/ GM - Administration</option>
<option value="TechSupport">VP/ GM - Commercial</option>
<option value="TechSupport">VP/ GM - Engg/ Production</option>
<option value="TechSupport">VP/ GM - HR</option>
<option value="TechSupport">VP/ GM - Quality</option>
<option value="TechSupport">VP/ GM R&D (Pharma)</option>
<option value="TechSupport">VP/ GM/ Head - Marketing</option>
<option value="TechSupport">VP/ Head - Customer Service</option>
<option value="TechSupport">VP/ Head - Technology (Telecom/ ISP)</option>
<option value="TechSupport">Web Designer</option>
<option value="TechSupport">Web Master/ Web Site Manager</option>
<option value="TechSupport">Weld Shop</option>
<option value="TechSupport">Work Flow Analyst</option>
<option value="TechSupport">Work Flow Analyst</option>
<option value="Devloper"> Developer </option>
								 

				<option value="Devloper"> Devloper </option>
				<option value="Designer"> Designer </option>
				<option value="SEO"> SEO </option>
				<option value="TechSupport"> Tech-Support </option>
			</select>

		 <i class="fa fa-caret-down"></i>
		<span class="err" id="err_designation_0"> </span>
		</div>
	  </div>




	<div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="companyName_<?php echo $row_num; ?>" placeholder="Company Name" name="companyName[]" type="text" required>
			<span class="err" id="err_companyName_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="location_<?php echo $row_num; ?>" placeholder="Company Address" name="location[]" type="text" required>
			<span class="err" id="err_location_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
				<option value=""> Work-Full/Part </option>
				<?php 
					$rols = array("Full"=>"Full", "Part"=>"Part");
					foreach($rols as $key=>$val)
					{	?>
						<option value="<?php echo $key; ?>" <?php //echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
			<?php	}
				?>
			</select>
		 <i class="fa fa-caret-down"></i>
		 <span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="fromDate_<?php echo $row_num; ?>" placeholder="From Date (dd/mm/yyyy)" name="fromDate[]" type="text" required>
			<span class="err" id="err_fromDate_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="toDate_<?php echo $row_num; ?>" placeholder="To Date (dd/mm/yyyy)" name="toDate[]" type="text" required>	
			<span class="err" id="err_toDate_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>


	 


</div>

		



	
	
		
		
	</div>
<?php } ?>


<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
