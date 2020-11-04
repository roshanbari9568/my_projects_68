const express = require('express');
const app = express();
require('dotenv').config();
const port = process.env.PORT;
const logger = require('./services/winston');
const DB = require('./config/mysqldb_conn');
const morgan = require('morgan');

// CONTROLLERS//
const crudControllers = require('./controllers/ss.controller');
const bodyParser = require('body-parser');
// CONTROLLERS//

//Middleware
app.use(morgan("dev"));

app.use(bodyParser.urlencoded({ extended: false }))
 
// parse application/json
app.use(bodyParser.json())
//app.use(bodyParser);
app.get('/', function (req, res) {
    res.sendFile('index.html', { root: __dirname });
});
app.use('/',require('./routes/user.routes'))




DB.sync({
    // alter: true
    // force: true
}).then(success =>{
    logger.debug(`DATABASE IS CONNECTED ✅`);
    const Neo4j_connection = require('./config/neo4jdb_conn');
    app.listen(port, (req,res,error) =>{
        logger.debug(`Server is running on port: ${port} ✅`)
    })
})
