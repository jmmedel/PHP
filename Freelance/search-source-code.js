
function get_search_proposals(){

var sPath = '';

var aInputs = Array();

var aInputs = $('li').find('.get_online_sellers');

var aKeys   = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

var sPath = '';

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'online_sellers[]=' + aKeys[i]+'&';

}

}

var aInputs = $('li').find('.get_cat_id');

var aKeys   = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] = oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'cat_id[]=' + aKeys[i]+'&';

}

}

var aInputs = $('li').find('.get_delivery_time');

var aKeys   = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'delivery_time[]=' + aKeys[i]+'&';

}

}

var aInputs = Array();

var aInputs = $('li').find('.get_seller_level');

var aKeys   = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){
	
aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'seller_level[]=' + aKeys[i]+'&';

}

}

var aInputs = Array();

var aInputs = $('li').find('.get_seller_language');

var aKeys   = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'seller_language[]=' + aKeys[i]+'&';

}

}

$('#wait').addClass("loader");

$.ajax({  

url:"search_load.php",  
method:"POST",  
data: sPath+'zAction=get_search_proposals',  
success:function(data){

$('#search_proposals').html('');  

$('#search_proposals').html(data); 

$('#wait').removeClass("loader");

}  

});							  

$.ajax({  

url:"search_load.php",  
method:"POST",  
data: sPath+'zAction=get_search_pagination',  
success:function(data){  

$('#search_pagination').html('');  

$('#search_pagination').html(data); 

}  

});

}

$('.get_online_sellers').click(function(){ 

get_search_proposals(); 

});

$('.get_cat_id').click(function(){ 

get_search_proposals(); 

});

$('.get_delivery_time').click(function(){ 

get_search_proposals(); 

});

$('.get_seller_level').click(function(){ 

get_search_proposals(); 

}); 

$('.get_seller_language').click(function(){ 

get_search_proposals(); 

});