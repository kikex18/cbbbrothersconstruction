<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About";}
elseif ($page_name=='video.php') {$page_name2="Video";}
elseif ($page_name=='services.php') {$page_name2="Services";}
elseif ($page_name=='blog.php') {$page_name2="Blog";}
elseif ($page_name=='gallery.php') {$page_name2="Gallery";}
elseif ($page_name=='thank-you.php') {$page_name2="Thank You";}
elseif ($page_name=='reviews.php') {$page_name2="Reviews";}
elseif ($page_name=='before-after.php') {$page_name2="Before & After";}
elseif ($page_name=='404.php') {$page_name2="Not Found";}
elseif ($page_name=='contact.php') {$page_name2="Contact";}
//Info
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company="CBB Brothers Complete Construction";
	$Domain='www.cbbbrothersconstruction.com/';//No dejar pleca al final del dominio
	$Address='Missouri City, Texas';

	//Para SEO
		$Locality='Locality';
		$Region='Region';
		$StreetAddress='StreetAddress';
	
	$PhoneName='Main: ';
	$Phone='(832) 898-0679';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2Name='Secondary: ';
	$Phone2='';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Fax="";
	$Mail='cbbbrothers.co@gmail.com';$MailRef="mailto:".$Mail;
	$Mail2='';$Mail2Ref="mailto:".$Mail2;
	$Services='Residential Services';
	$Payment='We Accept Cash, Checks, Credit Cards, PayPal, and Bank Deposits';
	$PaymentMobile='We Accept Cash, Checks, CC,<br> PayPal, and Bank Deposits';
	$Experience='13 Years of Experience';
	$Experience2="";
	$Schedule='Available 24/7';
	$ScheduleMobile='Available 24/7';
	$Schedule2='';
	$Schedule3='';		
	$Bilingual='We Are Bilingual';
	$Estimates='Free Estimates Are Available';
	$Satisfaction='';
	$Cover='We Cover Missouri City, Bellaire, Fresno, Richmond, Pearland, Manvel, Houston, Sugar Land, and Katy';
	$Certification='HomeAdvisor Certified';
	$License='We Are Licensed and Insured';

 	$fonolive="#";
	$homeadvisor="#"; 
	$bbb="#"; $google_my_business="#"; $facebook="#"; $googleplus="#"; $linkedin="#"; $instagram="#"; $youtube="#";

	$Video='';

	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222136.3573473478!2d-95.67670491527889!3d29.54897177128346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640e1ec4548c89d%3A0xb8c5da032c46!2sMissouri%20City%2C%20TX%2C%20USA!5e0!3m2!1sen!2sni!4v1570043574536!5m2!1sen!2sni" class="googlemap" allowfullscreen=""></iframe>';

//Phrases
		
	$Description="...";

 	$Phrase = array(
		'Building a Better Houston One Home at a Time',
		'If You Dream It, We Can Build It',
		'Work with Our Experienced Contractors',
		'Adding Quality to Your Home',
		'Exceptional Work ',
		'',
	);

//Home - Mission, etc.
	$Home = array(
		"Are you looking for a stress-free remodeling experience? Then it’s time you turn to the professionals at CBB Brothers Complete Construction! When you work with us, you’ll see the amount of value that we can bring to your home while saving time and money! You can count on our team to handle your project no matter the size!",
		"From the initial planning stage to the finished product, our team will make sure to work according to your high standards of quality. As a licensed and insured team, you can expect us to work professionally and to meet your different needs. We don’t settle for anything that is not above-average, so be sure to be amazed by our results!",
		"Let CBB Brothers Complete Construction help you bring your home to the next level! You can count on our team for home remodeling, painting services, drywall services, electrical services, and plumbing services. Get in touch with us today to schedule an appointment or to request a free estimate. ",
		);

	$About = array(
		"CBB Brothers Complete Construction has been exceeding homeowners’ expectations for more than 13 years now. Established in Missouri, Texas, we have been able to gain the trust of many homeowners in the area due to our detailed and efficient work. Throughout the years, we have maintained a reputation for delivering exceptional results, and we wish to continue doing that. ",
		"Most of our work has come from repeat customers that were completely satisfied with the job we provided. We keep a professional work ethic so that our customers feel confident when working with us. You’ll see that our great attention to detail is reflected in every finished product. ",
		"Our mission is to create great living spaces while offering excellent customer service. When we are undertaking any remodeling project, we ensure to abide by the values that define us as a company which are responsibility, respect, honesty, and professionalism. No matter what your project might be, be sure to turn to our experts now!",
	);

