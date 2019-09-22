
	/*---------------------------------------JFrame-----------------------------------------*
	 * JFrame is a javascript API developed by Jinu Joseph Daniel							*	
	 * This version is only a beta version .Most of the functions are under testing			*
	 * 																						*
	 * 																						*
	 * JFrame can be shared or used for any purpose											*
	 * No changes to JFrame should be applied without the permission of the author			*
	 * 																						*
	 * 																						*
	 * 																						*
	 * 																						*
	 * -------------------------------------------------------------------------------------*
	 * Contact:jinujosephdaniel@gmail.com													*
	 * */
	 function $request(url,code)
	{
		if(url == '?')
		{
			$man('$request');
			return "FALSE";
		}
		this.$method = '';
		if(typeof url == 'undefined' || url == '')
		this.$url = window.location.href;
		else
		this.$url = url;
		if(typeof url != 'undefined' ||code != '')
		this.$code = code;
		else
		this.$code = '' ;
		this.$data = '';
		this.$status = '' ;
		this.$state = '';
		this.$reply = '';
		this.$connect = new $XMLHttp();
		this.$connect = this.$connect.$$;
		this.$complete = function()
		{
			eval(this.$code);
		}
		this.$stateChange = function()
		{
			if(this.$connect.readyState==4 && this.$connect.status == 200)
			{
				this.$reply = this.$connect.responseText;
				this.$complete();
			}
		}
		this.$sendGet = function(data)
		{
			this.$method = 'GET';
			if(typeof data == 'undefined'|| data == '')
			{
				alert('ERROR!!!\nData to send is not given in  call of $sendGet().\n\n\nCall $sendGet() with "?" as argument for help\n ');
				return "FALSE";
			}
			if(data.indexOf('=') == -1)
			{
				alert("ERROR!!!\nData to send using $sendGet() is to be passed in the form variable name1 = value1,variable name2 = value2...\n\n\nCall $sendGet() with '?' as argument for help\n ");
				return "FALSE";
			}
			data = data.split(',').join('&');
			if(this.$connect != 'FALSE')
			{
				url += '?'+data;
				this.$connect.open(this.$method,this.$url,true);
				this.$connect.send();
				var temp = this;
				this.$connect.onreadystatechange = function()
				{
					temp.$state = this.readyState;
					temp.$status = this.status;
					temp.$stateChange();
					
				}
				return  "TRUE";
			}
			else 
			{
				alert("$request() is not supported by your browser\n\nTRY ANOTHER BROWSER!!!");
				return "FALSE";
			}
		
		}
		this.$sendPost = function(data)
		{
			this.$method = 'POST';
			if(typeof url == 'undefined' || url == '')
			this.$url = window.location.href;
			if(typeof data == 'undefined'|| data == '')
			{
				alert('ERROR!!!\nData to send is not given in  call of $sendPost().\n\n\nCall $sendPost() with "?" as argument for help\n ');
				return "FALSE";
			}
			if(data.indexOf('=') == -1)
			{
				alert("ERROR!!!\nData to send using $sendPost() is to be passed in the form variable name1 = value1,variable name2 = value2...\n\n\nCall $sendPost() with '?' as argument for help\n ");
				return "FALSE";
			}
			data = data.split(',').join('&');
			
			if(this.$connect != 'FALSE')
			{
				this.$connect.open(this.$method,this.$url,true);
				this.$connect.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				this.$connect.send(data);
				var temp = this;
				this.$connect.onreadystatechange = function()
				{
					temp.$state = this.readyState;
					temp.$status = this.status;
					temp.$stateChange();
					
				}
				return  "TRUE";
			}
			else 
			{
				alert("$request() is not supported by your browser\n\nTRY ANOTHER BROWSER!!!");
				return "FALSE";
			}
		}
		
	}
	function $_GET()
	{
		var data = window.location.search;
		if(data == '')
		return "0";
		data = unescape(data);//decoding the encoded url
		data = data.slice(1);//deleting '?'
		data = data.split('&');
		var temp000000000;
		var temp111111111;
		for(var $$$$ = 0; $$$$<data.length;++$$$$)
		{
			temp000000000 = data[$$$$].split('=')
			temp111111111 = temp000000000[0].replace(" ","");
			temp111111111 = 'this.'+temp111111111+'='+temp000000000[1];
			eval(temp111111111);
		}
	}
	var $GET = new $_GET();//This object stores variables passed using GET method
	function $XMLHttp(target)
	{
			
		if(target == "?")
		{
			$man("$XMLHttp()");
			return "FALSE";
		}
		if(window.XMLHttpRequest)
		this.$$ = new XMLHttpRequest();
		else 
		this.$$= newActiveXObject("Microsoft.XMLHTTP");
		if(!this.$$)
		this.$$ = 'FALSE';
		this.$xmlDoc = 'FALSE';
		
		this.$ =  function(targetXMLDoc)
		{
				if(targetXMLDoc == "?")
				{
					this.$xmlDoc == 'FALSE';
					$man("$XMLHttp::$()");
					return "FALSE";
				}
				if(this.$xmlDoc != 'FALSE')//already called
				{
					alert('code for tag..also include for attributes of nodes');
				}
				else
				{
				
					if(typeof targetXMLDoc == 'string' && targetXMLDoc != '')
					{
						this.$xmlDoc = targetXMLDoc;
						var xmlDoc;
						if(targetXMLDoc.charAt(0) != '<' )
						{
							var connect = this.$$;
							if(connect == 'FALSE')
							{
								alert('ERROR!!!Your browser does not support $XMLHttp object');
								return "FALSE";
							}
							connect.open("GET",targetXMLDoc,false);
							connect.send();
							xmlDoc = connect.responseXML;
							if(!xmlDoc )
							{
							
								this.$xmlDoc == 'FALSE';
								alert('ERROR!!!\nThe  argument '+targetXMLDoc+' passed to $openXMLDoc() is not an  XML file or the file is not existing.\n\n\nCall $openXMLDoc() with "?" as argument for help\n ');
								return "FALSE";
							}
							else
							this.$xmlDoc = xmlDoc;
							
						}
						else
						{
							var $xhttp; 
							if (window.DOMParser)
							  {
								$xhttp = new DOMParser();
								this.$xmlDoc   = $xhttp.parseFromString(targetXMLDoc,"text/xml");
							  }
							else // for IE
							  {
								  this.$xmlDoc  = new ActiveXObject("Microsoft.XMLDOM");
								  this.$xmlDoc.async = "false";
								  this.$xmlDoc.loadXML(targetXMLDoc); 
							  }
						}
						
						
						
						
					}
					else
					{
						if(targetXMLDoc == '' || typeof targetXMLDoc == 'undefined')
						alert('ERROR!!!\nThe  first argument to $openXMLDoc() cannot be null');
						else
						alert('ERROR!!!\nThe  argument '+targetXMLDoc+' passed to $openXMLDoc() is invalid \n\nCall $openXMLDoc() with "?" as argument for help\n ');
						this.$xmlDoc == 'FALSE';
						return "FALSE";
					}
					return this;
				}
		}
		
		
		
	}
	 function $redirect(url)
	 {
		 if(typeof url == 'undefined' || url == '' || typeof url != 'string')
		 {
			 alert('ERROR!!! \Invalid url'+url+' passed to  $redirect()\nCall $redirect() with ? as argument, for help');
				return 0;
		 }
		 window.location.href = url;
	 }
			
	 function $delay(code,seconds)
	 {
			if(code == '?')
			$man('$delay');
			if(code == '' ||typeof code == 'undefined')
			{
				alert('ERROR!!! \nCode to be delayed is not passed to $delay()\nCall $delay() with ? as argument, for help');
				return "FALSE";
			}
			if(seconds == '' ||typeof seconds == 'undefined')
			{
				alert('ERROR!!! \nNumber of seconds, the code \n" '+code+' \n" \nis to be delayed is not specified in call of $delay()\nCall $delay() with ? as argument, for help');
				return "FALSE";
			}
			if(typeof seconds != 'number')
			{
				alert('ERROR!!! \nWrong argument " '+seconds+' "to $delay()\nCall $delay() with ? as argument, for help');
				return "FALSE";
			}
			
			seconds *= 1000;
			var $pid = window.setTimeout(code+";clearTimeout($pid)",seconds);
	}
	$catch = 'TRUE';
	function $handleResponse(responsetext)
	{
		$catch = responsetext;
		alert($catch);
	}
	Array.prototype.$clone = function(arg)
	{
	//raise error if arg is not array
		if(arg == '?')
		$man('$clone');
		else
		{
			var retArray = new Array();
			for(var i = 0;i<this.length;++i)
			if(typeof this[i] == 'object')
			retArray[i] = this[i].$clone();
			else 
			retArray[i] = this[i];
			return retArray;
		}
	}
	
	
	
	

	function $searchSubStr(Str,charSet,caseSensitive)
		{
				if(Str == '?')
				$man('$searchSubStr');
				caseSensitive = parseInt(caseSensitive);
				if(typeof Str == 'undefined' || Str == '')
				{
					alert("ERROR!!!\nString on which search is to be done is not given or it is null\n\nCall $searchSubStr() with '?' as argument for help");
					return "FALSE";
					
				}
				if(typeof charSet == 'undefined' || charSet == '')
				{
					alert("ERROR!!!\nString  which is to be searched is not given or it is null\n\nCall $searchSubStr() with '?' as argument for help");
					return "FALSE";
					
				}
				if(typeof caseSensitive != 'undefined' && caseSensitive != 0 && caseSensitive != 1 &&  caseSensitive.toString() != 'NaN' )
				{
					alert("ERROR!!!\nArgument "+caseSensitive+" passed to $searchSubStr() is invalid\n\nCall $searchSubStr() with '?' as argument for help");
					return "FALSE";
				}
				
				if(Str.length < charSet.length)
				alert('ERROR!!!\nThe length of string on which search is to be done is less than that of string to be searched\n\n\nCall $searchSubStr() with "?" as argument for help ');
				if(caseSensitive == 0 &&  caseSensitive.toString() != 'NaN' )//""==0 is true
				{
					Str = Str.toLowerCase();
					charSet = charSet.toLowerCase();
					
				}
				if(Str.indexOf(charSet)!= -1)
				return "TRUE";
				return "FALSE";
				
				
		}

