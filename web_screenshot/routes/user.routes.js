const router = require("express").Router();
const sscontroller = require("../controllers/ss.controller");

/*******************  IMPORTER CONTROLLER ROUTES *******************/
router.get("/sst", sscontroller.takeScreenShot);
router.post("/submit-data", sscontroller.takeScreenShot2);
module.exports = router;