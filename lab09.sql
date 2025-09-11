-- ต้องการชื่อพนักงานที่มีอายุมากที่สุด
SELECT FirstName, LastName
FROM Employees
WHERE BirthDate = (SELECT MIN(BirthDate) FROM Employees);


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
SELECT ROW_NUMBER() OVER (ORDER BY UnitPrice DESC) AS RowNum,
       ProductName,
       UnitPrice
FROM Products
WHERE UnitPrice < 50;


--คำสั่ง DML (Insert Update)
SELECT * FROM Shippers


INSERT into Shippers
VALUE('บริษัทขนมมหาศาลจำกัด')




-- ตรวจสอบข้อมูล
SELECT * FROM Shippers;

SELECT * From Customers
--ตารางที่มี  PK เป็น Char, nChar
INSERT into Customers(CustomerID,CompanyName)
VALUE('A0001''บริษัทซื้อเยอะจำกัด')

--จงเพิ่มข้อมููลพนักงาน 1 คน ( ใส่ข้อมูลเท่าที่มี)
INSERT into Employees(FirstName,LastName)
VALUES ('วุ้้นเส้น','เขมรสกุล')

INSERT INTO Products (ProductName, UnitPrice, UnitsInStock)
VALUES ('ปลาแดกบอง', 1.5, 12);


--------------คำสั่ง  update ปรับปรุงข้อมูล
--ปรับปรุงจำนวนสินค้าคงเหลือสินค้ารหัส 1 เพิ่มจำนวนเข้าไป 100 ชิ้น
UPDATE Shippers
set Phone = '085-9998989'
WHERE ShipperID = 6

SELECT * FROM Shippers
--ปรับปรุงจำนวนสินค้าคงเหลือสินค้ารหัส 1 เพิ่มจำนวนเข้าไป 100 ชิ้น
UPDATE Products 
set UnitsInStock = UnitsInStock+10
WHERE ProductID = 1


--ปรับปรุง เมือง และประเทศลูกค้า รหัส A0001 ให้เป็น อุดรธานี, Thailand
UPDATE Customers
SET City = 'อุดรธานี' , Country = 'Thailand'
WHERE CustomerID = 'A0001'

-----คำสั่ง Delete ลบข้อมูล
--ลบบริษัทขนส่งสินค้า รหัส 6

DELETE From Shippers
WHERE ShipperID = 6

SELECT *from Employees
--ต้องการข้อมูล รหะสชื่อพนักงาาน และรหัสและชื่อหัวพนักงาน
SELECT emp.EmployeeID, emp.FirstName ชื่อหัวพนักงาน,
    boss.EmployeeID, boss.FILENAME ชื่อหัวหน้า
From Employees emp JOIN Employees boss    

