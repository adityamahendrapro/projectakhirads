const SneaksAPI = require('sneaks-api');
const sneaks = new SneaksAPI();

//getProducts(keyword, limit, callback) takes in a keyword and limit and returns a product array
sneaks.getProducts("Nike", 2, function(err, products){
    console.log(products)
})

// //Product object includes styleID where you input it in the getProductPrices function
// //getProductPrices(styleID, callback) takes in a style ID and returns sneaker info including a price map and more images of the product
// sneaks.getProductPrices("FY2903", function(err, product){
//     console.log(product)
// })
// //getMostPopular(limit, callback) takes in a limit and returns an array of the current popular products curated by StockX
// sneaks.getMostPopular(10, function(err, products){
//     console.log(products)
// })




