<!DOCTYPE html> 
<html> 
	<head> 
<link rel="stylesheet" href="tooltipster.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <!-- <script src="jquery.fancybox.js"></script>-->
  <script src="jquery.tooltipster.min.js"></script>

  <script src="jquery.tooltipster.min.js"></script>
<script type="text/javascript" src="jquery.fancybox.pack.js"></script>
		<link rel="stylesheet" href="jquery.fancybox.css" type="text/css" media="screen" />
 <script>
	 
	 
        $(document).ready(function() {
          changedInput();
			
			
		/*	$("a.i1").fancybox({
   'width'     : 620,
   'height'    : 490,
   'speedIn'    :600,
   'speedOut'   :200,
   'onComplete': function() {
      $("#fancybox-wrap").css({'top':'20px', 'bottom':'auto'});
   }
});*/
			
			
			
			$('#i1').tooltipster({content: $('<span><img src="images/neck.jpg" /></span>'), fixedWidth:100 ,offsetY:-24, position: 'right', arrowColor: 'transparent'});
			$('#i2').tooltipster({content: $('<span><img src="images/fullchest.jpg" /></span>'), fixedWidth:100 ,offsetY:-24, position: 'right'});
			$('#i3').tooltipster({content: $('<span><img src="images/fullshoulder.jpg" /></span>'), fixedWidth:100 ,offsetY:-24, position: 'left'});
			$('#i4').tooltipster({content: $('<span><img src="images/sleeve.jpg" /></span>'), fixedWidth:100 ,offsetY:-24, position: 'left'});
			$('#i5').tooltipster({content: $('<span><img src="images/bicep.jpg" /></span>'), fixedWidth:100 ,offsetY:-24, position: 'left'});
			$('#i6').tooltipster({content: $('<span><img src="images/wrist.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'right'});
			$('#i7').tooltipster({content: $('<span><img src="images/stomach.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'right'});
			//$('#i8').tooltipster({content: $('<span><img src="images/seat.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'left'});
			$('#i9').tooltipster({content: $('<span><img src="images/frontjacket.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'left'});
			$('#i10').tooltipster({content: $('<span><img src="images/frontchest.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'left'});
			$('#i11').tooltipster({content: $('<span><img src="images/back.jpg" /></span>'), fixedWidth:100 ,offsetY:74, position: 'left'});
			//$('#i12').tooltipster({content: $('<span><img src="images/halfshoulder.jpg" /></span>'), fixedWidth:100 ,offsetY:74, position: 'right'});
			$('#i13').tooltipster({content: $('<span><img src="images/halfbacklength.jpg" /></span>'), fixedWidth:100 ,offsetY:74, position: 'right'});
			$('#i14').tooltipster({content: $('<span><img src="images/trouserwaist.jpg" /></span>'), fixedWidth:100 ,offsetY:74, position: 'left'});
			
			$('#i14a').tooltipster({content: $('<span><img src="images/seat.jpg" /></span>'), fixedWidth:100 ,offsetY:-2, position: 'left'});
			$('#i15').tooltipster({content: $('<span><img src="images/trouseroutseam.jpg" /></span>'), fixedWidth:100 ,offsetY:74, position: 'left'});
			//$('#i16').tooltipster({content: $('<span><img src="images/trouserinseam.jpg" /></span>'), fixedWidth:100 ,offsetY:154, position: 'left'});
			$('#i17').tooltipster({content: $('<span><img src="images/crotch.jpg" /></span>'), fixedWidth:100 ,offsetY:154, position: 'right'});
			$('#i18').tooltipster({content: $('<span><img src="images/thigh.jpg" /></span>'), fixedWidth:100 ,offsetY:154, position: 'right'});
			$('#i19').tooltipster({content: $('<span><img src="images/knee.jpg" /></span>'), fixedWidth:100 ,offsetY:154, position: 'left'});
			$('#i20').tooltipster({content: $('<span><img src="images/ankle.jpg" /></span>'), fixedWidth:100 ,offsetY:154, position: 'left'});
			
				$("a#single_image").fancybox();
			//  $('.tooltip').tooltipster();
        });
    </script>
<link rel="stylesheet" href="styles.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<style>.tooltipster-arrow { display:none;}</style>
<style>
 .btn {
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
display: inline-block;
height: 36px;
line-height: 36px;
border: none;
margin: 0;
padding: 0 20px;
color: #fff;
font-weight: 700;
font-size: 13px;
text-transform: none;
background: #f45b4f;
width: auto;
}
  .page1, .page2, .page3, .sub {display:none;}
	/*140315 .page1{display:block;}*/
  .page3{display:block;}
	

select {height:31px;}

	#meswrap{ 
 
  overflow:hidden;
}
	
	#meswrap div {
   min-height: 90px;
   padding: 10px;
}

	.large_form
	{
		float: left;
margin-right: 10px;
	
	}
	
	 .afield
	{
			width:129px;
		float:left;
		margin-right:1px;
		
	}
	
	
#customer-register .afield .text {
width:114px;
}
	.large_form .title
	{
		
		width:76px;
		float: left;
height: 25px;
	}
	.i1 .tooltip .tooltipstered
	{
		float:left;
	}
	#customer-login .action_bottom, #customer-register .action_bottom {
margin-top: 15px;
/* float: none; */
/* position: static; */
width: 384px;
}
	#leftcolumn2, #rightcolumn2 {
    border: 1px solid white;
    float: left;
    min-height: 450px;
  
}
#leftcolumn2 {
     width:49%;
    
}

#rightcolumn2 {
     width: 49%;
   
}
	
		#single_image
		{
			
		display:none !important;
		}
	
	div#wrapper2{width:100%;}
.span13{width:1066px; display: block;
float: left;
margin: 0 15px;
}
	
	#conversionchart
	{
		width:42%;
	}
	@media only screen and (max-width: 1026px) and (min-width: 768px){
.span13 {
width: 738px;
}
		#conversionchart
	{
		width:50%;
	}
		
	}
	@media only screen and (max-width: 797px) and (min-width: 600px){
.span13 {
width: 570px;
}
			#conversionchart
	{
		width:50%;
	}
	}
	@media only screen and (max-width: 629px) and (min-width: 510px){
.span13 {
width: 450px;
}
	}
	
	@media only screen and (max-width: 509px){
 .span13 {
width: 290px;
float: none;
}
		
		#leftcolumn2 {
     width:99%;
    
}

#rightcolumn {
     width: 0%;
	display:none !important;
   
}
		#single_image
		{
			
		display:block !important;
		}
		.mobonly2{display:block !important;}
	}
	body{color: #000000;
font: 13px 'Open Sans', sans-serif;}
	h1, h2, h3, h4, h5, h6 {
font-weight: 300;
font-family: 'PT Sans', sans-serif;
}
	h3 {
font-size: 24.5px;
}
	
	h4 {
font: 13px 'Open Sans', sans-serif;
}
	table {
font: 13px 'Open Sans', sans-serif !important;}
		</style>
<script>
function nextclick1()
	{
		if(document.getElementById('option1').checked) {
   $(".page1").css("display","none");
   $(".page2").css("display","block");
			
			
}else if(document.getElementById('option2').checked) {
   $(".page1").css("display","none");
   $(".page3").css("display","block");
}else
	{
		alert('Please select an option');
	}
	}

	function validateForm1()
	{
		if((document.getElementById('fits1').checked) ||
		(document.getElementById('fits2').checked) )			{
				
	}else
		{
			alert('Please select slim or regular fit shirt');
			return false;
		}
if((document.getElementById('fitsuit1').checked) ||
		(document.getElementById('fitsuit2').checked) )			{
				
	}else
		{
			alert('Please select slim or regular fit suit');
			return false;
		}
	
		
	if((document.getElementById('lps1').checked) ||
		(document.getElementById('lps2').checked) ||
		(document.getElementById('lps3').checked) 	)		{
				
	}else
		{
			alert('Please select length of your shirt sleeves');
			return false;
		}
		
		if((document.getElementById('lpsuit1').checked) ||
		(document.getElementById('lpsuit2').checked) ||
		(document.getElementById('lpsuit3').checked) 	)		{
				
	}else
		{
			alert('Please select length of your jacket sleeves');
			return false;
		}
		
		
		
		if((document.getElementById('us').checked) ||
		(document.getElementById('uk').checked) ||
			(document.getElementById('au').checked) ||
(document.getElementById('fr').checked) ||
			(document.getElementById('it').checked) ||
			(document.getElementById('cm').checked))
			{
				
	}else
		{
			alert('Please select a sizing preference');
			return false;
		}
		 var val = $('#opt1suitjacket option:selected').val();
		
		if(val == 'none')
		  {
			alert('Please select a Suit Jacket Size');
			return false;
		}
		var val4 = $('#opt1shirtsize option:selected').val();
		if(val4 == 'none')
		  {
			alert('Please select a Shirt Size');
			return false;
		}
		var val2 = $('#opt1pants option:selected').val();
		
		if(val2 == 'none')
		  {
			alert('Please select a Pants Size');
			return false;
		}
		else
			{
				return true;
			}
		
	}

	
	function validateForm2()
	{
		if((document.getElementById('fits1a').checked) ||
		(document.getElementById('fits2a').checked) )			{
				
	}else
		{
			alert('Please select slim or regular fit');
			return false;
		}
		
		//	if((document.getElementById('cms').checked) ||
		//(document.getElementById('ins').checked))
		//		{
		//		}
		//else
		//	{
		//		alert('Please select a unit of measurement');
		//	return false;
		//	}
		var val = $('#opt2neck').val(); if (val.length == 0){alert('Please enter a measurement for Neck size'); return false; }
		var val1 = $('#opt2fullchest').val(); if (val1.length == 0){alert('Please enter a measurement for Full Chest size'); return false; }
		var val2 = $('#opt2fullshoulder').val(); if (val2.length == 0){alert('Please enter a measurement for Full Shoulder size'); return false; }
		var val3 = $('#opt2sleeve').val(); if (val3.length == 0){alert('Please enter a measurement for Sleeve size'); return false; }
		var val4 = $('#opt2bicep').val(); if (val4.length == 0){alert('Please enter a measurement for Bicep size'); return false; }
		var val5 = $('#opt2wrist').val(); if (val5.length == 0){alert('Please enter a measurement for Wrist size'); return false; }
		var val6 = $('#opt2stomach').val(); if (val6.length == 0){alert('Please enter a measurement for Stomach size'); return false; }
		
		var val8 = $('#opt2frontjacket').val(); if (val8.length == 0){alert('Please enter a measurement for Front Jacket size'); return false; }
		var val9 = $('#opt2frontchest').val(); if (val9.length == 0){alert('Please enter a measurement for Front Chest size'); return false; }
		var val10 = $('#opt2back').val(); if (val10.length == 0){alert('Please enter a measurement for Back size'); return false; }
		//var val11 = $('#opt2halfshoulder').val(); if (val11.length == 0){alert('Please enter a measurement for Half Shoulder size'); return false; }
		var val12 = $('#opt2halfbacklength').val(); if (val12.length == 0){alert('Please enter a measurement for Half Back Length size'); return false; }
		var val13 = $('#opt2trouserwaist').val(); if (val13.length == 0){alert('Please enter a measurement for Trouser Waist size'); return false; }
		var val13a = $('#opt2seat').val(); if (val13a.length == 0){alert('Please enter a measurement for Seat size'); return false; }
		var val14 = $('#opt2trouseroutseam').val(); if (val14.length == 0){alert('Please enter a measurement for Trouser Outseam size'); return false; }
		//var val15 = $('#opt2trouserinseam').val(); if (val15.length == 0){alert('Please enter a measurement for Trouser Inseam size'); return false; }
		var val16 = $('#opt2crotch').val(); if (val16.length == 0){alert('Please enter a measurement for Crotch size'); return false; }
		var val17 = $('#opt2thigh').val(); if (val17.length == 0){alert('Please enter a measurement for Thigh size'); return false; }
		var val18 = $('#opt2knee').val(); if (val18.length == 0){alert('Please enter a measurement for Knee size'); return false; }
		var val19 = $('#opt2ankle').val(); if (val19.length == 0){alert('Please enter a measurement for Ankle size'); return false; }
		
		
	}
	
	function previousclick2()
	{
		window.location.hash = "toTopLink";
   $(".page1").css("display","block");
   $(".page2").css("display","none");
		
		
	}
	
	function previousclick3()
	{
		window.location.hash = "toTopLink";
  $(".page1").css("display","block");
   $(".page3").css("display","none");
		
	}
	
	$(function(){
		$('.size').change(function(){
			changedInput();
		})
		});
		function changedInput()
		{
		var size=$('input[name="size"]:checked').val();
			
		$cname = $("select[name='opt1suitjacket']");
		$bname = $("select[name='opt1pants']");
			 $("select[name='opt1suitjacket'] option").remove(); //remove all options 
			 $("select[name='opt1pants'] option").remove(); //remove all options 
			$("<option value='none'>Please select a size</option>").appendTo($cname); 
			$("<option value='none'>Please select a size</option>").appendTo($bname); 
		
			$("<option   value='36'>36</option>").appendTo($cname); 
			$("<option   value='38'>38</option>").appendTo($cname); 
			$("<option   value='40'>40</option>").appendTo($cname); 
			$("<option   value='42'>42</option>").appendTo($cname); 
			$("<option   value='44'>44</option>").appendTo($cname); 
			$("<option   value='46'>46</option>").appendTo($cname); 
			$("<option  value='48'>48</option>").appendTo($cname); 
			
			
			$("<option  value='28'>28</option>").appendTo($bname); 
			$("<option  value='30'>30</option>").appendTo($bname); 
			$("<option  value='32'>32</option>").appendTo($bname); 
			$("<option  value='34'>34</option>").appendTo($bname); 
			$("<option  value='36'>36</option>").appendTo($bname); 
			$("<option  value='38'>38</option>").appendTo($bname); 
			$("<option  value='40'>40</option>").appendTo($bname); 
			
    /*    if (size == 'US') {
			
           
			
			$("<option  value='US 34'>US 34</option>").appendTo($cname); 
			$("<option   value='US 36'>US 36</option>").appendTo($cname); 
			$("<option   value='US 38'>US 38</option>").appendTo($cname); 
			$("<option   value='US 40'>US 40</option>").appendTo($cname); 
			$("<option   value='US 42'>US 42</option>").appendTo($cname); 
			$("<option   value='US 44'>US 44</option>").appendTo($cname); 
			$("<option   value='US 46'>US 46</option>").appendTo($cname); 
			
			
			
			
			
        }
			  if (size == 'UK') {
			$("<option   value='UK 34'>UK 34</option>").appendTo($cname); 
			$("<option  value='UK 36'>UK 36</option>").appendTo($cname); 
			$("<option  value='UK 38'>UK 38</option>").appendTo($cname); 
			$("<option  value='UK 40'>UK 40</option>").appendTo($cname); 
			$("<option  value='UK 42'>UK 42</option>").appendTo($cname); 
			$("<option  value='UK 44'>UK 44</option>").appendTo($cname); 
			$("<option  value='UK 46'>UK 46</option>").appendTo($cname); 
			
			
			$("<option  value='UK 26'>UK 26</option>").appendTo($bname); 
			$("<option  value='UK 28'>UK 28</option>").appendTo($bname); 
			$("<option  value='UK 30'>UK 30</option>").appendTo($bname); 
			$("<option  value='UK 32'>UK 32</option>").appendTo($bname); 
			$("<option  value='UK 34'>UK 34</option>").appendTo($bname); 
			$("<option  value='UK 36'>UK 36</option>").appendTo($bname); 
			$("<option  value='UK 38'>UK 38</option>").appendTo($bname); 
			$("<option  value='UK 40'>UK 40</option>").appendTo($bname); 
			
			  }
			 if (size == 'AU') { 
			$("<option   value='AU 34'>AU 34</option>").appendTo($cname); 
			$("<option   value='AU 36'>AU 36</option>").appendTo($cname); 
			$("<option   value='AU 38'>AU 38</option>").appendTo($cname); 
			$("<option   value='AU 40'>AU 40</option>").appendTo($cname); 
			$("<option   value='AU 42'>AU 42</option>").appendTo($cname); 
			$("<option   value='AU 44'>AU 44</option>").appendTo($cname); 
			$("<option   value='AU 46'>AU 46</option>").appendTo($cname); 
			
			
			$("<option  value='AU 26'>AU 26</option>").appendTo($bname); 
			$("<option  value='AU 28'>AU 28</option>").appendTo($bname); 
			$("<option  value='AU 30'>AU 30</option>").appendTo($bname); 
			$("<option  value='AU 32'>AU 32</option>").appendTo($bname); 
			$("<option  value='AU 34'>AU 34</option>").appendTo($bname); 
			$("<option  value='AU 36'>AU 36</option>").appendTo($bname); 
			$("<option  value='AU 38'>AU 38</option>").appendTo($bname); 
			$("<option  value='AU 40'>AU 40</option>").appendTo($bname); 
				 
			 }
			if (size == 'FR') {
			$("<option   value='FR 44'>FR 44</option>").appendTo($cname); 
			$("<option   value='FR 46'>FR 46</option>").appendTo($cname); 
			$("<option   value='FR 48'>FR 48</option>").appendTo($cname); 
			$("<option   value='FR 50'>FR 50</option>").appendTo($cname); 
			$("<option   value='FR 52'>FR 52</option>").appendTo($cname); 
			$("<option   value='FR 54'>FR 54</option>").appendTo($cname); 
			$("<option   value='FR 56'>FR 56</option>").appendTo($cname); 
			
			
			$("<option  value='FR 26'>FR 26</option>").appendTo($bname); 
			$("<option  value='FR 28'>FR 28</option>").appendTo($bname); 
			$("<option  value='FR 30'>FR 30</option>").appendTo($bname); 
			$("<option  value='FR 32'>FR 32</option>").appendTo($bname); 
			$("<option  value='FR 34'>FR 34</option>").appendTo($bname); 
			$("<option  value='FR 36'>FR 36</option>").appendTo($bname); 
			$("<option  value='FR 38'>FR 38</option>").appendTo($bname); 
			$("<option  value='FR 40'>FR 40</option>").appendTo($bname); 
				
			}
			if (size == 'IT') {
			$("<option   value='IT 44'>IT 44</option>").appendTo($cname); 
			$("<option   value='IT 46'>IT 46</option>").appendTo($cname); 
			$("<option  value='IT 48'>IT 48</option>").appendTo($cname); 
			$("<option  value='IT 50'>IT 50</option>").appendTo($cname); 
			$("<option  value='IT 52'>IT 52</option>").appendTo($cname); 
			$("<option  value='IT 54'>IT 54</option>").appendTo($cname); 
			$("<option  value='IT 56'>IT 56</option>").appendTo($cname); 
			
			
			$("<option  value='IT 42'>IT 42</option>").appendTo($bname); 
			$("<option  value='IT 44'>IT 44</option>").appendTo($bname); 
			$("<option  value='IT 46'>IT 46</option>").appendTo($bname); 
			$("<option  value='IT 48'>IT 48</option>").appendTo($bname); 
			$("<option  value='IT 50'>IT 50</option>").appendTo($bname); 
			$("<option  value='IT 52'>IT 52</option>").appendTo($bname); 
			$("<option  value='IT 54'>IT 54</option>").appendTo($bname); 
			$("<option   value='IT 56'>IT 56</option>").appendTo($bname); 
			}
			if (size == 'CM') {
			$("<option   value='86 CM'>86 cm</option>").appendTo($cname); 
			$("<option  value='92 CM'>92 cm</option>").appendTo($cname); 
			$("<option  value='97 CM'>97 cm</option>").appendTo($cname); 
			$("<option  value='102 CM'>102 cm</option>").appendTo($cname); 
			$("<option  value='107 CM'>107 cm</option>").appendTo($cname); 
			$("<option  value='112 CM'>112 cm</option>").appendTo($cname); 
			$("<option  value='117 CM'>117 cm</option>").appendTo($cname); 
			
			
			$("<option   value='66 CM'>66 cm</option>").appendTo($bname); 
			$("<option    value='71 CM'>71 cm</option>").appendTo($bname); 
			$("<option    value='76 CM'>76 cm</option>").appendTo($bname); 
			$("<option    value='81 CM'>81 cm</option>").appendTo($bname); 
			$("<option    value='86 CM'>86 cm</option>").appendTo($bname); 
			$("<option    value='92 CM'>92 cm</option>").appendTo($bname); 
			$("<option    value='97 CM'>97 cm</option>").appendTo($bname); 
			$("<option    value='102 CM'>102 cm</option>").appendTo($bname); 
			}
				*/
		}
	
	
	
</script>
		
		
<script type="text/javascript">


	
    $(document).ready(function () {
        
		$('#nextbutton1').click(function(){ 
	if(document.getElementById('option1').checked) {
   $(".page1").css("display","none");
   $(".page2").css("display","block");
			
			
}else if(document.getElementById('option2').checked) {
   $(".page1").css("display","none");
   $(".page3").css("display","block");
}else
	{
		alert('Please select an option');
	}
  
	
});
    });
</script>
	
<script type="text/javascript">

  function postSize(e){  
  var target = parent.postMessage ? parent : (parent.document.postMessage ? parent.document : undefined);  
  if (typeof target != "undefined" && document.body.scrollHeight)  
    target.postMessage(document.getElementById("measurementsform").scrollHeight, "*");  
}  
window.addEventListener("load", postSize, false);  
</script>
		
</head>
	<body >
		<a id="toTopLink" href="#"></a>
	<form id="measurementsform" action="sendtoShopify.php" method="post">
		
	 <input type="hidden" name="custid" value="201335625" id="custid"> 
<div id="customer-register">
  <div id="page1" class="row page1">
    <div id="register" class="span13">
      <h2 class="title">Select Option</h2>
		
     
      <h4 class="title">Select the method by which you wish to enter and save your measurements <span style="color:red;">*</span></h4>
      <div id="options" class="clearfix large_form tooltip">	        
            <input  class="tooltip" type="radio" name="soptions" value="option1" id="option1" title="Option 1 - Use this option to select sizes according to standard US, UK, AU and Euro sizing.">&nbsp; Option 1 - Standard Sizes<br></br>   
        	<input  class="tooltip" type="radio" name="soptions" value="option2" id="option2" title="Option 2 - Use this option to enter in the specific measurements to achieve a perfect custom fit.">&nbsp; Option 2 - Custom Measurements<br>   
      
	  </div>
	  </br></br></br>
      	<div class="action_bottom">
        	<a class="btn" href="#" id="nextbutton1" >Next</a>
	    </div>
  	</div><!-- #register -->
  </div>
 
  <div id="page2" class="row page2">
    <div id="register" class="span13">
      <h2 class="title" >Option 1 - Standard Sizes</h2>
      
      <h4 style="font-weight:normal;"><i>Use this option to select your measurements according to standard sizes</i></h4>
		
<h4 style="font-weight:normal;"><i><b>*Please note*</b> the following selections are required for both shirt and suit. You can edit them at any time.</i></h4>
		<div id="wrapper2">
			
			<div id="leftcolumn2">
				<a id="single_image" href="images/Int.SizeConversion2.png"><img src="images/Int.SizeConversion2.png" width="100" alt=""/></a>
	 <h4 class="title" style="font-weight:bold; font-size:16px;">SHIRT</h4>
	  <h4 class="title">Select your shirt fit <span style="color:red;">*</span></h4>
      
		<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="fit" value="Slim" id="fits1"><label> Slim &nbsp;&nbsp;</label>  
        	<input  type="radio" name="fit" value="Regular" id="fits2"><label> Regular </label> 
        	
      	</div>
	 </br> </br>
<h4 class="title">Select the length of your shirt sleeves <span style="color:red;">*</span></h4>
      
		<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="length" value="Short" id="lps1"><label> Short &nbsp;&nbsp;</label>  
        	<input  type="radio" name="length" value="Regular" id="lps2"><label> Regular &nbsp;&nbsp; </label> 
        	<input  type="radio" name="length" value="Long" id="lps3"><label> Long </label> 
        	
      	</div>
	 </br> </br>
 <h4 class="title">Select your shirt size <span style="color:red;">*</span></h4>
      
		<!-- <select id="opt1shirtsize" name="opt1shirtsize" >
          <option value="none">Please select a size</option>
          <option  value="XXS">XXS : 32-34 Inches (chest)</option>
          <option  value="XS">XS : 34-36 Inches (chest)</option>
          <option  value="S">S : 36-38 Inches (chest)</option>
          <option  value="M">M : 38-40 Inches (chest)</option>
          <option  value="L">L : 40-42 Inches (chest)</option>
          <option  value="XL">XL:  : 42-44 Inches (chest)</option>
          <option  value="XXL">XXL : 44-46 Inches (chest)</option>
     	</select>-->
 <select id="opt1shirtsize" name="opt1shirtsize" >
          <option value="none">Please select a size</option>
          <option  value="36">36</option>
          <option  value="38">38</option>
          <option  value="40">40</option>
          <option  value="42">42</option>
          <option  value="44">44</option>
          <option  value="46">46</option>
          <option  value="48">48</option>
     	</select>

	 </br> </br>

 <h4 class="title" style="font-weight:bold; font-size:16px;">SUIT</h4>
	<h4 class="title">Select your suit fit <span style="color:red;">*</span></h4>
      
		<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="fitsuit" value="Slim" id="fitsuit1"><label> Slim &nbsp;&nbsp;</label>  
        	<input  type="radio" name="fitsuit" value="Regular" id="fitsuit2"><label> Regular </label> 
        	
      	</div>
	 </br> </br>
<h4 class="title">Select your suit length <span style="color:red;">*</span></h4>
      
		<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="lengthsuit" value="Short" id="lpsuit1"><label> Short &nbsp;&nbsp;</label>  
        	<input  type="radio" name="lengthsuit" value="Regular" id="lpsuit2"><label> Regular &nbsp;&nbsp; </label> 
        	<input  type="radio" name="lengthsuit" value="Long" id="lpsuit3"><label> Long </label> 
        	
      	</div>
 </br></br>
       <h4 class="title" style="margin-bottom: 0px;">Select your suit size <span style="color:red;">*</span></h4>
      
		<!--<div id="options" class="clearfix large_form"  style="float:none;">	        
			<input  class="size" type="radio" name="size" value="US" id="us"><label> US  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        	<input  class="size" type="radio" name="size" value="UK" id="uk"><label> UK  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
        	<input  class="size" type="radio" name="size" value="AU" id="au"><label> AU  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br></br> 
      		<input  class="size" type="radio" name="size" value="FR" id="fr"><label> FR  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        	<input  class="size" type="radio" name="size" value="IT" id="it"><label> IT  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        	<input  class="size" type="radio" name="size" value="CM" id="cm"><label> Centimeters (cm)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    
    
      	</div>-->
 <div id="opt1suitjacket" class="clearfix large_form" style="width: 140px; padding-bottom: 10px; padding-left:5px;">
   <h4 class="title" style="width: 200px;padding-top: 15px;margin-bottom: 0px; ">Suit Jacket <span style="color:red;">*</span></h4>
      
	    <select id="opt1suitjacket" name="opt1suitjacket" >
          <option value="none">Please select a size</option>
          <option value="36">36</option>
          <option value="38">38</option>
          <option value="40">40</option>
          <option value="42">42</option>
          <option value="44">44</option>
          <option value="46">46</option>
          <option value="48">48</option>
          
     	</select>
</div></br>
    <div id="opt1pantss" class="clearfix large_form" style="width: 140px; padding-bottom: 10px; padding-left:5px;">
     <h4 class="title" style="margin-top: -3px;">Trousers <span style="color:red;">*</span></h4>
	    <select id="opt1pants" name="opt1pants" style="margin-top: -12px;">
          <option value="none">Please select a size</option>
          <option value="28">26</option>
          <option value="30">30</option>
          <option value="32">32</option>
          <option value="34">34</option>
          <option value="36">36</option>
          <option value="38">38</option>
		  <option value="40">40</option>

     	</select>
   </div>
 </br> </br> </br>
<div class="mobonly2" style="display:none;">
</br> </br> </br></br> </br>
</div>
      	<div class="action_bottom" style="padding-bottom: 30px;">
        	<input class="btn" id="nextbutton2" type="submit" onclick="return validateForm1()" value="Submit">
          <!--<a class="btn" href="#" id="previousbutton2" onclick=" document.getElementById('page2').style.display = 'none';  document.getElementById('page1').style.display = 'block'; if ('parentIFrame' in window){  window.parentIFrame.size(250); return false; };  $('.page2').css('display','none');$('.page1').css('display','block');">Previous</a>
         -->
			<a class="btn" href="#" id="previousbutton2" onclick="previousclick2();">Previous</a>
	    
</div>
</div><!-- #leftcolumn2 -->

<div id="rightcolumn">
	<img id="conversionchart" src="images/Int.SizeConversion4.png" alt="Size Chart" />
	</div><!-- #rightcolumn2 -->

</div> <!-- #wrapper3-->
  	</div><!-- #register -->
  </div>
  
 <div class="row page3">
    <div id="register" class="span13">
    <!--140315  <h2 class="title" >Option 2 - Custom Measurements</h2> -->
	  <h2 class="title" >Custom Measurements</h2>
		
      
      <h4 style="font-weight:normal;"><i>Use this option to enter in the relevant, detailed measurements to achieve a perfect custom fit.</i></h4>
      <h4 style="font-weight:normal;"><i><b>*Please note*</b> the following selections are required for both shirt and suit. You can edit them at any time.</i></h4>
	
       <h4 class="title">Select your preferred fit <span style="color:red;">*</span></h4>
      
		<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="fita" value="Slim" id="fits1a"><label> Slim &nbsp;&nbsp;</label>  
        	<input  type="radio" name="fita" value="Regular" id="fits2a"><label> Regular </label> 
        	
      	</div>
	 </br> </br>
	    <h4 class="title" ><strong>Enter the following measurements in Inches.</strong></h4>
<!--<div id="options" class="clearfix large_form" style="padding-bottom:10px;">	        
            <input  type="radio" name="size2" value="CM" id="cms"><label> Centimetres &nbsp;&nbsp;</label>  
        	<input  type="radio" name="size2" value="IN" id="ins"><label> Inches </label></br> 

      	</div>-->
 <h4 class="title">Shirt / Suit Jacket Measurements  <span style="color:red;">*</span></h4>
<div id="meswrap">
		<div id="opt2neckd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Neck <span style="color:red;">*</span></h4> <img id="i1" class="i1 tooltip" src="images/neck.jpg" alt="Neck" width="30"/></h4>
	        <input  type="text" value="16.5" name="neck" id="opt2neck" class="text" size="15" />
	      </div>
		<div id="opt2fullchestd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Full Chest <span style="color:red;">*</span></h4> <img id="i2" class="i1 tooltip"  src="images/fullchest.jpg" alt="Full Chest" width="30"/></h4>
	        <input  type="text" value="42.5" name="fullchest" id="opt2fullchest" class="text" size="15" />
	      </div>
		<div id="opt2fullsoulderd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Full Shoulder <span style="color:red;">*</span></h4> <img id="i3" class="i1 tooltip"  src="images/fullshoulder.jpg" alt="Full Shoulder" width="30"/>
	        <input  type="text" value="18.75" name="fullshoulder" id="opt2fullshoulder" class="text" size="15" />
	      </div>
		<div id="opt2sleeved"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Sleeve <span style="color:red;">*</span></h4> <img id="i4" class="i1 tooltip"  src="images/sleeve.jpg" alt="Sleeve" width="30"/>
	        <input type="text" value="24" name="sleeve" id="opt2sleeve" class="text" size="15" />
	      </div>
		<div id="opt2bicepd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Bicep <span style="color:red;">*</span></h4> <img id="i5" class="i1 tooltip"  src="images/bicep.jpg" alt="Bicep" width="30"/>
	        <input  type="text" value="14" name="bicep" id="opt2bicep" class="text" size="15" />
	      </div>
		<div id="opt2wristd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Wrist <span style="color:red;">*</span></h4> <img id="i6" class="i1 tooltip"  src="images/wrist.jpg" alt="Wrist" width="30"/>
	        <input  type="text" value="7" name="wrist" id="opt2wrist" class="text" size="15" />
	      </div>
		<div id="opt2stomachd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Stomach <span style="color:red;">*</span></h4> <img id="i7" class="i1 tooltip"  src="images/stomach.jpg" alt="Stomach" width="30"/>
	        <input  type="text" value="36.5" name="stomach" id="opt2stomach" class="text" size="15" />
	      </div>
		
		<div id="opt2frontjacketd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Front Jacket <span style="color:red;">*</span></h4> <img id="i9" class="i1 tooltip" src="images/frontjacket.jpg" alt="Front Jacket" width="30"/>
	        <input type="text" value="30.5" name="frontjacket" id="opt2frontjacket" class="text" size="15" />
	      </div>
		<div id="opt2frontchestd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Front Chest <span style="color:red;">*</span></h4> <img id="i10" class="i1 tooltip" src="images/frontchest.jpg" alt="Front Chest" width="30"/>
	        <input type="text" value="21.25" name="frontchest" id="opt2frontchest" class="text" size="15" />
	      </div>
		<div id="opt2backd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Back <span style="color:red;">*</span></h4> <img id="i11" class="i1 tooltip"  src="images/back.jpg" alt="Back" width="30"/>
	        <input  type="text" value="21.25" name="back" id="opt2back" class="text" size="15" />
	      </div>
	<!--	<div id="opt2halfshoulderd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Half Shoulder <span style="color:red;">*</span></h4> <img id="i12" class="i1 tooltip" src="images/halfshoulder.jpg" alt="Half Shoulder" width="30"/>
	        <input  type="text" value="" name="halfshoulder" id="opt2halfshoulder" class="text" size="15" />
	      </div>-->
		<div id="opt2halfbacklengthd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Half Back Length <span style="color:red;">*</span></h4> <img id="i13" class="i1 tooltip" src="images/halfbacklength.jpg" alt="Half Back Length" width="30"/>
	        <input  type="text" value="20.25" name="halfbacklength" id="opt2halfbacklength" class="text" size="15" />
	      </div>
		
</div>
 <h4 class="title">Trouser Measurements  <span style="color:red;">*</span></h4>
<div id="meswrap">
		<div id="opt2trouserwaistd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Trouser Waist <span style="color:red;">*</span></h4> <img id="i14" class="i1 tooltip" src="images/trouserwaist.jpg" alt="Trouser Waist" width="30"/>
	        <input  type="text" value="36.5" name="trouserwaist" id="opt2trouserwaist" class="text" size="15" />
	      </div>
		<div id="opt2seatd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Seat <span style="color:red;">*</span></h4> <img id="i14a" class="i1 tooltip"  src="images/seat.jpg" alt="Seat" width="30"/>
	        <input  type="text" value="41" name="seat" id="opt2seat" class="text" size="15" />
	      </div>
		<div id="opt2trouseroutseamd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Trouser Outseam <span style="color:red;">*</span></h4> <img id="i15" class="i1 tooltip" src="images/trouseroutseam.jpg" alt="Trouser Outseam" width="30"/>
	        <input  type="text" value="36" name="trouseroutseam" id="opt2trouseroutseam" class="text" size="15" />
	      </div>
		<!--<div id="opt2trouserinseamd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Trouser Inseam <span style="color:red;">*</span></h4> <img id="i16" class="i1 tooltip" src="images/trouserinseam.jpg" alt="Trouser Inseam" width="30"/>
	        <input  type="text" value="" name="trouserinseam" id="opt2trouserinseam" class="text" size="15" />
	      </div>-->
		<div id="opt2crotchd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Crotch <span style="color:red;">*</span></h4> <img id="i17" class="i1 tooltip" src="images/crotch.jpg" alt="Crotch" width="30"/>
	        <input  type="text" value="25.5" name="crotch" id="opt2crotch" class="text" size="15" />
	      </div>
		<div id="opt2thighd"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Thigh <span style="color:red;">*</span></h4> <img id="i18" class="i1 tooltip" src="images/thigh.jpg" alt="Thigh" width="30"/>
	        <input  type="text" value="23.25" name="thigh" id="opt2thigh" class="text" size="15" />
	      </div>
		<div id="opt2kneed"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Knee <span style="color:red;">*</span></h4> <img id="i19" class="i1 tooltip" src="images/knee.jpg" alt="Knee" width="30"/>
	        <input type="text" value="16" name="knee" id="opt2knee" class="text" size="15" />
	      </div>
		<div id="opt2ankled"  class="clearfix large_form afield" style="width:129px;">
	         <h4 class="title">Ankle <span style="color:red;">*</span></h4> <img id="i20" class="i1 tooltip" src="images/ankle.jpg" alt="Ankle" width="30"/>
	        <input type="text" value="13.5" name="ankle" id="opt2ankle" class="text" size="15" />
	      </div>
</div>
      	<div class="action_bottom" style="padding-bottom: 30px;">
        	<input class="btn" id="nextbutton3" type="submit" onclick="return validateForm2()" value="Submit">
          
         <!--140315 <a class="btn" href="#" id="previousbutton3" onclick="previousclick3()">Previous</a>-->
	    </div>
  	</div><!-- #register -->
  </div>
</form>
	
    
	      <div class="action_bottom sub">
	        <input class="btn" type="submit" value="Submit" />
	        <span>&nbsp;or <a href="#">Return to Store</a></span>  
	      </div>
	
	 
        
    </div><!-- #register -->
    
   
  </div>   
  </div> 
</div>
<script type="text/javascript" src="iframeResizer.contentWindow.js"></script>
	</body>
</html>
