document.addEventListener("DOMContentLoaded", () => {



    let allPagesFormData = [];

    getAllForms('').forEach( form => {
        allPagesFormData.push(form);
    });

    renewMaskForPhones(allPagesFormData);
    

    console.log(allPagesFormData);

    allPagesFormData.forEach(function(form){

        form.submitBtn.element.addEventListener('click',function(event){
            event.preventDefault();  

            let to_stop = false;

            clearAllNotifications(form);    
                

            form.fields.forEach(function(formField){

                if(formField.type != 'submit' && formField.type != 'fieldset' ){
                    
                    renewFieldData (formField);

                    

                    if(formField.required){
                        
                        switcherMarkForFormField (formField, form);
                        if(!formField.isCorrectValue){
                            to_stop = true;
                        }
                        currentCheckingRequiredFieldAfterTypingEvent(formField, form);
                    } 

                } 
            });
            if(!to_stop){                     
                          
                sendAjaxForm(form,'./php/send.php');
            }

            return false; 
            
        });

    });

    function clearAllNotifications(form){
        if(form.errorTextElement && form.errorTextElement.classList.contains('active')){
            form.errorTextElement.innerHTML = '';
            form.errorTextElement.classList.remove('active');
            form.resultTextElement.classList.remove('active');
        }
        if(form.resultTextElement && form.resultTextElement.classList.contains('active')){
            form.resultTextElement.innerHTML = '';
            form.resultTextElement.classList.remove('active');
        }
    }
    function switchLoadingOn(form){
        if(form.loadingElement && !(form.loadingElement.classList.contains('active'))){
            form.loadingElement.classList.add('active');
        }
    }

    function switchLoadingOff(form){
        if(form.loadingElement && form.loadingElement.classList.contains('active')){
            form.loadingElement.classList.remove('active');
        }
    }




    function isRequiredFieldFilledCorrectly(formField, form){

        let result = true;

        switch (formField.type) {
            case 'text':
                if (!formField.value || !formField.value.trim()){
                    result = false;
                };
                break;
            case 'tel':
                if(multiCountry){
                    if(!formField.value){
                        result = false; 
                    } else if((Object.keys(currentCountry).length != 0)){
                        if(currentCountry.code == "RU"){
                            if(!formField.value.substr(3).match(/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                                result = false;
                            } 
                        } else if(currentCountry.code == "BY"){
                        if(!formField.value.substr(5).match(/([\(]{1}[0-9]{2}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                            result = false;                    
                            }
                        }
                        else if(currentCountry.code == "DE"){
                            if(!formField.value.substr(2).match(/([0-9]{1}[ ]{1}[\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{3}[\-]{1}[0-9]{2})/)){
                                result = false;                    
                                }
                            }
                        else if(currentCountry.code == "FR"){
                            if(!formField.value.substr(4).match(/([0-9]{2}[-]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                                result = false;                    
                                }
                            } //+38 099 999 99 99
                        else if(currentCountry.code == "UA"){
                            if(!formField.value.substr(4).match(/([0-9]{2}[ ]{1}[0-9]{3}[ ]{1}[0-9]{2}[ ]{1}[0-9]{2})/)){
                                result = false;                    
                                }
                            } //+1 (333) 333-3333
                        else if(currentCountry.code == "US"){
                            if(!formField.value.substr(3).match(/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[-]{1}[0-9]{4})/)){
                                result = false;                    
                                }
                            }
                    }
                } else {if(!formField.value){
                    result = false; 
                     } else{
                        if((Object.keys(defaultCountry).length != 0) && defaultCountry.code == "RU"){
                            if(!formField.value || !formField.value.substr(3).match(/([\(]{1}[0-9]{3}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                                result = false;
                            } 
                        } else if((Object.keys(defaultCountry).length != 0) && defaultCountry.code == "BY"){
                            if(!formField.value || !formField.value.substr(5).match(/([\(]{1}[0-9]{2}[\)]{1}[ ]{1}[0-9]{3}[\-]{1}[0-9]{2}[\-]{1}[0-9]{2})/)){
                                result = false;                    
                            }
                        }
                    }
                }                              
                break;
            case 'email':
                let valueStr = formField.value.trim();
                if(
                    !formField.value 
                    || !(/@/.test(valueStr))
                    || /@/.test(valueStr.substring(valueStr.indexOf('@') + 1)) 
                    || !(/\./.test(valueStr.split('@')[1]))
                    || /\./.test(valueStr.substring(valueStr.indexOf('.') + 1))
                    || ((valueStr.split('@')[1]).split('.')[0]).length < 2
                    || !(/^[a-zA-Z]*$/.test(valueStr.split('.')[1]))
                    || (valueStr.split('@')[0]).length < 2
                    || (valueStr.split('.')[1]).length < 2
                ){
                    result = false;
                }
                break;
            case 'number':                
                if(!formField.value ){                   
                    result = false;
                }
                break;
            case 'select':                
                if(!formField.value ){                   
                    result = false;
                } else{
                    if(formField.hasOptgroup && formField.element.querySelectorAll('option').length){
                        formField.element.querySelectorAll('option').forEach(option=>{
                            if(option.value == formField.element.value){
                                if(option.hasAttribute('data-optgroup') && option.getAttribute('data-optgroup')){
                                    formField.opgroupValue = option.getAttribute('data-optgroup');
                                }                                
                            }
                        }); 
                    }                                       
                }
                break;
            case 'checkbox':
                if (!formField.checked){
                    result = false;
                }
                break;
            case 'radio':
                let isOneOfSiblingChecked = false;
                formField.siblings.forEach(radioField=>{
                    if(radioField.checked){
                        isOneOfSiblingChecked = true
                    }
                    form.fields.forEach(siblingElement=>{
                        siblingElement.isCorrectValue = true;
                    })
                })

                if (!isOneOfSiblingChecked){
                    result = false;
                }
                break;
            default:
                result = true;
          }
          return result;
    };

    function switcherMarkForFormField (formField, form){
        formField.isCorrectValue = isRequiredFieldFilledCorrectly(formField, form);
        let errorIndicatorForField;
        if(formField.type != 'radio' ){
            errorIndicatorForField = formField.label;
        }else{
            errorIndicatorForField = formField.labelForError;
        }

        if(formField.isCorrectValue){           

            if(errorIndicatorForField && errorIndicatorForField.element.classList.contains("error")){
                errorIndicatorForField.element.classList.remove("error");
            }
            if(formField.type != 'radio'){
                if(formField.element.classList.contains("error")){
                    formField.element.classList.remove("error");                    
                }
            }

            
        } else {
            if(form.errorTextElement){
                if(!form.errorTextElement.classList.contains('active')){
                    form.errorTextElement.classList.add('active');
                } 
                form.errorTextElement.innerHTML = '<p>Not all of required fields are correctly filled.<p>';
                setTimeout(clearAllNotifications, 4000, form);
            } 

            if(errorIndicatorForField && !errorIndicatorForField.element.classList.contains("error")){
                errorIndicatorForField.element.classList.add("error");
            }

            if(formField.type != 'radio'){
                formField.element.classList.add("error");
            }           

            form.submitBtn.element.setAttribute('disabled', 'disabled');
        };
    }
    



    function currentCheckingRequiredFieldAfterTypingEvent(formField, form){
        formField.element.addEventListener('keyup',function(){
            currentCheckingRequiredFields(formField, form);
            clearAllNotifications(form);
        });
        formField.element.addEventListener('click',function(){
            currentCheckingRequiredFields(formField, form);
            clearAllNotifications(form);
        });
        formField.element.addEventListener('contextmenu',function(e){              
                window.addEventListener("mousemove",function(){ 
                        currentCheckingRequiredFields(formField, form);                  
                },{ once: true });
                clearAllNotifications(form);
        });
    }

    function renewFieldData (formField){
        if(formField.type == 'radio' || formField.type == 'checkbox'){
            formField.checked = formField.element.checked;
        } else {
            if(typeof formField.value === 'string'){
                formField.value = formField.element.value.trim();
            } else {
                formField.value = formField.element.value;
            }
        }
    };


    function currentCheckingRequiredFields(formField, form){

        renewFieldData (formField);
            
            switcherMarkForFormField (formField, form);

            if(formField.isCorrectValue){
                let isBtnSubmitDisabled = false;
                form.fields.forEach(function(formFieldItem){
                        if( !formFieldItem.isCorrectValue){
                            isBtnSubmitDisabled = true;
                        }

                    });
                if(!isBtnSubmitDisabled){
                    form.submitBtn.element.removeAttribute('disabled');
                    if(form.errorTextElement){
                        if(form.errorTextElement.classList.contains('active')){
                            form.errorTextElement.classList.remove('active');
                        } 
                     form.errorTextElement.innerHTML = '';
                    } 
                }
            }
    };

    function setInitialValueForBtnSubmit(form){
        if(form.submitBtn.element.tagName == 'INPUT'){
            if(form.submitBtn.element.value != form.submitBtn.initialValue){
                form.submitBtn.element.value = form.submitBtn.initialValue;
            }
        } else if(form.submitBtn.element.tagName == 'BUTTON'){
            form.submitBtn.element.innerHTML = '';
            if(form.submitBtn.element.textContent != form.submitBtn.initialValue){
                form.submitBtn.element.textContent = form.submitBtn.initialValue;
            }
        }
    };

    function checkAndMakeValueUnical(str,array,unicalPrefix = 1){
        let isSameNameInArray = false;
          
        if(str && str.trim().length){
            
            if(array.length){
                array.forEach(arrayItem=>{


                    if(arrayItem.name.length && arrayItem.name.trim() == str.trim()){
                        isSameNameInArray = true;
                    }
                });        
            }      
        } else {
            return `field_${unicalPrefix}`;
        }
        if(isSameNameInArray){
            if(str && str.trim().length){            
                return `${str.trim()}__${unicalPrefix}`;
            } else {
                return `field_${unicalPrefix}`;
            }
        } else if(str && str.trim().length){            
            return `${str.trim()}`;
        } else {
            return `field_${unicalPrefix}`;
        }
    };

  
    
    function sendAjaxForm(form, url) {
        let postData = [];
        let counter = 1;

        let formsTitle = form.element.querySelector(`[data-title-for="${form.id}"]`) ?
        form.element.querySelector(`[data-title-for="${form.id}"]`) : null;

        if(formsTitle && formsTitle.textContent.trim().length){
            postData.push({
                'name': 'formName',
                'value': formsTitle.textContent.trim(),
            });
        }
        

        form.fields.forEach(function(formFieldItem){ 
            if(formFieldItem.type && formFieldItem.type != 'submit'){
                let fieldsName = `field_${counter++}`;

                if(formFieldItem.type == 'checkbox' || formFieldItem.type == 'radio' ){

                    if(formFieldItem.type == 'radio' && !formFieldItem.checked){
                        return false;
                    }
                    fieldsName = '';

                    
                    if(formFieldItem.belongGroup){
                        fieldsName += 'Group: ' + formFieldItem.name;
                        if(formFieldItem.label && formFieldItem.label.value.trim()){
                            fieldsName += ' Label: '+ formFieldItem.label.value.trim();
                        }
                        if(formFieldItem.value.length){
                            fieldsName += ' Value: ' + formFieldItem.value.trim();
                        }                         
                    } else{
                        if(formFieldItem.label && formFieldItem.label.value){
                            fieldsName += ' Label: ' + formFieldItem.label.value.trim();
                        }
                        if(formFieldItem.name){
                            fieldsName += 'FieldName' + formFieldItem.name;
                        }
                        if(formFieldItem.value.length){
                            fieldsName += ' Value: ' + formFieldItem.value.trim();
                        } 
                    }

                    if(!fieldsName.length){
                        fieldsName = `field_${counter}`;
                    }

                    fieldsName = checkAndMakeValueUnical(fieldsName,postData,counter); 

                    postData.push({
                        'name': fieldsName,
                        'value': formFieldItem.checked,
                    }); 

                } else if(formFieldItem.type == 'fieldset'){
                    fieldsName = checkAndMakeValueUnical(formFieldItem.label.value,postData,counter);
                    postData.push({
                        'name': fieldsName,
                        'value': formFieldItem.value,
                    });

                } else {
                    if(formFieldItem.label && formFieldItem.label.value && formFieldItem.label.value.trim().length){
                        fieldsName = formFieldItem.label.value.trim();
                    } else if(formFieldItem.name && formFieldItem.name.trim().length ){
                        fieldsName = formFieldItem.name.trim();
                    }


                    if(formFieldItem.type == 'select' && formFieldItem.opgroupValue.trim()){
                        fieldsName = checkAndMakeValueUnical(fieldsName,postData,counter);
                        postData.push({
                            'name': fieldsName,
                            'value': formFieldItem.value + ' ('+ formFieldItem.opgroupValue.trim() +')',
                        });

                    } else {
                        fieldsName = checkAndMakeValueUnical(fieldsName,postData,counter);
                        postData.push({
                            'name': fieldsName,
                            'value': formFieldItem.value,
                        });
                    }
                     
                }   
            } 
        });
            
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: postData, 
            beforeSend: function(){
                if(form.submitBtn.element.tagName == 'INPUT'){
                    form.submitBtn.element.value = 'Sending...';
                } else if(form.submitBtn.element.tagName == 'BUTTON'){
                    form.submitBtn.element.textContent = 'Sending...';
                }
                switchLoadingOn(form);
            },
            success: function(response) { //Данные отправлены успешно
                switchLoadingOff(form);
                if(form.resultTextElement){
                    form.resultTextElement.classList.add('active'); 
                    if(response == 'success'){
                        form.resultTextElement.innerHTML = '<p>Sent successfully!</p>';                        
                    } else {
                        form.resultTextElement.innerHTML = '<p>Fail sending. Somethong went wrong(';
                    } 
                    setTimeout(clearAllNotifications, 4000, form);                  
                } 
                setInitialValueForBtnSubmit(form);          
            },
            error: function(response) { // Данные не отправлены
                switchLoadingOff(form);
                if(form.resultTextElement){
                    form.resultTextElement.classList.add('active');
                    form.resultTextElement.innerHTML = '<p>Error. Data has been sent.</p>';
                }
                setTimeout(clearAllNotifications, 4000, form);
                setInitialValueForBtnSubmit(form);
            }
         });
    }

});