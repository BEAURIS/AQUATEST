const { Router } = require("express")
const express = require ("express")
const cors = require("cors")
const package = require("../package.json")
const bodyParser = require("body-parser")
const app = express()
const port = 8000
const data = express

const values = require("../values/data.json");


//route json
app.get("/", (req, res) => {res.status(200).json (values)})


app.listen(port, () => {
    console.log(`ET ZEEEE BARTI SUR LE PORT ${port}!`)})


  
