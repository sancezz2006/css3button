<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/style.css">
    <title>CSS3 генератор кнопок</title>
</head>
<body>

    <div class="container">
        <h1>CSS3 генератор кнопок</h1>
        <div class="flex-container">
            <div class="b1 settings settings-wrap">
                <h2>Settings</h2>
                <div class="form-wrap">
                    <label for="text">text:</label>
                    <input type="text" name="text" value="Click me" id="text" >
                </div>

                <div class="form-wrap">
                    <input type="checkbox" class="checkbox" name="font-family-check" checked="checked" id="font-family-check" data-control="font-family" />
                    <div data-control-group="font-family">
                        <label for="font-family">font-family:</label>
                        <select id="font-family">
                            <option value="Arial">Arial</option>
                            <option value="Courier New">Courier New</option>
                        </select>
                    </div>
                </div>

                <div class="form-wrap">
                    <label for="text">Background:</label>
                    <input class="jscolor" id="bg-color" value="ab2567">
                </div>
                <div class="form-wrap">
                    <label for="text">Border:</label>
                    <input class="jscolor" value="ffffff">
                </div>
                <div class="form-wrap">
                    <label for="text">Text:</label>
                    <input class="jscolor" value="ffffff">
                </div>

            </div>
            <div class="b1 preview preview-wrap">
                <h2>Preview</h2>
                <div class="btn-wrap">
                    <a id="btn" href="#"></a>
                </div>
            </div>
        </div>
        <h2>Live code</h2>

        <div id="b1 code-wrap">
            <div id="code-wrap-box">
                <div id="code-display">
                    <textarea id="code-result" cols="100" rows="10"></textarea>
                </div>
            </div>
        </div><!--./ code-wrap -->
    </div><!--./ container -->
<?php

?>
</body>
<!-- Scripts -->
<script src="assets/script.js" type="text/javascript"></script>
<script src="assets/jscolor.js" type="text/javascript"></script>
</html>