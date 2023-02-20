drop database if exists Edomo;
create database Edomo;
use Edomo;

create table UserType(
typeIndex int,
typeName varchar(15),
primary key(typeIndex)
);

create table Users(
userIndex int auto_increment,
userEmail varchar(225) unique,
fname varchar(50),
lname varchar(50),
userPassword varchar(100),
typeIndex int,
primary key(userIndex),
foreign key (typeIndex) references UserType(typeIndex)
);

create table Recipes(
recipeNo int auto_increment,
recipeName varchar(50),
recipeDescription varchar(225),
recipeImage blob,
video blob,
country varchar(50),
cookingInstructions varchar(225),
contributorName varchar(100),
primary key(recipeNo)
);

create table Events(
eventId int auto_increment,
eventType varchar(50),
eventDate date,
eventTime time,
eventImage blob,
primary key(eventId)
);