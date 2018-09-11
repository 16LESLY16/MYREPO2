<?php header('Access-Control-Allow-Origin: *'); ?>
<?php	
	// $this->session->unset_userdata('from');	
	// $this->session->unset_userdata('formula_name_clinic');	
	// $this->session->unset_userdata('SelBillOption');
	// $this->session->unset_userdata('practitioner_name');
	// $this->session->unset_userdata('stdnt_name');
	// $this->session->unset_userdata('for_student_name');
	// $this->session->unset_userdata('patient_first_name');
	// $this->session->unset_userdata('patient_last_name');
	// $this->session->unset_userdata('patient_dob');
	// $this->session->unset_userdata('formula_name_patient');
	// $this->session->unset_userdata('is_pregnant_nursing');
	// $this->session->unset_userdata('formula_name_student');
?>	
<!-- Full Page Image Background Carousel Header -->
    <header data-social-theme="light" id="myCarousel" class="carousel slide">      
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo  base_url(); ?>images/herbs_bg.jpg');"></div>									
				<div class="carousel-caption text_shadow chinese_text">						
					<h2 class="caption_items">Your Full Service Chinese Herbal Pharmacy</h2>                    
				</div>
				<div class="carousel-caption">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">							
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<img id="SpringWindDis" alt="SpringWind" src="<?php echo base_url() ?>/images/FatTurtleLogo.png" style="width:170px;"><br/>
								<h4 class="heading" style="color: #fff;">FAT TURTLE</h3>												
							</div>                                                            
							
							<?php if(!$this->session->userdata('user_id')){ ?>								
							  <a href="<?php echo site_url() ?>register"> <button type="submit" class="btn btn_submit">REGISTER</button></a>								
							<?php } ?>																		
					</div>						
				</div>					               
			</div>                                               
		</div>
    </header>   
	
	<script>
		function toggle_visibility(id) {
		   var e = document.getElementById(id);
		   if(e.style.display == 'block')
			  e.style.display = 'none';
		   else
			  e.style.display = 'block';
		}
	</script>
	
	<section data-social-theme="dark" id="" class="section">
        <div class="container-fluid bg_how_work">
            <div class="container height_full top_bt_padd mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">                     
                    <h4 class="heading">Welcome to the Family</h3>
                    <hr class="small-line purity_line">                       
                </div>                                
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">
					<center>
						<img id="SpringWind" src="<?php echo base_url() ?>/images/SpringWindDispensary_logo.png" alt="SpringWind"><br/>						
						<p class="sub_hd"><strong>Spring Wind Dispensary</strong></p>
						<p>Founded by Andrew Ellis over 20 years ago, Spring Wind Dispensary sources only 
							the highest quality herbs from around the globe. We are honored to welcome Spring Wind Dispensary into our family. <br/><br/>
							Set up a practitioner account online to access everything that both pharmacies provide.</p>
					</center>
                </div>                
            </div>
        </div>
    </section>
	
    <section data-social-theme="dark" id="section-about" class="section">
        <div class="container-fluid abt_banner extra_top_bt_padd">
            <div class="container mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">                    
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mob_padding">                         
						<h4 class="heading">Our Story</h4>
                        <hr class="small-line">                        
                        <p class="sub_hd"><strong>Created by acupuncturists for acupuncturists</strong></p>                        
                        <p>After years of searching for quality herbs and ordering from a multitude of 
				suppliers we knew there was a better way to get what we needed for our patients.
				We were finished with prescribing patent tea pills and formulas pre-made for the masses.
				Health is achieved through more than that. So a mission was born to create an herbal pharmacy 
				that uses only premium grade herbs, compounded to order in any format, for practitioners of Traditional Herbal Medicine.</p>                         
                     </div>                      
                </div>                 
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6">
						<p class="side_right">
							<strong>"We are here to help you compose safe and powerful formulas, as unique as your patients.”</strong>
                        </p>
                    </div>
                </div>                                   
            </div>
        </div>
    </section>
    
    <section data-social-theme="light" id="section-what" class="section">
        <div class="container-fluid bg_whatdo">
            <div class="container height_full mob_padding">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 height_full no_padding">
                    <div class="center_div">
                        <h4 class="heading">What We Do</h3>
                        <hr class="small-line what_we_line">
                        <p>														
							Fat Turtle is a full service Chinese Herbal Pharmacy that serves T.C.M. practitioners 
							throughout the U.S. and beyond. We offer custom fulfillment of herbal prescriptions in
							any format. Also stocked are a variety of patents, external liniments and a range of 
							pediatric and mother focused formulas. You can create custom blends or choose from tried
							and true classic formulas all made to order from the most premium herbs available. We offer 
							worldwide shipping and can send formulas to your office or directly to your patients.
						</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<section data-social-theme="dark" id="section-service" class="section">
        <div class="container-fluid bg_how_work extra_top_bt_padd">
            <div class="container height_full top_bt_padd mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">                     
                    <h4 class="heading">How It Works</h3>
                    <hr class="small-line purity_line">                        
                </div>                
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">             
                    <div class="owl-carousel3">
                        <div class="item">
							<div class="portfolio-carousel-item">
							<p><strong>1. Choose your formula's structure</strong><br/> Fresh is good. All of our formulas are compounded to order.</p>
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">
									<img id="slide-01" src="<?php echo base_url() ?>/images/slide-01.png" alt="slide-01" width="" height="" />
								</div>	
							</div>	
                        </div>
						
                        <div class="item">
                           <div class="portfolio-carousel-item">
								<p><strong>2. Select herbs and dosages</strong><br/>
											Choose from over 500 herbs to compose a custom or classic formula. Our built in safeguards will alert 
											you of allergies, contraindicated herbs and toxic dosages.</p>
								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">
									<img id="slide-02" src="<?php echo base_url() ?>/images/slide-02.png" alt="slide-02" width="" height="" />
                                </div>
							</div>	
                        </div>
                     
						<div class="item">
                            <div class="portfolio-carousel-item">
								<p><strong>3. Choose your shipping and billing preferences</strong><br/>
											1-2 day nationwide shipping starting at $5.99</p>
								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
									<img id="slide-03" src="<?php echo base_url() ?>/images/slide-03.png" alt="slide-03" width="" height="" />	
                                </div>
							</div> 
						</div>
                        
                        <div class="item">                        
							<div class="portfolio-carousel-item">
								<p><strong>4. Now its our turn! </strong> <br>We will get to work compounding your formula. 
											It will be from our door to yours in as little as 24 hours.</strong><br/></p>
								<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3">
									<img id="slide-04" src="<?php echo base_url() ?>/images/slide-04.png" alt="slide-04" width="" height="" />	
                                </div>
							</div>         
                        </div>                                                
                    </div>                  
                </div>                
            </div>
        </div>
    </section>
	
    <section data-social-theme="dark" id="section-purity" class="section">
        <div class="container-fluid purity_bg">
            <div class="container height_full mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 height_full no_padding">
                    <div class="center_div">
                        <h4 class="heading">Purity For Your Patients</h3>
                        <hr class="small-line purity_line">
                        <p>					
							When we say we test for pesticides, we mean all of them. And because new ones are being developed continuously,
							our list is ever growing. Our raw herbs are currently tested for over 380 pesticides and we are the only pharmacy in the U.S. 
							that has a N.D (non-detectible) pesticide limit for over 90% of our herbs. Nothing gets by us.
							We’ll simply trash it or send it back.<br/><br/>
							<p style="color: #0d7633;font-weight:400">Zero tolerance for pesticides means true purity for your patients.</p>							
						</p>
                    </div>
                </div>
            </div>
        </div>
    </section>       
    
    <section data-social-theme="light" id="section-safety" class="section">
        <div class="container-fluid bg_safety extra_top_bt_padd">           
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">                     
                <h4 class="heading">Our Safety Guarantee</h3>
                <hr class="small-line what_we_line">                       
			</div>                
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mob_padding">
                <div id="special-offers" class="owl-carousel4">
                    <div class="item">
						<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 testing">
                            <div class="col-md-10 col-lg-6 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-3">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
									<img id="sf_img1" src="<?php echo base_url() ?>/images/growing.png" class="img_icon">
                                    <h1>GROWING</h1>
                                    <p>- To meet your needs -</p>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center carosel_tsttop no_padding">                           
                                    <p>We pride ourselves in sourcing geo-authentic specimens with incredible potency. Our herbs come from GAP (good agricultural practices) certified farms and ethically wildcrafted sources. </p>                                                                         
                                </div>                                                                        
                            </div>
                        </div>
                    </div>
					
                    <div class="item">                       
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 testing">
                            <div class="col-md-10 col-lg-6 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-3">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                                    <img id="sf_img2" src="<?php echo base_url() ?>/images/testing.png" class="img_icon">
                                    <h1>Testing</h1>
                                    <p>- For everything under the sun -</p>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 carosel_tsttop no_padding">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-center">
                                        <p>Cell structure comparisons, T.L.C., and active ingredient matching ensure the correct species. Every herb, every time.</p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 bdr_left text-center">
                                        <p>Testing is done by 3rd party GMP certified facilities to ensure unbiased results. Incoming herbs are tested for over 380 pesticides.</p>
                                    </div>
                                </div>                                   
                            </div>
                        </div>                                                   
                    </div>
					
                    <div class="item">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 testing">
                            <div class="col-md-10 col-lg-6 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-3">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                                    <img id="sf_img3" src="<?php echo base_url() ?>/images/constrction.png" class="img_icon">
                                    <h1>CONSTRUCTING</h1>
                                    <p>- The greatest formulas -</p>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center carosel_tsttop no_padding">                           
                                    <p>With built in safeguards for pregnant and nursing mothers and alerts to prevent the use of toxic herb combinations and dangerous dosages you can rest assured you patients are receiving only the safest formulas. </p>                                                                         
                                </div>                                                                       
                            </div>
                        </div>
                    </div>                       
					
                    <div class="item">                    
						<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 testing">
                            <div class="col-md-10 col-lg-6 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-3">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                                    <img id="sf_img4" src="<?php echo base_url() ?>/images/strong.png" class="img_icon">
                                    <h1>STORING</h1>
                                    <p>- For maximum potency -</p>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center carosel_tsttop no_padding">                           
                                    <p>Storing conditions greatly affect an herbs active ingredients. Where most Pharmacies allow for 24-36 months of herb storage we keep ours for 12 months or less. Most are off the shelf in less than 2 months. </p>                                   
                                </div>                                 
                            </div>
                        </div>        
                    </div>      
                </div>
            </div> 
               
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center mob_padding">
				<h6>Freedom From....<br/>Pesticides, Aflotoxins, Aluminum Phosphate, Sulphur , Organophosphates/nitrates/chlorides, Heavy Metals, Microbacteria, Mold, Yeast, Pyrethroids.</h6>
            </div>                           
        </div>
    </section>
    
    
    <section data-social-theme="dark" id="section-products" class="section">
        <div class="container-fluid top_bt_padd">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center botm_padd no_padding">                     
                <h4 class="heading">Products</h3>
                <hr class="small-line purity_line">
                <p>every herb in any format, all made to order</p>                          
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 no_padding" id="product_card">               
				<div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 content shadow_ht mob_padding">
					<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no_padding shadow_box">
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
							<img id="prd_img1" src="<?php echo base_url() ?>/images/product-021.png" class="img-responsive img_dis"/><br/>
							<p><strong>Raw Herbs</strong></p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
							<p>-Lab-tested, Mother Nature approved-<br/><br/>
                                Ask us for certificates of analysis or pesticide lab work for any of our Spring Wind Herbs. You won’t hear crickets or see us crawling under our shell. We’ll even share the geo-coordinates of the farm they were grown on if you want to go see for yourself. Eco-vacay anyone?</p></div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 content shadow_ht mob_padding">
						<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no_padding shadow_box">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<img id="prd_img2" src="<?php echo base_url() ?>/images/product-03.png" class="img-responsive img_dis"/><br/>
								<p><strong>Vacuum Pouches</strong></p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<p>-No messy cleanup, just pure, portable pouches-<br/><br/>
									Decocted in pharmacy from our raw herbs. Volatile oils typically boiled off with at home cooking are retained in the airtight pressure unit while shells and minerals are fully extracted at the controlled temperature. Our BPA and BPS free single serving pouches are the gold standard for our fertility and oncology focused practitioners.</p>
							</div>
						</div>
					</div>               
					
					<div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 content shadow_ht mob_padding">
						<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no_padding shadow_box">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<img id="prd_img3" src="<?php echo base_url() ?>/images/product-01.png" class="img-responsive img_dis"/><br/>
								<p><strong>Granules/Capsules</strong></p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<p>-Not your run of the mill powders-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
									Pharmaceutical grade granules to dissolve in water or consume in fresh packed vegan capsules. A sophisticated extraction method yields superior product that come out remarkably like a decoction. No cornstarch or soy fillers. Stronger than “tea pills” commonly prescribed.
								</p>							
							</div>						
						</div>
					</div>
               
					<div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 content shadow_ht mob_padding">
						<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 no_padding shadow_box">
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<img id="prd_img4" src="<?php echo base_url() ?>/images/product-04.png" class="img-responsive img_dis"/><br/>
								<p><strong>Topicals/Poultices</strong></p>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
								<p>-Smear it on and let the healing begin-<br/><br/>
									Poultices or “Gao Yao” are a go to for skin conditions, circulatory problems, sprains, tired joints, sore tendons and bruised bones.
									Poultices are comprised of freshly ground raw herbs mixed into a paste and slathered onto a piece of gauze or muslin.
									Rest it on your skin, kick back and let the plaster tend to your ailment.</p>
							</div>
						</div>
					</div>	
					
					<center>
						<!--<img class="img-responsive img_dis products_img baby_fertility" src="<?php echo base_url() ?>/images/KPC-Logo.png" id="baby_fertility" alt="KPC-Logo"> -->
						<img class="img-responsive img_dis products_img logo-gfc" src="<?php echo base_url() ?>/images/logo-gfc.png" id="logo-gfc" alt="logo-gfc">
						<!--<img class="img-responsive img_dis products_img blue-poppy-herbs" src="<?php echo base_url() ?>/images/blue-poppy-herbs.jpg" id="blue-poppy-herbs" alt="blue-poppy-herbs">--><br/>
						<img class="img-responsive img_dis products_img health-concerns-logo-red" src="<?php echo base_url() ?>/images/health-concerns-logo-red.jpg" id="health-concerns-logo-red" alt="health-concerns-logo-red">
						<img class="img-responsive img_dis products_img SpringWind1" src="<?php echo base_url() ?>/images/springwind_headerlogo.jpg" id="SpringWind1" alt="SpringWind1">
						<img class="img-responsive img_dis products_img alchemica-logo" src="<?php echo base_url() ?>/images/alchemica-logo.png" id="alchemica-logo" alt="alchemica-logo">
					</center>
				</div>
		</div>
    </section>
    
    
    <section data-social-theme="light" id="section-faq" class="section">
        <div class="container-fluid bg_faq">
            <div class="container mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">                    
                            <h4 class="heading">Faq's</h4>
                            <hr class="small-line purity_line">
                          
                        
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no_padding">					
					<center><a onclick="toggle_visibility('expand');" style="text-decoration:none;"><p class="sub_hd"><strong style="color:#e86100;text-decoration:none;font-size: 22px;line-height: 1.8em;font-weight: 400;cursor:pointer">Click to Expand</strong></p></a><br></center>

					<div id="expand" style="display: none; margin-top: 1em;margin-bottom: 1em;">
							<p><span>How do I start ordering?</span><br>
									Simply register online or call us at 1(310)691-5226. After we verify your credentials we will set you up with an account you can start 
									building formulas using our online ordering system. Orders may also be placed by e-mail and fax. To ensure only accurate formulas reach 
									your patients, phone orders may only be used for simple re-orders, patent medicines and clinic supplies.</p>                          
							<!-- <p><span>Which Pharmacy do I register with?</span><br> -->
												<!-- When you register online you are automatically set up with a practitioner account that accesses everything both pharmacies  -->
												<!-- provide. To offer a more enhanced ordering experience and speedy shipping process, we will compound from either Fat Turtle or -->
												<!-- Spring Wind Dispensary depending on the formula type and the recipient’s address.</p> -->
						  
						  
							<!-- <p><span>Will there be any changes if I am currently registered with one of the pharmacies already?</span><br> -->
												<!-- Most likely you will simply choose a new login name and password and continue ordering as before. We will let you know via email or phone -->
												<!-- if any changes will apply to your account. If you have ordered from either pharmacy in the past certain new pricing changes may not apply  -->
												<!-- to your account.</p> -->
						  
							<p><span>Can I order formulas without being an L.Ac., N.D. or herbalist?</span><br>
											Because we use pharmaceutical grade herbs, only licensed acupuncturists, naturopathic doctors, herbalists and students currently enrolled to
											become one of the above licensed practitioners can compose and order formula with us.</p>
						  
						  
						  
							<p><span>What if I need help constructing a formula?</span><br>
											We're here to help! We have licensed acupuncturists on staff to assist you any way we can. If you need assistance with a difficult case 
											simply call or e-mail us. When logged into your practitioner account, you can also send us instant messages throughout the formula building
											process. We will walk you through it.</p>
						  
						  
							<p><span>What if I don’t feel comfortable constructing formulas from scratch?</span><br>
											- Our software's built in safeguards will immediately alert you when you enter known toxic herb combinations, dangerous dosages or pregnant/nursing contraindications.<br>
											- Simply transcribe a tried and true Classic Formula and we will compound it to order.<br>
											- Consult with our in house licensed acupuncturists who are here to assist you in creating safe and effective formulas.
											</p>
						  
						  
							<p><span>Where do your herbs come from?</span><br>
											Our raw herbs come from Spring Wind Herbs. Our primary granule supplier is KPC. We pride ourselves on sourcing from suppliers who 
											value stringent testing and support indigenous agriculture practices.</p>
						  
						  
							<p><span>What is your return policy?</span><br>
											Because every formula is made to order and to our practitioner’s specifications, we do not accept returns.</p>
						  
							<p><span>Can I cancel my order?</span><br>
											Because we get to work compounding as soon as you place your order, if you need to cancel a formula please give us a call so we can stop 
											the process. You will only be responsible for the cost of materials used up to the point of cancellation. If we have already shipped or 
											placed your order for pickup, you will be responsible for the cost in full. </p>
					</div>               
               
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section data-social-theme="dark" id="section-contact" class="section">
        <div class="container-fluid bg_contact">
            <div class="container mob_padding">
               
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                    <h4 class="heading">Excited yet?</h3>
                            <hr class="small-line purity_line">
               </div>
               
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                <p>Get to know our intuitive online ordering system<br/>
and receive 20% off your first order.</p>
                </div>
                 <?php if(!$this->session->userdata('user_id')){ ?>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                    <a href="<?php echo site_url() ?>register">   <button type="submit" class="btn contact_reg">REGISTER</button></a>
                </div>
                <?php } ?>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                <p>Every herb in any format all made to order.<br/>
