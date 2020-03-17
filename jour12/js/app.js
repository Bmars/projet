const popup = document.querySelector("#popup");

popup.addEventListener('click', openPopup)

function openPopup()
{
    window.open('./mapage.php', '_blank');
}
function openNav() 
{
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() 
{
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}


