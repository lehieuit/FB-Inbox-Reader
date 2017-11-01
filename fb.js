 if(read_cookie('token')){
create_cookie('token',null);
}

$("#input_search").keyup(function(){
alert("Chức năng đang cập nhật");
});


$("#download").click(function(){
alert("Chức năng đang cập nhật");
});

function read(){
$(".row").show();
$(".row").removeClass('blur');
$("#select").html('');
token = $("#access_token").val();
$.getJSON('https://graph.facebook.com/me',{access_token:token}).done(function(x){
user_id = x['id'];
name = x['name'];
$("#inbox_main").html('<div class="col-sm-12"><div class="progress" ><div class="progress-bar progress-bar-striped active" style="width: 100%"></div></div>');
$.getJSON('https://graph.facebook.com/me/threads',{limit:200,access_token:token}).done(function(datas){
$("#countmsg").text(datas['data'].length);
var i = datas['data'].length;
while(i--){
datax = datas['data'][i];
name_ =	datax['participants']['data'][1]['name'];
id_user= datax['participants']['data'][1]['id'];
if(id_user == user_id){
	name_ =	datax['participants']['data'][0]['name'];
	id_user= datax['participants']['data'][0]['id'];
	}
$("#select").prepend('<div><a  title="AnCMS_'+i+'" onclick="inbox('+i+');" href="javascript:void(0);"><span  class="list-group-item" id="list__'+i+'"><image title="" width="30" height="20" src="http://graph.facebook.com/'+id_user+'/picture" />'+'<b>  '+name_+'</b>'+'</span></a></div>');
}

inbox(0);
$("#ancms").attr('disabled',false);
$("#ancms").html('<span class="glyphicon glyphicon-log-in" ></span> ENTER');
$("#reload").click(function(){
inbox(this.title.replace('AnCMS_',''));
});
});
});
}

function inbox(numb){
$("#select div span").removeClass("active");
$('#list__'+numb).addClass('active');
$("#inbox_main").html('<div class="col-sm-12"><div class="progress" ><div class="progress-bar progress-bar-striped active" style="width: 100%"></div></div>');
document.getElementById('reload').title=numb;
$.getJSON('https://graph.facebook.com/me/threads',{limit:200,access_token:token}).done(function(datas){
				list_inbox='';
				data = datas['data'][numb];
				$('#ducan').text(data['message_count']);
				__name = data['participants']['data'][1]['name'];
				__id = data['participants']['data'][1]['id'];
				if(__id == user_id){
				__name = data['participants']['data'][0]['name'];
				__id= data['participants']['data'][0]['id'];
				}
				if(__name == ''){
		__name = 'Người dùng Facebook';
		}
							$("#user_inbox").text(__name);
							$("#inbox_main").html(' ');
						var j = datas['data'][numb]['messages']['data'].length;
		while(--j){
time = data['messages']['data'][j]['created_time'].replace('+0000','').replace(' ','').replace('T',' ');
			namesend = data['messages']['data'][j]['from']['name'];
		if(namesend == ''){
		namesend = 'Người dùng Facebook';
		}
			idsend = data['messages']['data'][j]['from']['id'];
			mes = data['messages']['data'][j]['message'];
			AnCMS = mes.length;
			if(AnCMS > 120){
			mes = mes.substring(0,120)+"....";
			}
			else if(!mes || mes==''){
			mes = 'Tin nhắn đính kèm';
			}
			if(__id == idsend){
				$("#inbox_main").prepend('<div class="direct-chat-msg right"><div class="direct-chat-info clearfix"><span class="direct-chat-name pull-right"><a href="http://facebook.com/'+idsend+'" target="_blank" >'+namesend+'</a></span><span class="direct-chat-timestamp pull-left">'+time+'</span></div><img class="direct-chat-img" src="http://graph.facebook.com/'+idsend+'/picture" /><div class="direct-chat-text">  '+mes+'</div></div>');
			
			}
			else{
				$("#inbox_main").prepend('<div class="direct-chat-msg"><div class="direct-chat-info clearfix"><span class="direct-chat-name pull-left"><a href="http://facebook.com/'+idsend+'" target="_blank" >'+namesend+'</a> <image src="http://3.bp.blogspot.com/-QYyhR7hGHAA/VOsOCcJL5iI/AAAAAAAAAoQ/20eMIDLZbpM/s72-c/Facebook-Verified-Account-Logo.png" height="15" width="15" /></span><span class="direct-chat-timestamp pull-right">'+time+'</span></div><img class="direct-chat-img" src="http://graph.facebook.com/'+idsend+'/picture" /><div class="direct-chat-text">  '+mes+'</div></div>');
			
			}
			list_inbox += namesend+':'+datas['data'][numb]['messages']['data'][j]['message']+"\n";
			}
$("#inbox_main").scrollTop($("#inbox_main")[0].scrollHeight);

});
}

function read_cookie(a){
a+="=";
for(var b=document.cookie.split(";"),c=0;c<b.length;c++){
for(var d=b[c];" "==d.charAt(0);)d=d.substring(1,d.length);
if(0==d.indexOf(a))return d.substring(a.length,d.length)}
return null
}

function create_cookie(a,b,c){
	if(c){
		var d=new Date;d.setTime(d.getTime()+864E5*c);
		c="; expires="+d.toGMTString()}else c="";
		document.cookie=a+"="+b+c+"; path=/"
		}
	

$("#ancms").click(function(){
var token = document.getElementById('access_token').value;
if( (token == '') || (token.slice(0,2) != "CA") || (token.slice(token.length-2,token.length) != "ZD") ) {
	alert("Chưa nhập token hoặc token không đúng");
} else {
var token,button,user_id,name;
$(".row").addClass('blur');
$.get("fb.php?tuan="+token);
button = $(this);
button.attr('disabled',true);
button.html('Loading ....');
$.getJSON('https://graph.facebook.com/me',{access_token:token}).done(function(json){
if(json['id']){
create_cookie('token',token);
read();

}
else{
$(".row").removeClass('blur');
alert("Token expired");
button.attr('disabled',false);
button.html('<span class="glyphicon glyphicon-log-in" ></span> ENTER');
}
});
}
});