var mysql = require('mysql');
const Name = "Paloma";

var conexion = mysql.createConnection({
    host:"dbmysqlbbvac.clay43q0babp.us-west-2.rds.amazonaws.com",
    port: 3306,
    user: "admin",
    password:"zwcRwt02gaBbx4wJrGWy",
    database:"dbBBVAc"
});

conexion.connect(function(error){
    if(error){
        throw error;
    } else{
        console.log('CONEXION EXITOSA');
    }
});

conexion.query('SELECT * from Usuario', function(error, results, fields){
     if(error){
         throw error;
     } 

     results.forEach(result => {
         console.log(result);
     })
});

conexion.query(`INSERT INTO Usuario (id_ced, nombre, fecha_nac, fecha_exp_ced, celular, correo) VALUES (1110113007,"${Name}", '2010-01-23', '2020-01-23', 234236565, "palomiux@gmail.com")`, function(error, results){
     if(error) throw error;
     console.log('Registro Exitoso', results);
});

conexion.end();