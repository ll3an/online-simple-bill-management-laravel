
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require("bootstrap-datepicker-webpack");
require('bootstrap-select');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
axios.defaults.baseURL = 'http://crescent.dev/api/';
axios.defaults.headers.common['Authorization'] = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImJkNTUxZjcwNTZkODIyZjFlYjdjNGJiZDYxNTg4ZGI3MGMzMjhiYjliNzkxYzMzNGZlMjFhNzg0N2VhMzdmNDA1MDE3ZDNhZGI3OWIyNTE2In0.eyJhdWQiOiIxIiwianRpIjoiYmQ1NTFmNzA1NmQ4MjJmMWViN2M0YmJkNjE1ODhkYjcwYzMyOGJiOWI3OTFjMzM0ZmUyMWE3ODQ3ZWEzN2Y0MDUwMTdkM2FkYjc5YjI1MTYiLCJpYXQiOjE0ODY0NDY1MDYsIm5iZiI6MTQ4NjQ0NjUwNiwiZXhwIjoxNTE3OTgyNTA2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.kM2d385relRywx0xPbwxUGT02tpIMXHQk2SnFqDlOHlw5SxGiu_7Us9wn9Btvz6d0UcBX33Pavw71cm0nTasiVyJfTiQENjuaaq8tDbYeyOSMdziMEcjI1xe10yvLWe4bSIVbRSwmj3UY0PJXGRQuSZtczPwW2IXwHR7G7RCSg_a4XkegdsrafiEnakI0pphen1V8DPam5foCg0wuDHARvkxRodv1garGdou2olj9kcOVR_dDAEoViaQwGttOMwD8bPaNTS_Y7Y2wpn32AGnOR7Ln3nmC6zab6XBlRtjjWQgcBRFlVy_Z_GG-XnFw2bjKjxTewLWI6ToUcIuJfMmrhBVhRxhSW3vUd64s1d7DJF4A16VF0si2_ywHhdIH6V99sIaZlN-k7P1WGng52q7rCb_G0h_ac9vXThMT_Id0MYpJiOsfNg6F4xLkwylbtgqZWZ_W_8gaZRlojpomV3zM-TX26jCQHuTVkTTe5WL2I9LooAnAm1xcY1Os5KWLd5oRR81-FwE-oN-okc0FpDi_eQDWoD5JAP7ougInLix75mEYZytunplpBHDSEl3ANcAG8L24QFFgPUSb6tpcUulbyXkmTfCi1exkJ95l7nJgB4Ut5dRKHo7FMblXxXPbt54sfgsvc7D8-TnlbLi7zhMQKYAReH-G5Z3kjbxeYsUQRQ";

Vue.component('example', require('./components/Example.vue'));

Vue.component(
    'bill-list',
    require('./components/Bills.vue')
);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);


const app = new Vue({
    el: '#app',
    data: {
    	total_amount : '',
    	total_paid : ''
    },
    computed: {
    	total_due: function(){
    		return this.total_amount - this.total_paid;
    	}
    }
});
