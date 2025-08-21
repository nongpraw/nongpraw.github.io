SELECT CategoryName, ProductNAme, UnitPrice
From   Products, Categories
WHERE  Products.CategoryID = Categories.CategoryID
AND    CategoryName ='seafood'

SELECT CategoryName, ProductNAme, UnitPrice
From   Products AS p JOIN Categories as c
ON     p.CategoryID = C.CategoryID
WHERE  CategoryName ='seafood'


SELECT * from Orders WHERE OrderID =10250
SELECT * FROM [Order Details] WHERE orderID = 10250
