<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>HTML5 Number polyfill</title>
    <meta name="author" content="Jonathan Stipe" />
    <meta name="copyright" content="&copy; 2012 Jonathan Stipe" />
    <link rel="stylesheet" type="text/css" href="number-polyfill.css" />
    <style type="text/css">
.hiddenClass {
  visibility: hidden;
}
.opacityZero {
  opacity: 0;
}
.opacityHalf {
  opacity: 0.5;
}
.opacityOne {
  opacity: 1;
}
.transVisibleClass {
  opacity: 1;
  -moz-transition: opacity 3s;
  -webkit-transition: opacity 3s;
  -o-transition: opacity 3s;
  transition: opacity 3s;
}
.transHiddenClass {
  opacity: 0;
  -moz-transition: opacity 3s;
  -webkit-transition: opacity 3s;
  -o-transition: opacity 3s;
  transition: opacity 3s;
}
    </style>
    <script type="text/javascript" src="vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="number-polyfill.js"></script>
    <script type="text/javascript">
//<![CDATA[
$(function(){
  var trElem = document.createElement("tr"),
      tdElem1 = document.createElement("td"),
      tdElem2 = document.createElement("td"),
      inputElem = document.createElement("input");
  inputElem.setAttribute("name", "numberGenerated");
  inputElem.setAttribute("type", "number");
  tdElem1.appendChild(document.createTextNode("Dynamically generated element:"));
  tdElem2.appendChild(inputElem);
  trElem.appendChild(tdElem1);
  trElem.appendChild(tdElem2);
  $("table").append(trElem);
  $(inputElem).inputNumber();
  
  $("#disableNumberInput").click(function(event) {
    var $elem = $('input[name="numberDisablable"]').first();
    if ($elem.is(":disabled")) {
      $elem.removeAttr("disabled");
      $(this).attr("value", "Disable");
    } else {
      $elem.attr("disabled", "disabled");
      $(this).attr("value", "Enable");
    }
  });
  
  $("#hideNumberInputByClass").click(function(event) {
    var $elem = $('input[name="numberClassHidable"]').first();
    if ($elem.is(".hiddenClass")) {
      $elem.removeClass("hiddenClass");
      $(this).attr("value", "Hide");
    } else {
      $elem.addClass("hiddenClass");
      $(this).attr("value", "Show");
    }
  });
  
  $("#hideNumberInputByDisplay").click(function(event) {
    var $elem = $('input[name="numberDisplayHidable"]').first();
    if ($elem.css("display") == "none") {
      $elem.css("display", "");
      $(this).attr("value", "Hide");
    } else {
      $elem.css("display", "none");
      $(this).attr("value", "Show");
    }
  });
  
  $("#hideNumberInputByVisibility").click(function(event) {
    var $elem = $('input[name="numberVisibilityHidable"]').first();
    if ($elem.css("visibility") == "hidden") {
      $elem.css("visibility", "visible");
      $(this).attr("value", "Hide");
    } else {
      $elem.css("visibility", "hidden");
      $(this).attr("value", "Show");
    }
  });
  
  $("#hideNumberInputByOpacity").click(function(event) {
    var $elem = $('input[name="numberOpacityHidable"]').first();
    if ($elem.css("opacity") == "0") {
      $elem.css("opacity", "1");
      $(this).attr("value", "Hide");
    } else {
      $elem.css("opacity", "0");
      $(this).attr("value", "Show");
    }
  });
  
  $("#hideNumberInputByTransition").click(function(event) {
    var $elem = $('input[name="numberTransitionHidable"]').first();
    if ($elem.is(".transHiddenClass")) {
      $elem.removeClass("transHiddenClass").addClass("transVisibleClass");
      $(this).attr("value", "Hide");
    } else {
      $elem.removeClass("transVisibleClass").addClass("transHiddenClass");
      $(this).attr("value", "Show");
    }
  });
});
//]]>
    </script>
