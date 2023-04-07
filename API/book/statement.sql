
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


create table book (
    bookid  int PRIMARY KEY NOT NULL,
    name varchar(30),
    title varchar(50),
    author varchar(30),
    price int,
    pages int,
    isbnno varchar(30),
    category varchar(30),
    status varchar(30)
)
INSERT INTO `book` (`bookid`, `name`, `title`, `author`, `price`, `pages`, `isbnno`, `category`, `status`) VALUES ('10005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);