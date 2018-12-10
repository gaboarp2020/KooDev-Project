const addProduct = document.querySelector("#addProduct");
const editBtn = document.querySelectorAll(".product-card span");
const addProductIco = document.querySelector(".product-edit i");
const addProductForm = document.querySelector(".product-edit form");
const modProductForm = document.querySelectorAll(".product-mod");


addProduct.addEventListener("click", function(){
    if(addProductIco.className.match(/(?:^|\s)fa-plus-circle(?!\S)/)){
        addProductIco.classList.remove("fa-plus-circle");
        addProductIco.classList.add("fa-minus-circle");
        addProductForm.style.height = "auto";
        addProductForm.style.opacity = "1";
        addProductForm.style.visibility = "visible";
        addProductForm.style.marginBottom = "10px";
    } else {
        addProductIco.classList.remove("fa-minus-circle");
        addProductIco.classList.add("fa-plus-circle");
        addProductForm.style.height = "0";
        addProductForm.style.opacity = "0";
        addProductForm.style.visibility = "hidden";
        addProductForm.style.marginBottom = "-65px";
    }
    
})

for (let i = 0; i<modProductForm.length; i++) {
    editBtn[i].addEventListener("click", function(){
        if(modProductForm[i].style.visibility === "hidden"){
            modProductForm[i].style.height = "auto";
            modProductForm[i].style.opacity = "1";
            modProductForm[i].style.visibility = "visible";
            modProductForm[i].style.marginBottom = "10px";
        } else {
            modProductForm[i].style.height = "0";
            modProductForm[i].style.opacity = "0";
            modProductForm[i].style.visibility = "hidden";
            modProductForm[i].style.marginBottom = "-65px";
        }
        
        
    })

    // modProductForm[i].addEventListener("click", function(){
    //     if(modProductForm[i].style.visibility === "hidden"){
    //         modProductForm[i].style.height = "auto";
    //         modProductForm[i].style.opacity = "1";
    //         modProductForm[i].style.visibility = "visible";
    //         modProductForm[i].style.marginBottom = "10px";
    //     } else {
    //         modProductForm[i].style.height = "0";
    //         modProductForm[i].style.opacity = "0";
    //         modProductForm[i].style.visibility = "hidden";
    //         modProductForm[i].style.marginBottom = "-65px";
    //     }
        
        
    // })
}
