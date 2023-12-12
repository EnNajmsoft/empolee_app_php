 <!--CREATE  or REPLACE view vacationDetails AS
  SELECT emp_vacations.* , userditals.* , vacation_type.*   FROM emp_vacations
   INNER JOIN  vacation_type ON vacation_type.vacation_id = emp_vacations.emp_vacation_type  
   INNER JOIN  userditals ON userditals.user_id = emp_vacations.empid_vacation  -->
 <!-- CREATE  or REPLACE view userDetails AS 
   SELECT emp_vacations.* , userDetails.* , vacation_type.*   FROM emp_vacations
   INNER JOIN  vacation_type ON vacation_type.vacation_id = emp_vacations.emp_vacation_type  
   INNER JOIN  userditals ON userditals.user_id = emp_vacations.empid_vacation -->
 <!-- 
 SELECT vacations.* , vacationtype.* FROM vacations
 INNER JOIN vacationtype ON vacationtype.vacationId = vacations.vacationTypeId
 INNER JOIN userditals ON userditals.user_id = emp_vacations.empid_vacation -->

 <!-- 
 /////jopdetails
 CREATE or REPLACE view jopDetails AS
 SELECT jops.* , departments.* FROM jops
 INNER JOIN departments ON departments.departId = jops.departIdJop -->


 <!-- /////userdetails
 CREATE or REPLACE view userDetails AS
 SELECT users.* , jopdetails.* FROM users
 INNER JOIN jopdetails ON jopdetails.jopId = users.userJopId -->

 <!-- 
 CREATE or REPLACE view vacationDetails AS
 SELECT vacations.* , vacationType.* , userDetails.* FROM vacations
INNER JOIN vacationType ON vacationType.vacationTypeId = vacations.vacationTId
 INNER JOIN userDetails ON userDetails.userId = vacations.VacationUserId -->


 <?php
  // $dsn = "mysql:host=127.0.0.1:3306;dbname=alwritsa_staffservice";
  // $user = "alwritsa_hotel_najm";
  // $pass = "hotel_najm321";
  // $option = array(
  //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
  // );
  // $countrowinpage = 9;

  // try {
  //   $con = new PDO($dsn, $user, $pass, $option);
  //   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   if ($con) {
  //     echo "coneeeeeected";
  //   }
  //   header("Access-Control-Allow-Origin: *");
  //   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
  //   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
  //   include "functions.php";
  //   if (!isset($notAuth)) {
  //     // checkAuthenticate();
  //   }
  // } catch (PDOException $e) {
  //   echo $e->getMessage();
  // }

  ?>
 <?php
  // $dsn = "mysql:host=127.0.0.1;port=3306;dbname=alwritsa_staffservice";
  // $user = "alwritsa_hotel_najm";
  // $pass = "hotel_najm321";
  // $option = array(
  //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
  // );
  // $countrowinpage = 9;

  // try {
  //   $con = new PDO($dsn, $user, $pass, $option);
  //   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   if ($con) {
  //     echo "connected";
  //   }
  //   header("Access-Control-Allow-Origin: *");
  //   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
  //   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
  //   include "functions.php";
  //   if (!isset($notAuth)) {
  //     // checkAuthenticate();
  //   }
  // } catch (PDOException $e) {
  //   echo $e->getMessage();
  // }
  ?>