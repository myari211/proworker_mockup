$(function(){
    $(document).on('click', '.addSkill', function(e){
        e.preventDefault();
        
        var controlForm = $('.controls:first'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .addSkill')
        .removeClass('.addSkill').addClass('btn-remove')
        .removeClass('btn-outline-primary').addClass('btn-danger')
        .html('<span class="fas fa-times"></span>');
    }).on('click', 'btn-remove', function(e){
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });
});