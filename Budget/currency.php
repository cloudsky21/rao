<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>JQuery FormatCurrency Sample</title>
        <script type="text/javascript" src="scripts/jquery-1.2.6.js"></script>
        <script type="text/javascript" src="scripts/jquery.formatCurrency.js"></script>
        <style type="text/css">
            body, div  { margin:0px auto; padding:0px; }

            .main { margin:40px; }
            
            .sample { float:left; margin:10px; padding:4px; border:1px solid #888; width:350px; }
            
            .sample h3 { margin:-4px; margin-bottom:10px; padding:4px; background:#555; color:#eee; }
            
            .currencyLabel { display:block; }        
        </style>
        <script type="text/javascript">
            // Sample 1
            $(document).ready(function()
            {
                $('#currencyButton').click(function()
                {
                    $('#currencyField').formatCurrency();
                    $('#currencyField').formatCurrency('.currencyLabel');
                });
            });
            
            // Sample 2
            $(document).ready(function()
            {
                $('.currency').blur(function()
                {
                    $('.currency').formatCurrency();
                });
            });
        </script>
    </head>
<body>
    <div class="main">
        <div class="formPage">
            <h1>Format Currency Sample</h1>
            
            <div class="sample">
                <h3>Formatting Using Button Click</h3>
                <input type="textbox" id="currencyField" value="$1,220.00" />
                <input type="button" id="currencyButton" value="Convert" />
                
                <div>
                    Formatting Currency to an Html Span tag.
                    <span class="currencyLabel">$1,220.00</span>
                </div>
            </div>
            
            <div class="sample">
                <h3>Formatting Using Blur (Lost Focus)</h3>
                
                <input type="textbox" id="currencyField" class='currency' value="$1,220.00" />
            </div>
            
        </div>
    </div>
</body>
</html>