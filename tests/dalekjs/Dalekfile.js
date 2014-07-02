
/*
module.exports = {
    browsers: [{
        chrome: {
            port: 6000
        }
    }]
};
*/

console.log('current parsed config file: "' + __dirname + '/'+ __filename +'"');
var test = require('magento-dalekjs');
console.log( ['default config', test.getConfig()] );
test.setConfig(require('./config/local.yml'))
console.log( ['loaded local config', test.getConfig()] );

