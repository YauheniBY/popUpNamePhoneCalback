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
         
        <!-- Form12 -->        
        <div class="customeForm__wrapper" data-wrapper-for="form12">
            <form class="customeForm__form" method="post" id="form12" action="">
                <div class="customeForm__title">
                    <h4 data-title-for="form12">Form 12</h4>
                    <p>Select type with optgroup</p>
                </div>
                <div class="customeForm__result" data-result-for="form12"></div>
                <div class="customeForm__error" data-error-for="form12"></div>
                <div class="loading__wrapper" data-loading-for="form12">
                    <div class="loading"></div>
                </div>                        
                <div class="customeForm__formsElements active">                                                          
                    <div class="customeForm__formsElementsGroup">
                        <label for="form12__select">Your favorite food</label> <br />
                        <select name="foods" id="form12__select" required>
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
                    
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            Choose your favorite color:                        
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                    <input type="radio" id="form12__blue" value="blue" name="colo2" checked/>
                                    <label for="form12__blue">Blue</label>
                                </div>
                                <div class="radioGroup">                                
                                    <input type="radio" id="form12__red" value="red" name="colo2"/>
                                    <label for="form12__red">Red</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="form12__green" value="green" name="colo2" required/>
                                    <label for="form12__green">Green</label>
                                </div>
                            </div>
                        </fieldset>                       
                    </div> 
                    <div class="customeForm__formsElementsGroup">
                        <fieldset>
                            <legend>Choose your favorite color 2:</legend>
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
                    <div class="customeForm__formsElementsGroup">
                        <label for="form12__phone">Enter your phone number</label>
                        <div class="customeForm__multiCountriesPhone">
                            <!-- Fake Custome select -->
                            <div class="customeSelect" data-select-country-for="form12">
                                <div class="customeSelect__flagForInput">
                                   <!-- code for img from multiCountryData.js will be Here -->
                                </div>
                                <details class="customeSelect__select" data-country-for="form12">                                     
                                    <summary class="customeSelect__opener"></summary>
                                    <div class="customeSelect__options" id="customeSelect__options_form12">
                                        <!-- code for select options from multiCountryData.js will be Here -->
                                    </div>
                                </details>
                            </div>
                            <!-- End Fake Custome select -->
                            <input type="tel" required name="phone" placeholder="your phone" id="form12__phone">
                        </div>                        
                    </div>                                      
                    <div class="customeForm__formsElementsGroup">
                        <label for="form12__name">Enter your name</label>
                        <input type="text" name="name" placeholder="your name" id="form12__name">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form12__phonenumber">Enter your phone number</label>
                        <input type="tel" required name="phonenumber" placeholder="your phone number" id="form12__phonenumber">
                    </div>
                    <div class="customeForm__formsElementsGroup">
                        <label for="form12__email">Enter your Email</label>
                        <input type="email" required name="email" placeholder="your email" id="form12__email">
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