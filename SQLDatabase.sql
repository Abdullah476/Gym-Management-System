DROP TABLE Members CASCADE CONSTRAINTS;
DROP TABLE Information CASCADE CONSTRAINTS;
DROP TABLE Credentials CASCADE CONSTRAINTS;
DROP TABLE MembershipPlan CASCADE CONSTRAINTS;
DROP TABLE WorkoutPlan CASCADE CONSTRAINTS;
DROP TABLE NutritionPlan CASCADE CONSTRAINTS;
DROP TABLE Exercise CASCADE CONSTRAINTS;
DROP TABLE NutritionChart CASCADE CONSTRAINTS;
DROP TABLE ProgressLog CASCADE CONSTRAINTS;
DROP TABLE ExerciseLog CASCADE CONSTRAINTS;
DROP TABLE NutritionLog CASCADE CONSTRAINTS;

CREATE TABLE Members(
    Member_ID NUMBER(7),
    First_Name VARCHAR2(25),
    Last_Name VARCHAR2(25),
    Plan_ID NUMBER(7),
    PlanRegistrationDate DATE,
    DOB DATE,
    House_no VARCHAR2(6),
    Street_No VARCHAR2(25),
    Area VARCHAR2(25),
    City VARCHAR2(25),
    Contact_No NUMBER(11),
    CONSTRAINT PK_MEMBER_ID PRIMARY KEY(Member_ID)
);

CREATE TABLE Information(
    Member_ID NUMBER(7),
    Age NUMBER(3),
    Weight NUMBER(3),
    Height NUMBER(4),
    CONSTRAINT PK_Information_MEMBER_ID PRIMARY KEY(Member_ID)
);

CREATE TABLE Credentials(
    Member_ID NUMBER(7),
    email VARCHAR2(50),
    password VARCHAR2(25),
    username VARCHAR2(25),
    CONSTRAINT PK_Credentials_MEMBER_ID PRIMARY KEY(Member_ID)
);

CREATE TABLE MembershipPlan(
    Plan_ID NUMBER(7),
    Goal VARCHAR2(40),
    Total_Days VARCHAR2(4),
    Charges NUMBER(7),
    CONSTRAINT PK_MembershipPlan_PLAN_ID PRIMARY KEY(Plan_ID)
);

CREATE TABLE WorkoutPlan(
    Plan_ID NUMBER(7) NOT NULL,
    Excercise_ID NUMBER(7) NOT NULL
);

CREATE TABLE NutritionPlan(
    Plan_ID NUMBER(7) NOT NULL,
    Target_Weight NUMBER(7) NOT NULL
);

CREATE TABLE Exercise(
    Excercise_ID NUMBER(7),
    Excercise_Name VARCHAR2(25),
    Muscle_Group VARCHAR2(25),
    Description VARCHAR2(100),
    Equipment VARCHAR2(50),
    CONSTRAINT PK_EXCERCISE_EXCERISE_ID PRIMARY KEY(Excercise_ID)
);

CREATE TABLE NutritionChart(
    Target_Weight NUMBER(7),
    Target_Calories NUMBER(7),
    Target_Carbohydrates NUMBER(7),
    Target_Protein NUMBER(7),
    Target_Fats NUMBER(7),
    CONSTRAINT PK_NutritiousChart_Weight PRIMARY KEY(Target_Weight)
);

CREATE TABLE ExerciseLog(
    Member_ID NUMBER(7),
    LogDate DATE,
    Excercise_ID NUMBER(7),
    CONSTRAINT PK_ExerciseLog_MEMBER_ID PRIMARY KEY(Member_ID)
);

CREATE TABLE NutritionLog(
    Member_ID NUMBER(7),
    LogDate DATE,
    Burnt_Calories NUMBER(7),
    Carbohydrate_Intake NUMBER(7),
    Protein_Intake NUMBER(7),
    Fat_Intake NUMBER(7),
    CONSTRAINT PK_NutritionLog_MEMBER_ID PRIMARY KEY(Member_ID)
);

