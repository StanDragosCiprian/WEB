function hello(z) {
	document.getElementById("f").innerHTML=z;
}
function add(a,b){
	return a+b;
}
function timez(a){
	return a*60;
}
function bitwiseAND(n1, n2) {
	let x=n1&n2;
	document.write(x+"\n");
}
function bitwiseOR(n1, n2) {
	let x=n1|n2;
	document.write(x+"\n");
}
function bitwiseXOR(n1, n2) {
	let x=n1^n2;
	document.write(x+"\n");
}
function addUp(num) {
	var x=0;
	for(var i=0;i<=num;i++){
		x+=i;
	}		
	document.write(x);
	
}
function matchHouses(step) {
	var x=0;
	for(var i=1;i<=step;i++){
		if(i<=1)
		{
			x+=6;
		}else{
			x+=6-1;
		}
	}
	document.write(x);
}
hello(timez(add(6,3)));
matchHouses(87);

