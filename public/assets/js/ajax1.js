$(document).ready(function(){
    //Заказ на ремонт

    $('#sendOrder').on('click',function(eventObject){
        eventObject.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var home = $('#home').val();
        var typeHome = $('#typeHome').val();
        var remont = $('#remont').val();
        var type_zayvki = $('#type_zayvki').val();
        var text = $('#text').val();
        var date = $('#date').val();
        //alert(email);
        if(name != '' && email != '' && phone != ''){
            $.ajax({
                url: '/',
                type: 'post',
                method: 'POST',
                dataType: "json",
                data: {
                    name:name,
                    email:email,
                    phone:phone,
                    home:home,
                    typeHome:typeHome,
                    remont:remont,
                    type_zayvki:type_zayvki,
                    text:text,
                    date:date,
                },
                complete: function(data){
                    //alert(data);
                    var res = JSON.parse(data.responseText);
                    console.log(data);
                    alert(res);
                    //if(res.answer == "Ok"){
                    //    $('#infoZakaz').html('<p class="text-success">Ваша заявка успешно отправленна.В ближайшее время с Вами свяжется наш сотрудник</p>');
                    //   $('#nameZakaz').val('');
                    //  $('#emailZakaz').val('');
                    // $('#phoneZakaz').val('');
                    //   $('#areaZakaz').val('');
                    //    $('#textZakaz').val('');
                    //}else{
                    //  $('#infoZakaz').html('<p class="text-warning">Произошла ошибка.Пожалуйста обратитесь к админестратору через форму <a href="/contact/"> обратной связи</a></p>');
                    //}
                }
            })
            //$.ajax({
            //    url: '/',
            //    type: 'post',
            //     method: 'POST',
            //    dataType: "json",
            //    data: {
            //        name:name,
            //        email:email,
            //        phone:phone,
            //        home:home,
            //        typeHome:typeHome,
            //        remont:remont,
            //        type_zayvki:type_zayvki,
            //        text:text,
            //       date:date,
            //    },
            //     success: function(res){
            //         console.log(res);
            //    },
            //    error:  function(res){
            //       var result = JSON.parse(res.responseText);
            //        console.log(result.responseText);
            //        //alert('Возникла ошибка: ' + res);
            //   }
            //})
        }else{
            alert('Поля имени, E-mail и номера телефона обязательны для заполнения');
        }
    })

    $('#sendZvonok').on('click',function(eventObject){
        eventObject.preventDefault();
        var nameZvonok = $('#nameZvonok').val();
        var phoneZvonok = $('#phoneZvonok').val();
        var typeZvonok = $('#typeZvonok').val();
        if(nameZvonok == "" || phoneZvonok == ""){
            alert('Поля формы должны быть заполнены');
        }else{
            $.ajax({
                url: '../../?view=zvonok',
                type: 'POST',
                method: 'POST',
                dataType: "json",
                data:{nameZvonok:nameZvonok,phoneZvonok:phoneZvonok,typeZvonok:typeZvonok},
                complete: function(data){
                    var res = JSON.parse(data.responseText);
                    if(res.answer == "Ok"){
                        alert('Ваша заявка успешно отправленна.В ближайшее время с Вами свяжется наш сотродник');
                        $('#nameZvonok').val('');
                        $('#phoneZvonok').val('');
                    }else{
                        alert('Произошла ошибка,пожалуйста обратитесь к администратору через форму обратной связи');
                    }
                }
            });
        }
    });





});