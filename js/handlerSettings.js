// Do we want use multi-country format of Phone numbers with fakeSelects
// You need customeSelect.js script for it. Set the script after this one
let multiCountry = true;

// Fill it with id of exeption fors without '#'
// and it can work with by other scripts. For example ['formExeption1','formExeption2']
let exceptionForms = [];

// We need at list one object for be shure that all be alright if here weren't contries list
let defaultCountry = {name: "Belarus",code: "BY",phone: 375, mask:"+375 (99) 999-99-99"};

let currentCountry = {};

Object.assign( currentCountry, defaultCountry );




function renewMaskForPhones(formArray = document.querySelectorAll('form'),exceptionForms = []){
    let formsArrayWithoutExceptions = getAllFormsWithoutExeptions(formArray, exceptionForms);
    formsArrayWithoutExceptions.forEach(function(form){
        if(multiCountry && !(Object.getOwnPropertyNames(currentCountry).length > 0) && !(Object.getOwnPropertyNames(defaultCountry).length > 0)){
            $("#"+form.id) > $('input[type="tel"]').mask("+375 (99) 999-99-99");
        } else if(multiCountry && Object.getOwnPropertyNames(currentCountry).length > 0){
            if(!(currentCountry.mask)){
                currentCountry.mask = `+ ${currentCountry.phone} +999-999?99-99-9999`;
            }
            $("#"+form.id) > $('input[type="tel"]').mask(currentCountry.mask);            
        } else if(Object.getOwnPropertyNames(defaultCountry).length > 0){
            if(!(defaultCountry.mask.length)){
                defaultCountry.mask = `+ ${defaultCountry.phone} 999-999?99-99-99`;
            }
            $("#"+form.id) > $('input[type="tel"]').mask(defaultCountry.mask);
        }
    }); 
};

function getAllFormsWithoutExeptions(formsArray = document.querySelectorAll('form'), exceptionFormsArray = []){
    let formsArrayWithoutExceptions = [];
    if(!exceptionFormsArray.length && exceptionForms.length){
        exceptionFormsArray = [...exceptionForms];
    }
    if(exceptionFormsArray.length){
        formsArray.forEach(formFromFormsArray=>{
            if(!(exceptionFormsArray.includes(formFromFormsArray.id))){
                formsArrayWithoutExceptions.push(formFromFormsArray);
            }
        });
    } else {
        formsArrayWithoutExceptions = [...formsArray];
    }
 return formsArrayWithoutExceptions;

}