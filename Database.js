var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "id21342744_yf",
  password: "hello.12345"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("CREATE DATABASE mydb", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
});
