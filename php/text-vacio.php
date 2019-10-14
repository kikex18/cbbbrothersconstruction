<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$page_name2="Home";}
elseif ($page_name=='about.php') {$page_name2="About";}
elseif ($page_name=='video.php') {$page_name2="Video";}
elseif ($page_name=='services.php') {$page_name2="Services";}
elseif ($page_name=='gallery.php') {$page_name2="Gallery";}
elseif ($page_name=='thank-you.php') {$page_name2="Thank You";}
elseif ($page_name=='reviews.php') {$page_name2="Reviews";}
elseif ($page_name=='before-after.php') {$page_name2="Before & After";}
elseif ($page_name=='404.php') {$page_name2="Not Found";}
elseif ($page_name=='contact.php') {$page_name2="Contact";}
//Info
//Info
	$EOMLink="http://www.eliteonlinemedia.com/";
	$Company=".";
	$Domain='';//No dejar pleca al final del dominio
	$Address='';

	//Para SEO
		$Locality='Locality';
		$Region='Region';
		$StreetAddress='StreetAddress';
	
	$PhoneName='Main: ';
	$Phone='';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$Phone2Name='Secondary: ';
	$Phone2='';
	$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r'), '', $Phone2);
	$Phone2Ref = "tel:".str_replace(str_split(' '), '', $Phone2Convert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Fax="";
	$Mail='';$MailRef="mailto:".$Mail;
	$Mail2='';$Mail2Ref="mailto:".$Mail2;
	$Services='';
	$Payment='';
	$PaymentMobile='';
	$Experience='';
	$Experience2="";
	$Schedule='';
	$ScheduleMobile='';
	$Schedule2='';
	$Schedule3='';		
	$Bilingual='';
	$Estimates='';
	$Satisfaction='';
	$Cover='';
	$Certification='';
	$License='';

 	$fonolive="#";
	$homeadvisor="#"; 
	$bbb="#"; $google_my_business="#"; $facebook="#"; $googleplus="#"; $linkedin="#"; $instagram="#"; $youtube="#";

	$Video='';

	$GoogleMap='';

//Phrases
		
	$Description="...";

 	$Phrase = array(
		'',
		'',
		'',
		'',
		'',
		'',
	);

//Home - Mission, etc.
	$Home = array(
		"",
		"",
		"",
		);

	$About = array(
		"",
		"",
		"",

	);


//Services
	$SN[1]="";
	$SD[1]="";
	$SN[2]="";
	$SD[2]="";
	$SN[3]="";
	$SD[3]="";
	$SN[4]="";
	$SD[4]="";
	$SN[5]="";
	$SD[5]="";
	$SN[6]="";
	$SD[6]="";
	$SN[7]="";
	$SD[7]="";

//Excerpt
	if (strlen($SD[1]) > 10){$ExSD[1]=get_words($SD[1], 18).' ...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=get_words($SD[2], 15).' ...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=get_words($SD[3], 15).' ...';};
	if (strlen($SD[4]) > 10){$ExSD[4]=get_words($SD[4], 29).' ...';};
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
	$Testimonial[1]= array("7 months ago", "Michael L.", "Edgar installed LED lights in our newly renovated backyard and front yard. Pictures paint a thousand words. Edgar was very professional and did an excellent job! He is very experienced and was very competitive and reasonable.<br>

		We highly suggest that you consider Edgar in installing lights in your house. You will be happy and pleased with the result without paying a super expensive price that would normally get from other reputable companies with more reviews.<br>

		Shop around no more, Edgar is the man!");
	$Testimonial[2]= array("11 months ago", "Sean T.", "Edgar did an amazing job on our landscaping and outdoor lighting project. He was very courteous, professional and paid extreme attention to detail. It is very refreshing to find people that take so much in the work they do. Highly recommended.");
	$Testimonial[3]= array("22-07-2017", "Client 3", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
	$Testimonial[4]= array("22-07-2017", "Client 4", "Orem ipsum dolor sit amet","Orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.");
//Landing Pages	
	$LN[1]=$SN[1];
	$LandingURL[1]="";
	$LandingExtract[1]="";
	$LD[1]=
	"
	<p><p>
	<p><p>
	<p><p>
	";

	$LN[2]=$SN[2];
	$LandingURL[2]="";
	$LandingExtract[2]="";
	$LD[2]=
	"
	<p><p>
	<p><p>
	<p><p>
	";

	$LN[3]=$SN[3];
	$LandingURL[3]="";
	$LandingExtract[3]="";
	$LD[3]=
	"
	<p></p>
	<p></p>
	<p></p>
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