CREATE TABLE ProgressLog(
    Member_ID NUMBER(7),
    LogDate DATE,
    BMI NUMBER(3),
    Weight NUMBER(7),
    Height NUMBER(7),
    CONSTRAINT PK_ProgressLog_MEMBER_ID PRIMARY KEY(Member_ID)
);

DROP SEQUENCE seqMember;
CREATE SEQUENCE seqMember
MINVALUE 0
START WITH 0
INCREMENT BY 1;

DROP SEQUENCE seqWorkout;
CREATE SEQUENCE seqWorkout
MINVALUE 0
START WITH 0
INCREMENT BY 1;

INSERT INTO Members VALUES (seqMember.nextval, 'Ijaz', 'Bhatti', 6, to_date('2020-05-24', 'YYYY-MM-DD'), to_date('1994-01-29', 'YYYY-MM-DD'), '285-B', '17-2', 'F-10', 'Islamabad', 03111520495);
INSERT INTO Members VALUES (seqMember.nextval, 'Ilyas', 'Umair', 4, to_date('2020-09-13', 'YYYY-MM-DD'), to_date('1989-05-12', 'YYYY-MM-DD'), '73-A', '132-1', 'G-11', 'Islamabad', 03350299486);
INSERT INTO Members VALUES (seqMember.nextval, 'Liaqat', 'Rehman', 7, to_date('2020-03-08', 'YYYY-MM-DD'), to_date('1993-08-23', 'YYYY-MM-DD'), '187-E', '52-1', 'I-8', 'Islamabad', 04239952524);
INSERT INTO Members VALUES (seqMember.nextval, 'Wasiq', 'Younas', 2, to_date('2020-10-03', 'YYYY-MM-DD'), to_date('1986-11-04', 'YYYY-MM-DD'), '98-D', '144', 'Canal View', 'Lahore', 03431258230);
INSERT INTO Members VALUES (seqMember.nextval, 'Nadia', 'Saeed', 2, to_date('2020-06-30', 'YYYY-MM-DD'), to_date('1990-07-11', 'YYYY-MM-DD'), '382-K', '21-3', 'Gulberg-III', 'Lahore', 03316802488);
INSERT INTO Members VALUES (seqMember.nextval, 'Iqbal', 'Manzoor', 5, to_date('2021-04-25', 'YYYY-MM-DD'), to_date('1982-09-19', 'YYYY-MM-DD'), '92-A', '291-1', 'Clifton', 'Karachi', 03449576793);

INSERT INTO Information VALUES (1,40,78,172);
INSERT INTO Information VALUES (2,23,60,189);
INSERT INTO Information VALUES (3,34,76,155);
INSERT INTO Information VALUES (4,39,83,164);
INSERT INTO Information VALUES (5,55,66,175);
INSERT INTO Information VALUES (6,19,59,177);

INSERT INTO Credentials VALUES (1,'ijaz.bhatti@gmail.com','39ier9','ijaz69');
INSERT INTO Credentials VALUES (2,'illyas.umair@hotmail.com','gs5556','illyas23');
INSERT INTO Credentials VALUES (3,'liaqat.rehman@yahoo.com','646wew','liaqat44');
INSERT INTO Credentials VALUES (4,'wasiq_younas@gmail.com','5hwhhw4','wasiq94');
INSERT INTO Credentials VALUES (5,'nadia.saeed@live.com','5ywg5h5','nadia35');
INSERT INTO Credentials VALUES (6,'iqbal_manzoor@gmail.com','hsrns67','iqbal99');

