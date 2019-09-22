
			defaultNav  = 0;
			flagStop = 0;
			var indexx = 0;
			updates = new Array();
			updates[0] = '<div style="line-spacing:2px;text-align:justify;" ><strong> Hearty Congratulations to BTech Rank Holders</strong><br /><br />MeeraLakshmi (1st Rank),<br /><br />Nickey Lawrence(2nd Rank)<br /><br /> of Computer Science and  Engineering Department.</div>';
			updates[1] ='<span style="line-height: 19px;"><strong>Placement Drive 2011</strong> <br />Oracle<br />AMI<br />Infosys<br />Wipro<br />Accenture<br />HCL <br /> 305 students from RIT are placed till now.</span>';
			updates[2] ='<br /> Dinesh R got selection in <strong>IES-2011</strong> <br /><br />  Sooraj Mon got selection in <strong>IAS-2011</strong> <br /><br /><br /> <span style="line-height: 19px;">Both the students have hade RITians proud. We would like to wish them all success in thier future ventures.<br /> </span>';
			function refreshDiv(targetDiv)
			{
				if(clicked != 'home')
				return 0;
					//if(flagStop == 1)
					//return 0;
					if(indexx >= updates.length)
					indexx = 0;
				//for(var indexx=0;indexx<updates.length;++indexx)
				$.$(targetDiv).$echo("<div style = 'background:#ffffff;padding:5%;margin-left:auto;margin-right:auto;border:solid 1px #dddddd;border-radius:2px;margin-top:1%;width:85%;height:85% !important;'>"+updates[indexx++]+"</div>","clear");
				
				$delay('refreshDiv("'+targetDiv+'")',4);
				
				
				
			}

var clicked = "home" ;
var clickedPrev = 'home';
function init()
{
	/*if(typeof loc == 'undefined')
	{
		loc = window.location.href;
		loc = loc.split('/');
		loc = loc[loc.length -1];*/
	//	$.$('page').$echo("<img src = './images/lodaing.gif' />");
		var req;
		req = new  $request();
	//$.$('hidden').$css('display:block ');
	if(clicked == 'home')
	{
		 req.$url = './home.html';
		 req.$sendGet('h=1');
		 req.$complete = function()
		 {
			$.$('page').$echo(req.$reply,'clear');
			refreshDiv("news");
			$.$("tabHead").$echo(tabHead,"clear");
			slider("tinyGallery","tinyGalleryImages");
			$.$("desr").$echo(tinyDesr,"clear");
			$.$("descrip").$echo(tinyHead,"clear");
			//$.$('hidden').$css('display:none !important;');
		}
		
	}
	if(clicked == 'g')
	{
		
		 req.$url = './gallery.html';
		 req.$sendGet('h=1');
		 req.$complete = function()
		 {
			//$.$css('file://./gallery/css/lightbox.css');
			//$.$('hidden').$css('display:none !important;');
			$.$('page').$echo(req.$reply,'clear');
		}
	}
	else if(clicked == 'c')
	{
			req.$url = './contactus.html';
		 req.$sendGet('h=1');
		 req.$complete = function()
		 {
			//$.$('hidden').$css('display:none !important;');
			$.$('page').$echo(req.$reply,'clear');
		}
	}
	else if(clicked.charAt(0)=='f' || clicked.charAt(0)=='a')
	{
		
		clicked = clicked.slice(1);
		if(clickedPrev.charAt(0) != clicked.charAt(0))
		{	if(clicked.charAt(0)=='a')
			req.$url = './activities.html';
			else
			req.$url = './facility.html';
			req.$sendGet('h=1');
			 req.clicked = clicked;
			 clickedPrev = clicked;
			 req.$complete = function()
			 {
			//	$.$('hidden').$css('display:none !important;');
				$.$('page').$echo(req.$reply,'clear');
				
				navigate(this.clicked);
			}
		}
		else
		{
			clickedPrev = clicked;
			navigate(clicked);
		}
	}
	
	

}

