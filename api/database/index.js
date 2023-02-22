const mysql = require('mysql2')

// const pool = mysql.createPool({
//     host: 'localhost',
//     user: 'root',
//     password: '',
//     database: 'cube2',
// });

const pool = mysql.createPool({
    host: '20.199.116.36',
    user: 'root',
    password: 'Projectcube2',
    database: 'cube2',
});

module.exports = pool.promise()