const addProduct = document.querySelector("#addProduct");
const addProductIco = document.querySelector(".product-edit i");
const addProductForm = document.querySelector(".product-edit form");

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
    
});