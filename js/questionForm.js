var optionCount = 4;

$(function() {
    //alert("Hurrayyy!!! me loaded ... :)");
    $questionType = $('#Question_questionType');
    $questionOptions = $('#questionOptionsBlock');
    
    if ( $questionType.val() == 2 ) {
        $questionOptions.hide();
    }
    
    $questionType.change(function(){
        $questionOptions.toggle( 'blind' );
    });
    
    $addOptionButton = $('#add-option-btn');
    
    $addOptionButton.click(function($e){
        $e.preventDefault();
        optionCount++;
        var $controlGroup = $('<div/>', {'class':'control-group'});
        var $controlLabel = $('<label/>', {'class':'control-label', 'for':'options['+ optionCount + ']', 'text':'Option ' + optionCount});
        var $controls = $('<div/>', {'class':'controls'});
        var $input = $('<input/>', {'class':'span8', 'type':'text'})
        $controls.append($input);
        $controlGroup.append($controlLabel);
        $controlGroup.append($controls);
        $controlGroup.insertBefore($('#add-option-btn-group'));
    });
});