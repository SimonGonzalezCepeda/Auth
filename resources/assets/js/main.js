var Vue = require('vue');
var $ = require('jquery');

new Vue({
    el: '#email',
    data: {
        placeholder: "youremail@gmail.com",
        url: "http://auth.app/checkEmailExists"
    },
    methods: {
        sayHello: function (event) {
            alert('Hello!')
        },
        checkEmailExists: function () {
            console.debug("checkEmailExists EXECUTED!");
            console.debug("A punt de cridar: ");
            console.debug(this.url)
            console.debug(email);
            var url = this.url + '?email=' + email;
            console.debug(url);
        }
    }
});