//Services
	$SN[1]="Home Remodeling";
	$SD[1]="When it comes to remodeling your home, you should have an expert by your side to assist you every step of the way. With help from CBB Brothers Complete Construction, you can have the home of your dreams in no time! Our remodeling services include kitchen and bathroom remodeling, cabinet services, and much more! Whatever your visions are, you can expect our team to make them a reality. Get in touch with us now to schedule an appointment or to request a free estimate. ";
	$SN[2]="Painting Services";
	$SD[2]="No matter if it is for your exterior walls or the kitchen, a fresh coat of paint can bring your living space to life! Whether you want vibrant and vivid colors or some dark shades, you can count on our team for long-lasting and picture-perfect solutions. CBB Brothers Complete Construction offers both interior and exterior painting services as well as pressure washing to ensure that your home always looks its best. ";
	$SN[3]="Drywall Services";
	$SD[3]="For precise drywall installation and repair, you must turn to CBB Brothers Complete Construction right away! Having your drywall professionally installed is important if you want your surfaces to look smooth and perfect. You can count on our team to bring you the highest quality drywall solutions that will have all your walls in top condition all the time. Our team is also available for wallpaper removal so that your walls are ready for new wallpaper or a fresh coat of paint. ";
	$SN[4]="Electrical Services";
	$SD[4]="It doesn’t matter if it is a small renovation for your bedroom or a full remodeling project; you will need an expert to help with the electrical system. Our team at CBB Brothers Complete Construction can help with your various electrical needs such as upgrading the circuit panel or repairing some outlets. You can count on us to handle your needs with proper care as we have the experience and tools needed. ";
	$SN[5]="Plumbing Services";
	$SD[5]="If you feel like plumbing problems always come up at the wrong time and you don’t know how to deal with them, then it’s time you turn to CBB Brothers Complete Construction for help. From unclogging your toilet to cleaning your dirty drains, you can count on our team to deal with your different plumbing needs. With our help, you will live comfortably knowing that your plumbing system is working correctly. ";
	$SN[6]="";
	$SD[6]="";
	$SN[7]="";
	$SD[7]="";


