soft to run this project:

-XAMPP

-PHP Storm

-Postman

Step 00 (Database):
- install XAMPP:
https://www.apachefriends.org/index.html

-Go to your mysql database:
    
    localhost/phpmyadmin
-Create Database by copy source in SQL/CreateSQL.sql

Step 01 :

Go to quickstart :
    
    php artisan serve

Step 02:
    
   -Open Postman to CRUD:    
   
   -Read all (Choose method get):    
        
        http://localhost:8000/api/customer/
        
        
   -Read by id (Choose method get , and add id after customer/ EX):    
            
         http://localhost:8000/api/customer/1        
        
   -Creat new (Choose method post ):    
            
         http://localhost:8000/api/customer/        
   
   -Update (Choose method put , and add id after customer/ EX):    
            
         http://localhost:8000/api/customer/1   
   
   -Delete (Choose method put , and add id after customer/ EX):    
            
         http://localhost:8000/api/customer/1
         
    