Start asking more from your pharmacy.</p>
                </div>
                
            </div>
        </div>
    </section>
    
    <section data-social-theme="dark" id="section-contact-form" class="section">
        <div class="container-fluid bg_contact_form">
            <div class="container mob_padding">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 no_padding">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 mob_padding">
                        <p class="stay_connect">Stay Connected</p>
                        <img id="turtle" src="<?php echo base_url(); ?>/images/turtle.png" class="turtle">
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 mob_padding">
						<form id="newsletter" method="post" action="" enctype="multipart/form-data">
                     <div class="input-group news-pos">
                        <input class="form-control form_contct" style="border-bottom: 1px solid #cbc6a9;" name="email" id="email" type="text" value="<?php echo set_value('email'); ?>" placeholder="Email Address">
						<span class="form-input-info" style="color:#FF0000; position: absolute; right: 125px; bottom: 10px;"></span>
                      <span class="input-group-btn">						  						  						  
						  <button type="submit" class="btn sub_form butEmail" id="but2">SUBMIT</button>
                      </span>
                    </div>
							</form>
                    <p class="valid_msg">Enter your email and get the latest product info, updates, special offers and much more.<br/>
										* Don’t worry we think spam is annoying too. Your information is safe with us.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    <section data-social-theme="dark" id="section-in-touch">
        <div class="container-fluid bg_touch">
            <div class="container mob_padding">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center no_padding">
                    <h4 class="heading">Have a question?</h3>
                            <hr class="small-line purity_line">
               </div>
            </div>
        </div>
    </section>
    
    <section data-social-theme="dark" id="section-form" style="margin-bottom: 4em;">
        <div class="container-fluid bg_touch">
            <div class="container mob_padding">
				
						
				<form id="getintouch" action="" method="post" enctype="multipart/form-data">
