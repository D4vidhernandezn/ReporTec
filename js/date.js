var  today = new Date();
var m = today.getMonth() + 1;
var mes = (m < 10) ? '0' + m : m;
document.write('Fecha: '+today.getDate(),'/' +mes,'/'+today.getFullYear());


var d = new Date();
document.write('<br> Hora: '+d.getHours(),':'+d.getMinutes());