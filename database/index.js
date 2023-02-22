const mysql = require('mysql2')

// const pool = mysql.createPool({
//     host: 'localhost',
//     user: 'root',
//     password: '',
//     database: 'cube2',
// });

const pool = mysql.createPool({
    host: 'localhost',
    user: 'root',
    password: 'Projetcube2',
    database: 'cube2',
});

pool.getConnection((err, connection) => {
    if (err) {
      console.log('Error connecting to database: ', err);
      return;
    }
  
    console.log('Connected to database as thread id: ', connection.threadId);
  
    connection.release();
  });

module.exports = pool.promise()