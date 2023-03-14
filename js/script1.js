window = new BrowserWindow({
    webPreferences: {
        nodeIntegration: true,
        contextIsolation: false
    }
});

function displayProduct(){
    fs.readFile('product.json', function(err, data) {
        alert("Jello")
        // res.writeHead(200, {'Content-Type': 'text/html'});
        // res.write(data);
        // return res.end();
      });
}

$( document ).ready(function() {
    console.log( "ready!" );
});