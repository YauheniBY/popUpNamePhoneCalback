function getAllForms (wrapperFormClassName = '',exeptionsListofIds = []){
    if(!exeptionsListofIds.length){
        if(exceptionForms.length){
            exeptionsListofIds = exceptionForms;
        }
    }
    let resultArrayOfForms = [];
    let forms = document.querySelectorAll('form');
    forms.forEach(form => {
        if(wrapperFormClassName && !exeptionsListofIds.includes(`${form.id}`)){
            if(document.querySelector(`[data-wrapper-for="${form.id}"`) && document.querySelector(`[data-wrapper-for="${form.id}"`).classList.contains(wrapperFormClassName)){
                resultArrayOfForms.push(
                {   
                    'id': form.id,
                    'element':form,                    
                    'fields': getAllFormsFieldsFor(form),
                    'submitBtn': getSubmitBtnFor(form),
                    'openers': getAllOpenersFor(form.id),
                    'errorTextElement': document.querySelector(`[data-error-for="${form.id}"`),
                    'resultTextElement': document.querySelector(`[data-result-for="${form.id}"`),
                    'wrapperElement': document.querySelector(`[data-wrapper-for="${form.id}"`),
                    'closerElement': document.querySelector(`[data-closer-for="${form.id}"`), // Element
                    'loadingElement': document.querySelector(`[data-loading-for="${form.id}"`),
                    'mask': {
                        'selected': currentCountry.mask,
                        'default': defaultCountry.mask,
                    },

                });
            } 
        } else if(!exeptionsListofIds.includes(`${form.id}`)){
            resultArrayOfForms.push(
                {
                    'id': form.id,
                    'element':form, 
                    'fields': getAllFormsFieldsFor (form), //Array of {}
                    'submitBtn': getSubmitBtnFor(form), // {}
                    'openers': getAllOpenersFor(form.id), // Array of {}
                    'errorTextElement': document.querySelector(`[data-error-for="${form.id}"`), //Element
                    'resultTextElement': document.querySelector(`[data-result-for="${form.id}"`), // Element
                    'closerElement': document.querySelector(`[data-closer-for="${form.id}"`), // Element
                    'loadingElement': document.querySelector(`[data-loading-for="${form.id}"`), // Element
                    'mask': {
                        'selected': currentCountry.mask,
                        'default': defaultCountry.mask,
                    },
                });
        }
    });

    return resultArrayOfForms;
};


function getAllOpenersFor(formId){
    let openersData = [];  
    
    if(document.querySelectorAll(`[data-opener-for="${formId}"]`).length > 0){
        openersData = document.querySelectorAll(`[data-opener-for="${formId}"]`);        
    } else {
        openersData = [];
    }
    return openersData;
}


