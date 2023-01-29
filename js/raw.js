// переменная, в которой хранится выбранное математическое действие
var activity =  document.getElementById("activity").value
var weight = Number(document.getElementById("weight").value);

var porsion;


var meat;

var organs;
var liver;
var bones;



switch (op) {
	case 'not choosen':
	porsion = 'введите активность';
	break;
	case 'low':
	porsion = weight * 10;
	break;
	case 'medium':
	result = weight * 20;
	break;
	case 'high':
	result = weight * 30;
	break;
}

meat = (porsion / 100) * 80;
organs = (porsion / 100) * 5;
liver = (porsion / 100) * 5;
bones = (porsion / 100) * 10;

document.getElementById("porsion").innerHTML = porsion;
document.getElementById("meat").innerHTML = meat;
document.getElementById("organs").innerHTML = organs;
document.getElementById("liver").innerHTML = liver;
document.getElementById("bones").innerHTML = bones;
