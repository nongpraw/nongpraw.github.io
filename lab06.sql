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

SELECT p.ProductID, p.ProductName, s.CompanyName, s.Country
from Products p join Suppliers s on p.SupplierID = s.SupplierID
Where Country in ('usa','uk')

SELECT e.EmployeeID, FirstName, o.OrderID
from Employees e join Orders o on e.EmployeeID = o.EmployeeID
order by EmployeeID