function getAllFormsFieldsFor (form){
   
    let allFormsElements = form.querySelectorAll(
        [
            '[type="text"]',
            '[type="tel"]',
            '[type="email"]',         
            '[type="number"]',
            '[type="checkbox"]',
            '[type="file"]',
            '[type="radio"]',
            '[type="range"]',
            'fieldset',
            'select', 
            'textarea',
        ]);

    let resultFormFields = [];

    // for(let i=0; i < allFormsElements.length; i++){
    //     allFormsElements
    // }

        allFormsElements.forEach(function(formsElement){

            

            switch (formsElement.tagName) {
            case 'INPUT':
                if(formsElement.type == 'text' || formsElement.type == 'tel' || formsElement.type == 'email' || formsElement.type == 'number' ){
                    let dataInput = {
                        'element': formsElement,
                        'type': formsElement.type,
                        'name': formsElement.name,
                        'required': formsElement.required,
                        'isCorrectValue':  formsElement.required ? false : true,
                        'value': formsElement.value,           
                    };

                    if(formsElement.id && formsElement.id && form.querySelector(`label[for="${formsElement.id}"]`)){
                        dataInput.label = {
                            'element': form.querySelector(`label[for="${formsElement.id}"]`),
                            'value': form.querySelector(`label[for="${formsElement.id}"]`).textContent.trim(),                            
                        };                        
                    } else if(dataInput.element.parentNode.tagName == 'LABEL'){
                            dataInput.label = {
                                'element': dataInput.element.parentNode,
                                'value': dataInput.element.parentNode.textContent.trim(),                            
                            };
                        
                    } else {
                        dataInput.label = false;                        
                    }                
                    
                    if(dataInput.element.required && dataInput.label){
                        dataInput.label.element.setAttribute("data-for-required","required");
                    }            
                    resultFormFields.push(dataInput);

                } else if (formsElement.type == 'checkbox'){                    
                    let dataInput = {
                        'element': formsElement,
                        'type': formsElement.type,
                        'name': formsElement.name,
                        'required': formsElement.required,
                        'checked': formsElement.checked,
                        'isCorrectValue':  formsElement.required ? false : true,
                        'value': formsElement.value ? formsElement.value : '',           
                    };

                    if(formsElement.id && form.querySelector(`label[for="${formsElement.id}"]`)){
                        dataInput.label = {
                            'element': form.querySelector(`label[for="${formsElement.id}"]`),
                            'value': form.querySelector(`label[for="${formsElement.id}"]`).textContent.trim(),                            
                        };                        
                    } else if(dataInput.element.parentNode.tagName == 'LABEL'){
                            dataInput.label = {
                                'element': dataInput.element.parentNode,
                                'value': dataInput.element.parentNode.textContent.trim(),                            
                            };
                        
                    } else {
                        dataInput.label = false;                        
                    }   

                    if(form.querySelectorAll(`[name="${formsElement.name}"]`).length > 1){
                        dataInput.belongGroup = true;
                    }            
                    
                    if(dataInput.element.required && dataInput.label){
                        dataInput.label.element.setAttribute("data-for-required","required");
                    }            
                    resultFormFields.push(dataInput);

                } else if (formsElement.type == 'file'){

                } else if (formsElement.type == 'radio'){
                    
                    let dataInput = {
                        'element': formsElement,
                        'type': formsElement.type,
                        'name': formsElement.name,
                        'required': formsElement.required,
                        'checked': formsElement.checked,
                        'isCorrectValue':  formsElement.required ? false : true,
                        'value': formsElement.value ? formsElement.value : '',           
                    };

                    if(form.querySelectorAll(`[name="${formsElement.name}"]`).length>1){
                        dataInput.belongGroup = true;

                        let allSiblings = form.querySelectorAll(`[name="${formsElement.name}"]`);
                        dataInput.siblings = allSiblings;
                       
                        allSiblings.forEach(sibling=>{
                            if(sibling.hasAttribute('required')){
                                dataInput.required = true;
                                formsElement.isCorrectValue =  false;
                            }
                        })
                        if(form.querySelectorAll('fieldset').length){
                            let fieldsetArea = form.querySelectorAll('fieldset');
                             
                            fieldsetArea.forEach(fieldset=>{
                                if(fieldset.querySelector(`[name="${formsElement.name}"]`)){
                                    let labelForErrorElement = fieldset;
                                    if(fieldset.querySelector('legend')){
                                        labelForErrorElement = fieldset.querySelector('legend');
                                    }
                                    labelForErrorElement.setAttribute("data-for-required","required");
                                    if(labelForErrorElement){
                                        dataInput.labelForError = {
                                            'element': labelForErrorElement,
                                            'value': labelForErrorElement.textContent ? labelForErrorElement.textContent.trim():'',                            
                                        };                        
                                    } else{
                                        dataInput.labelForError = false;
                                    }
                                }
                                
                            })
                       
                        }
                    }
                    

                    if(formsElement.id && form.querySelector(`label[for="${formsElement.id}"]`)){
                        dataInput.label = {
                            'element': form.querySelector(`label[for="${formsElement.id}"]`),
                            'value': form.querySelector(`label[for="${formsElement.id}"]`).textContent.trim(),                            
                        };                        
                    } else if(dataInput.element.parentNode.tagName == 'LABEL'){
                            dataInput.label = {
                                'element': dataInput.element.parentNode,
                                'value': dataInput.element.parentNode.textContent.trim(),                            
                            };
                        
                    } else {
                        dataInput.label = false;                        
                    }            
                                
                    resultFormFields.push(dataInput);

                } else if (formsElement.type == 'range'){

                }
                break;
            case 'TEXTAREA':                
                
                let dataInputTextarea = {
                    'element': formsElement,
                    'id': formsElement.id,
                    'type': 'textarea',
                    'name': formsElement.name,
                    'required': formsElement.required,
                    'isCorrectValue': formsElement.required ? false : true,
                    'value': formsElement.value,                    
                };
                if(formsElement.id && form.querySelector(`label[for="${formsElement.id}"]`) ){
                    dataInputTextarea.label = {
                        'value': form.querySelector(`label[for="${formsElement.id}"]`).textContent,
                        'element': form.querySelector(`label[for="${formsElement.id}"]`),
                    };
                } else {
                    dataInputTextarea.label = false;           
                }
                if(dataInputTextarea.element.required && dataInputTextarea.label){
                    dataInputTextarea.label.element.setAttribute("data-for-required","required");
                }            
                resultFormFields.push(dataInputTextarea);
                break;
            case 'FIELDSET':
                    let dataFieldset = {
                        'element': formsElement,
                        'type': 'fieldset',
                        'required': false,
                        'isCorrectValue':  true,
                        'value': ' ',           
                    };

                    if(formsElement.querySelector(`legend`)){
                        dataFieldset.label = {
                            'element': formsElement.querySelector(`legend`),
                            'value': formsElement.querySelector(`legend`).textContent.trim() ? formsElement.querySelector(`legend`).textContent.trim() : 'Group of checkbox',                            
                        };                        
                    } else if(formsElement.textContent.trim().length){

                        if([...formsElement.childNodes].length){
                            arrayChildNodes = [...formsElement.childNodes]
                            if(arrayChildNodes[0].nodeType == Node.TEXT_NODE ){
                                let rightAfterFieldsetText = arrayChildNodes[0].textContent;
                                if(rightAfterFieldsetText){
                                    dataFieldset.label = {
                                        'element': formsElement,
                                        'value': rightAfterFieldsetText.trim(),                            
                                    }; 

                                }
                            }
                            

                        } else{
                            dataFieldset.label = {
                                'element': false,
                                'value': 'Group of fields',                            
                            };
                        }
                        if(!(Object.getOwnPropertyNames(dataFieldset.label).length > 0)){
                            dataFieldset.label = {
                                'element': formsElement,
                                'value': formsElement.textContent.trim(),                            
                            }; 
                        }
                                               
                    } else {
                            dataFieldset.label = {
                                'element': false,
                                'value': 'Group of fields',                            
                            };
                    } 
                    resultFormFields.push(dataFieldset);
                break;
            case 'SELECT':
                let dataSelect = {
                    'element': formsElement,
                    'type': 'select',
                    'required': formsElement.required,
                    'isCorrectValue':  formsElement.required ? false : true,
                    'value': formsElement.value,
                    'hasOptgroup': formsElement.querySelector('optgroup') ? true : false,
                    'opgroupValue': '',
                    'options': formsElement.querySelectorAll('option').length ? formsElement.querySelectorAll('option') : [] ,
                };

                if(dataSelect.hasOptgroup){
                    let allOptgroups = formsElement.querySelectorAll('optgroup');
                    dataSelect.optgroups = []
                    if(allOptgroups.length){
                        allOptgroups.forEach(optgroup=>{
                            let optgroupItem = {'element': optgroup, 'label':optgroup.label,};
                            if(optgroupItem.element.querySelectorAll('option').length >0){
                                optgroupItem.options = [];
                                optgroupItem.element.querySelectorAll('option').forEach(optionItem=>{
                                    optionItem.setAttribute(`data-optgroup`,`${optgroupItem.label}`)
                                    optgroupItem.options.push(optionItem); 
                                });
                            }
                            dataSelect.optgroups.push(optgroupItem);
                        });
                    }
                }
                if(formsElement.id && form.querySelector(`label[for="${formsElement.id}"]`)){
                    dataSelect.label = {
                        'element': form.querySelector(`label[for="${formsElement.id}"]`),
                        'value': form.querySelector(`label[for="${formsElement.id}"]`).textContent.trim(),                            
                    };                        
                } else if(dataSelect.element.parentNode.tagName == 'LABEL'){
                    let labelWrapper = dataSelect.element.parentNode;

                    if(labelWrapper.textContent.trim().length){
                        if([...labelWrapper.childNodes].length){
                            arrayChildNodes = [...labelWrapper.childNodes]
                            if(arrayChildNodes[0].nodeType == Node.TEXT_NODE ){
                                let rightAfterFieldsetText = arrayChildNodes[0].textContent;
                                if(rightAfterFieldsetText){
                                    dataSelect.label = {
                                        'element': labelWrapper,
                                        'value': rightAfterFieldsetText.trim(),                            
                                    }; 

                                }
                            }
                        } else{
                            dataSelect.label = {
                                'element': false,
                                'value': 'Select',                            
                            };
                        }
                        
                                               
                    } else {
                        dataSelect.label = {
                            'element': false,
                            'value': 'Select',                            
                        };
                    }
                    
                } else {
                    dataSelect.label = false;                        
                }

                if(dataSelect.element.required && dataSelect.label){
                    dataSelect.label.element.setAttribute("data-for-required","required");
                }            
                resultFormFields.push(dataSelect);
            break;
            default:
                alert( "Нет таких значений" );
            }

        });  
        return resultFormFields;
};

function getSubmitBtnFor(form) {
    let elementSubmit = form.querySelectorAll('[type=submit]')[0];
    let dataElementSubmit = {
        'element': elementSubmit, 
        'type': elementSubmit.type,
        'name': elementSubmit.name,
        'required': false,
        'isCorrectValue': true,
        'label': false,
    };
    if(elementSubmit.tagName == 'INPUT'){
         dataElementSubmit.value = elementSubmit.value;
         dataElementSubmit.initialValue = elementSubmit.value;
    } else if(elementSubmit.tagName == 'BUTTON'){
        dataElementSubmit.value = elementSubmit.textContent;
        dataElementSubmit.initialValue = elementSubmit.textContent;
    }
    return dataElementSubmit;
}