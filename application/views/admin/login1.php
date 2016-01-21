<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CSS蜂窝效果</title>
<style>
html,body{margin:0;padding:0;width:100%;}
#wrap{margin:0;padding:0;width:100%;}
#wrap:after{content:"";display:block;height:0;clear:both;visibility: hidden;overflow:hidden;}
.post{width:120px;height:80px;display:inline-block;background:#0099ff;float:left;border-right:1px dotted #fff;border-left:1px dotted #fff;margin-top:100px;position:relative;overflow:visible;margin-top:52px;-webkit-transition:all .3s linear;-moz-transition:all .3s linear;}
.post:before{content:"<em></em>";width:0px;height:0px;display:inline-block;border-left: 60px dotted transparent; border-right: 60px dotted transparent; border-bottom: 50px solid #0099ff;font-size:0;position:absolute;top:-50px;left:0px;}
.post:after{content:"<em></em>";width:0px;height:0px;display:inline-block;border-left: 60px dotted transparent; border-right: 60px dotted transparent; border-top: 50px solid #0099ff;font-size:0;position:absolute;bottom:-50px;left:0px;}
</style>
</head>
<body>
<div id="wrap">
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
<div class='post'>
</div>
</div>
<script src="http://www.q3060.com/ajaxjs/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
(function($){
$.fn.sixBorder = function(options){
var defaults={
post:'post'
}
var options=$.extend(defaults,options);
var wrapWidth=$(this)[0].offsetWidth,postWidth=$("."+options.post)[0].offsetWidth,lineNum=Math.floor(wrapWidth/postWidth),lineLimit=Math.floor((wrapWidth-61)/postWidth);
$("."+options.post).each(function(index){
var _this = $(this);
_this.css({'margin-left':'0px'});
if(lineLimit == lineNum){
var numPer=index%lineNum;
if(numPer == 0){
var linePer=Math.floor(index/lineNum)%2;
if(linePer == 1){
_this.css({'margin-left':'61px'});
}
}
}else{
var numPer=index%(lineLimit+lineNum);
if(numPer == 0){
_this.css({'margin-left':'61px'});
}
};
});
}
})(jQuery);
$("#wrap").sixBorder();
$(window).resize(function(){
$("#wrap").sixBorder();
});
</script>
</body>
</html>