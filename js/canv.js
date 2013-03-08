$(function (){
	drawMessiMessage();
});

function drawMessiMessage(){
	// draw();
	// return;
	var message = document.getElementById('message').value;
	if(message.length>60)
			return;

	var canvas = document.getElementById('canv');
	console.log(document.getElementById('message').value);
	
    var context = canvas.getContext('2d');
	var imageObj = new Image();

	imageObj.onload= function(){
		
		// console.log(imageObj.width);
		// console.log(imageObj.height);
		// canvas.width=imageObj.width;
		// canvas.height=imageObj.height;

		context.drawImage(imageObj,0,0);	
		context.save();
	    context.translate(canvas.width/2,canvas.height/2);
		context.rotate(-Math.PI/15);
	    context.font = '13pt Cedarville Cursive';
	    context.fillStyle='#5D310C';
	    var lines = getLines(context,message,-25,80,145,25);
	    console.log(lines);
	    if(lines == 1 )
	    	wrapText(context,message,-25,80+25,145,25);
	    if(lines == 2 )
	    	wrapText(context,message,-25,80+10,145,25);
	    if(lines == 3 )
	    	wrapText(context,message,-25,80,145,25);

	    document.getElementById('para').innerHtml='xx'
	    // context.fillText(message, -30, 80);
	    context.restore();

	}
	canvas.width=600;
	canvas.height=450;  
	// imageObj.width="100";
	// imageObj.height="100";
	imageObj.src="img/messi_clear_opt.png"; 	
}

  function wrapText(context, text, x, y, maxWidth, lineHeight) {
    var words = text.split(' ');
    var line = '';
    var testWidth=1;
    for(var n = 0; n < words.length; n++) {
      var testLine = line + words[n] + ' ';
      var metrics = context.measureText(testLine);
      testWidth = metrics.width;
      if(testWidth > maxWidth) {
        context.fillText(line, x, y);
        line = words[n] + ' ';
        y += lineHeight;
      }
      else {
        line = testLine;
      }
    }
    var xx = (maxWidth - context.measureText(line).width)/2;
    context.fillText(line, x+xx, y);
  }

  function getLines(context, text, x, y, maxWidth, lineHeight) {
    var words = text.split(' ');
    var line = '';
    var lines=1;
    for(var n = 0; n < words.length; n++) {
      var testLine = line + words[n] + ' ';
      var metrics = context.measureText(testLine);
      var testWidth = metrics.width;
      if(testWidth > maxWidth) {
      	lines++;
        line = words[n] + ' ';
        y += lineHeight;
      }
      else {
        line = testLine;
      }
    }
    return lines;
  }


function draw() {
  var ctx = document.getElementById('canv').getContext('2d');
  ctx.translate(75,75);
  for (i=1;i<6;i++){
    ctx.save();
    ctx.fillStyle = 'rgb('+(51*i)+','+(255-51*i)+',255)';
    for (j=0;j<i*4;j++){
	    ctx.rotate(Math.PI*2/(i*6));
	    ctx.beginPath();
	    ctx.arc(0,i*12.5,5,0,Math.PI*2,true);
	    ctx.fill();
    }
    ctx.restore();
  }
}