function $validate(Str,charSet,caseSensitive,group)
{
				if(Str == '?')
				$man('$validate');
				if(typeof Str == 'undefined' || Str == '')
				{
					alert("ERROR!!!\nString to validate is not given or it is null\n\nCall $validate() with '?' as argument for help");
					return "FALSE";
					
				}
				if(typeof charSet == 'undefined' || charSet == '')
				{
					alert("ERROR!!!\nCharacters to exclude is not given or it is null\n\nCall $validate() with '?' as argument for help");
					return "FALSE";
					
				}
				if(typeof  group  != 'undefined' && group != '' && group != 'group')
				{
					
					alert("ERROR!!!\nArgument "+group+" passed to $validate() is invalid\n\nCall $validate() with '?' as argument");
					return "FALSE";
					
				}
				if(typeof caseSensitive != 'undefined' && caseSensitive != 0 && caseSensitive != 1 && caseSensitive != "")
				{
					alert("ERROR!!!\nArgument "+caseSensitive+" passed to $validate() is invalid\n\nCall $validate() with '?' as argument");
					return "FALSE";
				}
				var temp ;
				var alpha = 'abcdefghijklmnopqrstuvwxyz';
				var numeric = '0123456789';
				charSetDummy = charSet;
				charSet = charSet.toLowerCase();
				var len = Str.length;
				caseSensitive = parseInt(caseSensitive);
				var flag = 0;
				if(typeof group == 'undefined' || group == '')
				{
					charSet =  charSet.split(' ').join('');
					charSet =  charSet.split('+');
					if(charSet.indexOf('alpha') != -1)
					{
						flag = 1;
						temp = Str.toLowerCase();
						for(var i = 0;i<len;++i)
						{
							if(alpha.indexOf(temp[i])!= -1)
							return Str[i];
						}
						
					}
					if(charSet.indexOf('numeric') != -1)
					{
						flag = 1;
						for(var i = 0;i<len;++i)
						{
							if(numeric.indexOf(Str[i])!= -1)
							return Str[i];
						}
					}
					if(charSet.indexOf('uppercase') != -1)
					{
						flag = 1;
						temp = alpha.toUpperCase();
						for(var i = 0;i<len;++i)
						{
							if(temp.indexOf(Str[i])!= -1)
							return Str[i];
						}
					}
					if(charSet.indexOf('lowercase') != -1)
					{
						flag = 1;
						for(var i = 0;i<len;++i)
						{
							if(alpha.indexOf(Str[i])!= -1)
							return "FALSE";
						}
					}
						if(charSet.indexOf('alphanumeric') != -1)
					{
						flag = 1;
						return $validate(Str,'alpha+numeric');
						
					}
					if(charSet.indexOf('nonalphanumeric') != -1)
					{
						flag = 1;
						temp = alpha + numeric;
						for(var i = 0;i<len;++i)
						{
							if(temp.indexOf(Str[i].toLowerCase())== -1)
							return Str[i];
						}
					}
					if(flag == 0)
					{
						charSet = charSetDummy;
						if(caseSensitive == 0 &&  caseSensitive.toString() != 'NaN' )//NaN != NaN ..=>converted to string 
						{
							charSet = charSet.toLowerCase();
							var Str1 = Str.toLowerCase();
						}
						
						for(var i = 0;i<len;++i)
						if(charSet.indexOf(Str1[i])!= -1)
						return Str[i];
					}
				}
				else
				{
					if(group.toLowerCase() != 'group')
					{
						alert('ERROR!!!\nThe argument '+group+' passed to $validate() is invalid .\n\n\nCall $validate() with "?" as argument for help ');
						return "FALSE";
					}
					else if(charSet.length > Str.length)
					{
						alert('ERROR!!!\nThe length of string to be validated is less than that of string to be excluded\n\n\nCall $validate() with "?" as argument for help ');
						return "FALSE";
					}
					charSet = charSetDummy;
								if(caseSensitive == 0 &&  caseSensitive.toString() != 'NaN' )//NaN != NaN ..=>converted to string 
								{
									charSet = charSet.toLowerCase();
									Str =Str.toLowerCase();
								}
								if(Str.indexOf(charSet) != -1)
								return "FALSE";
							
				}
				return "TRUE";
			
}


