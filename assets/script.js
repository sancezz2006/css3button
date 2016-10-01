"use strict";

(function(){


    var settingsWrap = document.getElementsByClassName('settings-wrap');
    var textLabel = document.getElementById('text');
    var previewBtn = document.getElementById('btn');
    var fontCheck = document.getElementById('font-family-check');
    var fontsSelect = document.getElementById('font-family');
    var codeResultArea = document.getElementById('code-result');
    var bgColor = document.getElementById('bg-color');

    window.onload = function(){
        previewBtn.textContent = textLabel.value;
    };

//set text
    textLabel.addEventListener("keyup",function(){
        previewBtn.textContent = textLabel.value;
    },false);

//set fonts

    fontsSelect.addEventListener('click',function(){
        if (fontCheck.checked === true){
            previewBtn.style.fontFamily = fontsSelect.value;
        }
    },false);

    document.addEventListener('click',function(){
        updateCodeResult();
    },false);

    var updateCodeResult = function (){
        codeResultArea.textContent = ('font-family: ' + fontsSelect.value + ';\n'+
                'background-color: #' + bgColor.value + ';\n'
        );
    }


}());