//Excerpt
	if (strlen($SD[1]) > 10){$ExSD[1]=get_words($SD[1], 19).' ...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=get_words($SD[2], 22).' ...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=get_words($SD[3], 15).' ...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=get_words($SD[4], 21).' ...';};
	if (strlen($SD[5]) > 10){$ExSD[5]=get_words($SD[5], 23).' ...';};
	if (strlen($SD[6]) > 10){$ExSD[6]=get_words($SD[6], 17).' ...';};

	function get_words($sentence, $count = 26) {
	  	preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
	  	return $matches[0];
	}
//Testimonials
	$Date='<i class="fa fa-calendar t_red-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_green-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_red-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_green-3"></i>&nbsp;';

	$Testimonial[1]= array("a month ago", "Laura Cowan", "Had a very good experience and found this company very accommodating and respectful of your property. They used there experience to do an excellent job with making your property better. I would certainly use them again.");
	$Testimonial[2]= array("2 months ago", "Sri", "My husband hired Daniel for paint and tile job. Customer satisfaction is the priority for Daniel and Ramon. They did a fantastic job. We highly recommend them !!!");
	$Testimonial[3]= array("3 months ago", "Harry Paek ", "I had recurring problem with the flat roof deck ever since I purchased the house 5 years ago.  I had water dripping from the ceiling below the roof deck and I had it fixed from two different roofers in 3 years. It was leaking again and the roofers did not answer my warranty call.  I broke open the ceiling and found a rotten wood on deck floor. The rain water was making a big puddle on the roof deck and the water was penetrating the TPO membrane and rotting the lowest part of the wood deck.<br> Daniel from CBB suggested to make the slight slope deck roof on top of old deck roof so the rain water would escape rather than make the puddle. Boy, I am glad I solve the source of the problem. Ordinary roofer would not have done this structure change. CBB did and they did the nice job. The service was awesome and the price was reasonable. I recommend CBB to anyone for the good job they have done to my house. I am very satisfied with CBB.");
	$Testimonial[4]= array("5 months ago ", "James A Jackson ", "This is a very competent and reliable business that does an excellent job at reasonable prices. I would definitely recommend them for any project.");
	$Testimonial[5]= array("7 months ago", "Mrs. P. LPatton", "“ I write this letter of endorsement for the CBB BROTHERS CONSTRUCTION COMPANY. I have employed the above company to undertake my projects for the last 2 years because of the superior quality of the work produced and completed.<br> Daniel, may I personally thank you and your team for the recent work completed on my projects on 02/23/2019. All areas were cordoned off with a barrier and left tidy at all times. The work was carried out professionally and promptly from day one right through completion.<br> The construction process was explained to me  in detail before and during each phase by Daniel Edwards (owner). He and his team staff answered my many questions satisfactorily and professionally. Additionally,  Daniel effectively communicated with me and his team several times every day.Daniel and his team were always courteous, patient and very respectful.<br> Also, Daniel provided me with VIP white glove services -free of charge. He truly values me as a customer. I am a very satisfied customer and I highly recommend the CBB BROTHERS CONSTRUCTION COMPANY. I have no hesitation in engaging this company in future projects.”");
	$Testimonial[6]= array("8 months ago", "Richard", "I bought a new home and wanted the kitchen updated and new paint throughout the house.   I did my homework reading countless reviews on remodeling companies and interviewed 5 different companies before deciding on CBB.  They performed exceptionally!   Very high quality and detailed work at a very competitive price.  They resurfaced my cabinets (kept cabinet boxes, replaced fronts with new cabinet doors and soft close hardware) painted them, even moved one of the existing cabinets up to give it a high end offset appearance.  They absolutely look new - at a fraction of the cost.  They also changed the height of the existing island and put in a beautiful new granite counter top as well as added hanging lights above the countertop.  As if that wasn’t enough they reconfigured my fireplace in the family room (raised it off the ground) and built a new mantle along with changing out the tile surround.  As they worked and continued to prove the quality of their work, I would throw other things at them that I wanted done.  This is where their flexibility shined.  Some of the additional work I ask them to do would have been a nightmare for other companies, but Daniel and his team were very patient, flexible, and fluid with me.  I cant speak highly enough about how satisfied I am and would recommend them without reservation.");
	$Testimonial[7]= array("2 years ago", "Shawna", "CBB Brothers painted the entire interior of our home - walls, ceilings, closets, and kitchen cabinets.  3600 sq ft.  CBB Brothers was in our home for 18 days.  Daniel was fantastic at communicating with us the timetable and what rooms were next.  He visited almost daily.  The crew was very professional and considerate of being in our home.  Given the large nature of the project, we were impressed at the quality of the work.  When it was time for the final walk through, there were only minor touch ups to be done.  We would not hesitate to call CBB Brothers again.   We highly recommend them!");
	$Testimonial[8]= array("Sabrina ", "3 years ago", "Great Company for all your construction needs!");



//Landing Pages	
	$LN[1]="Painting Services";
	$LandingURL[1]="painting-services";
	$LandingExtract[1]="No matter if it is for your exterior walls or the kitchen, a fresh coat of paint can bring your living space to life! Whether you want vibrant and vivid colors or some dark shades, you can count on our team for long-lasting and picture-perfect solutions. CBB Brothers Complete Construction offers both interior and exterior painting services to ensure that your home always looks its best. ";
	$LD[1]=
	"
	<p>No matter if it is for your exterior walls or the kitchen, a fresh coat of paint can bring your living space to life! Whether you want vibrant and vivid colors or some dark shades, you can count on our team for long-lasting and picture-perfect solutions. CBB Brothers Complete Construction offers both interior and exterior painting services to ensure that your home always looks its best. <p>
	<p>Giving your home’s exterior a fresh coat of paint helps in increasing its curb appeal. Due to the regular wear and tear and the harsh elements of nature, the paint on your exterior walls can start to come off. For this reason, you must hire an expert to apply a new coat of paint professionally. <p>
	<p>An interior paint job is also important if you want to give your living space an updated look. It could be that the paint on your walls has started to fade or you simply want to give your home a new appearance. Whatever your painting needs might be, you can count on CBB Brothers Complete Construction to get the job done. <p>
	";

	$LN[2]="Drywall Services";
	$LandingURL[2]="drywall-services";
	$LandingExtract[2]="For precise drywall installation and repair, you must turn to CBB Brothers Complete Construction right away! Having your drywall professionally installed is important if you want your surfaces to look smooth and perfect. You can count on our team to bring you the highest quality drywall solutions that will have all your walls in top condition all the time. ";
	$LD[2]=
	"
	<p>For precise drywall installation and repair, you must turn to CBB Brothers Complete Construction right away! Having your drywall professionally installed is important if you want your surfaces to look smooth and perfect. You can count on our team to bring you the highest quality drywall solutions that will have all your walls in top condition all the time. <p>
	<p>Before you apply a coat of paint to your walls, you must ensure that the surfaces are smooth and seamless so that they look good. For this reason, it is important that you have our experts install the drywall. We take the steps needed to ensure that the installation process is a complete success. <p>
	<p>Over time, your drywall might crack because of settling, have holes from hanging frames, or get damaged because of water infiltration. If you’ve noticed that your drywall is unsightly, then you can turn to our experts to help you repair it! We will have it looking as good as it did when you first installed it! Trust CBB Brothers Complete Construction for all your drywall needs! <p>
	";

	$LN[3]="Kitchen and Bathroom Remodeling";
	$LandingURL[3]="kitchen-and-bathroom-remodeling";
	$LandingExtract[3]="When it comes to remodeling your home, you should have an expert by your side to assist you every step of the way. With help from CBB Brothers Complete Construction, you can have the home of your dreams in no time! Our remodeling services include kitchen remodeling and bathroom remodeling. ";
	$LD[3]=
	"
	<p>When it comes to remodeling your home, you should have an expert by your side to assist you every step of the way. With help from CBB Brothers Complete Construction, you can have the home of your dreams in no time! Our remodeling services include kitchen remodeling and bathroom remodeling. </p>
	<p>Your kitchen is considered to be the heart of your home, and for this reason, it should reflect your unique style and meet your needs. Whether you want new cabinets or countertops, count on our experts to get the job done. We can also assist you in making your bathroom a relaxing and functional space. From changing the shower tiles to installing a new mirror, we will work hard to bring all your ideas to life. </p>
	<p>Whatever your visions are, you can expect our team to make them a reality. With CBB Brothers Complete Construction, your kitchen and bathroom will be a reflection of your style! Get in touch with us now to schedule an appointment or to request a free estimate. </p>
	";

//Services Landing Page List
	$ListServices= array($SN[1],$SN[2],$SN[3],$SN[4],$SN[5],$SN[6]);
//Blog
	$BlogEntryT[1]="Blog Entry Title 1";
	$BlogEntryD[1]= array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[1]="1/Jan/2016";
	$BlogAuthor[1]="Administrator";

	$BlogEntryT[2]="Blog Entry Title 2";
	$BlogEntryD[2]=array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[2]="2/Jan/2016";
	$BlogAuthor[2]="Administrator";

	$BlogEntryT[3]="Blog Entry Title 3";
	$BlogEntryD[3]=array(
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>",
	"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	");
	$BlogDate[3]="3/Jan/2016";
	$BlogAuthor[3]="Administrator";


include 'php/landingurl.php';
//BlogEcxerpt
	//if (strlen($BlogEntryD[1]) > 1){$ExBlogEntryD[1]= ucwords(substr($BlogEntryD[1], 3));};

	// if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
	// if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
?>
