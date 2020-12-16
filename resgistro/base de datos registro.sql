create database registro;

use registro;

create table User(
Correo char(100),
Nombre char(100),
ApellidoP char(50),
ApellidoM char(50),
No_Telefono char(30),
primary key (Correo),
coments char(50)
);

CREATE PROCEDURE SP_User(U_name VARCHAR(100), U_Apellido VARCHAR(50), U_ApellidoM VARCHAR(50), U_Correo VARCHAR(100), U_No_telefono VARCHAR(30), U_coments VARCHAR(1))
INSERT INTO User(Nombre, ApellidoP, ApellidoM, Correo, No_telefono, coments) VALUES(U_name, U_Apellido, U_ApellidoM, U_Correo, U_No_telefono, U_coments);