INSERT INTO MembershipPlan VALUES (1,'Weight Loss and Body shape tuning',100,340);
INSERT INTO MembershipPlan VALUES (2,'Muscle Gain',123,230);
INSERT INTO MembershipPlan VALUES (3,'Lose Fat and Gain Muscle',120,600);
INSERT INTO MembershipPlan VALUES (4,'Light Fitness Routine',365,530);
INSERT INTO MembershipPlan VALUES (5,'Upper Body Focused',80,470);
INSERT INTO MembershipPlan VALUES (6,'Back and Leg Focused',80,200);

INSERT INTO NutritionPlan VALUES (1, 80);
INSERT INTO NutritionPlan VALUES (1, 75);
INSERT INTO NutritionPlan VALUES (2, 65);
INSERT INTO NutritionPlan VALUES (2, 60);
INSERT INTO NutritionPlan VALUES (3, 65);
INSERT INTO NutritionPlan VALUES (3, 70);
INSERT INTO NutritionPlan VALUES (4, 85);
INSERT INTO NutritionPlan VALUES (5, 70);
INSERT INTO NutritionPlan VALUES (5, 75);
INSERT INTO NutritionPlan VALUES (6, 75);
INSERT INTO NutritionPlan VALUES (6, 80);

INSERT INTO Exercise VALUES (1,'Leg Press','Legs','Nice and Slowly do 3 sets of 10 reps on Leg Press machine','Leg Press');
INSERT INTO Exercise VALUES (2,'Bench Press','Chest','Nice and Slowly do 3 sets of 10 reps on Bench Press','Bench Press');
INSERT INTO Exercise VALUES (3,'Incline Press','Chest','Nice and Slowly do 3 sets of 10 reps on Incline Press','Incline Press');
INSERT INTO Exercise VALUES (4,'Shoulder Press','Shoulder','Nice and Slowly do 3 sets of 10 reps on Shoulder Press Machine','Shoulder Press Machine');
INSERT INTO Exercise VALUES (5,'Military Press','Shoulder','Nice and Slowly do 3 sets of 10 reps with dumbles raising them high above then down','Dumbles');
INSERT INTO Exercise VALUES (6,'Butterfly','Chest','Nice and Slowly do 3 sets of 10 reps on butterfly machine','Butterfly Machine');
INSERT INTO Exercise VALUES (7,'Leg Extentions','Legs','Nice and Slowly do 3 sets of 10 reps on Leg Extentions Machine','Leg Extentions Machine');

INSERT INTO WorkoutPlan VALUES (seqWorkout.nextval, 1);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 2);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 3);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 7);
INSERT INTO WorkoutPlan VALUES (seqWorkout.nextval, 1);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 2);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 3);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 4);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 5);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 6);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 7);
INSERT INTO WorkoutPlan VALUES (seqWorkout.nextval, 2);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 3);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 6);
INSERT INTO WorkoutPlan VALUES (seqWorkout.nextval, 1);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 2);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 5);
INSERT INTO WorkoutPlan VALUES (seqWorkout.nextval, 2);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 3);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 4);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 5);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 6);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 1);
INSERT INTO WorkoutPlan VALUES (seqWorkout.currval, 7);

INSERT INTO NutritionChart VALUES(60, 2100, 230, 51, 45);
INSERT INTO NutritionChart VALUES(65, 2150, 250, 52, 50);
INSERT INTO NutritionChart VALUES(70, 2200, 270, 53, 55);
INSERT INTO NutritionChart VALUES(75, 2250, 290, 54, 60);
INSERT INTO NutritionChart VALUES(80, 2300, 310, 55, 65);
INSERT INTO NutritionChart VALUES(85, 2350, 330, 56, 70);

set serveroutput on;
CREATE OR REPLACE TRIGGER weightUpdater
AFTER INSERT ON ProgressLog
FOR EACH ROW
ENABLE
DECLARE
var_weight ProgressLog.weight%TYPE;
BEGIN
SELECT weight INTO var_weight FROM ProgressLog;
INSERT INTO Information(Weight) VALUES (var_weight);
DBMS_OUTPUT.PUT_LINE('Value updated!');
END;
/