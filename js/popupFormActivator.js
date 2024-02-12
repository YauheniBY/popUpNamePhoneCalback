document.addEventListener("DOMContentLoaded", () => {
    let popupForms = [];

getAllForms('popup',[]).forEach(popupForm=>{
    popupForms.push(popupForm);
});

popupForms.forEach(function(currentForm){
    
    let formWrapper = currentForm.wrapperElement;
    let formCloser = currentForm.closerElement;
    let form = document.querySelector('#' + currentForm.id);
    let formBtnSubmit = currentForm.submitBtn.element;   
  


    currentForm.openers.forEach( function(opener) {
        opener.addEventListener('click', function() {
    
            addRemoveClassActive(formWrapper,opener);
            hasBodyClassStopScroling(true);
            document.querySelector('body').classList.add('stopScroll');
            if(formBtnSubmit.tagName == 'INPUT'){
                if(formBtnSubmit.value != currentForm.submitBtn.initialValue){
                        formBtnSubmit.value = currentForm.submitBtn.initialValue;
                }
           } else if(formBtnSubmit.tagName == 'BUTTON'){
                if(formBtnSubmit.textContent != currentForm.submitBtn.initialValue){
                    elementSubmit.textContent = currentForm.submitBtn.initialValue;
                }
           }
            
        
            formWrapper.addEventListener('click', e => {
                let clickWithinForm = e.composedPath().includes(form);
                if(clickWithinForm){
                    if(formCloser) {
                            let clickOnFormCloserCross = e.composedPath().includes(formCloser);
                            if(clickOnFormCloserCross){
                                addRemoveClassActive(opener, formWrapper);
                                hasBodyClassStopScroling(false);                                                              
                            }        
                        }
                } else {
                    addRemoveClassActive(opener, formWrapper);
                    hasBodyClassStopScroling(false);
                }
            });
        });

    });
        

});


function addRemoveClassActive (elemForAddClassActive, elemForRemoveClassActive,nameOfClassForActivation = 'active'){
    if(elemForRemoveClassActive.classList.contains(nameOfClassForActivation)) {
        elemForRemoveClassActive.classList.remove(nameOfClassForActivation);
    }
    if(!elemForAddClassActive.classList.contains(nameOfClassForActivation)){
        elemForAddClassActive.classList.add(nameOfClassForActivation);
    }
};
function hasBodyClassStopScroling(booleanValue = false){
    if(booleanValue){
        if(!document.querySelector('body').classList.contains('stopScroll')){
            document.querySelector('body').classList.add('stopScroll');
        } 
    }else{
        if(document.querySelector('body').classList.contains('stopScroll')){
            document.querySelector('body').classList.remove('stopScroll');
        }  
    }
};

});