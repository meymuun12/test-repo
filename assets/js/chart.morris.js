$(document).ready(function(){lineChart();donutChart();pieChart();$(window).resize(function()
    {window.lineChart.redraw();
    window.donutChart.redraw();
    window.pieChart.redraw();});});
function
    lineChart(){window.lineChart=Morris.Line({element:'line-chart',data:[{y:'2006',a:100,b:90},{y:'2007',a:75,b:65},{y:'2008',a:50,b:40},{y:'2009',a:75,b:65},{y:'2010',a:50,b:40},{y:'2011',a:75,b:65},{y:'2012',a:100,b:90}],xkey:'y',ykeys:['a','b'],labels:['check in','Check out '],lineColors:['#fec670','#0096fe'],lineWidth:'3px',resize:true,redraw:true});}
function
 donutChart(){
    window.donutChart=Morris.Donut({element:'donut-chart',data:[{label:"1st Floor Rooms",value:6},{label:"2nd Floor Rooms",value:6},{label:"3rd Floor Rooms",value:2},{label:"Staff`s rooms",value:2},{label:"Ground Floor Rooms",value:3},],backgroundColor:'#f2f5fa',labelColor:'#1362FC',colors:['#fec670','#0096fe','#11CEFF','#92C0F2','#52ed97'],resize:true,redraw:true});}
function pieChart(){var paper=Raphael("pie-chart");paper.piechart(100,100,90,[18.373,18.686,2.867,23.991,9.592,0.213],{legend:["Windows/Windows Live","Server/Tools","Online Services","Business","Entertainment/Devices","Unallocated/Other"]});}