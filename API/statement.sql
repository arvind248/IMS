
// create studnent table
create table student(
    rollno int PRIMARY KEY,
     name varchar(30),
      dob date, 
      gender varchar(30),
       course varchar(30),
        address varchar(50),
         state varchar(30),
          city varchar(30),
           pin varchar(30),
            fathername varchar(30),
             mothername varchar(30),
              mobileno varchar(30),
               email varchar(30),
                qualification varchar(30),
                 passingyear varchar(30), 
                 nationality varchar(30)
);


// create employee table
create table employee(
        rollno int PRIMARY KEY NOT NULL,
        name varchar(30),
        dob date,
        gender varchar(30),
        address varchar(60),
        state varchar(30),
        city varchar(30),
        pin int,
        fathername varchar(30),
        mobileno varchar(30),
        email varchar(30),
        nationality varchar(30),
        qualification1 varchar(30) ,
        college1 varchar(30),
        passingyear1 varchar(30),
        marks1 int,
        qualification2 varchar(30),
        college2 varchar(30),
        passingyear2 varchar(30) ,
        marks2 int,
        qualification3 varchar(30),
        college3 varchar(30),
        passingyear3 varchar(30),
        marks3 int,
        qualification4 varchar(30),
        college4 varchar(30),
        passingyear4 varchar(30),
        marks4 int ,
        experience1 varchar(30),
        teachingplace1 varchar(30),
        experience2 varchar(30),
        teachingplace2 varchar(30),
        experience3 varchar(30),
        teachingplace3 varchar(30),
        experience4 varchar(30),
        teachingplace4 varchar(30),
        holdername varchar(30) ,
        accountno varchar(30),
        ifsc varchar(30),
        pan varchar(30),
        basicpay int,
        workinghrs varchar(10),
        doj date
    );



create table course(
    name varchar(50) Primary key not null,
    duration varchar(50),
    fees varchar(50),
    eligibility varchar(50),
    category varchar(50)
)


CREATE TABLE fees (
    rollno int Primary key not null,
    name varchar(50),
    dob  date,
    course varchar(50),
    duration varchar(50),
    fees int,
    schoolorship int,
    admsnfees int,
    remaining int,
    rate int,
    tenure int,
    emi int,
    firstemi date
)


    SELECT FROM fees
                fees.rollno,
                fees.schoolorship,
                fees.admsnfees,
                fees.remaining,
                fees.rate,
                fees.tenure,
                fees.emi,
                fees.firstemi,
                









