// reusable function
var items_array = [];
function getProductList() {

    $.ajax({
      url: 'js/product.json',
      async: false,
      dataType: 'json',
      success: function (json) {
        items_array = json;
      }
    });
}
getProductList()
var getDiv = (container) => {
    return document.getElementById(container);
}

function createNode(node) {
    let element = document.createElement(node);
    return element;
};


var cart = localStorage.getItem("cart") ? JSON.parse(localStorage.getItem("cart")) : [];

function addToCart(id) {
    for (var i = 0; i < items_array.products.length; i++) {
        if (id == items_array.products[i].id) {
             item = items_array.products[i]
             item["qty"] = 1;
        }
      }
    cart.push(item);
    localStorage.setItem("cart", []);
    localStorage.setItem("cart", JSON.stringify(cart));
}
function displayCartCount(){
    let cartcount = getDiv("lblCartCount");
    if(cart.length>0){
        cartcount.innerHTML=cart.length;
    }else{
        cartcount.innerHTML=0;
    }
}
displayCartCount()
let tax = 0.13;
let discount = 10; //predefined
    
function displayItems(items, container) {
    let subtotal = 0;
    let total = 0;
    
    displayCartCount()
    let table = getDiv(container);
    table.innerHTML = "";
    let subtotalText = getDiv("subtotal");
    let totalText = getDiv("total");
    let discountText = getDiv("discount");
    let taxText = getDiv("tax");
    for (let i = 0; i < items.length; i++) {
        let item = items[i];
            let row = createNode("tr")
            // Create cells
            let imageRow = createNode("td")
            let nameRow = createNode("td")
            let price = createNode("td")
            let qty = createNode("td")
            let subTotalRow = createNode("td")
            let deleteRow = createNode("td")
            // Insert data to cells
            //image insert
            imageRow.className="product-thumbnail"
            const img = createNode("img");
            img.src = 'images/product/'+item.image;
            imageRow.append(img)
            
            //description
            nameRow.innerText = item.name
            price.innerText = item.price


            qty.innerHTML = '<div class="number">'+
            '<span class="minus" onclick="decreaseQty('+i+')">-</span>'+
            '<input type="text" class="qtyinput" value="'+item.qty+'" disabled/>'+
            '<span class="plus" onclick="increaseQty('+i+')">+</span>'+
            '</div>';


            let x = parseFloat(item.qty*item.price).toFixed(2)
            subtotal += parseFloat(x) ; //sum of price
            subTotalRow.innerText = x

            //delete row
            var t = createNode("i")
            t.className="fa fa-trash"
            deleteRow.append(t)
            deleteRow.onclick = function () {
                removeItem(i);
            };
            // Append cells to row
            row.appendChild(imageRow);
            row.appendChild(nameRow);
            row.appendChild(price);
            row.appendChild(qty);
            row.appendChild(subTotalRow);
            row.appendChild(deleteRow);
            // Append row to table body
            table.appendChild(row)
    }

    //cart calcualtion
    taxamount = subtotal*tax
    total = subtotal + taxamount-discount
    subtotalText.innerText=parseFloat(subtotal).toFixed(2)
    totalText.innerText=parseFloat(total).toFixed(2)
    taxText.innerText=parseFloat(taxamount).toFixed(2)
    discountText.innerText=parseFloat(discount).toFixed(2)

}
window.onload = displayItems(cart, "items");

function removeItem(index) {
    
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    displayItems(cart, "items");
}
function decreaseQty(index) {
    for (var i = 0; i < cart.length; i++) {
        if (i === index) {
            if(cart[i].qty==1){
                if(confirm("this action delete product from Cart. are you sure?")){
                    cart.splice(index, 1);
                }else{
                    cart[i].qty = 1;
                }
            }else{
                cart[i].qty -= 1; 
            }
            
        }
      }
      localStorage.setItem("cart", JSON.stringify(cart));
    displayItems(cart, "items");
}
function increaseQty(index) {
    
    for (var i = 0; i < cart.length; i++) {
        if (i === index) {
            cart[i].qty += 1; 
        }
      }localStorage.setItem("cart", JSON.stringify(cart));
      
    displayItems(cart, "items");
}