<!--			<form id="" method="post" action="<?php echo site_url() ?>/home/contact_us" enctype="multipart/form-data">-->
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 mob_padding">
                    <div class="form-group form_top">
                        <label>Name *</label>
                            <input type="text" class="form-control form_contct" id="name1"  name="name1" value="<?php echo set_value('name1'); ?>" placeholder="Nicholas Barlow" <?php if (form_error('name1')) {?> style="border:1px solid #ff0000" <?php } ?> onkeypress="return alpha(event)">
<!--						<span style="color:#FF0000"><?php echo form_error('name1'); ?></span>-->
                      </div>
                      
                      <div class="form-group form_top">
                        <label>Phone *</label>
                            <input type="text" pattern="\d*" class="form-control form_contct" id="mobile1" name="mobile1" value="<?php echo set_value('mobile1'); ?>" placeholder="(310)691-5226" onkeypress="return isNumber(event)" <?php if (form_error('mobile1')) {?> style="border:1px solid #ff0000" <?php } ?>>
<!--						  <span style="color:#FF0000"><?php echo form_error('mobile1'); ?></span>-->
                      </div>
                      
                      <div class="form-group form_top">
                        <label>Email *</label>
                            <input type="text" class="form-control form_contct" id="email1" name="email1" value="<?php echo set_value('email1'); ?>" placeholder="info@fatturtleherbs.com" <?php if (form_error('email1')) {?> style="border:1px solid #ff0000" <?php } ?>>