function main()
{
	
	
	this.$$ = document;
	this.$temp = 'false';
	this.$target = '';
	this.$multiFlag = 0;//if selects multiple elemens ,this flag is set
	this.$= function(target)
	{
		
		if(target == "?")
		{
			$man("$");
			return "FALSE";
		}
		if(typeof target == 'undefined' || target == '')
		return this;
		else 
		{	
			if(target.substr(0,1)=='<' && target.substr(target.length-1,1) == '>')//inside an element
			{
				this.$$ = document.getElementsByTagName(target.substr(1,target.length-2));
				
				if(this.$$.length != 0)	
				{
					this.$target = target;
					this.$multiFlag = 1;
					return this;
				}
				else 
				{
					this.$$ = document;
					alert("Error ! ! ! !\nvalue "+target+" passed to $() is not a valid HTML element or the specified element is not existing in the current document\n\nCall $() with ? as argument, for help");
					return "FALSE";
				}
			}
			this.$$ = document.getElementById(target);
		
		
			if(this.$$ == null )
			{
				this.$$ = document.getElementsByName(target);
				if( this.$$[0] == null )
				{
					alert("Error ! ! ! !\nvalue "+target+" passed to $() is not an id or name of an existing box\n\nCall $() with ? as argument, for help");return "FALSE";	
				}
				else
				{
					this.$target = target;
					this.$multiFlag = 1;
				}
			}
			else
			{
					this.$target = target;
					this.$multiFlag = 0;
			}
			
		}
		
		if(typeof this.$$ != 'undefined')
		{return this;}
		else  return "FALSE";
	}
	this.$echo = function(Value,clear)
		{
			var ret = "TRUE";
			if(Value == "?")
			{
				$man("$echo");
				return ret;
			}
			
			
			
			if(typeof Value == 'undefined')
			return ret;
			else
			{
			
				
					if(this.$$ == document)
					this.$$ = document.body;
					if(typeof this.$$[0] =='undefined')
					{
						if(clear == '' || typeof clear == 'undefined' )
						{
							if(typeof this.$$.type != 'undefined')
							this.$$.value += Value;
							else
							this.$$.innerHTML += Value;
							
						}
						else
						{
							if(clear != 'clear')
							{
								alert("Argument "+clear+" for $echo() is Invalid . Call $echo() with ? as argument, for help");
								return "FALSE";
							}
							if(typeof this.$$.type != 'undefined')
							this.$$.value = Value;
							else
							this.$$.innerHTML = Value;
						}
					}
					else
					{
						var len = this.$$.length;
						var i = 0;
						if(typeof clear == 'undefined')
						while(i<len)
						{
							if(typeof this.$$[i].type != 'undefined')
							this.$$[i++].value += Value;
							else
							this.$$[i++].innerHTML += Value;
						}
						else
						{
							if(clear != 'clear')
							{
								alert("Argument "+clear+" for $echo() is Invalid . Call $echo() with ? as argument, for help");
								ret = "FALSE";
							}
							while(i<len)
							{
								if(typeof this.$$[i].type != 'undefined')
								this.$$[i++].value = Value;
								else
								this.$$[i++].innerHTML = Value;
								
							}
						}	
					}
					
				
			}
			this.$$ = document;
			
			return ret;
		}
	this.$date= function(selector)
		{
			if(selector == '?')
			$man('$date');
			var d = new Date();
			if(typeof selector == 'undefined')
			return d;
			if(selector == "day")
			return d.getDay() + 1;
			if(selector == "dd")
			return d.getDate();
			if(selector == "mm")
			return d.getMonth() + 1;
				if(selector == "yy")
			return d.getFullYear();
		}
	this.$time= function(selector)
		{
			var t = new Date();
			
			if(selector == "?")
			{
				$man("$time");
		    }
			var hour = t.getHours();
			if(selector == 'H')
			return hour;
			if(selector == 'h' || typeof selector == 'undefined'||selector =="" && selector != 24 )
			{
				if(t.getHours() > 12)
				hour -= 12 ;
				else if(hour == 0)
				hour = 12;
				if(selector == 'h')
				return hour;
			}
			if(selector =='s' || typeof selector == 'undefined'||selector =="" )
			{
				second = t.getSeconds();
				if(second<10)
				second = '0'+second;
				if(selector =='s')
				return second;
			}
			if(selector =='m' || typeof selector == 'undefined'||selector =="" )
			{
				minute = t.getMinutes();
				if(minute<10)
				minute = '0'+second;
				if(selector =='m')
				return minute;
			}
			if(selector =='M' || typeof selector == 'undefined'||selector =="" && selector != 24)
			{
				if(t.getHours()>=12)
				M =  "PM";
				else
				M = "AM";
				if(selector =='M')
				return M;
			}
			if(selector == 24)
			return hour + ":"+minute+ ":"+second;
			else if(selector == "" || typeof selector == 'undefined')
			return hour + ":"+minute+ ":"+second+":"+M;
			else
			return err(4,selector);
				
			
		}
		this.clock = function(c,h,target)
		{
		
			var am = "";
			var sec =  $.$time("s");
			var min =  $.$time("m");
			if(h == "H" )
			var hour = $.$time("H");
			else 
			{
				var hour = $.$time("h");
				am = $.$time("M");
				
			}
			
			if(c == 's')
			$.$(target).$echo(sec,"clear");
			else if(c == 'm')
			$.$(target).$echo(min,"clear");
			else if(c == 'h')
			$.$(target).$echo(hour,"clear");
			else if(c == 'time')
			$.$(target).$echo(hour +":"+min+":"+sec+" "+am,"clear");
			else
			if(h == "?"||c=="?")
			$man('clock()');
			else if(typeof c == 'undefined' || c == '')
			$.$(target).$echo($.$time(),"clear");
			else alert("Wrong argument'"+h+"'passed to clock\n");
			
			
		}
		this.$css = function(style_)
		{
			var ret = "TRUE";
			var d = style_;
			if(style_ == "?")
			{
				$man("$css");
				return "FALSE";
			}
			var styleVal ='';
			if(typeof style_ == 'undefined'||style_.indexOf(':')==-1|| style_ =="" )
			{
				if(typeof this.$$[0] != 'undefined')//else return style as a string
				{
					alert('Error!\nThere is more than one element having the name  or tagname specified in $()\nStyle attributes of more than one element cannot be selected at a time');
					return 'FALSE';
				}
				else
				{
					var elmClass = this.$$.className.split(" ");
					var Len = elmClass.length;
					var found = 0;
					var curSheet ;
					var rule;
					var sheetCnt = document.styleSheets.length;
					var ruleCnt;
					var I1;
					for(var I = 0;I<sheetCnt&&found<Len;++I)//this part is not final code sice it is browser dependent
					{
						
						sheet = document.styleSheets[I];

						rule =  sheet.cssRules ? sheet.cssRules : sheet.rules;//why this is null
						if(rule!=null)//in chrome rule is null
						{
							
							ruleCnt = rule.length;
							for(I1 =0 ;I1<ruleCnt;++I1)
							if(elmClass.indexOf(rule[I1].selectorText.toLowerCase()) != -1)
							{
								alert('g');
								styleVal += rule[I1].style.cssText;
								found++;
							}
						}
								
									
						
					}
					if(typeof this.$$.style != '' && this.$$.style !='')
					styleVal += this.$$.style.cssText;
					//remove duplicate values		
					alert(styleVal);
						
					
					
					
					
				}
				
				return styleVal;
			}
			else
			{
					if(style_ .indexOf('file://') == 0 )
					{
					
						if(style_ .indexOf('.css') +  4 != style_.length )
						{
							alert("Error !!!\nThe argument "+style_+" passed to $css() is not valid since the file is not a css file\nCall $css() with ? as argument for help");
							ret = "FALSE";
						}
						var linkElm = document.createElement('link');
						linkElm.setAttribute('rel','stylesheet');
						linkElm.setAttribute('type','text/css');
						linkElm.setAttribute('href',style_.slice(7));
						if (typeof linkElm != 'undefined')
						$.$("<head>").$$[0].appendChild(linkElm);
						
						return "TRUE";
					}
				
					if(style_=="")
					return "FALSE";
					
					var newStr = style_.split(';');
					var sp;
					var cnt;
					var loopVar = newStr.length;
					var index =0;
					if(newStr[loopVar-1]==""||typeof newStr[loopVar-1]=='undefined')//to avoid last ';'
					loopVar--;
					if(typeof this.$$[0] =='undefined')
					cnt = 1;
					else 
					cnt = this.$$.length;
					;
					
					while(index<loopVar)
					{
						sp =newStr[index++];
						if(sp.indexOf(':')==-1 || sp.charAt(sp.length -1 )== ':')
						{
							
							alert("Error !Cannot apply style property value "+newStr[index-1]+"used in $css\nUse ':' to separate the property and its value or use a valid non null value for propery after :");
							ret = "FALSE";
				
						}
						else
						{
							
							
							sp = sp.split(":");
							if(sp[0].indexOf('-')!= -1)
							{
								sp[0] = sp[0].split('-');
								if(sp[0][1]!= '')
								{
									
									sp[0][1] = sp[0][1].charAt(0).toUpperCase()+sp[0][1].slice(1);
									sp[0] = sp[0][0]+sp[0][1];
									
									
								}
								else 
								alert("Error !Cannot apply style property value "+newStr[index-1]+"used in $css which is not a valid style property.");
								
								
								
							}
							if(typeof this.$$[0] =='undefined'||this.$$.type=='select-one')
							{
								if(this.$$ == document)
								this.$$ = document.body;
								this.$$.style[sp[0]]= sp[1];
							}
							else 
							{
								var ct = 0;
								
								while(ct<cnt)
								this.$$[ct++].style[sp[0]]= sp[1];
								
							}
						}
					}
					
					
					this.$$ = document;
					return ret;
				
			}
			
		}
		this.$fade = function(secondS,dir__ )
		{
			if(typeof dir__ != 'undefined' )
			dir__ = dir__.toLowerCase();
			else
			var dir__ = 'in';
			if(secondS== '?')
			{
				$man('$validate');//write return  statement at this point for all functions
				return "FALSE";
			}
			if(typeof secondS != 'number')
			{
				alert("ERROR!!! \nArgument "+secondS+" for $fade() is Invalid . Call $fade() with ? as argument, for help");
				return "FALSE";
			}
			if(dir__ != 'in' && dir__ != 'out'&&typeof dir__ != 'undefined' )
			{
				alert("ERROR!!! \nArgument "+dir__+" for $fade() is Invalid . Call $fade() with ? as argument, for help");
				return "FALSE";
			}
			var op;
			var incr =1/(secondS*10);//10 frames per second
			var del = secondS/10;
			secondS -= del/10;
			if(this.$temp == 'false')
			{
				if(dir__ == 'in')
				{
					this.$css('opacity:0 !important;');
					this.$temp = 0;
				}
				else
				{
					this.$css('opacity:1 !important;');
					this.$temp = 1;
				}
			}
			else
			{
				
				if(dir__ == 'in')
				this.$temp += incr;
				else
				this.$temp -= incr;
			}			
			op = this.$temp;
		
			
			$.$(this.$target).$css('opacity:'+op+' !important');//after calling $css()or $echo ,$ object points back to document
			
			if(op >= 1 && dir__ == 'in')
			{
				this.$temp = 'false';
				$.$(this.$target).$css('opacity:1 !important');
				return "FALSE";
			}
			if(op <= 0 && dir__ == 'out')
			{
				this.$temp = 'false';
				$.$(this.$target).$css('opacity:0 !important');
				return "FALSE";
			}
			else
			{
				var code = "$.$('"+this.$target+"').$fade("+secondS+",'"+dir__+"')";
				$delay(code,del);
			}
			
			
		}
		
		
}
	function $man(topic)
		{
			
			var l;
			if(topic ==  "$time")
			l = "----function time(selector)----\nThis function is a method of $ object.\nselector = 's' returns seconds\nselector = 'm' returns minutes\nselector = 'h' returns hours in 12 hour format\nselector = 'H' returns hours in 24 hour format\nselector = 'M' returns 'AM' or 'PM' deending on time \nselector = 'help' dislays help on time()\n selector = '' returns time in standard format\n";
			else if(topic ==  "$")
			{
				l= "----function $(target)----\nThis function is a method of $ object.\nThis function selects all targets in the page.\nIf target is an id ,it will select the element having id as target.\nIf target is a name ,it will select all elements having name as target.\nIf target is a tag ,it will select all those tags .\nIf target is an id or name ,$() will return a reference to the element containing all properties of the element,called $$.\n$() can be chained.\n$() can be combined with other functions for achieving particular usage.\nExamples:---------\n$.$('<div>').$echo('hello');\n\nwill print 'hello' inside all <div> tags\n\n$.$('myId').$echo('hello'); will print 'hello'  inside the element having id or name as myId.If it is a name,$echo will print 'hello' in all elements having the particular name.Note that $$ will point to the element having id myId";
			}
			else if(topic ==  "$echo")
			{
				l= "----function $echo(value,clear)----\nThis function is a method of $ object.\nThis function prints value inside the element pointed by $$.If the argument clear = 'clear',contents inside the element will be cleared and replaced with value .Else if clear is not passed value will be appended to the content of the element\nFor elements like textareas,the text inside the text area(ie. value) will be replaced or appended accordingly\nExamples:---------\n$.$('<div>').$echo('hello');\n\nwill append 'hello' to the content of all <div> tags\n\n$.$('myId').$echo('hello','clear'); will print 'hello'  inside the element having id or name as myId\n";
			}
			else if(topic ==  "$clone")
			{
				l= "----function $clone()----\nThis function is a method of Array object.This returns an exact copy of an array\nExamples:---------\nvar arr1 = new Array(0,8,6);\nvar arr2 = new Array(9,8,7,arr1);\nvar arr3 = new Array();\narr3 = arr2.$clone();\n\nNow arr3 will be an exact copy of arr2.That means any change in arr2 will not reflect in arr3";
			}
			else
			l ="No help found for "+topic;
			alert(l);
		}
var $ = new main();

