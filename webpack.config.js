const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
    // Needs to be here for hot reloading to work https://github.com/laravel-mix/laravel-mix/issues/2719#issuecomment-754930396
    devServer: {
        host: '0.0.0.0',
        port: 8080,
    },
};
