// reusable function
function appendNode(parent, element) {
    parent.appendChild(element);
};

function getDiv(container) {
    return document.getElementById(container);
};

function createNode(node) {
    let element = document.createElement(node);
    return element;
};


let items_array = [
    { "name": "tshirt", "id": 1, price: 10.01, qty: 1,image:"tshirt.jpg" },
    { "name": "pant", "id": 2, price: 14, qty: 3,image:"pant.jpg" },
    { "name": "kurtha", "id": 3, price: 22, qty: 1 ,image:"kurtha.jpg"},
    { "name": "hoodie", "id": 4, price: 42, qty: 1,image:"hoodie.jpg" }
];

let cart = [];

function displayItems(items, container) {
    let sumtotal = 0;
    let total = 0;
    let discount = 10;
    let cartcount = getDiv("lblCartCount");
    if(items_array.length>0){
        cartcount.innerHTML=items_array.length;
    }else{
        cartcount.innerHTML=0;
    }
    console.log(items);
    let table = getDiv(container);
    table.innerHTML = "";
    let sumtotalText = getDiv("sumtotal");
    let totalText = getDiv("total");
    let discountText = getDiv("discount");

    for (let i = 0; i < items.length; i++) {
        let item = items[i];
            let row = document.createElement("tr")
            // Create cells
            let imageRow = document.createElement("td")
            let nameRow = document.createElement("td")
            let price = document.createElement("td")
            let qty = document.createElement("td")
            let subTotal = document.createElement("td")
            let deleteRow = document.createElement("td")
            // Insert data to cells
            //image insert
            imageRow.className="product-thumbnail"
            const img = document.createElement("img");
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
            total += parseFloat(x) ; //sum of price
            subTotal.innerText = x

            //delete row
            var t = document.createElement("i")
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
            row.appendChild(subTotal);
            row.appendChild(deleteRow);
            // Append row to table body
            table.appendChild(row)
    }
    sumtotal = total
    total = total-discount
    sumtotalText.innerText=parseFloat(sumtotal).toFixed(2)
    totalText.innerText=parseFloat(total).toFixed(2)
    discountText.innerText=parseFloat(discount).toFixed(2)
}
window.onload = displayItems(items_array, "items");

function removeItem(index) {
    
    items_array.splice(index, 1);
    displayItems(items_array, "items");
}
function decreaseQty(index) {
    
    for (var i = 0; i < items_array.length; i++) {
        if (i === index) {
            items_array[i].qty -= 1; 
        }
      }
    displayItems(items_array, "items");
}
function increaseQty(index) {
    
    for (var i = 0; i < items_array.length; i++) {
        if (i === index) {
            items_array[i].qty += 1; 
        }
      }
    displayItems(items_array, "items");
}