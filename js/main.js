document.addEventListener('DOMContentLoaded', function(){

    //проверяем наличие формы 
    if(document.forms.newPet){
        //устанавливаем оброботчик(addNewPet) на событие submit
        document.forms.newPet.addEventListener('submit', addNewPet);

        //принимает объект события для того, чтобы предотвратить действие по умолчанию
        function addNewPet(event){
            event.preventDefault();

            //отправляем форму при помощи объекта FormData 
            //this - элемент, на который установлем обработчик(форма newPet)
            var formData = new FormData(this);

            doAjax({
                method: '../add_pet.php',
                data: formData,
                callback: function(response){
                    alert(response);
                }
            })
        }
    }

});