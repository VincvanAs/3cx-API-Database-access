# 3cx-PDO-acces
For external access to the 3cx database 

1. Make sure you've installed & enabled PDO
2. require('vendor/autoload.php'); 
3. Add & Save the next line to C:\Program Files\3CX Phone System\Data\DB\pg_hba.conf : 
        host	all 		all 		<IP from request server or 0.0.0.0/0 for accept all>/32	password
      E.G. host	all 		all 		123.456.789.0>/32	password

Database connection:


$pdo = new PDO('pgsql:host=<IP ADDRESS>;port=<PORT>;dbname=database_single', 'phonesystem', '<PASSWORD>');
  
  You can find the database info on:
  Windows: C:\Program Files\3CX Phone System\Bin\config.json
  Linux: /var/lib/3cxpbx/Instance1/Bin/3CXPhoneSystem.ini
  
  Example: $pdo = new PDO('pgsql:host=123.456.789.0;port=5480;dbname=database_single', 'phonesystem', 'Welcome01234!');
  
  
  See files for Queue calls example.
  
  More follow in the future.
