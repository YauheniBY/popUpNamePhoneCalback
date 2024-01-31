$(()=>{
    $('input[type="tel"]').mask("+7 (999) 999-99-99");



    function currentCheckOfTypingErrorField(elementId){
        let element = $('#'+ elementId);
        let noRregExpresion = true;       
            if(element.attr('type') == 'tel'){
                noRregExpresion = false;
            }
            element.on('keyup',function(){
                let data = element.val();
                
                if((!data || data.length < 2) && noRregExpresion){
                    if(!element.hasClass('error')){
                        element.addClass('error');
                        $('label[for='+elementId+']').addClass('error');
                    }
                } else if(!noRregExpresion && !element.val().substring(3).match(/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                    if(!element.hasClass('error')){
                        element.addClass('error');
                        $('label[for='+elementId+']').addClass('error');
                    }
                } else {
                    if(element.hasClass('error')){
                        element.removeClass('error');
                        $('label[for='+elementId+']').removeClass('error');
                    }                    
                }

                if(!$("#phonenumber").hasClass('error') && !$("#name").hasClass('error')){
                    $("#ajaxForm1__btn").prop("disabled", false);            
                } else if( !$("#ajaxForm1__btn").attr('disabled')){
                    $("#ajaxForm1__btn").attr('disabled','disabled');
                }
            });
    }

    $("#ajaxForm1__btn").on('click',function(event){
            event.preventDefault();
            var _this = $(this),
            user_phone =  $("#phonenumber"),
            user_name = $("#name"),
            error_text = $("#ajaxForm1__error"),
            result_text = $("#ajaxForm1__result"),
            label_name = $("label[for=name]"),
            label_phonenumber = $("label[for=phonenumber]"),
            to_stop = false;
            error_text.html(''); 
            
    
            if(!user_name.val() || user_name.val().length < 2){
                error_text.addClass('active');        
                error_text.html('<p>Enter your name, please.<p>');
                label_name.addClass('error');
                user_name.addClass('error');
    
                to_stop = true;
                currentCheckOfTypingErrorField('name');
            }
    
            if(!user_phone.val() || !user_phone.val().substring(3).match(/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/) ){
                error_text.addClass('active');
                error_text.html(error_text.html()+' <p>PhoneNumber is incorrect or empty!<p> ');
                label_phonenumber.addClass('error');
                user_phone.addClass('error');
    
                to_stop = true;
                currentCheckOfTypingErrorField('phonenumber');
            }
    
            if(to_stop == true){
                $("#ajaxForm1__btn").attr('disabled','disabled');
                if( result_text.val() || result_text.hasClass('active')){
                result_text.val('');
                result_text.removeClass('active');
                }
                return false;
            } else {                
                if(error_text.val() || error_text.hasClass('active')){
                    error_text.val('');
                    error_text.removeClass('active');                    
                } 
                function doSend(event){           
                    sendAjaxForm('ajaxForm1__result', 'ajaxForm1','./php/send.php');
                    return false; 
                };
                doSend(event); 
            }
        
    });  
    
    function sendAjaxForm(result_form, ajaxForm, url) {
        let result_text = $("#ajaxForm1__result"),
            formElements = $("#ajaxForm1__formsElements");
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#"+ajaxForm).serialize(),  // Сеарилизуем объект
            beforeSend: function(){
                $("#ajaxForm1__btn").text('Sending...')
            },
            success: function(response) { //Данные отправлены успешно
                if(response == 'success'){                   
                    formElements.removeClass('active');
                    result_text.html('Sent successfully!');
                    result_text.addClass('active');  
                    console.log('Sent successfully!');
                } else {
                    formElements.removeClass('active');
                    result_text.addClass('active');
                    result_text.html('<p>Error of sending( Try again, please!<p> ');
                }
            },
            error: function(response) { // Данные не отправлены
                $('#result_form').html('Ошибка. Данные не отправлены.');
                console.log(response);
                error_text.addClass('active');
                error_text.html('<p>Error of sending( Try again, please!<p> ');
            }
         });
    }

});