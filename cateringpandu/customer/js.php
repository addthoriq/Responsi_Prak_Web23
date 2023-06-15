	<script>


function startCalc(){
interval = setInterval("calc()",0);}
function calc(){
a = document.autoSumForm.hargaayam.value;
b = document.autoSumForm.porsiayam.value;
document.autoSumForm.total1.value = (a) * (b);}

function startCalc1(){
interval = setInterval("calc1()",0);}
function calc1(){
c = document.autoSumForm.hargasoto.value;
d = document.autoSumForm.porsisoto.value;
document.autoSumForm.total2.value = (c) * (d);}

function startCalc2(){
interval = setInterval("calc2()",0);}
function calc2(){
e = document.autoSumForm.harganasgor.value;
f = document.autoSumForm.porsinasgor.value;
document.autoSumForm.total3.value = (e) * (f);}

function startCalc3(){
interval = setInterval("calc3()",0);}
function calc3(){
g = document.autoSumForm.hargadegan.value;
h = document.autoSumForm.porsidegan.value;
document.autoSumForm.total4.value = (g) * (h);}

function startCalc4(){
interval = setInterval("calc4()",0);}
function calc4(){
i = document.autoSumForm.hargacampur.value;
j = document.autoSumForm.porsicampur.value;
document.autoSumForm.total5.value = (i) * (j);}

function startCalc5(){
interval = setInterval("calc5()",0);}
function calc5(){
k = document.autoSumForm.hargadawet.value;
l = document.autoSumForm.porsidawet.value;
document.autoSumForm.total6.value = (k) * (l);}

function startCalc6(){
interval = setInterval("calc6()",0);}
function calc6(){
m = document.autoSumForm.hargamarta.value;
n = document.autoSumForm.porsimarta.value;
document.autoSumForm.total7.value = (m) * (n);}

function startCalc7(){
interval = setInterval("calc7()",0);}
function calc7(){
o = document.autoSumForm.hargaonde.value;
p = document.autoSumForm.porsionde.value;
document.autoSumForm.total8.value = (o) * (p);}

function startCalc8(){
interval = setInterval("calc8()",0);}
function calc8(){
q = document.autoSumForm.hargapiscok.value;
r = document.autoSumForm.porsipiscok.value;
document.autoSumForm.total9.value = (q) * (r);}

/*function kumpul(){
interval = setInterval("calc9()",0);}
function calc9(){
function calc("qr") {
	// body...
}
document.autoSumForm.total9.value}
*/
function stopCalc(){
clearInterval(interval);}
</script>



