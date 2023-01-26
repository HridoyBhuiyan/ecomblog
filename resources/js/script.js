document.getElementById('target').addEventListener('click',function (){
    let node = document.getElementById('navbarSupportedContent')
    if (node.className=="collapse navbar-collapse"){
        node.className="navbar-collapse navbar-collapse-open"
    }
    else if (node.className==('navbar-collapse navbar-collapse-open')){
        node.className="collapse navbar-collapse"
    }
})

document.getElementById('rightBtnID').addEventListener('click', function (){
    document.getElementById('horizontalNav').scrollBy({
        left:300, behavior:"smooth"
    })
})
document.getElementById('leftBtnID').addEventListener('click', function (){
    document.getElementById('horizontalNav').scrollBy({
        left:-300, behavior:"smooth"
    })
})


let element = document.getElementById("horizontalNav");
if (element.scrollWidth > element.clientWidth) {
    console.log("Horizontal scrollbar is available");
} else {
    document.getElementById('leftBtnID').className="m-1 d-none"
    document.getElementById('rightBtnID').className="m-1 d-none"
    console.log("Horizontal scrollbar is not available");
}





const buttons = document.querySelectorAll("button");
const sections = document.querySelectorAll("div[id^='section-']");

buttons.forEach(button => {
    button.addEventListener("click", e => {
        const buttonId = e.target.id;
        const sectionId = buttonId.replace("button", "section");
        const section = document.getElementById(sectionId);

        section.scrollIntoView({
            behavior: "smooth"
        });
    });
});
