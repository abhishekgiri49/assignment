function showAndHideLoader(selector, type = "show"){
  if(type == "show"){
    let html = `<div class="col-md-12 product-loader"><div style="margin-left:auto;
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
              <a href="product-detail.html?slug=${product.slug}" class="text-body">${product.name}</a>
          </span>
          <div class="price">
              <span class="product-price">CA $ ${parsePrice(product.price, 'discounted')}</span>
              <span class="text-warning strike">CA $ ${parsePrice(product.price)}</span>
          </div>
          <div class="al-center">
              <span style="cursor:pointer" class="buy-now"  onclick="addToCart(${product.id})">ADD TO CART</span>
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
        <a href="product-detail.html?slug=${product.slug}">
        <span class="font-800 font-2xl">${product.name}</span>
        </a>
           <br>
            <small class="font-500 font-sm">${product.category}</small>
            <br>
            <div class="price">
                <span class="product-price font-xl">CA $ ${parsePrice(product.price, 'discounted')}</span>
                <span class="text-warning strike font-l">CA $ ${parsePrice(product.price)}</span>
            </div>
            <div class="al-center">
                <span style="cursor:pointer"  class="buy-now" onclick="addToCart(${product.id})">ADD TO CART</span>
            </div>
        </div>

    </div>
</div>`;
  $(selector).append(html);
}

function parsePrice(price, type="discounted"){
  
  if(type=="discounted"){
    return price.toFixed(2)
  }else{
    price = price + 50;
    return price.toFixed(2)
  }
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

async function getOnlyProduct(slug) {
  let product = {};
  await $.getJSON("./js/product.json", function (data) {
    let products = data.products;
    for (var i = 0; i < products.length; i++) {
     if(products[i].slug == slug)
     product = products[i]
    }
  });
  return product;
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

function displayColor(colors){
  if(colors.length>0){
    colors.forEach( (k,v)=>{
      let active= "active"
      if(v != 0)
        active = null
      $("#colors").append(`<span class="${k.toLowerCase()} ${active}"></span>`) 
    })
  }
}

function displaySize(sizes){
  if(sizes.length>0){
    sizes.forEach( (k,v)=>{
      let active= "active"
      if(v != 0)
        active = null
      $("#sizes").append(`<span class="size-box ${active}">${k.toUpperCase()}</span>`) 
    })
  }
}

function getProductForDetailPage(slug){
  getOnlyProduct(slug).then((data) => {
    setTimeout(() => {
      $("#product-loader").hide()
      $("#product_detail").show()
      $("#product_title").text(data.name)
      $("#product_category").text(data.category)
      $("#product_price").text(parsePrice(data.price))
      $("#product_discounted_price").text(parsePrice(data.price, 'not-discounted'))
      $("#product_image").attr('src', data.image_url)
      $("#cart_button").append(`<button type="submit" class="btn btn-success" onclick="addToCart(${data.id})"> Add to Cart</button>`)
      displayColor(data.colors)
      displaySize(data.sizes)
    }, 1000);
  });
}

$(document).ready(() => {
  let slug = null
  let urlParam = window.location.search
  if(urlParam != undefined && urlParam != null && urlParam != ''){
    slug = urlParam.split("=")[1]
  }
  if(slug == null){
    appendProduct("#new_arrival", 8);
    appendHotDealProduct('#hot_deal', 2)
    appendProduct("#featured_mens", 8);
    appendProduct("#featured_womens", 8);
    appendProduct("#featured_kids", 8);
  }else{
    $("#product_detail").hide()
    getProductForDetailPage(slug)
  }
});

