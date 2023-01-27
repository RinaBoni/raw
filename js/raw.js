	  // переменная, в которой хранится выбранное математическое действие
	  var op; 

	  // функция расчёта
	  function func() {
	  	// переменная для результата
	    var porsion;

        
	    var meat;
	    var organs;
	    var liver;
	    var bones;
	    // получаем первое и второе число
	    var weight = Number(document.getElementById("weight").value);
	 
	    // смотрим, что было в переменной с действием, и действуем исходя из этого
	    switch (op) {
	      case '0':
	        porsion = 'введите активность';
	        break;
	      case '1':
	        porsion = weight * 10;
	        break;
	      case '2':
	        result = weight * 20;
	        break;
	      case '/':
	        result = weight * 30;
	        break;
	    }

        meat = (porsion / 100) * 80;
        organs = (porsion / 100) * 5;
        liver = (porsion / 100) * 5;
        bones = (porsion / 100) * 10;
        // result = weight +3;
	    // отправляем результат на страницу
	    document.getElementById("porsion").innerHTML = porsion;
	    document.getElementById("meat").innerHTML = meat;
	    document.getElementById("organs").innerHTML = organs;
	    document.getElementById("liver").innerHTML = liver;
	    document.getElementById("bones").innerHTML = bones;
	  }