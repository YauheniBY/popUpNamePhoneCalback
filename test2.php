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
        <div class="customeForm__wrapper" data-wrapper-for="myForm">
                <form action="" method="POST" id="myForm">
                    <div class="mainInfoBlock__formElement">
                        <label for="goodsPurpose">По применению</label>
                        <div class="mainInfoBlock__formField">
                            <select name="goodsPurpose" id="goodsPurpose">
                                <option value="-">-</option>
                                <option value="для дачи">для дачи</option>
                                <option value="6 соток">6 соток</option>
                                <option value="10 соток">10 соток</option>
                                <option value="12 соток">12 соток</option>
                                <option value="для стройплощадок">для стройплощадок</option>
                                <option value="для складов">для складов</option>
                                <option value="для режимных объектов">для режимных объектов</option>
                            </select>
                        </div>                           
                    </div>
                    <div class="mainInfoBlock__formElement">
                        <label for="goodsColor">По цвету</label>
                        <div class="mainInfoBlock__formField">
                            <select name="goodsColor" id="goodsColor">
                                <option value="-">-</option>
                                <option value="зеленый">зеленый</option>
                                <option value="коричневый">коричневый</option>
                                <option value="красный">красный</option>
                                <option value="белый">белый</option>
                                <option value="бордовый">бордовый</option>
                                <option value="имитирующий дуб">имитирующий дуб</option>
                                <option value="мох">мох</option>
                                <option value="(RAL 6005)">(RAL 6005)</option>
                                <option value="RAL 3005">RAL 3005</option>
                                <option value="серый">серый</option>
                                <option value="синий">синий</option>
                                <option value="(RAL 5005)">(RAL 5005)</option>
                                <option value="черный">черный</option>
                                <option value="(RAL 9005)">(RAL 9005)</option>
                                <option value="С-10">С-10</option>
                                <option value="с рисунком">с рисунком</option>
                                <option value="RAL 8017">RAL 8017</option>
                            </select>                                
                        </div>                            
                    </div>
                    <div class="mainInfoBlock__formElement">
                        <label for="goodsHeight">По высоте</label>
                        <div class="mainInfoBlock__formField">
                            <select name="goodsHeight" id="goodsHeight">
                                <option value="1,5 м">1,5 м</option>
                                <option value="1,7 м">1,7 м</option>
                                <option value="1,8 м">1,8 м</option>
                                <option value="2 м">2 м</option>
                                <option value="2,2 м">2,2 м</option>
                                <option value="2,5 м">2,5 м</option>
                                <option value="3 м">3 м</option>
                                <option value="4 м">4 м</option>
                            </select>                                
                        </div>                            
                    </div>
                    <div class="mainInfoBlock__formElement">
                        <label for="goodsRough">Материал</label>
                        <div class="mainInfoBlock__formField">
                            <select name="goodsRough" id="goodsRough">
                                <option value="Профнастил">Профнастил</option>
                                <option value="Под дерево">Под дерево</option>
                                <option value="Под камень">Под камень</option>
                                <option value="Цветовая гамма">Цветовая гамма</option>
                                <option value="На бетонном основании">На бетонном основании</option>
                                <option value="На ленточном фундаменте">На ленточном фундаменте</option>
                                <option value="Бетонный">Бетонный</option>
                                <option value="Сетка-рабица">Сетка-рабица</option>
                                <option value="Металлопрофиль &gt;0,5 мм">Металлопрофиль &gt;0,5 мм</option>
                                <option value="Комбинированные">Комбинированные</option>
                                <option value="Кованный">Кованный</option>
                                <option value="Еврозабор">Еврозабор</option>
                                <option value="Ограждение территории">Ограждение территории</option>
                                <option value="Секции">Секции</option>
                            </select>                                
                        </div>                            
                    </div>
                    <div class="mainInfoBlock__formElement">
                        <label for="mainInfoBlock__Phone">Телефон</label>
                        <div class="mainInfoBlock__formField">
                            <input required type="text" id="mainInfoBlock__Phone" value="" placeholder="Ваш телефон" ></input>
                        </div>                            
                    </div>                                                   
                    <div class="btn__formBtn"><input type="submit" value="Заказать бесплатный замер" /></div>
                    <div class="mainInfoBlock__formElement">
                        <input type="checkbox" checked="checked"/> Our <a target="_blank" href="#">Privacy Policy</a> applies. <br />
                        <p class=""><strong>Note:</strong>Please fill out the fields marked with an asterisk.    </p>                        
                    </div>
                   </form>
            </div>
        </div>       
        <!-- End form7 -->        
        <!-- FormCalc -->        
        <div class="customeForm__wrapper" data-wrapper-for="calcForm">        
            <form class="customeForm__form" action=""  method="POST" id="calcForm">
                <div class="customeForm__result" data-result-for="calcForm"></div>
                <div class="customeForm__error" data-error-for="calcForm"></div>
                <div class="loading__wrapper" data-loading-for="calcForm">
                    <div class="loading"></div>
                </div>
                <div class="customeForm__formsElements active">
                    <div class="customeForm__formsElementsGroup calcBlock__formElement calcBlock__formElement_halfSize">
                        <label for="fenceLength">Длина забора</label>
                        <input type="number" value="20" id="fenceLength" name="fenceLength" min="15" max="300">                        
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement calcBlock__formElement_halfSize">
                        <label for="fenceHeight">Высота забора</label>
                        <select id="fenceHeight" name="fenceHeight">
                            <option value="1,5">1,5</option>
                            <option value="1,7">1,7</option>
                            <option value="1,8">1,8</option>
                            <option value="2">2</option>
                            <option value="2,2">2,2</option>
                            <option value="2,5">2,5</option>
                            <option value="3">3</option>
                            <option value="3,5">3,5</option>                                    
                        </select>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <label for="profilType">Профиль листа</label>
                        <select name="profilType" id="profilType">
                            <option value="C8">C8</option>
                            <option value="C10">C10</option>
                            <option value="C20">C20</option>
                            <option value="C21">C21</option>
                            <option value="НС35">НС35</option>
                            <option value="МП35">МП35</option>                                   
                        </select>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <fieldset>
                            <legend>Количество ворот</legend>
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                    <input type="radio" id="gatesQuantity1" name="gatesQuantity" value="1" />
                                    <label for="gatesQuantity1">1</label>
                                </div>
                                <div class="radioGroup">                                
                                    <input type="radio" id="gatesQuantity2" name="gatesQuantity" value="2" />
                                    <label for="gatesQuantity2">2</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="gatesQuantity3" name="gatesQuantity" value="3" />
                                    <label for="gatesQuantity3">3</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="gatesQuantityNull" name="gatesQuantity" value="0" />
                                    <label for="gatesQuantityNull">-</label>
                                </div>
                            </div>
                        </fieldset>
                        
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <fieldset>
                            <legend>Количество калиток</legend>
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                <input type="radio" id="kalitkaQuantity1" name="kalitkaQuantity" value="1" />
                                <label for="kalitkaQuantity1">1</label>
                                </div>
                                <div class="radioGroup">                                
                                <input type="radio" id="kalitkaQuantity2" name="kalitkaQuantity" value="2" />
                                <label for="kalitkaQuantity2">2</label>
                                </div>
                                <div class="radioGroup">
                                <input type="radio" id="kalitkaQuantity3" name="kalitkaQuantity" value="3" />
                                <label for="kalitkaQuantity3">3</label>
                                </div>
                                <div class="radioGroup">
                                <input type="radio" id="kalitkaQuantityNull" name="kalitkaQuantity" value="0" />
                                <label for="kalitkaQuantityNull">-</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="customeForm__formsElementsGroup  calcBlock__formElement  calcBlock__formElement_halfSize">
                        <label for="locationCity">Выбрать другой город</label>
                        <select name="locationCity" id="locationCity">
                            <option value="-">-</option>
                            <option value="Раков">Раков</option>
                            <option value="Фаниполь">Фаниполь</option>
                            <option value="Дзержинск">Дзержинск</option>
                            <option value="Мачулищи">Мачулищи</option>
                            <option value="Королёво">Королёво</option>
                            <option value="Смиловичи">Смиловичи</option>
                            <option value="Энергетиков">Энергетиков</option>
                            <option value="Заславль">Заславль</option>
                            <option value="Боровляны">Боровляны</option>
                            <option value="Смолевичи">Смолевичи</option>
                            <option value="Логойск">Логойск</option>
                            <option value="Молодечно">Молодечно</option>
                            <option value="Минский район (без названия)">Минский район (без названия)</option>
                            <option value="Минская область">Минская область</option>
                            <option value="нет в списке">нет в списке</option>                                   
                        </select>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <fieldset>
                            <legend>Количество горизонталей (лаг)</legend>
                            <div class="radioGroup__set">
                                <div class="radioGroup">
                                    <input type="radio" id="linesQuantity2" name="linesQuantity" value="2" />
                                    <label for="linesQuantity2">2</label>
                                </div>
                                <div class="radioGroup">                                
                                    <input type="radio" id="linesQuantity3" name="linesQuantity" value="3" />
                                    <label for="linesQuantity3">3</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="linesQuantity4" name="linesQuantity" value="4" />
                                    <label for="linesQuantity4">4</label>
                                </div>
                                <div class="radioGroup">
                                    <input type="radio" id="linesQuantityNull" name="linesQuantity" value="0" />
                                    <label for="linesQuantityNull">-</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <label for="fenceWide">Толщина и покрытие забора</label>
                        <select name="fenceWide" id="fenceWide">
                            <option value="-">-</option>
                            <option value="Односторонний полиэстр 0,35">Односторонний полиэстр 0,35</option>
                            <option value="Односторонний полиэстр 0,4">Односторонний полиэстр 0,4</option>
                            <option value="Односторонний полиэстр 0,5">Односторонний полиэстр 0,5</option>
                            <option value="Двусторонний полиэстр 0,5">Двусторонний полиэстр 0,5</option>
                            <option value="Без покрытия 0,4">Без покрытия 0,4</option>
                            <option value="Без покрытия 0,5">Без покрытия 0,5</option>                                   
                        </select>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement  calcBlock__formElement_halfSize">
                        <label for="distance">Расстояние от Минска (МКАД), км</label>
                        <input type="text" name="distance" id="distance" value="" placeholder="0 км" ></input>
                    </div>
                    <div class="customeForm__formsElementsGroup checkboxGroup calcBlock__formElement calcBlock__formElement_halfSize">
                        <label class="checkboxLabel" for="rassrochka">Оплата по карте Халва / в рассрочку</label>
                        <input type="checkbox" id="rassrochka" name="rassrochka"/>
                    </div>
                    <div class="customeForm__formsElementsGroup checkboxGroup calcBlock__formElement calcBlock__formElement_halfSize">
                        <label  class="checkboxLabel" for="painting">Дополнительная окраска</label>
                        <input class="checkbox" type="checkbox" id="painting" name="painting"/>
                    </div>
                    <div class="customeForm__formsElementsGroup checkboxGroup calcBlock__formElement calcBlock__formElement_halfSize">
                        <label  class="checkboxLabel"   for="electricity">Электричество на участке</label>
                        <input  type="checkbox" id="electricity" name="electricity"/>
                    </div>
                    <div class="customeForm__formsElementsGroup calcBlock__formElement">
                        <label for="calcBlock__Phone">Телефон</label>
                        <input required type="tel" id="calcBlock__Phone" name="calcBlock__Phone" value="" placeholder="Ваш телефон" ></input>
                    </div>
                    <input type="submit" value="Отправить на расчет" />
                    <div class="customeForm__formsElementsGroup checkboxGroup calcBlock__formElement">
                        <input id="calc__agreePolicy"type="checkbox" checked="checked" required/> 
                        <label for="calc__agreePolicy">Our <a target="_blank" href="#">Privacy Policy</a> applies.</label>                        
                        <p class=""><strong>Note:</strong>Please fill out the fields marked with an asterisk. </p>
                    </div>
                </div>
            </form>
        </div>       
    <!-- End formCalc -->        
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