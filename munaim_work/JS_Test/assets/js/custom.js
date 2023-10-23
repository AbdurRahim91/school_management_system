/*-- Code for Sticky Navbar --*/
const nav = document.querySelector('.navbar');
window.addEventListener('scroll', function(){
    const offset = window.pageYOffset;

    if(offset > 200){
        nav.classList.add('fixed-top');
    } else{
        nav.classList.remove('fixed-top');
    }
});


/*-- Code for Loading Pages --*/
$(document).ready(function(){
    loadPage("home.php");

    $('#Home').click(function(){
        loadPage("home.php");
    });

    $('#About').click(function(){
        loadPage("about.php");        
    });

    $('#Course').click(function(){
        loadPage("course.php");
    });

    $('#Admission').click(function(){
        loadPage("admission.php");
    });

    $('#Signin').click(function(){
        loadPage("signin.php");
    });

    function loadPage(pageUrl) {
        $.ajax({
            url:pageUrl,
            success:function(data){
                $('#Content').html(data);
            }
        });
    }

});