function navigate(Id)
{
	
	var charA = Id.charAt(0);
	
	
	
	
	var sel ;
		var bound = 18;
		$.$(Id).$$.className = 'subMenu selected';
		if(charA == 'a')
		bound = 13;
		if(charA == 'f')
		bound = 12;
		for(var i = 1;i<bound;++i)
		{
			sel = charA+i;
			if(sel == Id)
			continue;
			$.$(sel).$$.className = 'subMenu';
		}
		$.$('common').$css('display:none;');
	if(charA == 'h')
	{
		
		
		if(parseInt(Id.charAt(2)) > 2)
		{
			if(Id == 'h13')
			$redirect('http://webmail.rit.ac.in');
			
			if(Id == 'h14')
			$redirect('http://www.alumni.rit.ac.in');
			
			if(Id == 'h15')
			$redirect('http://www.mgu.ac.in');
			
			if(Id == 'h16')
			$redirect('http://www.dtekerala.gov.in');
			
			if(Id == 'h17')
			$redirect('http://www.ieeerit.org');
			return 0;
		}
		var footerMargin = '0%';
		if(Id == 'h1')
		{
			$redirect("./index.html");
		}
		if(Id == 'h2')
		{
			sel = 'adm';
			footerMargin = '10%';
			
		}
		if(Id == 'h3')
		{
			sel = 'courses';
			$.$(sel).$css('height:150%;');
			footerMargin = '25%';
		}
		if(Id == 'h4')
		sel = 'desk';
		
		if(Id == 'h5')
		sel = 'campus';
		if(Id == 'h6')
		{
			footerMargin = '20%';
			sel = 'reach';
		}
		if(Id == 'h7')
		{
			footerMargin = '20%';
			sel = 'placement';
		}
		if(Id == 'h8')
		{
			footerMargin = '2%';
			sel = 'rank';
		}
		if(Id == 'h9')
		{
			footerMargin = '2%';
			sel = 'last';
		}
		if(Id == 'h10')
		{
			footerMargin = '2%';
			sel = 'nss';
		}
		
		
		
		$.$(sel).$css('display:block;');
		$.$('footer').$css('margin-top:'+footerMargin);
	}
	else if(charA == 'a')
	{
		
		$.$('CGPC').$css('display:none');
		$.$('ISTE').$css('display:none');
		$.$('IEEE').$css('display:none');
		$.$('NSS').$css('display:none');
		$.$('Alumni').$css('display:none');
		$.$('Arts').$css('display:none');
		$.$('Sports').$css('display:none');
		$.$('Mathematics').$css('display:none');
		$.$('Music').$css('display:none');
		$.$('coed').$css('display:none');
		$.$('cell').$css('display:none');
		$.$('edp').$css('display:none');
		if(Id == 'a1')
		$.$('CGPC').$css('display:block');
		else if(Id == 'a2')
		{
			$.$('ISTE').$css('display:block');
		}
		else if(Id == 'a3')
		{
			$.$('IEEE').$css('display:block');
		}
		else if(Id == 'a4')
		{
			$.$('NSS').$css('display:block');
		}else if(Id == 'a5')
		{
			$.$('Alumni').$css('display:block');
		}else if(Id == 'a6')
		{
			$.$('Arts').$css('display:block');
		}else if(Id == 'a7')
		{
			$.$('Sports').$css('display:block');
		}else if(Id == 'a8')
		{
			$.$('Mathematics').$css('display:block');
		}else if(Id == 'a9')
		{
			$.$('Music').$css('display:block');
		}else if(Id == 'a10')
		{
			$.$('coed').$css('display:block');
		}
		else if(Id == 'a11')
		{
			$.$('cell').$css('display:block');
		}
		else 
		{
			$.$('edp').$css('display:block');
		}
		
		
	}
	else if(charA == 'f')
	{
		
		$.$('comp').$css('display:none');
		$.$('hostels').$css('display:none');
		$.$('Buses').$css('display:none');
		$.$('Canteen').$css('display:none');
		$.$('Cafeteria').$css('display:none');
		$.$('Auditorium').$css('display:none');
		$.$('Conference').$css('display:none');
		$.$('Stadium').$css('display:none');
		$.$('coos').$css('display:none');
		$.$('pt').$css('display:none');

		if(Id == 'f1')
		{
			
			$.$('library').$css('display:block');
		}
		else if(Id == 'f2')
		{
			$.$('comp').$css('display:block');
		}
		else if(Id == 'f3')
		{
			$.$('hostels').$css('display:block');
		}
		else if(Id == 'f4')
		{
			$.$('Buses').$css('display:block');
		}else if(Id == 'f5')
		{
			$.$('Canteen').$css('display:block');
		}else if(Id == 'f6')
		{
			$.$('Cafeteria').$css('display:block');
		}else if(Id == 'f7')
		{
			$.$('Auditorium').$css('display:block');
		}else if(Id == 'f8')
		{
			$.$('Conference').$css('display:block');
		}else if(Id == 'f9')
		{
			$.$('Stadium').$css('display:block');
		}else if(Id == 'f10')
		{
			$.$('coos').$css('display:block');
		}
		else 
		{
			$.$('pt').$css('display:block');
		}
	}
	
}
var $nextIndex = 0 ;
function slider(ID,imgArray,delayS)
{
		
		if(clicked != 'home')
		return 0;
		if(typeof delayS == 'undefined' || delayS == '')
		delayS = 2;
		
		var imageArray =eval(imgArray);
		$.$(ID).$$.src = imageArray[$nextIndex++];
	
		if($nextIndex == imageArray.length)
		$nextIndex = 0;
		var code = "slider('"+ID+"','"+imgArray+"',"+delayS+")";
			//$.$(ID).$fade(0.8);
		$delay(code,delayS);
}

var loc = "./images/tinyGallery/";

var tinyGalleryImages = new Array(loc+"1.jpg",loc+"2.jpg",loc+"3.jpg",loc+"4.jpg",loc+"5.jpg");
var tinyDesr = "International Conference on Recent Innovation in Technology - 2012<br /><span style ='font-size:10px;font-weight:none;float:left;'>&nbsp;&nbsp;Venue : Hotel Aida,Kottayam</span><br /><span style ='font-size:10px;font-weight:none;float:left;'>&nbsp;&nbsp;Conference Date : 12/1/2012 - 14/1/2012 </span>";
tinyDesr += "<br /><span style ='font-size:10px;float:left;font-weight:none;'>&nbsp;&nbsp;Contacts :Prof.Geetaranjini.P.R.</span><span style ='font-size:10px;float:left;font-weight:none;'><span style ='font-size:10px;float:left;font-weight:none;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr.S.Jayakumar Mob:9447521112 </span>";
var tinyHead = 'Photos of ICRIT 2011';
var tabHead = 'ICRIT 2012';












/*Programmed by Jinu Jinu Joseph Daniel
contact:jinujosephdaniel@gmail.com
 for jWebWorks*/