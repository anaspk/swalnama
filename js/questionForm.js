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
});