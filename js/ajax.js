function doAjax(request){
    //с помощью xhr мы отправляем запрос и получаем ответ
    var xhr = new XMLHttpRequest();

    //проверка устанволенного метода
    if(request.method === 'GET'){
        request.url += '?' + request.data;
        request.data = null;
        //data будем передавать в теле запроса, а при get оно остается пустым
    }
    
    //open настраивает запрос
    //method - способ отправки (гет или пост)
    //url - определяет в какой url будет отправлен запрос
    xhr.open(request.method, request.url);

    //если тип данных не равен object, то устанавливаем кодировкку
    if(typeof request.data != 'object'){
        //устанавливаем заголовок Content-Type
        xhr.setRequestHeader('Content-Type', request.contestType);
    }

    //присвоим обработчику onreadystatechange
    xhr.onreadystatechange = function(){
        //проверка на успешный запрос
        if(xhr.readyState === 4 && xhr.status === 200){
            //callback - функция обратного вызова
            request.callback(xhr.responseText);
        }
    }

    //отправляем запрос
    xhr.send(request.data);
}