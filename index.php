<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/customeSelect.css">
</head>
<body>
    <main>  
    <div><a href="/test.php" target="_blank">Test page</a></div>
    <div><a href="/test2.php" target="_blank">Test 2 page</a></div>       
        <!-- Oppener for form1 -->
        <button class="popup__opener active" data-opener-for="form1" data-oppener-id="first">1st Opener Form1</button>
        <button class="popup__opener active" data-opener-for="form1"  data-oppener-id="second">2nd Open Form1</button>
        <!-- end oppener for form1 -->
        <!-- Oppener for form-popup-1 -->
        <div class="sideOpenersGroup">
            <button class="popup__opener active" data-opener-for="form-popup-1" data-oppener-id="first">1st Opener form-popup-1</button>
            <button class="popup__opener active" data-opener-for="form-popup-1"  data-oppener-id="second">2nd Open form-popup-1</button>
        </div>
        <!-- end oppener for form-popup-1 -->
        <!-- Form-popup-1 -->        
        <div class="popup" data-wrapper-for="form-popup-1">
            <form class="popup__form" method="post" id="form-popup-1" action="">
                <div class="popup__cross" data-closer-for="form-popup-1"></div>
                <div class="customeForm__title">
                    <h4 data-title-for="form-popup-1">Form popup 1</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form-popup-1"></div>
                <div class="customeForm__error" data-error-for="form-popup-1"></div>
                <div class="loading__wrapper" data-loading-for="form-popup-1">
                    <div class="loading"></div>
                </div>                      
                <div class="customeForm__formsElements active">                                       
                    <div class="customeForm__formsElementsGroup">
                        <label for="form-popup-1__name">Enter your name</label>
                        <input required type="text" name="name" placeholder="your name" id="form-popup-1__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form-popup-1__phonenumber">Enter your phone number</label>
                        <input  required type="tel" name="phonenumber" id="form-popup-1__phonenumber" placeholder="your phone number">
                    </div>   
                    <button class="customeForm__submit" type="submit">Send by Btn</button>                
                </div>                
            </form>
        </div>       
        <!-- End form-popup-1 -->

        <!-- Form1 -->        
        <div class="popup" data-wrapper-for="form1">
            <form class="popup__form" method="post" id="form1" action="">
                <div class="popup__cross" data-closer-for="form1"></div>
                <div class="customeForm__title">
                    <h4 data-title-for="form1">Form 1</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form1"></div>
                <div class="customeForm__error" data-error-for="form1"></div>
                <div class="loading__wrapper" data-loading-for="form1">
                    <div class="loading"></div>
                </div>                      
                <div class="customeForm__formsElements active">                                       
                    <div class="customeForm__formsElementsGroup">
                        <label for="form1__name">Enter your name</label>
                        <input required type="text" name="name" placeholder="your name" id="form1__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form1__phonenumber">Enter your phone number</label>
                        <input  required type="tel" name="phonenumber" id="form1__phonenumber" placeholder="your phone number">
                    </div>
                    <button class="customeForm__submit" type="submit">Send by Btn</button>                   
                </div>                
            </form>
        </div>       
        <!-- End form1 -->
        <!-- Form15 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form15">
            <form class="customeForm__form" method="post" id="form15" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form15">Form 15</h4>
                    <p>Select type inside label</p>
                </div>
                <div class="customeForm__result" data-result-for="form15"></div>
                <div class="customeForm__error" data-error-for="form15"></div>
                <div class="loading__wrapper" data-loading-for="form15">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                                          
                    <div class="customeForm__formsElementsGroup">
                        <label class="label__wrapper">Your favorite food
                            <select name="foods" id="form15__select" required>
                                <option value="">Choose a food</option>                        
                                <option value="apple">Apples</option>
                                <option value="banana">Bananas</option>
                                <option value="cherry">Cherries</option>
                                <option value="damson">Damsons</option>
                            </select>
                        </label>           
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form15 --> 
        <!-- Form11 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form11">
            <form class="customeForm__form" method="post" id="form11" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form11">Form 11</h4>
                    <p>Select type label is biding by id</p>
                </div>
                <div class="customeForm__result" data-result-for="form11"></div>
                <div class="customeForm__error" data-error-for="form11"></div>
                <div class="loading__wrapper" data-loading-for="form11">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                                          
                    <div class="customeForm__formsElementsGroup">
                        <label for="form11__select">Your favorite food</label> <br />
                        <select name="foods" id="form11__select">
                            <option value="">Choose a food</option>                        
                            <option value="apple">Apples</option>
                            <option value="banana">Bananas</option>
                            <option value="cherry">Cherries</option>
                            <option value="damson">Damsons</option>
                        </select>           
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form11 --> 
        <!-- Form10 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form10">
            <form class="customeForm__form" method="post" id="form10" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form10">Form 10</h4>
                    <p>Select type with optgroup</p>
                </div>
                <div class="customeForm__result" data-result-for="form10"></div>
                <div class="customeForm__error" data-error-for="form10"></div>
                <div class="loading__wrapper" data-loading-for="form10">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                                          
                    <div class="customeForm__formsElementsGroup">
                        <label for="form10__select">Your favorite food</label> <br />
                        <select name="foods" id="form10__select" required>
                        <option value="">Choose a food</option>
                        <hr />
                        <optgroup label="Fruit">
                            <option value="apple">Apples</option>
                            <option value="banana">Bananas</option>
                            <option value="cherry">Cherries</option>
                            <option value="damson">Damsons</option>
                        </optgroup>
                        <hr />
                        <optgroup label="Vegetables">
                            <option value="artichoke">Artichokes</option>
                            <option value="broccoli">Broccoli</option>
                            <option value="cabbage">Cabbages</option>
                        </optgroup>
                        <hr />
                        <optgroup label="Meat">
                            <option value="beef">Beef</option>
                            <option value="chicken">Chicken</option>
                            <option value="pork">Pork</option>
                        </optgroup>
                        <hr />
                        <optgroup label="Fish">
                            <option value="cod">Cod</option>
                            <option value="haddock">Haddock</option>
                            <option value="salmon">Salmon</option>
                            <option value="turbot">Turbot</option>
                        </optgroup>
                        </select>           
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form10 --> 
        <!-- Form12 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form12">
            <form class="customeForm__form" method="post" id="form12" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form12" data-title-for="form12">Form 12</h4>
                    <p>Radio Group Inputs outside Labels (biding through id)</p>
                </div>
                <div class="customeForm__result" data-result-for="form12"></div>
                <div class="customeForm__error" data-error-for="form12"></div>
                <div class="loading__wrapper" data-loading-for="form12">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            Choose your favorite color:                        
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                    <input type="radio" id="form12__blue" value="blue" name="color" checked/>
                                    <label for="form12__blue">Blue</label>
                                </div>
                                <div class="radioGroup">                                
                                    <input type="radio" id="form12__red" value="red" name="color"/>
                                    <label for="form12__red">Red</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="form12__green" value="green" name="color" required/>
                                    <label for="form12__green">Green</label>
                                </div>
                            </div>
                        </fieldset>                       
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form12 --> 
        <!-- Form14 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form14">
            <form class="customeForm__form" method="post" id="form14" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form14" data-title-for="form14">Form 14</h4>
                    <p>Radio Group Inputs inside Labels</p>
                </div>
                <div class="customeForm__result" data-result-for="form14"></div>
                <div class="customeForm__error" data-error-for="form14">Errorn text here</div>
                <div class="loading__wrapper" data-loading-for="form14">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            <legend>Choose your favorite color:</legend>
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                    <label class="containerRadio">Black
                                        <input type="radio" value="black" name="color">
                                        <span class="checkmarkRadio"></span>
                                    </label>
                                </div>
                                <div class="radioGroup">                                
                                <label class="containerRadio">Yellow
                                    <input type="radio" value="yellow" name="color" required>
                                    <span class="checkmarkRadio"></span>
                                </label>
                                </div>
                                <div class="radioGroup">
                                    <label class="containerRadio">Green
                                        <input type="radio" value="Green" name="color">
                                        <span class="checkmarkRadio"></span>
                                    </label>
                                    
                                </div>
                            </div>
                        </fieldset>                       
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form14 --> 
        <!-- Form13 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form13">
            <form class="customeForm__form" method="post" id="form13" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form13" data-title-for="form13">Form 13</h4>
                    <p>Checkbox Fieldset of Inputs (No required fields)</p>
                </div>
                <div class="customeForm__result" data-result-for="form13"></div>
                <div class="customeForm__error" data-error-for="form13"></div>
                <div class="loading__wrapper" data-loading-for="form13">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                                           
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            <legend>Choose your favorite color:</legend>

                            <div class="customeForm__formsElementsGroup  checkboxGroup">
                                <input type="checkbox" id="form13__blue" value="blue" name="color" checked/>
                                <label for="form13__blue">Blue</label>
                            </div>
                            <div class="customeForm__formsElementsGroup  checkboxGroup">                                
                                <input type="checkbox" id="form13__red" value="red" name="color"/>
                                <label for="form13__red">Red</label>
                            </div>
                            <div class="customeForm__formsElementsGroup  checkboxGroup">
                                <input type="checkbox" id="form13__green" value="green" name="color" />
                                <label for="form13__green">Green</label>
                            </div>
                        </fieldset>                      
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form13 --> 
        <!-- Form8 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form8">
            <form class="customeForm__form" method="post" id="form8" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form8" data-title-for="form8">Form 8</h4>
                    <p>Checkbox Inputs outside Labels (biding through id)</p>
                </div>
                <div class="customeForm__result" data-result-for="form8"></div>
                <div class="customeForm__error" data-error-for="form8"></div>
                <div class="loading__wrapper" data-loading-for="form8">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <label for="form8__phone">Enter your phone number</label>
                        <div class="customeForm__multiCountriesPhone">
                            <!-- Fake Custome select -->
                            <div class="customeSelect" data-select-country-for="form8">
                                <div class="customeSelect__flagForInput">
                                   <!-- code for img from multiCountryData.js will be Here -->
                                </div>
                                <details class="customeSelect__select" data-country-for="form8">                                     
                                    <summary class="customeSelect__opener"></summary>
                                    <div class="customeSelect__options" id="customeSelect__options_form8">
                                        <!-- code for select options from multiCountryData.js will be Here -->
                                    </div>
                                </details>
                            </div>
                            <!-- End Fake Custome select -->
                            <input type="tel" required name="phone" placeholder="your phone" id="form8__phone">
                        </div>                        
                    </div>                                       
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            <legend>Terms of Service, Privacy Policy и License Agreement:</legend>

                            <div class="customeForm__formsElementsGroup checkboxGroup">
                                <input type="checkbox" id="form8__privacy" value="ok" name="privacy" checked required/>
                                <label for="form8__privacy">I've read and agree of Privacy Policy</label>
                            </div>
                            <div class="customeForm__formsElementsGroup checkboxGroup">
                                <input type="checkbox" id="form8__licence" value="ok" name="licence"  required/>
                                <label for="form8__licence">I've read and agree of License Agreement</label>
                            </div>

                            <div class="customeForm__formsElementsGroup checkboxGroup">
                                <input type="checkbox" id="form8__terms" value="ok" name="terms" />
                                <label for="form8__terms">I've read and understand of Terms of Service</label>
                            </div>
                        </fieldset>                      
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form8 --> 
        <!-- Form9 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form9">
            <form class="customeForm__form" method="post" id="form9" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form9" data-title-for="form9">Form 9</h4>
                    <p>Checkbox Inputs inside Labels</p>
                </div>
                <div class="customeForm__result" data-result-for="form9"></div>
                <div class="customeForm__error" data-error-for="form9"></div>
                <div class="loading__wrapper" data-loading-for="form9">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <label for="form9__phone">Enter your phone number</label>
                        <div class="customeForm__multiCountriesPhone">
                            <!-- Fake Custome select -->
                            <div class="customeSelect" data-select-country-for="form9">
                                <div class="customeSelect__flagForInput">
                                   <!-- code for img from multiCountryData.js will be Here -->
                                </div>
                                <details class="customeSelect__select" data-country-for="form9">                                     
                                    <summary class="customeSelect__opener"></summary>
                                    <div class="customeSelect__options" id="customeSelect__options_form9">
                                        <!-- code for select options from multiCountryData.js will be Here -->
                                    </div>
                                </details>
                            </div>
                            <!-- End Fake Custome select -->
                            <input type="tel" required name="email" placeholder="your phone" id="form9__phone">
                        </div>                        
                    </div>                                       
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            <legend>Terms of Service, Privacy Policy и License Agreement:</legend>

                            <div class="customeForm__formsElementsGroup checkboxGroup">
                                <label class="customCheckbox containerCheckbox">I've read and agree of Privacy Policy
                                    <input type="checkbox" name="privacy" checked="checked" required>
                                    <span class="checkmarkCheckbox"></span>
                                </label>
                                <label class="customCheckbox containerCheckbox">I've read and agree of License Agreement
                                    <input type="checkbox" name="license" required>
                                    <span class="checkmarkCheckbox"></span>
                                </label>
                                <label class="customCheckbox containerCheckbox">I've read and understand of Terms of Service
                                    <input type="checkbox" name="terms">
                                    <span class="checkmarkCheckbox"></span>
                                </label>
                            </div>
                        </fieldset>                      
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form9 --> 
        <!-- Form2 -->        
        <div class="popup" data-wrapper-for="form2">
            <form class="popup__form" method="post" id="form2" action="">
            <div data-closer-for="form2"></div>
                <div class="customeForm__title">
                    <h4 data-title-for="form2">Form 2</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form2"></div>
                <div class="customeForm__error" data-error-for="form2"></div>
                <div class="loading__wrapper" data-loading-for="form2">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                       
                    <div class="customeForm__formsElementsGroup">
                        <label for="form2__name">Enter your name</label></label>
                        <input type="text" name="name" placeholder="your name" id="form2__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form2__phonenumber">Enter your phone number</label>
                        <input type="tel" name="phonenumber" placeholder="your phone number" id="form2__phonenumber">
                    </div>
                    <input class="customeForm__submit" type="submit" value="Send by input">
                </div>
            </form>
        </div>       
        <!-- End form2 -->
        <!-- Form3 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form3">
            <form class="customeForm__form" method="post" id="form3" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form4">Form 3</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form3"></div>
                <div class="customeForm__error" data-error-for="form3"></div>
                <div class="loading__wrapper" data-loading-for="form3">
                    <div class="loading"></div>
                </div>                       
                <div class="customeForm__formsElements active">                                       
                    <div class="customeForm__formsElementsGroup">
                        <label for="form3__name">Enter your name</label>
                        <input type="text" name="name" placeholder="your name" id="form3__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form3__phonenumber">Enter your phone number</label>
                        <input type="tel" required name="phonenumber" placeholder="your phone number" id="form3__phonenumber">
                    </div>
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form3 -->
        <!-- Form4 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form4">
            <form class="customeForm__form" method="post" id="form4" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form4">Form 4</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form4"></div>
                <div class="customeForm__error" data-error-for="form4"></div>
                <div class="loading__wrapper" data-loading-for="form4">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                <div class="customeForm__formsElementsGroup">
                        <label for="form4__email">Enter your Email</label>
                        <input type="email" required name="email" placeholder="your email" id="form4__email">
                    </div>                                       
                    <div class="customeForm__formsElementsGroup">
                        <label for="form4__name">Enter your name</label>
                        <input type="text" required name="name" placeholder="your name" id="form4__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form4__phonenumber">Enter your phone number</label>
                        <input type="tel" required name="phonenumber" placeholder="your phone" id="form4__phonenumber">
                    </div>
                    <input class="customeForm__submit" type="submit" value="Send by input">
                </div>
            </form>
        </div>       
        <!-- End form4 -->
        <!-- Form5 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form5">
            <form class="customeForm__form" method="post" id="form5" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form5">Form 5</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form5"></div>
                <div class="customeForm__error" data-error-for="form5"></div>
                <div class="loading__wrapper" data-loading-for="form5">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <label for="form5__email">Enter your Email</label>
                        <input type="email" required name="email" placeholder="your email" id="form5__email">
                    </div>                                       
                   
                    <input class="customeForm__submit" type="submit" value="Send by input">
                </div>
            </form>
        </div>       
        <!-- End form5 -->
        <!-- Form6 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form6">
            <form class="customeForm__form" method="post" id="form6" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form6">Form 6</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form6"></div>
                <div class="customeForm__error" data-error-for="form6"></div>
                <div class="loading__wrapper" data-loading-for="form6">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <label for="form6__email">Enter your Email</label>
                        <input type="email" required name="email" placeholder="your email" id="form6__email">
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form6 -->
        <!-- Form7 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form7">
            <form class="customeForm__form" method="post" id="form7" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form7">Form 7</h4>
                    <p>Some description</p>
                </div>
                <div class="customeForm__result" data-result-for="form7"></div>
                <div class="customeForm__error" data-error-for="form7"></div>
                <div class="loading__wrapper" data-loading-for="form7">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup">
                        <label for="form7__phone">Enter your phone number</label>
                        <div class="customeForm__multiCountriesPhone">
                            <!-- Fake Custome select -->
                            <div class="customeSelect" data-select-country-for="form7">
                                <div class="customeSelect__flagForInput">
                                    <!-- code for img from multiCountryData.js will be Here -->
                                </div>
                                <details class="customeSelect__select" data-country-for="form7">                                     
                                    <summary class="customeSelect__opener"></summary>
                                    <div class="customeSelect__options" id="customeSelect__options_form7">
                                        <!-- code for select options from multiCountryData.js will be Here -->
                                    </div>
                                </details>
                            </div>
                            <!-- End Fake Custome select -->
                            <input type="tel" required name="email" placeholder="your phone" id="form7__phone">
                        </div>                        
                    </div>                                       
                    <button class="customeForm__submit" type="submit">Send by Btn</button>
                </div>
            </form>
        </div>       
        <!-- End form7 -->        
    </main> 
    
    
<!-- Oppener for form2 -->
    <button class="popup__opener form2__opener active" data-opener-for="form2" >Open Form2</button>
<!-- end oppener for form2 -->
    
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<!-- Main settings for next scripts -->
<script src="js/handlerSettings.js"></script>
<!-- Optional script for MultiCountry Phone Input. Use it with Custome Selects styles from customeSelect.css-->
<script src="js/multiCountryData.js"></script>
<!-- Get all forms in object -->
<script src="js/collectFormsData.js"></script>
<!-- Activation form with class="popup" by clicking on btn oppener -->
<script src="js/popupFormActivator.js"></script>
<!-- is correct forms fields Checker -->
<script src="js/handlerForAllForms.js"></script>
</html>