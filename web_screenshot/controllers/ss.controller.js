const bodyParser = require('body-parser');
const DB = require('../config/mysqldb_conn');
var webshot = require('node-webshot');


exports.takeScreenShot = (req,res) => {
    res.send("SS Taken");
}

exports.takeScreenShot2 = (req,res, next) => {
//res.send("Defined!!!");

    var streamType = req.body.streamType;
    var url = req.body.url;
    var quality=req.body.quality;
    var options = {

  
    quality:quality,
    streamType:streamType,
  
  };
   
  webshot(url, 'bbccdd'+options.streamType, options, function(err) {
  });
  res.json("File is created, please check project directory!")

  next();


    
}




