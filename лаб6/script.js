function validateForm() {
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let actions = document.getElementById('actions').value;
    let problem = document.getElementById('problem').value;
    let output = document.getElementById('output').value;
    
    if (name == ''|| actions == '' || problem == '') {
        alert('Данные поля обязательны для заполнения');
        return false;
    }
    if (isNaN(phone)) {
        alert('Пожалуйста, введите корректный номер телефона');
        return false;
    }
    output.innerHTML = 'Дата:'+ date <br> 'Заказчик:' + name <br> 'Адрес:' + address <br> 
    'Телефон' + phone <br> 'Адрес электронной почты' + mail <br> 'Модель, характеристика, год выпуска, серийный номер:'
    + model <br> 'Что нужно выполнить: *' + actions <br> 'Описание неисправности: *' + problem;
    let RepairForm = document.getElementById('RepairForm').reset();
}