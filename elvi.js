const EXPRESS = require("express");
const HTTPS = require('https');
const PRIVATEKEY = fs.readFileSync("keys/private.pem", "utf8");
const CERTIFICATE = fs.readFileSync("keys/certificate.pem", "utf8");

const    CREDENTIALS    =    {"key":privateKey,    "cert":certificate}; 
const    PORT    =    8443;
let    app    =    EXPRESS();
var    httpsServer    =    HTTPS.createServer(CREDENTIALS,    app); 
httpsServer.listen(PORT,    function()    {
console.log("Il    server    https    in    ascolto    sulla    porta    "    +    PORT); 
});