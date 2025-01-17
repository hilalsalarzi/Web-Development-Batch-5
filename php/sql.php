-- 1. Creating the Customers table
CREATE TABLE Customers (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerName VARCHAR(100),
    ContactNumber VARCHAR(15)
);

-- 2. Creating the Orders table
CREATE TABLE Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    OrderDate DATE,
    Amount DECIMAL(10, 2),
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);

-- 3. Inserting data into Customers table
INSERT INTO Customers (CustomerName, ContactNumber)
VALUES
    ('John Doe', '123-456-7890'),
    ('Jane Smith', '987-654-3210'),
    ('Alice Johnson', '555-123-4567'),
    ('New Customer', '000-000-0000');

-- 4. Inserting data into Orders table
INSERT INTO Orders (CustomerID, OrderDate, Amount)
VALUES
    (1, '2025-01-01', 150.50),
    (2, '2025-01-05', 200.75),
    (1, '2025-01-10', 300.00),
    (3, '2025-01-15', 450.25);

-- 5. Count all rows in the Customers table
SELECT COUNT(*) AS TotalRows
FROM Customers;

-- 6. Count non-NULL values in a specific column (CustomerName)
SELECT COUNT(CustomerName) AS TotalCustomers
FROM Customers;

-- 7. Count rows with a specific condition (Orders after 2025-01-01)
SELECT COUNT(*) AS ActiveOrders
FROM Orders
WHERE OrderDate > '2025-01-01';

-- 8. Count grouped by a column (Number of Orders per Customer)
SELECT CustomerID, COUNT(*) AS OrderCount
FROM Orders
GROUP BY CustomerID;

-- 9. Count distinct values (Unique Customers who placed orders)
SELECT COUNT(DISTINCT CustomerID) AS UniqueCustomers
FROM Orders;

-- 10. Count rows with multiple conditions (Orders with Amount > 500 after 2025-01-01)
SELECT COUNT(*) AS HighValueOrders
FROM Orders
WHERE Amount > 500 AND OrderDate > '2025-01-01';

-- 11. INNER JOIN between Customers and Orders tables
SELECT 
    Customers.CustomerName,
    Orders.OrderID,
    Orders.OrderDate,
    Orders.Amount
FROM 
    Customers
INNER JOIN 
    Orders
ON 
    Customers.CustomerID = Orders.CustomerID;

-- 12. LEFT OUTER JOIN between Customers and Orders tables
SELECT 
    Customers.CustomerName,
    Orders.OrderID,
    Orders.OrderDate,
    Orders.Amount
FROM 
    Customers
LEFT JOIN 
    Orders
ON 
    Customers.CustomerID = Orders.CustomerID;

-- 13. RIGHT OUTER JOIN between Customers and Orders tables
SELECT 
    Customers.CustomerName,
    Orders.OrderID,
    Orders.OrderDate,
    Orders.Amount
FROM 
    Customers
RIGHT JOIN 
    Orders
ON 
    Customers.CustomerID = Orders.CustomerID;

-- 14. FULL OUTER JOIN between Customers and Orders tables (simulated for MySQL)
SELECT 
    Customers.CustomerName,
    Orders.OrderID,
    Orders.OrderDate,
    Orders.Amount
FROM 
    Customers
LEFT JOIN 
    Orders
ON 
    Customers.CustomerID = Orders.CustomerID
UNION
SELECT 
    Customers.CustomerName,
    Orders.OrderID,
    Orders.OrderDate,
    Orders.Amount
FROM 
    Customers
RIGHT JOIN 
    Orders
ON 
    Customers.CustomerID = Orders.CustomerID;
