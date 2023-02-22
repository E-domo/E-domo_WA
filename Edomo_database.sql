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
-- video blob,
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

-- Recipes table population 
insert into Recipes(recipeName, recipeDescription, recipeImage, country, cookingInstructions, contributorName) values
("Sausage Pasta Bake", "An Italian-American classic, this freezable sausage pasta bake is an ideal make-ahead family dish for busy days", load_file('C:\Users\HP\OneDrive - Ashesi University\Documents\GitHub\E-domo_WA\Sausage-pasta-bake-f71108a.webp'), "Italian-American", 
"STEP 1
To make the ragu, heat the oil in a large shallow pan or flameproof casserole. Squeeze the sausagemeat from its skins in small balls straight into the pan. Sizzle for 10 mins until browned (don’t worry if the meat breaks up). Add the garlic and sizzle for another minute until starting to turn golden, then stir in the chilli flakes, if using, the tomato purée and vinegar. Tip in the tomatoes and bring to a simmer. Reduce the heat to low and bubble for 30 mins.
STEP 2
Meanwhile, make the white sauce. Melt the butter in a saucepan and stir in the flour to make a loose paste. Sizzle for a minute, then gradually whisk in the milk. Simmer gently for 10 mins, whisking occasionally to ensure the sauce stays smooth. Season and whisk in the parmesan. Remove from the heat and set aside.
STEP 3
Cook the pasta in a large saucepan of boiling water for 9 mins, or a minute less than pack instructions. Drain and return to the pan. Scrape most of the white sauce into the pasta and stir to coat. Tip in most of the ragu and most of the mozzarella and stir until just combined. Pour the pasta mixture into a large baking dish and spoon over the remaining white sauce and ragu. Dot with the rest of the mozzarella and sprinkle with extra parmesan. Leave to cool completely, then wrap and chill for up to a day, or freeze for up to two months. Defrost in the fridge for 24 hrs before baking.
STEP 4
Heat the oven to 190C/170C fan/gas 5. Bake for 25-30 mins until the top is slightly crisp at the edges and the cheese is melted. Leave to rest for 5-10 mins, then take the baking dish straight to the table for people to scoop onto their plates.", "Barney Desmazery"),
("Chicken & chorizo ragu", "Serve this delicious chicken and chorizo ragu over rice or pasta as an easy midweek dinner for the family. You can freeze any leftovers for another day", load_file('C:\Users\HP\OneDrive - Ashesi University\Documents\GitHub\E-domo_WA\chicken-chorizo-ragu-95dc274.webp'), "Spain", 
"STEP 1
Fry the chorizo over a medium heat in a large saucepan or flameproof casserole dish for 5 mins or until it releases its oil and starts to char at the edges. Add the onion and fry for 5 mins more or until soft. Tip in the garlic and cook for 2 mins before stirring in the paprika and sundried tomatoes. Add the chicken thighs and fry for 2 mins each side until they are well coated in the spices and beginning to brown.
STEP 2
Pour in the chopped tomatoes and stock, and turn the heat down. Cover and cook for 40 mins until the chicken is falling apart and the sauce is thick. Stir the lemon juice through. Serve by piling spoonfuls of the ragu into hot jacket potatoes with parsley sprinkled over and a dollop of soured cream, if you like.")
