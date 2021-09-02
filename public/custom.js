$(document).ready(function(){
    $('#car button').click(function(e){
        e.preventDefault();
        $('#fi').
        append('<hr><label for="country">Color</label><input type="text" id="lname" name="color[]" >'
        +'<label for="country">Model</label>'
        +'<input type="text" id="lname" name="model[]" >'
        +'<label for="country">Drived</label>'
        +'<input type="text" id="lname" name="drived[]" >'
        +'<label for="country">Condition</label>'
        +'<input type="text" id="lname" name="condition[]" >'
        +'<label for="country">Price</label>'
        +'<input type="text" id="lname" name="price[]" >');
    });

    // $('#car').submit(function(){
    //     console.log($(this));
    // })
})