<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <div id="result_form"></div>
        <!-- Oppener for form -->
        <button class="oppener ajaxForm1__oppener active" id="ajaxForm1__oppener">Open Form</button>
        <!-- end oppener for form -->

        <!-- Form -->        
        <div class="formWrapper" id="ajaxForm1__wrapper">
            <form method="post" id="ajaxForm1" action="">
                <div class="ajaxForm1__title"><h4>Callback form</h4> </div>
                <div class="ajaxForm1__result" id="ajaxForm1__result"></div>
                <div class="ajaxForm1__error" id="ajaxForm1__error"></div>                       
                <div class="formsElements active" id="ajaxForm1__formsElements">                                       
                    <div class="formsElementsGroup">
                        <label for="name">Enter your name</label></label>
                        <input type="text" name="name" placeholder="your name" id="name">
                    </div>
                    <div class="formsElementsGroup">
                        <label for="phonenumber">Enter your phonenumber</label>
                        <input type="tel" name="phonenumber" placeholder="your phone" id="phonenumber">
                    </div>
                    <button id="ajaxForm1__btn" type="submit">Send</button>
                </div>
            </form>
        </div>       
        <!-- End form -->
    </main>   
    
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<!-- <script src="js/ajax.js"></script> -->
<!-- Activation form by clicking on btn oppener -->
<script src="js/formActivator.js"></script>
<!-- is correct forms fields Checker -->
<script src="js/isCorrectFieldsChecker.js"></script>
</html>