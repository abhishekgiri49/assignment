function showAndHideLoader(selector, type = "show"){
  if(type == "show"){
    let html = `<div class="col-md-12"><div style="margin-left:auto;
    margin-right:auto;"class="loader"></div></div>`
    $(selector).append(html);
  }else{
    let children = $(selector).children()
    let div = children.find("div")
    div.remove()
  }
}

function productHtml(selector, product) {
  let html = ` <div class="col-md-3"><div class="product_card">
  <div class="card border-0 product">
      <div class="card-header bg-transparent border-0 p-0">
          <img class="product_image card-img-top" src="${product.image_url}" alt="">
          <div class="details-btn">
              <a href="#" class="btn btn-dark">View Details <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>
      </div>
      <div class="card-body">
          <small>
              <a href="#" class="text-muted">${product.category}</a>
          </small>
          <span class="product-title">
              <a href="#" class="text-body">${product.name}</a>
          </span>
          <div class="price">
              <span class="product-price">CA $ ${parsePrice(product.price, 'discounted')}</span>
              <span class="text-warning strike">CA $ ${parsePrice(product.price)}</span>
          </div>
          <div class="al-center">
              <span class="buy-now">ADD TO CART</span>
          </div>
      </div>
  </div>
</div></div>`;
  $(selector).append(html);
}

function productHotDealHtml(selector, product) {
  let html = `<div class="hot-deal-wrapper" style=" width: 50%; ">
    <div class="hot-deal-card">
        <div class="hot-deal-image">
            <img class="product_image" style="width: 100%; max-height: 200px"
                 src="${product.image_url}" alt="">
        </div>
        <div class="hot-deal-detail">
            <span class="font-800 font-2xl">${product.name}</span><br>
            <small class="font-500 font-sm">${product.category}</small>
            <br>
            <div class="price">
                <span class="product-price font-xl">CA $ ${parsePrice(product.price, 'discounted')}</span>
                <span class="text-warning strike font-l">CA $ ${parsePrice(product.price)}</span>
            </div>
            <div class="al-center">
                <span class="buy-now" onclick="addToCart(2)">ADD TO CART</span>
            </div>
        </div>

    </div>
</div>`;
  $(selector).append(html);
}

function parsePrice(price, type="discounted"){
  price = parseFloat(price)
  if(type != "discounted")
    price +=50;
  return price.toFixed(2)
}

async function getProducts(noOfProductToDisplay, order = "RAND") {
  let temp = [];
  await $.getJSON("./js/product.json", function (data) {
    let products = data.products;
    
    for (var i = 0; i < noOfProductToDisplay; i++) {
      var idx = 0;
      if (order == "RAND") idx = Math.floor(Math.random() * products.length);
      else idx = i;
      temp.push(products[idx]);
    }
  });
  return temp;
}

function appendProduct(selector, noOfProductToDisplay, order = "RAND") {
  showAndHideLoader(selector)
  getProducts(noOfProductToDisplay, order).then((data) => {
    showAndHideLoader(selector, "remove")
    let products = data;
    if (products.length > 0) {
      for (let prod of products) {
        productHtml(selector, prod);
      }
    }
  });
}

function appendHotDealProduct(selector, noOfProductToDisplay, order = "RAND") { 
  showAndHideLoader(selector)
  getProducts(noOfProductToDisplay, order).then((data) => {
    showAndHideLoader(selector, "remove")
      let products = data;
      if (products.length > 0) {
        for (let prod of products) {
          productHotDealHtml(selector, prod);
        }
      }
  });
}

$(document).ready(() => {
    appendProduct("#new_arrival", 8);
    appendHotDealProduct('#hot_deal', 2)
    appendProduct("#featured_mens", 8);
    appendProduct("#featured_womens", 8);
    appendProduct("#featured_kids", 8);
});
