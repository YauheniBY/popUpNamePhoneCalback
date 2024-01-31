let formOppenerBtn = document.querySelector('#ajaxForm1__oppener');
let form1Wrapper = document.querySelector('#ajaxForm1__wrapper');
let form1CloserCross = document.querySelector('#ajaxForm1__closerCross');
let form1 = document.querySelector('#ajaxForm1');
let formElements = document.querySelector('#ajaxForm1__formsElements');
let formSendResult = document.querySelector('#ajaxForm1__result');
let formBtnSubmit = document.querySelector('#ajaxForm1 button');

const btnSubmitInitialText = formBtnSubmit.textContent;


formOppenerBtn.addEventListener('click', e => {
    
    addRemoveClassActive(form1Wrapper,formOppenerBtn);
    if(!formElements.classList.contains('active')){
        formElements.classList.add('active');
        formSendResult.classList.remove('active');
    }
    if(formBtnSubmit.textContent != btnSubmitInitialText){
        formBtnSubmit.textContent = btnSubmitInitialText;
    }

    form1Wrapper.addEventListener('click', e => {
        let clickWithinForm = e.composedPath().includes(form1);
        if(clickWithinForm){
            if(form1CloserCross) {
                    let clickOnFormCloserCross = e.composedPath().includes(form1CloserCross);
                    if(clickOnFormCloserCross){
                        addRemoveClassActive(formOppenerBtn, form1Wrapper);
                    }            
                }
        } else {
            addRemoveClassActive(formOppenerBtn, form1Wrapper);
        }     
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
