

var config = require('magento-dalekjs').getConfig();



module.exports = {


    'Page title is correct': function (test) {
        test
            .open(config.url)
            .assert.title().is('Home page', 'It has default title')
            .done();
    },
    
    'Magento Admin Login working': function (test) {

        require('magento-dalekjs').getAdmin().doLogin(test);
        test.done();
    }
    
    
};
