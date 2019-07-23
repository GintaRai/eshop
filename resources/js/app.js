require('./bootstrap');





$(document).ready(function(){
    $(document).on("click", "#add-more", function(){
        $newInput = $(".file-input").clone().removeClass("file-input");
        $(".image-inputs").append($newInput);
    });
});