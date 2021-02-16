-- ------------------all worked so far---------------------
-- operatio
-- Insert Statement for PLAYER Table
-- I will just add up to 5 players
INSERT INTO PLAYER (Player_name, Player_phone, Player_join_date) 
VALUES ('Park Jun', '206-123-1234', CURDATE());

INSERT INTO PLAYER (Player_name, Player_phone, Player_join_date) 
VALUES ('Midori', '425-321-4321', CURDATE() -1);

INSERT INTO PLAYER (Player_name, Player_phone, Player_join_date) 
VALUES ('', '206-123-1234', CURDATE());

INSERT INTO PLAYER (Player_name, Player_phone, Player_join_date) 
VALUES ('Park Jun', '206-123-1234', CURDATE());

INSERT INTO PLAYER (Player_name, Player_phone, Player_join_date) 
VALUES ('Park Jun', '206-123-1234', CURDATE());
