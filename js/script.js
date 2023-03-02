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
    { "name": "tshirt", "id": 1, price: 10, qty: 1,image:"tshirt.jpg" },
    { "name": "pant", "id": 2, price: 14, qty: 1,image:"pant.jpg" },
    { "name": "kurtha", "id": 3, price: 22, qty: 1 ,image:"kurtha.jpg"},
    { "name": "hoodie", "id": 4, price: 42, qty: 1,image:"hoodie.jpg" }
];

let cart = [];

function displayItems(items, container) {
    let table = document.getElementById("items");

    for (let i = 0; i < items.length; i++) {
        let item = items[i];
            let row = document.createElement("tr")
            // Create cells
            let imageRow = document.createElement("td")
            let nameRow = document.createElement("td")
            let price = document.createElement("td")
            let qty = document.createElement("td")
            let total = document.createElement("td")
            // Insert data to cells
            imageRow.className="product-thumbnail"
            const img = document.createElement("img");
            img.src = 'images/product/'+item.image;
            imageRow.append(img)
            nameRow.innerText = item.name
            price.innerText = item.price
            qty.innerText = item.qty
            total.innerText = parseFloat(item.qty*item.price).toFixed(2)
            // Append cells to row
            row.appendChild(imageRow);
            row.appendChild(nameRow);
            row.appendChild(price);
            row.appendChild(qty);
            row.appendChild(total);
            // Append row to table body
            table.appendChild(row)
    }
}
displayItems(items_array, "items");