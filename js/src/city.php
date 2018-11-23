var Shipcity
ShipCity = Request.from("Shipcity")
var sql = "select * from OrderTable where Shipcity = ' "+Shipcity+" '";