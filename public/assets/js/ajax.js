$(document).ready(function(){
    //Заказ на ремонт

    $('#repairOrder').on('click',function(eventObject){
        eventObject.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var type = $('#type').val();
        var text = $('#text').val();
        var date = $('#date').val();
        //alert(email);
        if(name != '' && email != '' && phone != ''){
            //console.log(email);
            $.ajax({
                url: '/',
                type: 'POST',
                method: 'POST',
                dataType: 'json',
                data: {
                    name:name,
                    email:email,
                    phone:phone,
                    type:type,
                    text:text,
                    date:date
                },
                complete: function(data){
                    var res = JSON.parse(data.responseText);
                         if(res.answer == "Ok"){
                             $('#info').html('<div class="alert alert-success alert-dismissable" id="info">\n' +
                                 '                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\n' +
                                 '                <strong>Успех!</strong> Ваше сообщение успешно отправленно.В ближайшее время с Вами вжется наш сотрудник\n' +
                                 '            </div>');
                             $('#name').val('');
                             $('#email').val('');
                             $('#phone').val('');
                             $('#text').val('');
                         }else{
                             $('#info').html('<div class="alert alert-warning alert-dismissable" id="info">\n' +
                                 '                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\n' +
                                 '                <strong>Ошибка!</strong> Произошла ошибка.Пожалуйста обратитесь к админестратору через форму <a href="/contact/"> обратной связи</a>\n' +
                                 '            </div>');
                         }
                }
            });
        }else{
            alert('Поля имени, E-mail и номера телефона обязательны для заполнения');
        }
    })
// Заказ на звонок
    $('#bell').on('click',function(eventObject){
        eventObject.preventDefault();
        var name = $('#nameBell').val();
        var phone = $('#phoneBell').val();
        var type_zayvki = $('#type_zayvkiBell').val();
        var date = $('#dateBell').val();
        var bell = $('#bellBell').val();
        if(name != "" && phone != ""){
            $.ajax({
                url: '/',
                type: 'POST',
                method: 'POST',
                dataType: "json",
                data:{name:name,phone:phone,type_zayvki:type_zayvki,date:date,bell:bell},
                complete: function(data){
                    var res = JSON.parse(data.responseText);
                    if(res.answer == "Ok"){
                        $('#infoBlok').html('<div class="alert alert-success alert-dismissable" id="info">\n' +
                            '                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\n' +
                            '                <strong>Успех!</strong> Ваше сообщение успешно отправленно.В ближайшее время с Вами свяжется наш сотрудник\n' +
                            '            </div>');
                        $('#name');
                        $('#phone');
                    }else{
                        $('#infoBlok').html('<div class="alert alert-warning alert-dismissable" id="info">\n' +
                            '                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\n' +
                            '                <strong>Ошибка!</strong> Произошла ошибка.Пожалуйста обратитесь к админестратору через форму <a href="/contact/"> обратной связи</a>\n' +
                            '            </div>');
                    }
                }
            });
        }else{
            alert('Заполните все поля формы');
        }
    });
});