<!--						  <span style="color:#FF0000"><?php echo form_error('email1'); ?></span>-->
                      </div>
                      
                       <div class="form-group form_top">
                        <label>Message *</label>
                           
                     <textarea rows="3" cols="50" class="form-control form_contct" id="message1" name="message1" value="<?php echo set_value('message1'); ?>" placeholder="Hi!" <?php if (form_error('message1')) {?> style="border:1px solid #ff0000" <?php } ?>></textarea>
<!--						   <span style="color:#FF0000"><?php echo form_error('message1'); ?></span>-->
                      </div>
                      
<!--                      <button class="btn sub_form contact_sub" id="but2" type="submit">SUBMIT</button>-->
					<button type="submit" class="btn sub_form contact_sub" id="but2">SUBMIT</button>
                      
                </div>
					 </form>
            </div>
        </div>
    </section>
    
    
    <section data-social-theme="light" id="section-address">
        <div class="container-fluid bg_address">
            <div class="container mob_padding">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mob_padding">
                     <div class="col-md-12 col-sm-12 col-xs-12 col-sm-12 first_address text-center mob_padding">
                         <img src="<?php echo  base_url(); ?>images/fat-turtle-logo-wh.png">
                         <h5>Fat Turtle</h5>
						 <a href="https://www.google.co.in/maps/place/Fat+Turtle+Herb+Co/@34.0927116,-118.3696953,811m/data=!3m1!1e3!4m6!1m3!3m2!1s0x0:0xfbcc657be3cec1f2!2sFat+Turtle+Herb+Co!3m1!1s0x0:0xfbcc657be3cec1f2" style="text-decoration:underline;color:#fff;" target="blank">Fat Turtle Herbal Pharmacy</a><br/>
						 1483 Havenhurst Drive<br/>
						 West Hollywood, C.A. 90046<br/>
                         inquiries: <a href="mailto:info@fatturtleherbs.com?Subject=FatTurtle%20:%20Contact" style="text-decoration:underline;color:#fff;" target="_top">info@fatturtleherbs.com</a><br/>						 
                         ordering: <a href="mailto:orders@fatturtleherbs.com?Subject=FatTurtle%20:%20Contact" style="text-decoration:underline;color:#fff;" target="_top">orders@fatturtleherbs.com</a><br/>
                         T: 310.691.5226<br/>
                         F: 310.691.8073<br/>
						 <a href="https://www.facebook.com/fatturtle/" target="_blank"><img src="<?php echo  base_url(); ?>images/facebook.png" style="width: 30px;"></a>

                     </div>
                     
                     <!-- <div class="col-md-6 col-sm-6 col-xs-12 col-sm-6 text-center mob_padding"> -->
                         <!-- <img src="<?php echo  base_url(); ?>images/Spring-Wind-White-bottom.png"> -->
                         <!-- <h5>Spring Wind Dispensary</h5> -->
						 <!-- <a href="https://www.google.co.in/maps/place/Spring+Wind+Dispensary+Chinese+Herbs/@37.7850648,-122.4451784,515m/data=!3m1!1e3!4m2!3m1!1s0x0:0xfcdfd85e4711e408" style="text-decoration:underline;color:#fff;" target="blank">Spring Wind Dispensary</a><br/> -->
						 <!-- 2701 Sutter St<br/> -->
						 <!-- San Francisco, C.A. 94115<br/> -->
                         <!-- <a href="mailto:orders@springwinddispensary.com?Subject=SpringWindDispensary%20:%20Contact" style="text-decoration:underline;color:#fff;" target="_top">orders@springwinddispensary.com</a><br/> -->
                         <!-- T: 415.921.9990<br/> -->
                         <!-- F: 415.921.9991<br/> -->
                         <!-- <a href="https://www.facebook.com/springwinddispensary/" target="_blank"><img src="<?php echo  base_url(); ?>images/facebook.png" style="width: 30px;"></a> -->
                     <!-- </div> -->
                     
                </div>
            </div>
        </div>
    </section>
            
 


 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog model_center" role="document">
    <div class="modal-content">
      
      <div class="modal-body cards">
       
         <div class="contact-form">
         <div class="modal-header">
        <button type="button" onClick="enableNavbar();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo  base_url(); ?>images/close.png"></span></button>
        <h2 class="modal-title" id="myModalLabel">Forgot Password?</h2> 
      </div>
		<a href="#" class="close"><i class="fa fa-times"></i></a>
		<form id="forgot_pass" method="post" action="">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
       
           
            <div class="form-group form_top">
				<p class="invalidmail"></p>
                        
                            <input type="text" name="forg_email" id="forg_email" class="form-control form_contct">
                            <label class="pop_up"><span class="label-content">email *</span></label>
				
                      </div>
                      
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center">
            <button type="submit" class="btn contact_reg" id="forgSub">SUBMIT</button>