</head>
<body>
<div id="demos">
<form id="form-demo">
  <table>
    <tr>
      <td>What the polyfill should look like:</td>
      <td><input name="numberPlain" type="text" /><div class="number-spin-btn-container"><div class="number-spin-btn number-spin-btn-up" style="height: 0.7em;"></div><div class="number-spin-btn number-spin-btn-down" style="height: 0.7em;"></div></div></td>
    </tr>
    <tr>
      <td>Number which can be hidden by the class attribute:</td>
      <td><input name="numberClassHidable" type="number" min="0" max="100" /><input name="hideNumberInputByClass" id="hideNumberInputByClass" type="button" value="Hide"/></td>
    </tr>
    <tr>
      <td>Number which can be hidden by the inline display property:</td>
      <td><input name="numberDisplayHidable" type="number" min="0" max="100" /><input name="hideNumberInputByDisplay" id="hideNumberInputByDisplay" type="button" value="Hide"/></td>
    </tr>
    <tr>
      <td>Number which can be hidden by the inline visibility property:</td>
      <td><input name="numberVisibilityHidable" type="number" min="0" max="100" /><input name="hideNumberInputByVisibility" id="hideNumberInputByVisibility" type="button" value="Hide"/></td>
    </tr>
    <tr>
      <td>Number which can be hidden by the inline opacity property:</td>
      <td><input name="numberOpacityHidable" type="number" min="0" max="100" /><input name="hideNumberInputByOpacity" id="hideNumberInputByOpacity" type="button" value="Hide"/></td>
    </tr>
    <tr>
      <td>Number which transitions to a hidden state:</td>
      <td><input name="numberTransitionHidable" type="number" min="0" max="100" /><input name="hideNumberInputByTransition" id="hideNumberInputByTransition" type="button" value="Hide"/></td>
    </tr>
    <tr>
      <td>Number, hidden:</td>
      <td><input name="numberHidden" type="number" style="display: none;"/></td>
    </tr>
    <tr>
      <td>Number which can be disabled:</td>
      <td><input name="numberDisablable" type="number" min="0" max="100" /><input name="disableNumberInput" id="disableNumberInput" type="button" value="Disable"/></td>
    </tr>
    <tr>
      <td>Number, plain disabled:</td>
      <td><input name="numberDisabled" type="number" disabled="disabled" /></td>
    </tr>
    <tr>
      <td>Number, plain readonly:</td>
      <td><input name="numberReadonly" type="number" readonly="readonly" value="123.45" /></td>
    </tr>
    <tr>
      <td>Number, plain:</td>
      <td><input name="number" type="number" /></td>
    </tr>
    <tr>
      <td>Number with min:</td>
      <td><input name="numberMin" type="number" min="5" /></td>
    </tr>
    <tr>
      <td>Number with max:</td>
      <td><input name="numberMax" type="number" max="100" /></td>
    </tr>
    <tr>
      <td>Number with min and max:</td>
      <td><input name="numberMinMax" type="number" min="5" max="100" /></td>
    </tr>
    <tr>
      <td>Number with step=any:</td>
      <td><input name="numberAnyStepped" type="number" step="any" /></td>
    </tr>
    <tr>
      <td>Number with min and step=any:</td>
      <td><input name="numberMinAnyStepped" type="number" min="5" step="any" /></td>
    </tr>
    <tr>
      <td>Number with max and step=any:</td>
      <td><input name="numberMaxAnyStepped" type="number" max="100" step="any" /></td>
    </tr>
    <tr>
      <td>Number with min, max, and step=any:</td>
      <td><input name="numberMinMaxAnyStepped" type="number" min="5" max="100" step="any" /></td>
    </tr>
    <tr>
      <td>Number with step=5:</td>
      <td><input name="numberStepped" type="number" step="5" /></td>
    </tr>
    <tr>
      <td>Number with min and step=5:</td>
      <td><input name="numberMinStepped" type="number" min="5" step="5" /></td>
    </tr>
    <tr>
      <td>Number with max and step=5:</td>
      <td><input name="numberMaxStepped" type="number" max="100" step="5" /></td>
    </tr>
    <tr>
      <td>Number with misstepped max and step=5:</td>
      <td><input name="numberMaxStepped" type="number" max="102" step="5" /></td>
    </tr>
    <tr>
      <td>Number with min, max, and step=5:</td>
      <td><input name="numberMinMaxStepped" type="number" min="5" max="100" step="5" /></td>
    </tr>
    <tr>
      <td>Number with fractional step:</td>
      <td><input name="numberStepped" type="number" step="0.01" /></td>
    </tr>
    <tr>
      <td>Number with min and fractional step:</td>
      <td><input name="numberMinStepped" type="number" min="5" step="0.01" /></td>
    </tr>
    <tr>
      <td>Number with max and fractional step:</td>
      <td><input name="numberMaxStepped" type="number" max="100" step="0.01" /></td>
    </tr>
    <tr>
      <td>Number with min, max, and fractional step:</td>
      <td><input name="numberMinMaxStepped" type="number" min="5" max="100" step="0.01" /></td>
    </tr>
    <tr>
      <td>Number with negative min, max, and fractional step:</td>
      <td><input name="numberNegaMinMaxStepped" type="number" min="-100" max="100" step="0.01" /></td>
    </tr>
  </table>
  <input type="submit" />
  <input type="reset" />
</form>

<a href="https://github.com/jonstipe/number-polyfill">Back to GitHub repo</a>
</div>
</body>
</html>