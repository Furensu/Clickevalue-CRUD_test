function formToggle(id,usr,mail,pass) {
    $("#create-usr").hide();
    console.log("ok")
    $("#update-usr").show();
    
    $("#updateID").attr("value",id);
    $("#updateU").attr("value",usr);
    $("#updateM").attr("value",mail);
    $("#updateP").attr("value",pass);

}