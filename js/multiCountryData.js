// All countries from https://www.html-code-generator.com
// length 252
let countries = [    
    {name: "Belarus",code: "BY",phone: 375, mask: "+375 (99) 999-99-99"},    
    {name: "France",code: "FR",phone: 33, mask:"+33-99-999-99-99"},
    {name: "Germany",code: "DE",phone: 49, mask:"+49 (999) 999-999-99"},
    {name: "Russian Federation",code: "RU",phone: 7, mask:"+7 (999) 999-99-99"},
    {name: "Ukraine",code: "UA",phone: 380, mask:"+38 099 999 99 99"},
    {name: "United States",code: "US",phone: 1,mask: "+1 (999) 999-9999"},    
];


// filling fake select in our code

let allFormsWithoutExeptions = getAllFormsWithoutExeptions(document.querySelectorAll(`form`),exceptionForms);

let allAvailableFormsWithFakeSelectElements = [];

allFormsWithoutExeptions.forEach(form=>{
    if(form.querySelector(`[data-select-country-for="${form.id}"]`)){
        allAvailableFormsWithFakeSelectElements.push(form);
    }    
});

allAvailableFormsWithFakeSelectElements.forEach(form=>{

    let flagForInput = form.querySelector('.customeSelect__flagForInput');
    
    flagForInput.innerHTML = '';
    if(defaultCountry.code){
        flagForInput.innerHTML = `<img src="./img/flag/${defaultCountry.code}.svg" alt="${defaultCountry.code}">`;
    } else{
        flagForInput.innerHTML = `<img src="./img/flag/BY.svg" alt="BY">`;
    }

    let fakeSelectorOptionsSection = document.getElementById(`customeSelect__options_${form.id}`);
    fakeSelectorOptionsSection.innerHTML = '';
    let fakeSelectorListOptions = '';
        if(multiCountry && countries && countries.length){
            countries.forEach(country=>{
            if(!(currentCountry.code == country.code)){
                    fakeSelectorListOptions += `<div class="customeSelect__option" data-customeSelectOption-value="${country.code}">
                    <div class="customeSelect__option_flag">
                        <img src="./img/flag/${country.code}.svg" alt="${country.code}">
                    </div>
                    <div class="customeSelect__option_countryName">${country.name}</div>
                    <div class="customeSelect__option_PhoneCode">+${country.phone}</div>
                </div>`;
            } else {
                fakeSelectorListOptions += `<div class="customeSelect__option active"  data-customeSelectOption-value="${country.code}">
                    <div class="customeSelect__option_flag">
                        <img src="./img/flag/${country.code}.svg" alt="${country.code}">
                    </div>
                    <div class="customeSelect__option_countryName">${country.name}</div>
                    <div class="customeSelect__option_PhoneCode">+${country.phone}</div>
                </div>`;
            }                        
        });
    } else if(Object.keys(defaultCountry).length != 0){
        fakeSelectorListOptions += `<div class="customeSelect__option" data-customeSelectOption-value="${defaultCountry.code}">
                    <div class="customeSelect__option_flag">
                        <img src="./img/flag/${defaultCountry.code}.svg" alt="${defaultCountry.code}">
                    </div>
                    <div class="customeSelect__option_countryName">${defaultCountry.name}</div>
                    <div class="customeSelect__option_PhoneCode">+${defaultCountry.phone}</div>
                </div>`;
                Object.assign( currentCountry, defaultCountry );             
    } else {
        fakeSelectorListOptions += `<div data-customeSelectOption-value="BY" class="customeSelect__option">
                    <div class="customeSelect__option_flag">
                        <img src="./img/flag/BY.svg" alt="BY">
                    </div>
                    <div class="customeSelect__option_countryName">Belarus</div>
                    <div class="customeSelect__option_PhoneCode">+375</div>
                </div>`;
                currentCountry = {name: "Belarus",code: "BY",phone: 375, mask:"+375 (99) 999-99-99"};
    }              

    fakeSelectorOptionsSection.innerHTML = fakeSelectorListOptions;
});

function changeClassErrorInFakeInput(form){
    let inputInsideFakeInput =  form.querySelector('.customeForm__multiCountriesPhone input');
    if(inputInsideFakeInput.classList.contains('error')){
        inputInsideFakeInput.parentNode.classList.add('error');
    } else{
        inputInsideFakeInput.parentNode.classList.remove('error');
    }
};
allAvailableFormsWithFakeSelectElements.forEach(form=>{
    form.addEventListener('click',e=>{
        changeClassErrorInFakeInput(form);
        console.log('click');
    })
    form.addEventListener('keyup',e=>{
        changeClassErrorInFakeInput(form);
    });
});


allAvailableFormsWithFakeSelectElements.forEach(form=>{  
    let summaryOfFakeSelect = form.querySelector('.customeSelect__opener');
    let detailsSelect = form.querySelector('.customeSelect__select');  
    summaryOfFakeSelect.addEventListener('click',(e)=>{
        e.preventDefault();
        if(e.target.closest('.customeSelect__opener')){
            if(detailsSelect.hasAttribute('open')){
                detailsSelect.removeAttribute('open');
                form.querySelector('.customeForm__multiCountriesPhone input').focus();
            } else {
                detailsSelect.setAttribute('open', true);
                document.addEventListener('click', (event)=>{
                    if( !(event.target.closest('.customeSelect__opener'))
                        && !(event.target.closest('.customeSelect__select'))
                        && detailsSelect.hasAttribute('open')
                    ){
                        detailsSelect.removeAttribute('open');
                        form.querySelector('.customeForm__multiCountriesPhone input').focus();
                    }
                });                
            }
        }
    });
});

allAvailableFormsWithFakeSelectElements.forEach(form=>{  
    let detailsSelect = form.querySelector('details.customeSelect__select');  
    detailsSelect.addEventListener('click',(e)=>{
        if(e.target.closest('.customeSelect__option')){
            if(detailsSelect.hasAttribute('open')){
                detailsSelect.removeAttribute('open');
                form.querySelector('.customeForm__multiCountriesPhone input').focus();
            }
        }
        
    });
});



let allFakeCustomeSelectOption = document.querySelectorAll('.customeSelect__option');

allFakeCustomeSelectOption.forEach(function(fakeCustomeSelectOption){
    fakeCustomeSelectOption.addEventListener('click',function(e) {
        if(!(e.currentTarget.getAttribute('data-customeSelectOption-value') == currentCountry.code)) {

           

            let newCurrentCountryCode = e.currentTarget.getAttribute('data-customeSelectOption-value');

            countries.forEach(country=>{
                if(country.code == newCurrentCountryCode){
                    Object.assign( currentCountry, country );
                    renewMaskForPhones(document.querySelectorAll('form'),exceptionForms);

                    let flagForInputs = document.querySelectorAll('.customeSelect__flagForInput');
                    flagForInputs.forEach(flagForInput =>{
                        flagForInput.innerHTML = '';                   
                        flagForInput.innerHTML = `<img src="./img/flag/${currentCountry.code}.svg" alt="${currentCountry.code}">`; 
                    });

                    let allSelectOptions = document.querySelectorAll('.customeSelect__option');
                    allSelectOptions.forEach(selectOption=>{
                        if(selectOption.getAttribute('data-customeSelectOption-value') != currentCountry.code){
                            if(selectOption.classList.contains('active')){
                                selectOption.classList.remove('active');
                            }
                        } else{
                            selectOption.classList.add('active');
                        }
                    }); 
                }
            });
        }
    });
});


    






