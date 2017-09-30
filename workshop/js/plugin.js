/**
 * Created by MahmoudWageeh94 on 02-Feb-17.
 */
/**
 * Created by MahmoudWageeh94 on 02-Feb-17.
 */
/*start features*/
var el = document.getElementById('graph'); // get canvas

var options = {
    percent:  el.getAttribute('data-percent') || 25,
    size: el.getAttribute('data-size') || 180,
    lineWidth: el.getAttribute('data-line') || 5,
    rotate: el.getAttribute('data-rotate') || 0
};

var canvas = document.createElement('canvas');
var span = document.createElement('span');
span.textContent = options.percent + '%';


var ctx = canvas.getContext('2d');
canvas.width = canvas.height = options.size;

el.appendChild(span);
el.appendChild(canvas);

ctx.translate(options.size / 2, options.size / 2); // change center
ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI); // rotate -90 deg

//imd = ctx.getImageData(0, 0, 240, 240);
var radius = (options.size - options.lineWidth) / 4;

var drawCircle = function(color, lineWidth, percent) {
    percent = Math.min(Math.max(0, percent || 1), 1);
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
    ctx.strokeStyle = color;
    ctx.lineCap = 'round'; // butt, round or square
    ctx.lineWidth = lineWidth;
    ctx.stroke();
};

drawCircle('#ccffff', options.lineWidth, 100 / 100);
drawCircle('#33ccff', options.lineWidth, options.percent / 100);
//second canvas
var el1= document.getElementById('graph1'); // get canvas

var options1 = {
    percent1:  el1.getAttribute('data-percent') || 25,
    size1: el1.getAttribute('data-size') || 180,
    lineWidth1: el1.getAttribute('data-line') || 5,
    rotate1: el1.getAttribute('data-rotate') || 0
};

var canvas1 = document.createElement('canvas');
var span1 = document.createElement('span');
span1.textContent = options1.percent1 + '%';

var ctx1 = canvas1.getContext('2d');
canvas1.width = canvas1.height = options1.size1;

el1.appendChild(span1);
el1.appendChild(canvas1);

ctx1.translate(options1.size1 / 2, options1.size1 / 2); // change center
ctx1.rotate((-1 / 2 + options1.rotate1 / 180) * Math.PI); // rotate -90 deg

//imd = ctx.getImageData(0, 0, 240, 240);
var radius1 = (options1.size1 - options1.lineWidth1) / 4;

var drawCircle1 = function(color1, lineWidth1, percent1) {
    percent1 = Math.min(Math.max(0, percent1 || 1), 1);
    ctx1.beginPath();
    ctx1.arc(0, 0, radius1, 0, Math.PI * 2 * percent1, false);
    ctx1.strokeStyle = color1;
    ctx1.lineCap = 'round'; // butt, round or square
    ctx1.lineWidth = lineWidth1;
    ctx1.stroke();
};

drawCircle1('#ccffff', options1.lineWidth1, 100 / 100);
drawCircle1('#cc3399', options1.lineWidth1, options1.percent1 / 100);
// third canvas
var el2 = document.getElementById('graph2'); // get canvas

var options2 = {
    percent2:  el2.getAttribute('data-percent') || 25,
    size2: el2.getAttribute('data-size') || 180,
    lineWidth2: el2.getAttribute('data-line') || 5,
    rotate2: el2.getAttribute('data-rotate') || 0
};

var canvas2 = document.createElement('canvas');
var span2 = document.createElement('span');
span2.textContent = options2.percent2 + '%';

var ctx2 = canvas2.getContext('2d');
canvas2.width = canvas2.height = options2.size2;

el2.appendChild(span2);
el2.appendChild(canvas2);

ctx2.translate(options2.size2 / 2, options2.size2 / 2); // change center
ctx2.rotate((-1 / 2 + options2.rotate2 / 180) * Math.PI); // rotate -90 deg

//imd = ctx.getImageData(0, 0, 240, 240);
var radius2 = (options2.size2 - options2.lineWidth2) / 4;

var drawCircle2 = function(color2, lineWidth2, percent2) {
    percent2 = Math.min(Math.max(0, percent2 || 1), 1);
    ctx2.beginPath();
    ctx2.arc(0, 0, radius2, 0, Math.PI * 2 * percent2, false);
    ctx2.strokeStyle = color2;
    ctx2.lineCap = 'round'; // butt, round or square
    ctx2.lineWidth = lineWidth2;
    ctx2.stroke();
};

drawCircle2('#ccffff', options2.lineWidth2, 100 / 100);
drawCircle2('#00cc99', options2.lineWidth2, options2.percent2 / 100);

var el3 = document.getElementById('graph3'); // get canvas

var options3 = {
    percent3:  el3.getAttribute('data-percent') || 25,
    size3: el3.getAttribute('data-size') || 180,
    lineWidth3: el3.getAttribute('data-line') || 5,
    rotate3: el3.getAttribute('data-rotate') || 0
};

var canvas3 = document.createElement('canvas');
var span3 = document.createElement('span');
span3.textContent = options3.percent3 + '%';

var ctx3 = canvas3.getContext('2d');
canvas3.width = canvas3.height = options3.size3;

el3.appendChild(span3);
el3.appendChild(canvas3);

ctx3.translate(options3.size3 / 2, options3.size3 / 2); // change center
ctx3.rotate((-1 / 2 + options3.rotate3 / 180) * Math.PI); // rotate -90 deg

//imd = ctx.getImageData(0, 0, 240, 240);
var radius3 = (options3.size3 - options3.lineWidth3) / 4;

var drawCircle3 = function(color3, lineWidth3, percent3) {
    percent3 = Math.min(Math.max(0, percent3 || 1), 1);
    ctx3.beginPath();
    ctx3.arc(0, 0, radius3, 0, Math.PI * 2 * percent3, false);
    ctx3.strokeStyle = color3;
    ctx3.lineCap = 'round'; // butt, round or square
    ctx3.lineWidth = lineWidth3;
    ctx3.stroke();
};

drawCircle3('#ccffff', options3.lineWidth3, 100 / 100);
drawCircle3('#ff6633', options3.lineWidth3, options3.percent3 / 100);
/*end features*/