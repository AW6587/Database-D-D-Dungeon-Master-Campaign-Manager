-- Dungeons and Dragons table creation
-- All the talbes are listed based on priorty insert


-- table for player
-- contain attributes of id, name, phone_num, Email, join_date, leave_date
-- Assume player in United States
-- NULL values: email
CREATE TABLE PLAYER
(
Player_id INT NOT NULL AUTO_INCREMENT,
Player_name VARCHAR(20) NOT NULL,
Player_phone CHAR(12) NOT NULL,
Player_email VARCHAR(30),
Player_join_date DATE NOT NULL,
Player_leave_date DATE,
-- Possible constraint?
PRIMARY KEY (Player_id),
CHECK (join_date < leave_date)
);

-- table for character
-- contain attributes of character_name, character_player_id(foreign) character_level
-- passive_perception
CREATE TABLE PCHARACTER
(
Character_name VARCHAR(15) NOT NULL,
Charac_player_id INT NOT NULL,
Charac_level INT NOT NULL,
Charac_passive_perception INT NOT NULL,
-- constraints
PRIMARY KEY(Character_name),
FOREIGN KEY(Charac_player_id) REFERENCES PLAYER(Player_id) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT Character_lvl CHECK (Charac_level BETWEEN 1 AND 99),
CONSTRAINT Character_passive CHECK (Charac_passive_perception BETWEEN 1 AND 99)
);

-- Possibly have to create tigger for insert lvl and passive


-- table for ITEM
-- contain attributes of character_name, item_num(id), item_name value, item_count
-- Item_owner_character(foreign from character)
-- Item_value (plat, gold, silver, copper)
-- set constraint item max 99
CREATE TABLE ITEM
(
Item_id INT NOT NULL AUTO_INCREMENT,
Item_name VARCHAR(25) NOT NULL,
Item_owner_character VARCHAR(15) NOT NULL,
Item_value VARCHAR(6) NOT NULL DEFAULT 'plat',
Item_count INT NOT NULL,
-- Constraints
PRIMARY KEY(Item_id),
FOREIGN KEY (Item_owner_character) REFERENCES PCHARACTER(Character_name) ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT valueCheck CHECK (Item_value IN ('plat','gold','silver','copper')),
CONSTRAINT itemCount CHECK (Item_count BETWEEN 1 AND 99)
);

-- table for MAP
-- contains attribute of map_number, map_name
-- Map_name varchar(25) change if you guys want
-- Simple contraints
CREATE TABLE MAP
(
Map_number INT NOT NULL,
Map_name VARCHAR(25) NOT NULL,
-- Constraint
PRIMARY KEY(Map_name),
CHECK (Map_number > 0)
);

-- table for campaign
-- contains attributes Campaign_name, player_id, camp_map_name, owner of campaign
CREATE TABLE CAMPAIGN
(
Campaign_name VARCHAR(25) NOT NULL,
Cam_map_name VARCHAR(25) NOT NULL,
Cam_master VARCHAR(20) NOT NULL,
Cam_player INT NOT NULL,
-- Constraints
PRIMARY KEY(Campaign_name),
FOREIGN KEY(Cam_map_name) REFERENCES MAP(Map_name) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (Cam_player) REFERENCES PLAYER(Player_id) ON UPDATE CASCADE ON DELETE CASCADE
);

-- table for INCLUDE_CAMPAIGN_CHARACTER
-- Just contain primary keys of campaign and chacter_name
-- I personally think this is unnecessary 
-- but we can use this table to just retrieve data of name of campaign and its name of involved charc
-- also may provide less condition to correlation with other tables since it only contains names (map,charc)
CREATE TABLE INCLUDE_CAMP_CHARC
(
Campai_name VARCHAR(25) NOT NULL,
Charc_name VARCHAR(15) NOT NULL,
PRIMARY KEY(Campai_name, Charc_name),
FOREIGN KEY (Campai_name) REFERENCES CAMPAIGN(Campaign_name) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (Charc_name) REFERENCES PCHARACTER(Character_name) ON UPDATE CASCADE ON DELETE CASCADE
);

