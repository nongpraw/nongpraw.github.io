SELECT CategoryName, ProductNAme, UnitPrice
From   Products, Categories
WHERE  Products.CategoryID = Categories.CategoryID
AND    CategoryName ='seafood'

SELECT CategoryName, ProductNAme, UnitPrice
From   Products AS p JOIN Categories as c
ON     p.CategoryID = C.CategoryID
WHERE  CategoryName ='seafood'

SELECT CompanyName, OrderID
FROM  Orders, Shippers ShipperID = Orders Shipvia
WHERE 
