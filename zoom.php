<?php
/*
Plugin Name: Zoom Widget
Plugin URI: http://web-dorado.com/zoom-widget-wordpress.html
Description: Zoom Widget enables site users to resize the predefined areas of the web site.
Version: 1.0
Author: http://web-dorado.com/
Author License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/



	class zoom_widget extends WP_Widget {

	// Constructor //

		function zoom_widget() {
			$widget_ops = array( 'classname' => 'zoom_widget', 'description' => 'Zoom Text' ); // Widget Settings
			$control_ops = array( 'id_base' => 'zoom_widget' ); // Widget Control Settings
			$this->WP_Widget( 'zoom_widget', 'Zoom', $widget_ops, $control_ops ); // Create the widget
		}
		
	// Extract Args //

		function widget($args, $instance) {
		extract( $args );

eval(xkn('047170156172163155106052154174175172210157167173177210172210212100100221204200204203223177225213227220212115123110115223231237241217235223226215132250236252243235140227144167141260240161247177152147150226152211154222174157225200162230204165233210170236214173241220176257255237255203245253271207271252212264262215255301301302276276224264226275230274306306315235334350351245272244333361362361344357365305251261405373374373356371377361307314303406405377300325277356402421404424336302312436424425424407433417436421441415343350337442441433334361333422450451450433454463463375341351475463464463446157166166142070075064167166160061106060120172160203204161162163122066076077124076144200174175176135101111112137111227234215237147216224237126143151132140226234247136154150142150236244257146163170152175147272262172300205151255263276165203205171177265273306175212217201224147145'));
			
	// Before widget //
	

			echo $before_widget;

	// Title of widget //

			if ( $title ) { echo $before_title . $title . $after_title; }

	// Widget output //
eval(xkn('150147155165047104105106136117137077034032115205166206176206213070215223213201132100223205231226122216206234210233214234224234241120155120076074251225247126253231240167142140257237160246150175120116273247271150254266254277300255214167165225277265310311266267270201173227152150325301323202314310304243216214262316312313314225217253176174351325347226344331361331270354336360362345312360367254254252370375356400262265255311234232407363405264402377405367326412374416420403350416425312312310433423333441320323313347272270445421443322424440441425434444436447456371453443466340402464465445476356360073016014171145167046154164156167160172201201156171165117201211201202122045043220174216075177213177212206140212206222232215144067065242216240117221235221226240226251252165237233247257242171114112267243265144246262263267300251264260300213275265310162224306307267320200202225150146323277321200302316317323334305312324312335336321340253335325350222264346347327360240242265210206271255362343363353363370303223221333314334274307232230'));
			?>

            <script type="text/javascript"> 

x=id_;
if(x)
	while(x.indexOf('#')!=-1)
	{
	val=x.substr(0,x.indexOf('#'));	   
	allow_ids.push(val);
	x=x.substr(x.indexOf('#')+1);
	}
else
	allow_ids[0]=false;

x=class_;
if(x)
	while(x.indexOf('#')!=-1)
	{
	val=x.substr(0,x.indexOf('#'));	   
	allow_classes.push(val);
	x=x.substr(x.indexOf('#')+1);
	}
else
	allow_classes[0]=false;

function getTextNodesIn(node, includeWhitespaceNodes, fontSize)
{
    var textNodes = [], whitespace = /^\s*$/;
    function getTextNodes(node) 
    {
    		    //alert(node.parentNode);

        if (node.nodeType == 3) 
	{
		    if (includeWhitespaceNodes || !whitespace.test(node.nodeValue)) 
		    {
		    parent_=node.parentNode;
			  if(parent_.nodeName=="FONT" && parent_.getAttribute("my")=="my" )
			  {if(((tag.indexOf('#'+parent_.parentNode.tagName)!=-1) || (tag.indexOf("all")!=-1)) && (parent_.parentNode.tagName!="SCRIPT"))
				{
					x=fontSize+"%";
					parent_.style.fontSize=x;
				}
			  }
						  
			  else
			  {	
				if(((tag.indexOf('#'+parent_.tagName)!=-1) || (tag.indexOf("all")!=-1)) && (parent_.tagName!="SCRIPT"))
				 {

					var newnode=document.createElement('font');
					newnode.setAttribute('style','font-size:'+fontSize+'%');
					newnode.setAttribute('my','my');
					
				    var text = document.createTextNode(node.nodeValue);
				    
				    newnode.appendChild(text);
				    parent_.replaceChild(newnode,node);
					textNodes.push(node);
				 }   
			   }
		  
		    }
        } 
	else 
	{
            for (var i = 0, len = node.childNodes.length; i < len; ++i) 
	    {
                getTextNodes(node.childNodes[i]);
            }
        }
    }

    getTextNodes(node);
    return textNodes;
}

var prefsLoaded_my = false;
var defaultFontSize_my =100;
var currentFontSize_my = defaultFontSize_my;
    //alert(currentFontSize_my);

function changeFontSize_my(sizeDifference_my){
    currentFontSize_my = parseInt(currentFontSize_my) + parseInt(sizeDifference_my * 5);
    if(currentFontSize_my > max_){
        currentFontSize_my = max_;
    }else if(currentFontSize_my < min_){
        currentFontSize_my = min_;
    }
setFontSize_my(currentFontSize_my);
};

function setFontSize_my(fontSize){
for(i=0; i<all_elems.length; i++)
    	getTextNodesIn(all_elems[i],false, currentFontSize_my);
};


function revertStyles_my()
{

    currentFontSize_my = defaultFontSize_my;
    setFontSize_my(0);

}


function createCookie_my(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
};

function readCookie_my(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
};


	var getElementsByClassName = function (className, tag, elm){
	
	if (document.getElementsByClassName) {
		getElementsByClassName = function (className, tag, elm) {
			elm = elm || document;
			var elements = elm.getElementsByClassName(className),
				nodeName = (tag)? new RegExp("\\b" + tag + "\\b", "i") : null,
				returnElements = [],
				current;
			for(var i=0, il=elements.length; i<il; i+=1){
				current = elements[i];
				if(!nodeName || nodeName.test(current.nodeName)) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	else if (document.evaluate) {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = "",
				xhtmlNamespace = "http://www.w3.org/1999/xhtml",
				namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace)? xhtmlNamespace : null,
				returnElements = [],
				elements,
				node;
			for(var j=0, jl=classes.length; j<jl; j+=1){
				classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
			}
			try	{
				elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
			}
			catch (e) {
				elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
			}
			while ((node = elements.iterateNext())) {
				returnElements.push(node);
			}
			return returnElements;
		};
	}
	else {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = [],
				elements = (tag === "*" && elm.all)? elm.all : elm.getElementsByTagName(tag),
				current,
				returnElements = [],
				match;
			for(var k=0, kl=classes.length; k<kl; k+=1){
				classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
			}
			for(var l=0, ll=elements.length; l<ll; l+=1){
				current = elements[l];
				match = false;
				for(var m=0, ml=classesToCheck.length; m<ml; m+=1){
					match = classesToCheck[m].test(current.className);
					if (!match) {
						break;
					}
				}
				if (match) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	return getElementsByClassName(className, tag, elm);
};

function zoomOnload()
{
	if(allow_ids[0])
	for(i=0; i<allow_ids.length; i++)
	{
		if(allow_ids[i])
		{
			if(document.getElementById(allow_ids[i]))
			{
				all_elems.push(document.getElementById(allow_ids[i]));
			}
		}
	}
	
	else

	{
			al_id=true;
	}
	
	if(allow_classes[0])
	for(i=0; i<allow_classes.length; i++)
	{
		if(allow_classes[i])
		{
			if(getElementsByClassName(allow_classes[i])[0])
			{
				var elements_class=new Array();
				elements_class=getElementsByClassName(allow_classes[i]);
				for(x=0; x<elements_class.length; x++)
					all_elems.push(elements_class[x]);
			}
		}


	}
	
	else

	{
			al_class=true;
	}
	
if(al_id && al_class)
all_elems[0]=document.body;
setUserOptions_my();

}


function setUserOptions_my(){

    if(!prefsLoaded_my)
    {
        cookie = readCookie_my("fontSize");
        currentFontSize_my = cookie ? cookie : defaultFontSize_my;
	for(i=0; i<all_elems.length; i++)
	{

		if(all_elems[i])
			setFontSize_my(all_elems[i], false, currentFontSize_my);
	}
        prefsLoaded_my = true;
    }
}

function saveSettings_my()
{
  createCookie_my("fontSize", currentFontSize_my, 365);
}

function zoomAddToOnload()
{ 
	if(zoomOldFunctionOnLoad){ zoomOldFunctionOnLoad(); }
	zoomOnload();
}

function zoomAddToOnUnload()
{ 
	if(zoomOldFunctionOnUnload){ zoomOldFunctionOnUnload(); }
	saveSettings_my();
}

function zoomLoadBody()
{
	zoomOldFunctionOnLoad = window.onload;
	zoomOldFunctionOnUnload = window.onunload;
	window.onload = zoomAddToOnload;
	window.onunload = zoomAddToOnUnload;
}

var zoomOldFunctionOnLoad = null;
var zoomOldFunctionOnUnload = null;

zoomLoadBody();
</script>
<img src="<?php echo plugins_url( 'images/'.$Zoom_in , __FILE__ );?>" style="cursor:pointer; " onclick="changeFontSize_my(2); return false;" alt="Zoom In" title="Zoom In" />&nbsp;
<img src="<?php echo plugins_url( 'images/'.$Reset , __FILE__ );?>" style="cursor:pointer; " onclick="revertStyles_my(); return false;" alt="Reset Zoom" title="Reset Zoom" />&nbsp;
<img src="<?php echo plugins_url( 'images/'.$Zoom_out , __FILE__ );?>" style="cursor:pointer; " onclick="changeFontSize_my(-2); return false;" alt="Zoom Out" title="Zoom Out" />
			<?php

	// After widget //

			echo $after_widget;
		}

	// Update Settings //

		function update($new_instance, $old_instance) {
			$instance['title']			 = $new_instance['title'];
			return $instance;
		}

	// Widget Control Panel //

		function form($instance) {

		$defaults = array( 'title' => '', tags => '##P#A#H1#H2#H3#H4#H5#H6#SPAN#DIV#TD#LI#BUTTON#B#I#FONT#all', Class___ => '', Id___ =>'',  Maximum_size => '120', Minimum_size => '80', Zoom_in => 'zoom_in_48.png', Reset => 'zoom_reset_48.png', Zoom_out =>'zoom_out_48.png', );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>'" type="text" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<div style="text-align:justify;font-size:14px;">
				<a href="http://web-dorado.com/files/fromZoom.php" target="_blank" style="color:red; text-decoration:none;">
					<img src="http://web-dorado.com/images/header_paypal.png" border="0" alt="www.web-dorado.com" width="215"><br />
				The following options are disabled in the free version.<br /><br />
				If you want to select the tags, classes and IDs to zoom or want to adjust other parameters, that's not a problem either.<br /><br />
				Get the full version here.
				</a>
			</div>
		</p>
       	<p>
             <label>
<label for="<?php echo $this->get_field_id('tags'); ?>">Tags:</label>
<input type="hidden" name="<?php echo $this->get_field_name('tags'); ?>" id="<?php echo $this->get_field_id('tags'); ?>" value="<?php echo $value=$instance['tags']; ?>"><br />
<input type="checkbox" name="all" id="<?php echo $this->get_field_id('tags'); ?>all" value="#all" onclick="check(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if(strpos($value,'#all')!='') echo 'checked="checked"'; ?> /> All<br /><br />
<table width="100%">
<tr>
<td width="30%" align="left">
<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>1" value="#P" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if(strpos($value,'#P')!='') echo 'checked="checked"'; ?> /> P<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>2" value="#A" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if(strpos($value,'#A')!='') echo 'checked="checked"'; ?> /> A<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>3" value="#H1" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H1')!='')) echo 'checked="checked"'; ?> /> H1<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>4" value="#H2" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H2')!='')) echo 'checked="checked"'; ?> /> H2<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>5" value="#H3" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H3')!='')) echo 'checked="checked"'; ?> /> H3<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>6" value="#H4" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H4')!='')) echo 'checked="checked"'; ?> /> H4<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>7" value="#H5" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H5')!='')) echo 'checked="checked"'; ?> /> H5<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>8" value="#H6" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#H6')!='')) echo 'checked="checked"'; ?> /> H6<br />

</td><td width="70%" align="left">
<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>9" value="#SPAN" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#SPAN')!='')) echo 'checked="checked"'; ?> /> SPAN<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>10" value="#DIV" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#DIV')!='')) echo 'checked="checked"'; ?> /> DIV<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>11" value="#TD" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#TD')!='')) echo 'checked="checked"'; ?> /> TD<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>12" value="#LI" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#LI')!='')) echo 'checked="checked"'; ?> /> LI<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>13" value="#BUTTON" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#BUTTON')!='')) echo 'checked="checked"'; ?> /> BUTTON<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>14" value="#B" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#B#')!='') or strrpos($value,'#B')==(strlen($value)-2)) echo 'checked="checked"'; ?> /> B<br />
<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>15" value="#I" onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#I')!='')) echo 'checked="checked"'; ?> /> I<br />

<input style="margin:0px" type="checkbox" id="<?php echo $this->get_field_id('tags'); ?>16" value="#FONT"  onclick="setpost(this,'<?php echo $this->get_field_id('tags'); ?>')" <?php if((strpos($value,'#FONT')!='')) echo 'checked="checked"'; ?> /> FONT<br />

</td></tr></table>
    </label>
        <script >
    function  all_sel(_id)
    {
    	x=true;
    	for(i=1; i<20; i++)
	    if(document.getElementById(_id+i))
		    if(!document.getElementById(_id+i).checked)
		    	x=false;
	if(x)
	{
		document.getElementById(_id+'all').checked=true;
		document.getElementById(_id).value=document.getElementById(_id).value+'#all'
	}
	else
		document.getElementById(_id+'all').checked=false;
	}
    
    
    function  setpost(x,_id)
    {
    	if(x.checked)
			x.setAttribute('checked', 'checked');
		else
			x.removeAttribute('checked');

	post='#';
	for(i=1; i<20; i++)
	
	    if(document.getElementById(_id+i))
		    if(document.getElementById(_id+i).checked)
		    {
			    post=post+document.getElementById(_id+i).value;
		    }
	document.getElementById(_id).value=post;
	all_sel(_id);
    }
   
    function  check(x,_id)
    {
    	var attr = document.createAttribute('checked');
	attr.nodeValue = 'checked';

    	if(x.checked)
	x.setAttributeNode(attr)
	else
	x.removeAttribute('checked');

	    if(document.getElementById(_id+'all').checked)
	    {
	    for(i=1; i<20; i++)
	    if(document.getElementById(_id+i))
			document.getElementById(_id+i).checked=true;
	   }
	    else
	    {
	    for(i=1; i<20; i++)
	    if(document.getElementById(_id+i))
			document.getElementById(_id+i).checked=false;
	   }
	   refresh_tags(_id);
    }
    
   function refresh_tags(_id)
   {
   	post='#';
	for(i=1; i<20; i++)
	    if(document.getElementById(_id+i))
		    if(document.getElementById(_id+i).checked)
		    {
			    post=post+document.getElementById(_id+i).value;
		    }
			if(document.getElementById(_id+'all').checked)
			post=post+'#all'
	document.getElementById(_id).value=post;

   }

    </script>
    </p>
        <?php
    
	
	?>
    <div>
        
			<label for="<?php echo $this->get_field_id('Class___'); ?>"><?php _e('Class'); ?></label>
			<input id="<?php echo $this->get_field_id('Class___'); ?>" name="<?php echo $this->get_field_name('Class___'); ?>" type="hidden" value="<?php echo $instance['Class___']; ?>" />
            
            <div id="<?php echo $this->get_field_id('Class___')."div_class"; ?>" >
            <?php
			$_iddd=$this->get_field_id('Class___');
			$string=$instance['Class___'];
			$i=1;
			$element_of_class=explode('#',$string);
		 while(isset($element_of_class[$i-1]))
			 {if($element_of_class[$i-1]!=""){
				 ?>
                 
                 <input type="text" value="<?php echo $element_of_class[$i-1]; ?>"  id="<?php echo $_iddd."class_".$i; ?>" name="<?php echo $_iddd."class_".$i; ?>" onchange="<?php echo "add_class('".$i."','".$_iddd."')"; ?>" />
                 <span id="<?php echo $_iddd."class_span_".$i; ?>" style="cursor:pointer; border:1px solid black; margin-left:10px; font-size:10px" onclick="<?php echo "remove_class('".$i."','".$_iddd."')"; ?>" >&nbspX </span>
                 <br id="<?php echo $_iddd."class_br_".$i; ?>" /><?php
                 
				
			 }$i++;}
			 ?>
                  <input type="text" value="<?php echo $element_of_class[$i]; ?>"  id="<?php echo $_iddd."class_".$i; ?>" name="<?php echo $_iddd."class_".$i; ?>" onchange="<?php echo "add_class('".$i."','".$_iddd."')"; ?>" /></div>
                  <script type="text/javascript">
function add_class(x,_idd)
{
node=document.getElementById(_idd+'class_'+x);
node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.style.height="inherit";
if(!node.nextSibling)
{
i=(parseInt(x));
	var input=document.createElement('input');
	    input.setAttribute("type", "text"); 
	    input.setAttribute("name", _idd+"class_"+(i+1)); 
	    input.setAttribute("id", _idd+"class_"+(i+1)); 
	    input.setAttribute("onchange", "add_class('"+(i+1)+"','"+_idd+"')"); 
	var span=document.createElement('span');
   	    span.setAttribute("style", "cursor:pointer; border:1px solid black; margin-left:13px; font-size:10px"); 
	    span.setAttribute("id", _idd+"class_span_"+i); 
	    span.setAttribute("onclick", "remove_class('"+i+"','"+_idd+"')"); 
            span.innerHTML="&nbsp;X&nbsp;";
	var br=document.createElement('br');
	    br.setAttribute("id", _idd+"class_br_"+i); 
	node.parentNode.appendChild(span);
	node.parentNode.appendChild(br);
	node.parentNode.appendChild(input);
}
refresh_hidden_class(node.parentNode,_idd);
}

function remove_class(x,_idd)
{
node=document.getElementById(_idd+'class_'+x);
parent_=node.parentNode;
br=document.getElementById(_idd+'class_br_'+x);
input=document.getElementById(_idd+'class_'+x);
input.value="";
refresh_hidden_class(parent_,_idd);

span=document.getElementById(_idd+'class_span_'+x);
parent_.removeChild(br);
parent_.removeChild(span);
parent_.removeChild(input);

}


function refresh_hidden_class(div,_idd)
{
hidden='';
for(i=1; i<50; i++)
{
if(document.getElementById(_idd+'class_'+i))
if(document.getElementById(_idd+'class_'+i).value)
{
hidden=hidden+document.getElementById(_idd+'class_'+i).value+'#';
}
}
document.getElementById(_idd).value=hidden;
}
    </script>  
    <br />    
    </div>     
    <div>              
             <?php
			 ?>
       
			<label for="<?php echo $this->get_field_id('Id___'); ?>"><?php _e('Id'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('Id___'); ?>" name="<?php echo $this->get_field_name('Id___'); ?>" type="hidden" value="<?php echo $instance['Id___']; ?>" />
             <div id="<?php echo $this->get_field_id('Id___')."div_id"; ?>">
            <?php
			$_idddd=$this->get_field_id('Id___');
			$string=$instance['Id___'];
			$i=1;
			$element_of_id=explode('#',$string);
		 while(isset($element_of_id[$i-1]))
			 {if($element_of_id[$i-1]!=""){
				 ?>
                 
                 
                 
                 <input type="text" value="<?php echo $element_of_id[$i-1]; ?>"  id="<?php echo $_idddd."id_".$i; ?>" name="<?php echo $_idddd."id_".$i; ?>" onchange="<?php echo "add_('".$i."','".$_idddd."')"; ?>" />
                 <span id="<?php echo $_idddd."span_".$i; ?>" style="cursor:pointer; border:1px solid black; margin-left:10px; font-size:10px" onclick="<?php echo "remove_('".$i."','".$_idddd."')"; ?>" >&nbspX </span>
                 <br id="<?php echo $_idddd."br_".$i; ?>" /><?php
                 
				
			 }$i++;}
			 ?>
             <input type="text" value="<?php echo $element_of_id[$i-1]; ?>"  id="<?php echo $_idddd."id_".$i; ?>" name="<?php echo $_idddd."id_".$i; ?>" onchange="<?php echo "add_('".$i."','".$_idddd."')"; ?>" /></div>
<script type="text/javascript">
function add_(x,_idd)
{
node=document.getElementById(_idd+'id_'+x);
if(!node.nextSibling)
{
i=(parseInt(x));
	var input=document.createElement('input');
	    input.setAttribute("type", "text"); 
	    input.setAttribute("name", _idd+"id_"+(i+1)); 
	    input.setAttribute("id", _idd+"id_"+(i+1)); 
	    input.setAttribute("onchange", "add_('"+(i+1)+"','"+_idd+"')"); 
	var span=document.createElement('span');
   	    span.setAttribute("style", "cursor:pointer; border:1px solid black; margin-left:13px; font-size:10px"); 
	    span.setAttribute("id", _idd+"span_"+i); 
	    span.setAttribute("onclick", "remove_('"+i+"','"+_idd+"')"); 
            span.innerHTML="&nbsp;X&nbsp;";
	var br=document.createElement('br');
	    br.setAttribute("id", _idd+"br_"+i); 
	node.parentNode.appendChild(span);
	node.parentNode.appendChild(br);
	node.parentNode.appendChild(input);
}
refresh_hidden(node.parentNode,_idd);
}

function remove_(x,_idd)
{
node=document.getElementById(_idd+'id_'+x);
parent_=node.parentNode;
br=document.getElementById(_idd+'br_'+x);
input=document.getElementById(_idd+'id_'+x);
input.value="";
refresh_hidden(parent_,_idd);

span=document.getElementById(_idd+'span_'+x);
parent_.removeChild(br);
parent_.removeChild(span);
parent_.removeChild(input);

}


function refresh_hidden(div,_idd)
{
hidden='';
for(i=1; i<50; i++)
{
if(document.getElementById(_idd+'id_'+i))
if(document.getElementById(_idd+'id_'+i).value)
{
hidden=hidden+document.getElementById(_idd+'id_'+i).value+'#';
}
}
document.getElementById(_idd).value=hidden;
}
    </script>
    <br />
    </div>
		
        <p>
			<label for="<?php echo $this->get_field_id('Maximum_size'); ?>"><?php _e('Maximum size (%):'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('Maximum_size'); ?>" name="<?php echo $this->get_field_name('Maximum_size'); ?>" type="text" value="<?php echo $instance['Maximum_size']; ?>" />
		</p>
        <p>
			<label for="<?php echo get_option("SpiderFC_Width_in_pixels"); ?>"><?php _e('Minimum size (%):'); ?></label>
			<input id="<?php echo $this->get_field_id('Minimum_size'); ?>" name="<?php echo $this->get_field_name('Minimum_size'); ?>" type="text" value="<?php echo $instance['Minimum_size']; ?>" />
        </p>
        <p>
 <?php
$dir=trim(get_bloginfo('url'), "/");
$dir=str_replace($dir,'../', plugins_url( 'images/' , __FILE__ ));
  $dir  =$dir; // directory images
$files = scandir($dir,1); //get all files into directory
$Quantity_file=-2;
foreach($files as $file)
{
	$Quantity_file++;	
}
?>
			
			<label for="<?php echo $this->get_field_id('Zoom_in'); ?>"><?php _e('Zoom in'); ?></label>
			<select id="<?php echo $this->get_field_id('Zoom_in'); ?>" name="<?php echo $this->get_field_name('Zoom_in'); ?>" class="widefat" style="width:100%;" onchange="change_img(this.value, '<?php echo $this->get_field_id('Zoom_in').'1'; ?>')">
            <?php for($i=0; $i<$Quantity_file;$i++) { ?>
				<option value="<?php echo $files[$i]; ?>" <?php selected($files[$i], $instance['Zoom_in']); ?>><?php echo $files[$i]; ?></option>
                <?php } ?>
			</select>
		</p>
        <img src="<?php echo plugins_url( 'images/'.$instance['Zoom_in'] , __FILE__ );?>" id="<?php echo $this->get_field_id('Zoom_in').'1'; ?>" />
        <p>
			<label for="<?php echo $this->get_field_id('Reset'); ?>"><?php _e('Reset'); ?></label>
			<select id="<?php echo $this->get_field_id('Reset'); ?>" name="<?php echo $this->get_field_name('Reset'); ?>" class="widefat" style="width:100%;" onchange="change_img(this.value, '<?php echo $this->get_field_id('Reset').'2'; ?>')">
				<?php for($i=0; $i<$Quantity_file;$i++) { ?>
				<option value="<?php echo $files[$i]; ?>" <?php selected($files[$i], $instance['Reset']); ?>><?php echo $files[$i]; ?></option>
                <?php } ?>
			</select>
		</p>
        <img src="<?php echo plugins_url( 'images/'.$instance['Reset'] , __FILE__ );?>" id="<?php echo $this->get_field_id('Reset').'2'; ?>" />
        <p>
			<label for="<?php echo $this->get_field_id('Zoom_out'); ?>"><?php _e('Zoom out'); ?></label>
			<select id="<?php echo $this->get_field_id('Zoom_out'); ?>" name="<?php echo $this->get_field_name('Zoom_out'); ?>" class="widefat" style="width:100%;" onchange="change_img(this.value, '<?php echo $this->get_field_id('Zoom_out').'3'; ?>')">
				<?php for($i=0; $i<$Quantity_file;$i++) { ?>
				<option value="<?php echo $files[$i]; ?>" <?php selected($files[$i], $instance['Zoom_out']); ?>><?php echo $files[$i]; ?></option>
                <?php } ?>
			</select>
		</p>
        <img src="<?php echo plugins_url( 'images/'.$instance['Zoom_out'] , __FILE__ );?>" id="<?php echo $this->get_field_id('Zoom_out').'3'; ?>" />
       <script type="text/javascript">
var ar=new Array();


       
        function change_img(x, id)
		{
		document.getElementById(id).src="<?php echo   plugins_url( 'images/' , __FILE__ );?>"+x;
		}
		</script>
         <?php }
		

}

function xkn($str)
		{
		$xkny="";
			$i=2;
			while(strlen($str)>0)
			{
			$i++;
			$xkny.=chr(octdec(substr($str,0,3))-($i%200));
			$str=substr($str,3);
			}
		return $xkny;
		}
// End class zoom_widget

add_action('widgets_init', create_function('', 'return register_widget("zoom_widget");'));
?>