-- table for Point_of_interest
CREATE TABLE POINT_OF_INTEREST
(
Location_num INT NOT NULL AUTO_INCREMENT,
Location_name VARCHAR(15) NOT NULL,
Map_location_name VARCHAR(25) NOT NULL,
-- Constraints
PRIMARY KEY(Location_num),
UNIQUE KEY(Location_name),
FOREIGN KEY (Map_location_name) REFERENCES MAP(Map_name) ON DELETE CASCADE ON UPDATE CASCADE
);
-- table for Episode
CREATE TABLE EPISODE
(
Episode_num INT NOT NULL AUTO_INCREMENT,
Campai_name VARCHAR(25) NOT NULL,
Episode_location VARCHAR(15) NOT NULL,
PRIMARY KEY(Episode_num),
FOREIGN KEY(Episode_location) REFERENCES POINT_OF_INTEREST(Location_name)
);

-- table for NON_PLAYER_CHARACTEr
-- insert prior 
CREATE TABLE NON_PLAYER_CHARACTER
(
Npc_name VARCHAR(15) NOT NULL,
NPC_class VARCHAR(20) NOT NULL DEFAULT 'MERCHANT',
PRIMARY KEY(NPC_name)
);
-- talbe for episode_npc
-- contains id, name, quest_reward, npc_level, epsidoe_num
-- Assume reward is only gold
-- Epi_num_npc ON DELETE CASCADE needs to be check
CREATE TABLE EPISODE_NPC
(
Npc_id INT NOT NULL AUTO_INCREMENT,
Epi_npc_name VARCHAR(15) NOT NULL DEFAULT 'NONE',
Epi_num_npc INT NOT NULL,
Npc_level INT NOT NULL,
Quest_reward INT NOT NULL DEFAULT 0,
-- Constraint
PRIMARY KEY(Npc_id),
FOREIGN KEY(Epi_npc_name) REFERENCES NON_PLAYER_CHARACTER(Npc_name),
FOREIGN KEY(Epi_num_npc) REFERENCES EPISODE(Episode_num),
CHECK(Npc_level > 0 AND Npc_level < 99),
CHECK(Quest_reward >= 0)
);

-- table include_camp_npc
-- Simply like INCLUDE CHARAC and CAMP
CREATE TABLE INCLUDE_CAMP_NPC
(
Camp_name VARCHAR(25) NOT NULL,
Npc_name VARCHAR(15) NOt NULL,
PRIMARY KEY(Camp_name, Npc_name),
FOREIGN KEY(Camp_name) REFERENCES CAMPAIGN(Campaign_name),
FOREIGN KEY(Npc_name) REFERENCES NON_PLAYER_CHARACTER(Npc_name)
);

-- table monster
CREATE TABLE MONSTER
(
Monster_name VARCHAR(25) NOT NULL,
Monster_level INT NOT NULL,
Monster_type VARCHAR(25) NOT NULL,
PRIMARY KEY(Monster_name),
CHECK(Monster_level > 0)
);

-- table epsidoe monster
-- contain attribute ep_num, monster_name, monster_id, monster_lvel, drop item
CREATE TABLE EPISODE_MONSTER
(
Monster_id INT NOT NULL AUTO_INCREMENT,
Monster_name VARCHAR(25) NOT NULL,
Monster_level_epi INT NOT NULL,
Drop_item VARCHAR(20) NOT NULL DEFAULT 'NONE',
Monster_epi INT NOT NULL,
-- constraints
PRIMARY KEY(Monster_id),
FOREIGN KEY(Monster_name) REFERENCES MONSTER(Monster_name),
FOREIGN KEY(Monster_epi) REFERENCES EPISODE(Episode_num),
CHECK(Monster_level_epi > 0)
);

-- table inlucde monster _campaign
-- Monster_name_camp is monster name on camp
-- camp_name_mons is campaign name that monster is involved.
CREATE TABLE INCLUDE_CAMP_MONSTER
(
Camp_name_mons VARCHAR(25) NOT NULL,
Monster_name_camp VARCHAR(25) NOT NULL,
PRIMARY KEY(Camp_name_mons, Monster_name_camp),
FOREIGN KEY(Camp_name_mons) REFERENCES CAMPAIGN(Campaign_name),
FOREIGN KEY(Monster_name_camp) REFERENCES MONSTER(Monster_name)
);

-- End of Create tables -- 