<!--			<input type="submit" class="btn contact_reg" id="forg" value="SUBMIT" />-->
			
            <p class="create contact">Back to LOGIN</p>
          </div>
                      
        </div>
		</form>
	</div>

        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
           
           
               <div class="modal-header">
        <button type="button" id="disableBtn" onClick="enableNavbar();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo  base_url(); ?>images/close.png"></span></button>
        <h2 class="modal-title myModalSignIn" id="myModalLabel">SIGN IN</h2>
      </div>
           <form id="login" method="post" action="">
			   <p class="invalidlogin" id="invalidloader"></p>
			   
            <div class="form-group form_top" id="userloader">
                        
                            <input type="text" name="username" id="username" class="form-control form_contct" value="<?php echo set_value('username'); ?>" placeholder="">
                            <label class="pop_up"><span class="label-content">email / username</span></label>
							<!--<span style="color:#FF0000"><?php echo form_error('username'); ?></span>-->	
            </div>
                      
              
					<div class="modalLoader" id="modalLoader"></div>
				
				
            <div class="form-group form_top"  id="passloader">
                        
                            <input name="password" id="password" type="password" class="form-control form_contct" placeholder="">
                            <label class="pop_up">password *</label>
							<!--<span style="color:#FF0000"><?php echo form_error('password'); ?></span>-->	
                      </div>
                      
        </div>
       <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center" id="hiddenbtn1">
		   <input type="submit" class="btn contact_reg" id="submit" value="SIGN IN" />
<!--            <button type="button" class="btn contact_reg">SIGN IN</button>-->
          </div></form>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center" id="hiddenbtn2">
				<p class="create"><a id="newAccount" href="<?php echo site_url() ?>register">New? Create an account.</a></p>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 text-center"  id="hiddenbtn3">
				<p class="create contact" id="forgotPass" onclick="GetEnable()">Forgot Password?</p>
        
           </div>
      </div>
     
    </div>
  </div>
</div>    

<script>
	function GetEnable() {
		document.getElementById("forgSub").disabled = false;	
	}
	
	function enableNavbar() {
		$('.navbar').css('pointer-events', 'auto');	
		$("#submit").prop("disabled", false);
		$(".myModalSignIn").html("SIGN IN");
				$("#newAccount").css('pointer-events', 'auto');
				$("#password").prop("disabled", false);
				$("#username").prop("disabled", false);
				$("#forgotPass").css('pointer-events', 'auto');
	}
	
	document.getElementById("modalLoader").style.display = "none";
</script>

