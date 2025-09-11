-- ต้องการชื่อพนักงานที่มีอายุมากที่สุด
Select Firstname, Lastname 
from Employees
where BirthDate = (วันเกิดที่น้อยที่สุด)

-- ต้องการชื่อสินค้าที่มีราคามากกว่าสินค้า Ikura
Select ProductName 
from Products
where UnitPrice > (Select UnitPrice from Products
                    WHERE ProductName = 'Ikura')

-- ต้องการชื่อบริษัทลูกค้าที่อยู่เมืองเดียวกับบริษัทชื่อ Around the Horn
Select CompanyName 
from Customers
where City = (Select City FROM Customers
                WHERE CompanyName = 'Around the Horn' )
--ต้องการชื่อนามสกุลพนักงานที่เข้างานคนล่าสุด
SELECT Firstname, Lastname FROM Employees
WHERE HireDate = (Select MAX(HireDate) FROM Employees)


--ข้อมูลใบสั่งซื้อที่ถูกส่งไปประเทศที่ไม่มีผู้ผลิดสินค้าตั้งอยู่
SELECT * FROM Orders
WHERE ShipCountry not in (Select distinct Country From Suppliers)

--การใส่ตัวเลขลำดับ
--ต้องการข้อมูลสินค้าที่มีราคาน้อยกว่า 50
SELECT ROW_NUMBER()OVER (order by UnitPrice DESC) AS RowNum,
ProductName 