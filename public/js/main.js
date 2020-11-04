

$(document).ready(function(){

    var total_skill = 1;
    
    function addSkill(){
        var element = '<div class="visible" id="vis'+total_skill+'"><div class="row mt-2 d-flex justify-content-center pl-4 vis"><div class="col-lg-5"><div class="md-form input-with-post-icon"><i class="fas fa-user-tie input-prefix"></i><input type="text" name="skill_level[]" class="form-control" id="skill"><label for="skill">Skill</label></div></div><div class="col-lg-5"><label for="level">Level</label><select name="skill_level[]" class="form-control" id="level"><option value="Beginner">Beginner</option><option value="Intermediate">Intermediate</option><option value="Advance">Advance</option><option value="Expert">Expert</option></select></div><div class="d-flex justify-content-end align-items-center"><button type="button" class="btn btn-danger btn-sm p-2" id="skill_close"><small class="fas fa-times"></small></button></div></div></div>'
        
        $('.after').after(element);
        $('#vis' + total_skill).slideDown();
    
        total_skill++;
    }

    function removeSkill(){
        total_skill--;
        $('#vis'+total_skill).remove();
    }
    
    
    $('#add').click(function(){
        addSkill();
    });

    $('#skill_close').click(function(){
        removeSkill();
    });
});