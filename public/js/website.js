function updateCheckboxHiddenInputValue(t){var e=[];$(t).find(".checkbox.selected").each(function(){var t=$(this).attr("data-value");e.push(t)});var o=$(t).find("input");o.val(JSON.stringify(e))}function toggleCheckBox(t){$(t).toggleClass("selected"),updateCheckboxHiddenInputValue($(t).parent())}function setupCheckboxTabbing(){$(".checkbox:not(.disabled)").each(function(){$(this).attr("tabIndex",0)})}function updateRadioButtonsHiddenInputValue(t){var e=$(t).find(".selected").first().attr("data-value"),o=$(t).find("input");o.val(e)}function toggleRadioButton(t){$(t).parent().find(".radio-button").removeClass("selected"),$(t).addClass("selected"),updateRadioButtonsHiddenInputValue($(t).parent())}function setupRadioButtonTabbing(){$(".radio-button:not(.disabled)").each(function(){$(this).attr("tabIndex",0)})}$(function(){$(".checkbox-holder").each(function(){updateCheckboxHiddenInputValue(this)}),$(".checkbox:not(.disabled)").click(function(){toggleCheckBox(this)}),$(".checkbox").keypress(function(t){switch(t.keyCode||t.which){case 32:toggleCheckBox(t.target);break;case 13:var e=$(t.target).closest("form");e.submit()}}),setupCheckboxTabbing()}),$(function(){$(".radio-button-holder").each(function(){updateRadioButtonsHiddenInputValue(this)}),$(".radio-button:not(.disabled)").click(function(){toggleRadioButton(this)}),$(".radio-button").keypress(function(t){switch(t.keyCode||t.which){case 32:toggleRadioButton(t.target);break;case 13:var e=$(t.target).closest("form");e.submit()}}),setupRadioButtonTabbing()}),$(document).ready(function(){$("body").removeClass("preload");var t=function(){var t=$("body").scrollTop();t>100?$("#navTop").addClass("solid"):$("#navTop").removeClass("solid")};t(),$(document).scroll(function(){t()})});