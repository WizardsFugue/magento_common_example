

YAML = require('dalekjs/node_modules/js-yaml');
var config = require('../config/local.yml');



module.exports = {


    'Page title is correct': function (test) {
        test
            .open(config.url)
            .assert.title().is('Home page', 'It has default title')
            .done();
    },
    
    
};
